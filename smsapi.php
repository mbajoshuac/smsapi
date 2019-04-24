<?php
    // the sms function
    function sendsms($recipient,$sender,$message) 
    {
            //the $message variable should contain the string of message you want to send
        $message = urlencode("$message");
            //the $sender variable should contain the sender ID
        $sender = urlencode("$sender");
            // the $recipient contains the destination number(s)
        $recipient = urlencode("$recipient");
            // change API_USERNAME to your API usernamegit 
        $api_username = "API_USERNAME";
            //change API_PASSWORD tou your API password
        $api_password = "API_PASSWORD";

        // angelicsms.com api was used as a sample api, change api if you're using anyother platform
        file('https://angelicsms.com/index.php?option=com_spc&comm=spc_api&username='.$api_username.'&password='.$api_password.'&sender='.$sender.'&recipient='.$recipient.'&message='.$message.'');
    }
?>