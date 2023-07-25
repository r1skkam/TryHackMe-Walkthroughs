[TryHackMe | Race Conditions](https://tryhackme.com/room/raceconditions)

![[Pasted image 20230610070705.png]]

![[Pasted image 20230610070739.png]]

![[Pasted image 20230610070805.png]]

```
10.10.202.229
```

![[Pasted image 20230610070902.png]]

```
ssh race@10.10.202.229
```

```
Username: race

Password: car
```

![[Pasted image 20230610071320.png]]

![[Pasted image 20230610071439.png]]

![[Pasted image 20230610071551.png]]

```
file anti_flag_reader
```

```
file flag
```

```
cat anti_flag_reader.c
```

![[Pasted image 20230610071824.png]]

```
python3 -m http.server
```

```
http://10.10.202.229:8000/
```

![[Pasted image 20230610072259.png]]

![[Pasted image 20230610072324.png]]

![[Pasted image 20230610072612.png]]

![[Pasted image 20230610072652.png]]

![[Pasted image 20230610072918.png]]

![[Pasted image 20230610073052.png]]

![[Pasted image 20230610073349.png]]

![[Pasted image 20230610073726.png]]

![[Pasted image 20230611214454.png]]

![[Pasted image 20230611214548.png]]

[# File Path Race Condition & How To Prevent It - bin 0x31](https://www.youtube.com/watch?v=5g137gsB9Wk)

[# Race Conditions - SY0-601 CompTIA Security+ : 1.3](https://youtu.be/zg_kTCOcinQ)


