```
Now with more Cat Pictures!
```

[TryHackMe | Cat Pictures 2](https://tryhackme.com/room/catpictures2)

https://medium.com/@abylinjohnson/cat-pictures-2-tryhackme-walkthrough-51e0425184e4

![[Pasted image 20230702210735.png]]

![[Pasted image 20230702211037.png]]

![[Pasted image 20230703205316.png]]

![[Pasted image 20230703205403.png]]

![[Pasted image 20230703205530.png]]

http://10.10.113.42/#16678460194615

![[Pasted image 20230703205904.png]]
![[Pasted image 20230703210224.png]]

https://github.com/LycheeOrg/Lychee

https://github.com/wsmaxcy/Cat-Pictures-2-Writeup

http://10.10.113.42/#16678460194615/16678466730867

![[Pasted image 20230703210940.png]]

```
exiftool f5054e97620f168c7b5088c85ab1d6e4.jpg
```

![[Pasted image 20230703211310.png]]

```
http://10.10.113.42:8080/764efa883dda1e11db47671c4a3bbd9e.txt
```

![[Pasted image 20230703211957.png]]

```
note to self:

I setup an internal gitea instance to start using IaC for this server. It's at a quite basic state, but I'm putting the password here because I will definitely forget.
This file isn't easy to find anyway unless you have the correct url...

gitea: port 3000
user: samarium
password: TUmhyZ37CLZrhP

ansible runner (olivetin): port 1337
```

http://10.10.113.42:3000/user/login?redirect_to=%2f

![[Pasted image 20230703212141.png]]

![[Pasted image 20230703212318.png]]

http://10.10.113.42:3000/samarium/ansible/commit/0e5c3274a60d233769fc1bfbf0d363f36ae7a944

![[Pasted image 20230703212421.png]]

http://10.10.113.42:3000/samarium/ansible/src/commit/0e5c3274a60d233769fc1bfbf0d363f36ae7a944/flag1.txt

![[Pasted image 20230703212528.png]]

```
10d916eaea54bb5ebe36b59538146bb
```

http://10.10.113.42:1337/

![[Pasted image 20230703212746.png]]

