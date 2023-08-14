## 12082023Sat

[view-source:https://tryhackme.com/room/crylo4a](https://tryhackme.com/room/crylo4a)

```
Learn about the CryptoJS library and JavaScript-based client-side encryption and decryption.
```

![[Pasted image 20230812154026.png]]

![[Pasted image 20230812154244.png]]

![[Pasted image 20230812162546.png]]

```
feroxbuster -u http://10.10.69.189/
```

![[Pasted image 20230812160603.png]]

![[Pasted image 20230812160833.png]]

http://10.10.69.189/debug

![[Pasted image 20230812162754.png]]

http://10.10.69.189/2fa

![[Pasted image 20230812162945.png]]

http://10.10.69.189/recipe

![[Pasted image 20230812163214.png]]

![[Pasted image 20230812165633.png]]
![[Pasted image 20230812165728.png]]

http://10.10.69.189/set-pin

## 13082023Sun

https://medium.com/@samarth.vashisht/breaking-client-side-encryption-with-javascript-bd16715ee2ff

![[Pasted image 20230813105628.png]]

https://cdnjs.com/libraries/crypto-js

## 14082023Mon

**TryHackMe - Crylo (No Sqlmap)**
https://youtu.be/q56xewO80AM
https://www.youtube.com/@readysetexploit

```
admin:trigger
```

http://10.10.69.189/set-pin

![[Pasted image 20230814070452.png]]
![[Pasted image 20230814071234.png]]
![[Pasted image 20230814071359.png]]
![[Pasted image 20230814072011.png]]
![[Pasted image 20230814072043.png]]

```
X-Forwarded-For: 127.0.0.1
```

![[Pasted image 20230814072850.png]]
![[Pasted image 20230814073201.png]]
![[Pasted image 20230814073234.png]]
![[Pasted image 20230814073353.png]]
![[Pasted image 20230814073510.png]]
![[Pasted image 20230814073625.png]]
![[Pasted image 20230814073816.png]]
![[Pasted image 20230814073926.png]]

```
fa3e352b00adf9d4e967ad0e34d5e59d
```

![[Pasted image 20230814074051.png]]
![[Pasted image 20230814074207.png]]

```
getent group sudo
```

![[Pasted image 20230814074733.png]]
![[Pasted image 20230814074818.png]]

```
root:x:0:0:root:/root:/bin/bash daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin bin:x:2:2:bin:/bin:/usr/sbin/nologin sys:x:3:3:sys:/dev:/usr/sbin/nologin sync:x:4:65534:sync:/bin:/bin/sync games:x:5:60:games:/usr/games:/usr/sbin/nologin man:x:6:12:man:/var/cache/man:/usr/sbin/nologin lp:x:7:7:lp:/var/spool/lpd:/usr/sbin/nologin mail:x:8:8:mail:/var/mail:/usr/sbin/nologin news:x:9:9:news:/var/spool/news:/usr/sbin/nologin uucp:x:10:10:uucp:/var/spool/uucp:/usr/sbin/nologin proxy:x:13:13:proxy:/bin:/usr/sbin/nologin www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin backup:x:34:34:backup:/var/backups:/usr/sbin/nologin list:x:38:38:Mailing List Manager:/var/list:/usr/sbin/nologin irc:x:39:39:ircd:/var/run/ircd:/usr/sbin/nologin gnats:x:41:41:Gnats Bug-Reporting System (admin):/var/lib/gnats:/usr/sbin/nologin nobody:x:65534:65534:nobody:/nonexistent:/usr/sbin/nologin systemd-network:x:100:102:systemd Network Management,,,:/run/systemd:/usr/sbin/nologin systemd-resolve:x:101:103:systemd Resolver,,,:/run/systemd:/usr/sbin/nologin systemd-timesync:x:102:104:systemd Time Synchronization,,,:/run/systemd:/usr/sbin/nologin messagebus:x:103:106::/nonexistent:/usr/sbin/nologin syslog:x:104:110::/home/syslog:/usr/sbin/nologin _apt:x:105:65534::/nonexistent:/usr/sbin/nologin tss:x:106:111:TPM software stack,,,:/var/lib/tpm:/bin/false uuidd:x:107:112::/run/uuidd:/usr/sbin/nologin tcpdump:x:108:113::/nonexistent:/usr/sbin/nologin landscape:x:109:115::/var/lib/landscape:/usr/sbin/nologin pollinate:x:110:1::/var/cache/pollinate:/bin/false usbmux:x:111:46:usbmux daemon,,,:/var/lib/usbmux:/usr/sbin/nologin sshd:x:112:65534::/run/sshd:/usr/sbin/nologin systemd-coredump:x:999:999:systemd Core Dumper:/:/usr/sbin/nologin anof:x:1000:1000:anof:/home/anof:/bin/bash lxd:x:998:100::/var/snap/lxd/common/lxd:/bin/false mysql:x:113:117:MySQL Server,,,:/nonexistent:/bin/false crylo:x:1001:1001::/home/crylo:/bin/bash fwupd-refresh:x:114:118:fwupd-refresh user,,,:/run/systemd:/usr/sbin/nologin
```

![[Pasted image 20230814075041.png]]

```
total 24 
lrwxrwxrwx 1 root root 34 Oct 2 2021 default -> /etc/nginx/sites-available/default 
-rw-r--r-- 1 root root 21440 Jul 22 2022 dump_file.sql 
```

```
cat /home/anof/dump_file.sql
```
![[Pasted image 20230814075213.png]]

```

```