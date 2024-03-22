### 20-Mar-24-Wed

[TryHackMe | Linux File System Analysis](https://tryhackme.com/r/room/linuxfilesystemanalysis)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/72975043-d51b-4bab-8e38-e58bd95ddd3a)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/84c8d904-493d-43a7-9d48-7d4e4225bdef)

```
ssh investigator@10.10.127.234
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/901a503c-b06d-4cca-9638-28062e72530f)

```
export PATH=/mnt/usb/bin:/mnt/usb/sbin
```

```
export LD_LIBRARY_PATH=/mnt/usb/lib:/mnt/usb/lib64
```

```
check-env
```

```
THM{5514ec4f1ce82f63867806d3cd95dbd8}
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/8ccc99dc-2f17-40fc-a30c-d3adabf821cf)

```
find / -user bob -type f 2>/dev/null | less
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/dec0bf4a-fa4d-4c7f-8a80-22bb6bcc57c5)

```
THM{0b1313afd2136ca0faafb2daa2b430f3}
```

```
find / -user bob -cmin 1 -type f 2>/dev/null
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/90861764-7c72-44ab-83c2-c58b3dd1ccc5)

```
exiftool /var/www/html/assets/reverse.elf
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/5242e8a4-6dad-462c-a4bc-f188005041a8)

```
application/octet-stream
```

```
stat /etc/hosts
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/c932c5a8-8201-4f97-8153-983db356c55c)

```
cat /etc/group
```

```
cat /etc/passwd |grep x:0
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/5b5a3ba6-b412-48e3-9ce2-21ed817f10ea)

```
sudo cat /etc/sudoers
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/5aa67114-4cdc-46f2-b403-e97737e091bb)

```
sudo debsums -e -s
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/115162cc-4ffd-42a5-9019-b6b421c743f4)

```
whoami
groups
cd ~
ls -al
find / -perm -u=s -type f 2>/dev/null
/usr/bin/python3.8 -c 'import os; os.execl("/bin/sh", "sh", "-p", "-c", "cp /bin/bash /var/tmp/bash && chown root:root /var/tmp/bash && chmod +s /var/tmp/bash")'
ls -al /var/tmp
exit
useradd -o -u 0 b4ckd00r3d
exit
THM{f38279ab9c6af1215815e5f7bbad891b}
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/ac62125e-d2dd-4391-8cea-6a4aff083532)

https://www.chkrootkit.org/

```
sudo chkrootkit
```

https://rkhunter.sourceforge.net/

```
rkhunter --update
```

```
sudo rkhunter -c -sk
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/e20debbf-b161-439f-9d1e-2302bceb297f)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/2fdcd629-a24a-4ab2-9bb2-608aa260b4aa)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/8aaf4d41-50b0-409a-8a45-50c54d779dcf)

