[TryHackMe | Threat Intelligence for SOC](https://tryhackme.com/room/threatintelligenceforsoc)

```
Learn how to utilise Threat Intelligence to improve the Security Operations pipeline.
```

```
ssh user@10.10.144.88
```

```
username: user
password: tryhackme
```

![[Pasted image 20230616141251.png]]

![[Pasted image 20230616141347.png]]

```
http://10.10.144.88/
```

![[Pasted image 20230616141605.png]]

`elastic:elastic`

![[Pasted image 20230616141642.png]]

![[Pasted image 20230616141733.png]]

```
http://10.10.144.88/app/discover#/?_g=(filters:!(),refreshInterval:(pause:!t,value:0),time:(from:now-15m,to:now))&_a=(columns:!(),filters:!(),index:'03703b40-ad4c-11ed-af96-59e340b1e912',interval:auto,query:(language:kuery,query:''),sort:!(!('@timestamp',desc)))
```

![[Pasted image 20230616141950.png]]

![[Pasted image 20230616142017.png]]

[Uncoder.IO | Universal Sigma Rule Converter for SIEM, EDR, and NTDR](https://uncoder.io/)

`ioc_list.txt`

```
117[.]213[.]7[.]8
119[.]180[.]220[.]224
144[.]202[.]127[.]44
119[.]180[.]220[.]224
221[.]15[.]94[.]231
```

```
117.213.7.8
119.180.220.224
144.202.127.44
119.180.220.224
221.15.94.231
```

