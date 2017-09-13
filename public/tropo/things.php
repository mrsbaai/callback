<?php

// settings

$log_url = "http://.com";


    private function sendCallback($from,$to,$message){
        $number = number::where('number','=',$to)->first();
        $user = user::where('email','=', $number['email'])->first();

        if ($user['callback_url'] <> null and $user['callback_url'] <> ""){
            $url = $user['callback_url'] . "?sender=" . $from . "&receiver=" . $to . "&message=" . $message;

            $curlSession = curl_init();


            curl_setopt($curlSession, CURLOPT_URL, $url);

            curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curlSession, CURLOPT_FOLLOWLOCATION, 1); // allow redirects
            curl_setopt($curlSession, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($curlSession, CURLOPT_MAXREDIRS,5); // return into a variable

            curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

            $ret = curl_exec($curlSession);
            curl_close($curlSession);

        }

        return "";
    }
	
	
	Route::post('/log/tropo','messagesController@tropo');
?>
