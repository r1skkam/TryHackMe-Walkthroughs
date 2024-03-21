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

