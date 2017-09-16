<?php


// log voxeo messages

ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");


include('../include.php');


error_log("nonnou ga");
$req_dump = print_r($_REQUEST, TRUE);
error_log($req_dump);


        $from = null;
        $to = null;
        $text = null;
		
		if(isset($_POST["user"])) $from=$_POST["user"];
		if(isset($_POST["to"])) $to=$_POST["to"];
		if(isset($_POST["msg"])) $text=$_POST["msg"];
		
		if ($from <> null and $to <> null and $text <> null){
            $text = urlencode($text);
			if (is_array($from)){$from = reset($from);}
			if (is_array($to)){$to = reset($to);}
			sendCallback($from,$to,$text);
			return "OK";
        }else{
			error_log("Something messing");
        }
