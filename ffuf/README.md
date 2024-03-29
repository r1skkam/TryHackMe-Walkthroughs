### 28-Mar-24-Thu

[TryHackMe | ffuf](https://tryhackme.com/r/room/ffuf)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/341093b9-4401-4ced-bf7a-709510037629)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/9fc88afa-9c77-4ba9-a674-386fe509bf44)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/4dfab73f-69f5-4e65-a09f-5b128e53c482)

**ffuf stands for Fuzz Faster U Fool. It's a tool used for web enumeration, fuzzing, and directory brute forcing.**

```
ffuf -u http://10.10.195.108/FUZZ -w /usr/share/seclists/Discovery/Web-Content/big.txt
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/ecfed1df-1b9a-4c46-9af5-a237bc0b7a32)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/0ab918a3-8e86-4f91-959a-5fd7ad5768c3)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/45e67155-f6f8-43d5-a9be-57cb51508ead)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/f19bdaa5-2bee-4f3f-9291-4af1101f22b6)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/118e34af-f08a-4811-b7d8-c45bec5b2740)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/4c2fc0fa-7f40-4598-919a-6660328736be)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/c69b8291-e16c-4161-ba58-59ec1b612219)

```
ffuf -u http://10.10.195.108/FUZZ -w /usr/share/seclists/Discovery/Web-Content/raft-medium-files-lowercase.txt
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/eb363d34-fe8d-46e0-9bb1-83b59905b0c5)

```
ffuf -u http://10.10.195.108/indexFUZZ -w /usr/share/seclists/Discovery/Web-Content/web-extensions.txt
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/7db75987-69cc-4ba4-afeb-7381838a9638)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/e5edf40f-ac90-49f2-a5ec-ba86b3e150b5)

```
ffuf -u http://10.10.195.108/FUZZ -w /usr/share/seclists/Discovery/Web-Content/raft-medium-words-lowercase.txt -e .php,.txt
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/d52c5e55-c1ac-41fd-ad0c-f5ec53cf332a)

```
ffuf -u http://10.10.195.108/FUZZ -w /usr/share/seclists/Discovery/Web-Content/raft-medium-directories-lowercase.txt
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/1051ba63-5c5d-40e1-84c7-f3c1d2072d9a)

```
docs                    [Status: 301, Size: 312, Words: 20, Lines: 10, Duration: 415ms]
config                  [Status: 301, Size: 314, Words: 20, Lines: 10, Duration: 420ms]
external                [Status: 301, Size: 316, Words: 20, Lines: 10, Duration: 426ms]
server-status           [Status: 403, Size: 293, Words: 21, Lines: 11, Duration: 422ms]
```

`-fc 403` (filter code) [List of HTTP status codes - Wikipedia](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes)

```
ffuf -u http://10.10.195.108/FUZZ -w /usr/share/seclists/Discovery/Web-Content/raft-medium-files-lowercase.txt -fc 403
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/7758f30f-5ceb-4104-b20b-451198ce54af)

`mc 200` (match code)

```
ffuf -u http://10.10.195.108/FUZZ -w /usr/share/seclists/Discovery/Web-Content/raft-medium-files-lowercase.txt -mc 200
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/98d54afb-0967-4876-b48f-cced5f135241)

### FILTER OPTIONS:

| -fr | Filter regexp |
| --- | ---|

```
ffuf -u http://10.10.195.108/FUZZ -w /usr/share/seclists/Discovery/Web-Content/raft-medium-files-lowercase.txt -fr '/\..*'
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/a62c095d-8a59-44dd-9d8e-b7c918e4f98b)

```
ffuf -u 'http://10.10.2.199/sqli-labs/Less-1/?FUZZ=1' -c -w /usr/share/seclists/Discovery/Web-Content/burp-parameter-names.txt -fw 39
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/a432e207-6089-4aeb-a667-3adc32cfc06d)

```
ffuf -u 'http://10.10.2.199/sqli-labs/Less-1/?FUZZ=1' -c -w /usr/share/seclists/Discovery/Web-Content/raft-medium-words-lowercase.txt -fw 39
```

```
ruby -e '(0..255).each{|i| puts i}' | ffuf -u 'http://10.10.2.199/sqli-labs/Less-1/?id=FUZZ' -c -w - -fw 33
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/ad3f1cf2-8e3b-4f6b-ad33-e3b699af02e6)

```
ffuf -u http://10.10.2.199/sqli-labs/Less-11/ -c -w /usr/share/seclists/Passwords/Leaked-Databases/hak5.txt -X POST -d 'uname=Dummy&passwd=FUZZ&submit=Submit' -fs 1435 -H 'Content-Type: application/x-www-form-urlencoded'
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/55b10a81-cd77-4864-a777-89c7d9150dca)

```
p@ssword
```

