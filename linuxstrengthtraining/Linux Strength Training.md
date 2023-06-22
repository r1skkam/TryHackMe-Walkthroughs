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

```
ssh sarah@10.10.83.184
```

```
Username: sarah
Password: rainbowtree1230x
```

```
find / -type f -name "personal.txt.gpg" 2>/dev/null
/home/sarah/oldLogs/units/personal.txt.gpg
```

```
find / -type f -name "data.txt" 2>/dev/null
/home/sarah/logs/zmn/old stuff/-mvLp/data.txt
```

```
sarah@james:~$ file "/home/sarah/oldLogs/units/personal.txt.gpg"
/home/sarah/oldLogs/units/personal.txt.gpg: GPG symmetrically encrypted data (AES256 cipher)
sarah@james:~$ file "/home/sarah/logs/zmn/old stuff/-mvLp/data.txt"
/home/sarah/logs/zmn/old stuff/-mvLp/data.txt: ASCII text
sarah@james:~$ 
```

```
scp sarah@10.10.83.184:/"/home/sarah/oldLogs/units/personal.txt.gpg" .
```

```
scp sarah@10.10.83.184:/"/home/sarah/logs/zmn/old stuff/-mvLp/data.txt" .
```

![[Pasted image 20230622134421.png]]

```
gpg2john personal.txt.gpg > personal_txt_hash
```

```
john --wordlist=data_tac.txt --format=gpg personal_txt_hash
```

```
┌──(kali㉿kali)-[~/thm/linuxstrengthtraining]
└─$ john --wordlist=data_tac.txt --format=gpg personal_txt_hash
Using default input encoding: UTF-8
Loaded 1 password hash (gpg, OpenPGP / GnuPG Secret Key [32/64])
Cost 1 (s2k-count) is 65011712 for all loaded hashes
Cost 2 (hash algorithm [1:MD5 2:SHA1 3:RIPEMD160 8:SHA256 9:SHA384 10:SHA512 11:SHA224]) is 2 for all loaded hashes
Cost 3 (cipher algorithm [1:IDEA 2:3DES 3:CAST5 4:Blowfish 7:AES128 8:AES192 9:AES256 10:Twofish 11:Camellia128 12:Camellia192 13:Camellia256]) is 9 for all loaded hashes
Will run 4 OpenMP threads
Press 'q' or Ctrl-C to abort, almost any other key for status
valamanezivonia  (?)     
1g 0:00:01:01 DONE (2023-06-22 13:58) 0.01621g/s 19.52p/s 19.52c/s 19.52C/s vigliacca..vigilino
Use the "--show" option to display all of the cracked passwords reliably
Session completed. 
                                                                                                                                                                                                                                            
┌──(kali㉿kali)-[~/thm/linuxstrengthtraining]
└─$ 
```

![[Pasted image 20230622140039.png]]

```
gpg personal.txt.gpg
```

```
valamanezivonia
```

![[Pasted image 20230622140656.png]]

![[Pasted image 20230622141411.png]]

```
find / -type f -name "employees.sql" 2>/dev/null
```
```
sarah@james:~$ find / -type f -name "employees.sql" 2>/dev/null
/home/sarah/serverLx/employees.sql
```

```
scp sarah@10.10.83.184:/"/home/sarah/serverLx/employees.sql" .
```

```
rainbowtree1230x
```

![[Pasted image 20230622141222.png]]

![[Pasted image 20230622142012.png]]

![[Pasted image 20230622141836.png]]

![[Pasted image 20230622142237.png]]

```
cd /home/sarah/serverLx/
```

```
mysql -u root -p
```

`no password (just enter)`

```
source employees.sql
```

```
DESCRIBE employees;
```

```
select * from employees;
```

![[Pasted image 20230622143318.png]]


```
select * from employees where first_name="Lobel";
```

```
Flag{13490AB8}
```

![[Pasted image 20230622143718.png]]

![[Pasted image 20230622143953.png]]

```
(2020-08-13) Sarah: Hey Lucy, what happened to the database server? It is completely down now!

(2020-08-13) Lucy: Yes, I believe we have had a problem. I will need to investigate but for now there will be downtime for who knows how long.

(2020-08-13) Sarah: That is a shame, I needed to refer to a customer’s record due to them being unhappy with our service yesterday. 

(2020-08-13) Lucy: if you ask Sameer, he may be able to help you find the back-up database copy we made a few hours ago? 

(2020-08-13) Sarah: Of course, he is one of the sql developers around here in charge of the database creation, I will ask him in a few minutes. Thank you.

(2020-08-13) Lucy: No problem. By the way, our new security engineer may have accidently stored the SSH password of one of our employees. I have no idea how to change it and he will not be back till tomorrow.

(2020-08-13) Sarah: That is a shame. I am sure we will all be fine till he returns. Do you know which employee it is? 

(2020-08-13) Lucy: I think it may have affected James but I not entirely sure.

(2020-08-13) Sarah: That is terrible, but I am sure nothing will come of it, he will be back tomorrow.

(2020-08-13) Lucy: True. It is just a concern of mine because James is the only one with root access. But as you said, we should be ok. Talk to you later. Bye.

```

```
grep -iRl 'ssh'
```

![[Pasted image 20230622144712.png]]

```
(2020-08-13) Sarah: Michael, I have been having trouble accessing the sql database back-up copy made today. Sameer gave me the password, but it just will not work?

(2020-08-13) Michael: Ah, yes. I remember, the security engineer was testing out a new automated software for creating sql database backups. He must have configured it to encrypt the backups with a different password.

(2020-08-13) Sarah: So how can I get a hold of it?

(2020-08-13) Michael: Good question. From what I remember the test program utilised a configuration file around 50mb. It is located inside the home/shared/sql/conf directory. This configuration file contained the directory location of a wordlist it used to randomly select a password from for encrypting the sql back-up copies with. 

(2020-08-13) Sarah: I do not really understand the last part?

(2020-08-13) Michael: once you find the configuration file and consequently the wordlist directory, visit it. One of those wordlists must contain the password it used for the testing. All I remember is that the password began with ebq. You will need Sameer’s account. His SSH password is: thegreatestpasswordever000. 

(2020-08-13) Sarah: Thank you, I will try to find it.
```

![[Pasted image 20230622145354.png]]

```
grep -iRl 'wordlist'
```

![[Pasted image 20230622150257.png]]

```
find -type f -size 50M
```

![[Pasted image 20230622151350.png]]

```
less JKpN
```

![[Pasted image 20230622151629.png]]

```
echo 'aG9tZS9zYW1lZXIvSGlzdG9yeSBMQi9sYWJtaW5kL2xhdGVzdEJ1aWxkL2NvbmZpZ0JEQgo=' |base64 -d
```

```
cd "home/sameer/History LB/labmind/latestBuild/configBDB"
```

![[Pasted image 20230622152207.png]]

```
grep -iRl 'ebq'
```

![[Pasted image 20230622152802.png]]

![[Pasted image 20230622152945.png]]

```
ebqiojsdfioj
ebqiojsiodj
ebqiojdifoj
ebqiopsjdfopj
ebqnice
ebqops
ebqiuiud
ebqjoisjdfij
ebqkjjdd
ebqijsji
ebqopkopk
ebqattle
```





