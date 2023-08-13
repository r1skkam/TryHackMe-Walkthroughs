<script>
        "use strict";

        function submitForm(oFormElement) {
            var xhr = new XMLHttpRequest();
            //xhr.responseType = 'json';
            xhr.onload = function() {
                var jsonResponse = JSON.parse(xhr.responseText);
                //alert(xhr.responseText);
                //var jsonResponse = xhr.responseText;
                console.log(jsonResponse);
                if (jsonResponse.pin_set == "true") {
                    //Redirect to 2fa
                    window.location.replace("/2fa");
                } else if (jsonResponse.pin_set == "false") {
                    //redirect to set pin
                    window.location.replace("/set-pin");
                } else {
                    // Invalid username/ password
                    alert(xhr.responseText);
                }
            }
            xhr.open(oFormElement.method, oFormElement.action, true);
            console.log(oFormElement);
            xhr.send(new FormData(oFormElement));
            return false;
        }
    </script>