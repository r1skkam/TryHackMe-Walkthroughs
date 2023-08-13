<script>
        function encrypt() {
            var pass = document.getElementById('pin').value; {
                //document.getElementById("hide").value = document.getElementById("pin").value;
                var key = "6Le0DgMTAAAAANokdEEial"; //length=22
                var iv = "mHGFxENnZLbienLyANoi.e"; //length=22
                key = CryptoJS.enc.Base64.parse(key);
                iv = CryptoJS.enc.Base64.parse(iv);
                var cipherData = CryptoJS.AES.encrypt(pass, key, {
                    iv: iv
                });
                //var data = CryptoJS.AES.decrypt(cipherData, key, { iv: iv });

                //var encryptedAES = CryptoJS.AES.encrypt(pass, "1234567890");
                //var decryptedBytes = CryptoJS.AES.decrypt(Message, "1234567890");
                //var plaintext = decryptedBytes.toString(CryptoJS.enc.Utf8);
                //var hash = CryptoJS.MD5(pass);
                document.getElementById('pin').value = cipherData;
                return true;
                console.log(document.getElementById('pin').value)
            }
        }
    </script>