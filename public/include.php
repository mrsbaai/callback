<?php

function sendCallback($from,$to,$text){
	
			if($to == "16177665162" or $to == "12026839790" or $to == "17203702287"){
				$url = "https://sms-verification.net/log/" . $from . "/" . $to . "/" . $text;
			}else{
				$url = "https://www.receive-sms.com/log/generic/" . $from . "/" . $to . "/" . $text;	
			}
			
		

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

?>