https://tryhackme.com/room/seasurfer

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

![[Pasted image 20230531072102.png]]


