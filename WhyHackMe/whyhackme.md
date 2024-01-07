### 06-Jan-24-Sat

[TryHackMe | WhyHackMe](https://tryhackme.com/room/whyhackme)

![[Pasted image 20240106102021.png]]
![[Pasted image 20240106102158.png]]
![[Pasted image 20240106102241.png]]

```
┌──(root㉿kali)-[/home/kali/thm/whyhackme]
└─# nmap -sC -sV -Pn -p- --open 10.10.77.227 -oN nmap.whyhackme
Starting Nmap 7.94SVN ( https://nmap.org ) at 2024-01-05 22:38 EST
Nmap scan report for 10.10.77.227
Host is up (0.42s latency).
Not shown: 65331 closed tcp ports (reset), 201 filtered tcp ports (no-response)
Some closed ports may be reported as filtered due to --defeat-rst-ratelimit
PORT   STATE SERVICE VERSION
21/tcp open  ftp     vsftpd 3.0.3
| ftp-syst: 
|   STAT: 
| FTP server status:
|      Connected to 10.17.44.152
|      Logged in as ftp
|      TYPE: ASCII
|      No session bandwidth limit
|      Session timeout in seconds is 300
|      Control connection is plain text
|      Data connections will be plain text
|      At session startup, client count was 3
|      vsFTPd 3.0.3 - secure, fast, stable
|_End of status
| ftp-anon: Anonymous FTP login allowed (FTP code 230)
|_-rw-r--r--    1 0        0             318 Mar 14  2023 update.txt
22/tcp open  ssh     OpenSSH 8.2p1 Ubuntu 4ubuntu0.5 (Ubuntu Linux; protocol 2.0)
| ssh-hostkey: 
|   3072 47:71:2b:90:7d:89:b8:e9:b4:6a:76:c1:50:49:43:cf (RSA)
|   256 cb:29:97:dc:fd:85:d9:ea:f8:84:98:0b:66:10:5e:6f (ECDSA)
|_  256 12:3f:38:92:a7:ba:7f:da:a7:18:4f:0d:ff:56:c1:1f (ED25519)
80/tcp open  http    Apache httpd 2.4.41 ((Ubuntu))
|_http-title: Welcome!!
|_http-server-header: Apache/2.4.41 (Ubuntu)
Service Info: OSs: Unix, Linux; CPE: cpe:/o:linux:linux_kernel

Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 173.96 seconds
                                                                                                                                                                                                                                            
┌──(root㉿kali)-[/home/kali/thm/whyhackme]
└─# 
```

![[Pasted image 20240107145653.png]]
