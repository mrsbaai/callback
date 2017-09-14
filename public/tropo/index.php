<?php
include('../include.php');

require('tropo.class.php');

        $from = null;
        $to = null;
        $text = null;

        $session = new Session();

        $text = $session->getInitialText();
        $from = $session->getFrom();
        $to = $session->getTo();
		sendCallback($from,$to,$text);
		
        if ($from <> null and $to <> null and $text <> null){
            $text = urlencode($text);
			
			
			return "cool!";
        }else{
            return "not cool";
        }




?>