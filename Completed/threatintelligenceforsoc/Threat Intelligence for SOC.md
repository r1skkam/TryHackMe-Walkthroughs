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

```
destination.ip:("117.213.7.8" OR "119.180.220.224" OR "144.202.127.44" OR "221.15.94.231")
```

![[Pasted image 20230617214438.png]]

![[Pasted image 20230617215321.png]]


```
destination.ip:("135.181.103.89" OR "185.224.126.215" OR "185.224.128.215" OR "171.24.136.15" OR "171.22.136.15" OR "195.133.40.108" OR "103.190.37.169" OR "103.170.37.169" OR "107.175.202.151" OR "107.175.202.158" OR "109.206.240.194")
```

![[Pasted image 20230617215406.png]]

```
destination.ip:("185.224.128.215")
```

![[Pasted image 20230618202333.png]]

```
destination.ip:("107.175.202.151")
```

```
dns.question.name:"agrosaoxe.info"
```

![[Pasted image 20230618203224.png]]

```
dns.answers.data: "0.0.0.0"
```

```
elastalert --start 2023-02-16T00:00:00 --verbose 2>&1 | tee output.txt
```

```
title: DNS Sinkhole
author: TryHackMe User
description: Sigma rule for sinkholed DNS queries 
logsource:
 category: dns
detection:
 select_sinkholed:
   dns.resolved_ip:
     - '0.0.0.0'
 condition: select_sinkholed
falsepositives:
 - Unknown
status: experimental
level: medium
tags:
 - dns
 - filebeat
```

```
alert:
- debug
description: Sigma rule for sinkholed DNS queries
filter:
- query_string:
	query: dns.resolved_ip:"0.0.0.0"
index: filebeat-*
name: dns_sinkhole
priority: 3
realert:
	minutes: 0
type: any
```

![[Pasted image 20230619211200.png]]

```
elastalert --start 2023-02-16T00:00:00 --verbose 2>&1 | tee output.txt
```


![[Pasted image 20230619212041.png]]

```
more output.txt |grep ".ru"
```

![[Pasted image 20230619213213.png]]

```
grep query output.txt | grep -Eo '[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}' | sort -u
```

![[Pasted image 20230619214429.png]]

![[Pasted image 20230723085629.png]]