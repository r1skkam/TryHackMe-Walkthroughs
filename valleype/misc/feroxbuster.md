┌──(kali㉿kali)-[~/thm/valleype]
└─$ feroxbuster --url http://10.10.155.28          

 ___  ___  __   __     __      __         __   ___
|__  |__  |__) |__) | /  `    /  \ \_/ | |  \ |__
|    |___ |  \ |  \ | \__,    \__/ / \ | |__/ |___
by Ben "epi" Risher 🤓                 ver: 2.9.1
───────────────────────────┬──────────────────────
 🎯  Target Url            │ http://10.10.155.28
 🚀  Threads               │ 50
 📖  Wordlist              │ /usr/share/seclists/Discovery/Web-Content/raft-medium-directories.txt
 👌  Status Codes          │ All Status Codes!
 💥  Timeout (secs)        │ 7
 🦡  User-Agent            │ feroxbuster/2.9.1
 💉  Config File           │ /etc/feroxbuster/ferox-config.toml
 🏁  HTTP methods          │ [GET]
 🔃  Recursion Depth       │ 4
 🎉  New Version Available │ https://github.com/epi052/feroxbuster/releases/latest
───────────────────────────┴──────────────────────
 🏁  Press [ENTER] to use the Scan Management Menu™
──────────────────────────────────────────────────
404      GET        9l        -w        -c Auto-filtering found 404-like response and created new filter; toggle off with --dont-filter
200      GET       38l      129w     1163c http://10.10.155.28/
301      GET        9l       28w      314c http://10.10.155.28/gallery => http://10.10.155.28/gallery/
301      GET        9l       28w      313c http://10.10.155.28/static => http://10.10.155.28/static/
301      GET        9l       28w      314c http://10.10.155.28/pricing => http://10.10.155.28/pricing/
403      GET        9l       28w      277c http://10.10.155.28/server-status
[####################] - 2m    120000/120000  0s      found:5       errors:13     
[####################] - 2m     30000/30000   220/s   http://10.10.155.28/ 
[####################] - 0s     30000/30000   0/s     http://10.10.155.28/gallery/ => Directory listing (add -e to scan)
[####################] - 0s     30000/30000   0/s     http://10.10.155.28/static/ => Directory listing (add -e to scan)
[####################] - 0s     30000/30000   0/s     http://10.10.155.28/pricing/ => Directory listing (add -e to scan)

┌──(kali㉿kali)-[~/thm/valleype]
└─$ feroxbuster --url http://10.10.155.28/pricing/ -e

 ___  ___  __   __     __      __         __   ___
|__  |__  |__) |__) | /  `    /  \ \_/ | |  \ |__
|    |___ |  \ |  \ | \__,    \__/ / \ | |__/ |___
by Ben "epi" Risher 🤓                 ver: 2.9.1
───────────────────────────┬──────────────────────
 🎯  Target Url            │ http://10.10.155.28/pricing/
 🚀  Threads               │ 50
 📖  Wordlist              │ /usr/share/seclists/Discovery/Web-Content/raft-medium-directories.txt
 👌  Status Codes          │ All Status Codes!
 💥  Timeout (secs)        │ 7
 🦡  User-Agent            │ feroxbuster/2.9.1
 💉  Config File           │ /etc/feroxbuster/ferox-config.toml
 🔎  Extract Links         │ true
 🏁  HTTP methods          │ [GET]
 🔃  Recursion Depth       │ 4
 🎉  New Version Available │ https://github.com/epi052/feroxbuster/releases/latest
───────────────────────────┴──────────────────────
 🏁  Press [ENTER] to use the Scan Management Menu™
──────────────────────────────────────────────────
200      GET       32l       61w      924c http://10.10.155.28/pricing/pricing.html
200      GET        3l       10w       57c http://10.10.155.28/pricing/note.txt
[####################] - 1s         2/2       0s      found:1       errors:0      
[####################] - 1s     30000/30000   0/s     http://10.10.155.28/pricing/ => Directory listing
