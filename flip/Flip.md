[TryHackMe | Flip](https://tryhackme.com/room/flip)

**Hey, do a flip!**

```
nc 10.10.199.238 1337
```

```
Welcome! Please login as the admin!
username: admin
admin's password: admin
Leaked ciphertext: dab57440781dbee1efc2c1d0ea74c4e5bf4732863c95775108694fc75e3171585333fd6e0b061188d6d2f69b3ba2dad5
enter ciphertext: 
```

![[Pasted image 20230624104814.png]]

![[Pasted image 20230624104934.png]]

https://hashes.com/en/tools/hash_identifier

![[Pasted image 20230624105144.png]]

![[Pasted image 20230624111230.png]]

https://pentestmonkey.net/cheat-sheet/john-the-ripper-hash-formats

```
john --format=raw-sha384 --wordlist=/usr/share/wordlists/rockyou.txt ciphertext-sha384.txt
```

```
john --format=raw-sha384 ciphertext-sha384.txt
```



