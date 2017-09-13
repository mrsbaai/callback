<?php

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
			
			$fh = fopen('tropo_log.txt', 'a+');
			fwrite($fh, $text);
			fclose($fh);
			 return "cool!";
        }else{
            return "not cool";
        }




?>