<?php
include('../include.php');

require('tropo.class.php');
sendCallback("111111111","111111111","nizzze");

        $from = null;
        $to = null;
        $text = null;

        $session = new Session();

        $text = $session->getInitialText();
        $from = $session->getFrom();
        $to = $session->getTo();

        if ($from <> null and $to <> null and $text <> null){
            $text = urlencode($text);
			sendCallback($from,$to,$text);
			
			return "cool!";
        }else{
            return "not cool";
        }




?>