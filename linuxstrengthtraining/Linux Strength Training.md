[TryHackMe | Linux Strength Training](https://tryhackme.com/room/linuxstrengthtraining)

```
Guided room for beginners to learn/reinforce linux command line skills
```

```
ssh topson@10.10.111.31
```

![[Pasted image 20230620174551.png]]

```
cat ReadMeIfStuck.txt
```

![[Pasted image 20230620180052.png]]

```
find / -type f -name additionalHINT 2>/dev/null
cat /home/topson/channels/additionalHINT
find / -type d -name "telephone numbers" 2>/dev/null
ls -lah /home/topson/corperateFiles/xch/telephone\ numbers/
cat /home/topson/corperateFiles/xch/telephone\ numbers/readME.txt
```

![[Pasted image 20230620181134.png]]

```
2016-09-12
find ~/workflows/ -type f -newermt 2016-09-11 ! -newermt 2016-09-13 2>/dev/null
```

![[Pasted image 20230620183319.png]]

```
less /home/topson/workflows/xft/eBQRhHvx
/Flag
```

![[Pasted image 20230620184739.png]]


```
scp /home/james/Desktop/script.py john@192.168.10.5:/home/john/scripts
```


```
find / -type f -name readME_hint.txt 2>/dev/null
```

![[Pasted image 20230620175941.png]]

```
mv "/home/topson/corperateFiles/RecordsFinances/-MoveMe.txt" "/home/topson/corperateFiles/RecordsFinances/-march folder"/
```

![[Pasted image 20230620185957.png]]

```
cd "/home/topson/corperateFiles/RecordsFinances/-march folder"/

ls -lah
```

![[Pasted image 20230620190421.png]]

![[Pasted image 20230620190759.png]]

```
sudo gem install haiti-hash
```

![[Pasted image 20230620191212.png]]

```
haiti 5d7845ac6ee7cfffafc5fe5f35cf666d

hash-identifier 5d7845ac6ee7cfffafc5fe5f35cf666d
```

![[Pasted image 20230620191459.png]]

```
john --format=raw-md5 --wordlist=/usr/share/wordlists/rockyou.txt hash1.txt
```

![[Pasted image 20230620191838.png]]

![[Pasted image 20230620192150.png]]

```
find / -type f -name hashA.txt 2>/dev/null
```

```
cat "/home/sarah/system AB/server_mail/server settings/hashA.txt"
```

```
hash-identifier f9d4049dd6a4dc35d40e5265954b2a46
```

![[Pasted image 20230620192616.png]]

```
john --format=raw-md4 --wordlist=/usr/share/wordlists/rockyou.txt hashA.txt
```

![[Pasted image 20230620193118.png]]

```
find / -type f -name hashB.txt 2>/dev/null
```

```
cat /home/sarah/oldLogs/settings/craft/hashB.txt
b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3
```

```
hash-identifier b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3
```

![[Pasted image 20230620193448.png]]

```
find / -type f -name hashC.txt 2>/dev/null
```

```
cat "/home/sarah/system AB/server_mail/hashC.txt"
c05e35377b5a31f428ccda9724a9dfbd0c5d71dccac691228d803c78e2e8da29
```

```
find / -type f -name "*.mnf" 2>/dev/null
```

```
ls -lah "/home/sarah/system AB/db/ww.mnf"
```

![[Pasted image 20230620194328.png]]

```
scp sarah@10.10.111.31:/"/home/sarah/system AB/db/ww.mnf" .
```

![[Pasted image 20230620194707.png]]

```
hash-identifier c05e35377b5a31f428ccda9724a9dfbd0c5d71dccac691228d803c78e2e8da29
```

![[Pasted image 20230620195032.png]]

```
john --format=raw-sha256 --wordlist=ww.mnf hashC.txt
```

![[Pasted image 20230620195507.png]]

```
john --format=raw-sha1 --wordlist=/usr/share/wordlists/rockyou.txt hashB.txt
```

![[Pasted image 20230620200041.png]]

```
find / -type f -name "encoded.txt" 2>/dev/null
```

```
scp sarah@10.10.111.31:/"/home/sarah/system AB/managed/encoded.txt" .
```

```
Username: sarah
Password: rainbowtree1230x
```

![[Pasted image 20230620200534.png]]

```
cat encoded.txt|base64 -d > decodedData.txt
```

![[Pasted image 20230620200752.png]]

```
cat decodedData.txt|grep special
```

![[Pasted image 20230620201352.png]]

```
find / -type f -name "ent.txt" 2>/dev/null
```

```
cat /home/sarah/logs/zhc/ent.txt
bfddc35c8f9c989545119988f79ccc77
```

![[Pasted image 20230620201732.png]]

```
john --format=raw-md4 --wordlist=/usr/share/wordlists/rockyou.txt ent.txt
```

![[Pasted image 20230620202633.png]]

```
gpg --cipher-algo AES-128 --symmetric history_logs.txt
```

```
gpg history_logs.txt.gpg
```

```
Username: sarah
Password: rainbowtree1230x
```

```
ssh sarah@10.10.230.147
```

```
find / -type f -name "layer4.txt" 2>/dev/null
```

![[Pasted image 20230621081857.png]]

![[Pasted image 20230621080055.png]]

```
find / -type f -name "layer3.txt" 2>/dev/null
```

![[Pasted image 20230621082449.png]]

```
cat decrypted_layer2.txt 
MS4gRmluZCBhIGZpbGUgY2FsbGVkIGxheWVyMS50eHQsIGl0cyBwYXNzd29yZCBpcyBoYWNrZWQu
```

```
echo "MS4gRmluZCBhIGZpbGUgY2FsbGVkIGxheWVyMS50eHQsIGl0cyBwYXNzd29yZCBpcyBoYWNrZWQu" |base64 -d
1. Find a file called layer1.txt, its password is hacked.
```

```
find / -type f -name "layer1.txt" 2>/dev/null
```

![[Pasted image 20230621082919.png]]

