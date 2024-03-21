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

