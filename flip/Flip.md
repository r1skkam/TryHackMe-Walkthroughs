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

```
nc 10.10.199.238 1337
```

```
admin&password=sUp3rPaSs1
```

![[Pasted image 20230624113121.png]]

```
nc 10.10.199.238 1337
Welcome! Please login as the admin!
username: admin
admin's password: password
Leaked ciphertext: d66e00848bfbcec9bc54a238d405093b2409b999c283f9efe20a0a84b0fec4fbf9d49c3d3a1637f8d93ac03979ae7526
enter ciphertext: password
Non-hexadecimal digit found
```

![[Pasted image 20230624114333.png]]

https://youtu.be/tA-M2_tfjfQ

**Try Hack Me - Flip**

https://www.youtube.com/@deejaymustang

```
'access_username=' + username +'&password=' + password
```

```
access_username=admin&password=sUp3rPaSs1
```

16 blocks

```
access_username=
admin&password=s
Up3rPaSs1$$$$$$$
```

```
nc 10.10.29.44 1337
```

```
b70247b6dce2548b2272df91945c1dcfe674c3715bdf293878d4969515b7faef53c6e74c09531e0addf6aef7950dbc10
```

```
access_username=
admin&password=s
Up3rPaSs1$$$$$$$

b70247b6dce2548b2272df91945c1dcf
e674c3715bdf293878d4969515b7faef
53c6e74c09531e0addf6aef7950dbc10

THM{FliP_DaT_B1t_oR_G3t_Fl1pP3d}
```

![[Pasted image 20230723084012.png]]

