┌──(root㉿kali)-[/home/kali/thm/valleype]
└─# strings valleyAuthenticator |grep http
Vhttps://g:.
$Info: This file is packed with the UPX executable packer http://upx.sf.net $

[UPX: the Ultimate Packer for eXecutables - Homepage](https://upx.github.io/)

```
strings valleyAuthenticator_cp |grep -i user
```
![[Pasted image 20230527190453.png]]

```
strings valleyAuthenticator_cp |grep -i pass -B 15 -A 15
```
![[Pasted image 20230527190707.png]]

```
e6722920bab2326f8217e4bf6b1b58ac
dd2921cc76ee3abfd2beb60709056cfb
```
![[Pasted image 20230527190917.png]]

```
valley:liberty123
```
