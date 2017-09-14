<?php

ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");


include('../include.php');

require('tropo.class.php');

        $from = null;
        $to = null;
        $text = null;

        $session = new Session();

        $text = $session->getInitialText();
        $from = $session->getFrom();
        $to = $session->getTo();

		
        if ($from <> null and $to <> null and $text <> null){
            $text = urlencode($text);
			if (is_array($from)){$from = reset($from);}
			if (is_array($to)){$to = reset($to);}
			
			error_log( $text );
			error_log( $from);
			error_log( $to );
			
			sendCallback($from,$to,$text);
			
			return "cool!";
        }else{
            return "not cool";
        }




?>