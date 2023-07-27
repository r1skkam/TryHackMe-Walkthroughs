### 27072023Thu

[TryHackMe | Splunk: Exploring SPL](https://tryhackme.com/room/splunkexploringspl)

```
Learn and explore the basics of the Search Processing Language.
```

![[Pasted image 20230727132914.png]]

![[Pasted image 20230727134210.png]]

![[Pasted image 20230727135126.png]]

![[Pasted image 20230727135206.png]]


![[Pasted image 20230727135351.png]]

## Task 2 Connect with the Lab

*What is the name of the host in the Data Summary tab?*
```
cyber-host
```

![[Pasted image 20230727150749.png]]


![[Pasted image 20230727150548.png]]

![[Pasted image 20230727151320.png]]

![[Pasted image 20230727151833.png]]

```
User="*James*" AND EventID="1"
```

![[Pasted image 20230727155410.png]]

```
index="windowslogs" AND DestinationIp="172.18.39.6" AND DestinationPort="135"
```

![[Pasted image 20230727153731.png]]

```
index=windowslogs  Hostname="Salena.Adam" DestinationIp="172.18.38.5"
```

![[Pasted image 20230727154028.png]]

```
index=windowslogs  Hostname="cyber"
```

![[Pasted image 20230727154239.png]]

```
index="windowslogs" OR Hostname="cyber*"
```

![[Pasted image 20230727154746.png]]

