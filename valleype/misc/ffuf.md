ffuf -u http://10.10.132.96/static/FUZZ -w /usr/share/wordlists/dirb/big.txt -mc all -fc 403,404

┌──(kali㉿kali)-[~/thm/valleype]
└─$ ffuf -u http://10.10.132.96/static/FUZZ -w /usr/share/wordlists/dirb/big.txt -mc all -fc 403,404

        /'___\  /'___\           /'___\       
       /\ \__/ /\ \__/  __  __  /\ \__/       
       \ \ ,__\\ \ ,__\/\ \/\ \ \ \ ,__\      
        \ \ \_/ \ \ \_/\ \ \_\ \ \ \ \_/      
         \ \_\   \ \_\  \ \____/  \ \_\       
          \/_/    \/_/   \/___/    \/_/       

       v2.0.0-dev
________________________________________________

 :: Method           : GET
 :: URL              : http://10.10.132.96/static/FUZZ
 :: Wordlist         : FUZZ: /usr/share/wordlists/dirb/big.txt
 :: Follow redirects : false
 :: Calibration      : false
 :: Timeout          : 10
 :: Threads          : 40
 :: Matcher          : Response status: all
 :: Filter           : Response status: 403,404
________________________________________________

[Status: 200, Size: 127, Words: 15, Lines: 6, Duration: 228ms]
    * FUZZ: 00

[Status: 200, Size: 627909, Words: 2055, Lines: 2130, Duration: 230ms]
    * FUZZ: 11

[Status: 200, Size: 7389635, Words: 0, Lines: 0, Duration: 0ms]
    * FUZZ: 4

[Status: 200, Size: 7919631, Words: 0, Lines: 0, Duration: 0ms]
    * FUZZ: 8

[Status: 200, Size: 421858, Words: 1549, Lines: 1773, Duration: 295ms]
    * FUZZ: 3

[Status: 200, Size: 2473315, Words: 1, Lines: 1, Duration: 229ms]
    * FUZZ: 1

[Status: 200, Size: 2275927, Words: 1, Lines: 1, Duration: 260ms]
    * FUZZ: 10

[Status: 200, Size: 2203486, Words: 1, Lines: 1, Duration: 250ms]
    * FUZZ: 12

[Status: 200, Size: 3673497, Words: 1, Lines: 1, Duration: 241ms]
    * FUZZ: 13

[Status: 200, Size: 3838999, Words: 1, Lines: 1, Duration: 265ms]
    * FUZZ: 14

[Status: 200, Size: 3477315, Words: 1, Lines: 1, Duration: 265ms]
    * FUZZ: 15

[Status: 200, Size: 2468462, Words: 1, Lines: 1, Duration: 270ms]
    * FUZZ: 16

[Status: 200, Size: 3551807, Words: 1, Lines: 1, Duration: 270ms]
    * FUZZ: 17

[Status: 200, Size: 2036137, Words: 1, Lines: 1, Duration: 257ms]
    * FUZZ: 18

[Status: 200, Size: 3627113, Words: 1, Lines: 1, Duration: 253ms]
    * FUZZ: 2

[Status: 200, Size: 1190575, Words: 3866, Lines: 4439, Duration: 253ms]
    * FUZZ: 9

[Status: 200, Size: 1426557, Words: 1, Lines: 1, Duration: 245ms]
    * FUZZ: 5

[Status: 200, Size: 2115495, Words: 1, Lines: 1, Duration: 234ms]
    * FUZZ: 6

[Status: 200, Size: 5217844, Words: 1, Lines: 1, Duration: 269ms]
    * FUZZ: 7

:: Progress: [20469/20469] :: Job [1/1] :: 179 req/sec :: Duration: [0:01:59] :: Errors: 0 ::
                                                                                                                                                                                                                                            
┌──(kali㉿kali)-[~/thm/valleype]
└─$ 
