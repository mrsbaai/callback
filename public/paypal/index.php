<?php
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");

    require('paypal-class.php');

    $ipn = new PaypalIPN();

    $verified = $ipn->verifyIPN();
    if ($verified) {

        $payedAmount = $originalAmount = $code = $transactionType = $transactionStatus = $userEmail = $buyerEmail = $accountId = $paymentSystem = $txn_id = "";
        
        if (isset($_POST["custom"])){$description = $_POST["custom"];}else{$description = "";}


        if (isset($_POST["mc_fee"])){$mc_fee = $_POST["mc_fee"];}else{$mc_fee = "0";}
        if (isset($_POST["mc_gross"])){$payedAmount = $_POST["mc_gross"];}else{$payedAmount = "";}
        if (isset($_POST["txn_type"])){$transactionType = $_POST["txn_type"];}else{$transactionType = "";}
        if (isset($_POST["payment_status"])){$transactionStatus = $_POST["payment_status"];}else{$transactionStatus = "";}
        if (isset($_POST["payer_email"])){$buyerEmail = $_POST["payer_email"];}else{$buyerEmail = "";}
        if (isset($_POST["business"])){$accountId = $_POST["business"];}else{$accountId = "";}
        if (isset($_POST["payment_status"])){$payment_status = $_POST["payment_status"];}else{$payment_status = "";}
        if (isset($_POST["payment_type"])){$payment_type = $_POST["payment_type"];}else{$payment_type = "";}
        if (isset($_POST["pending_reason"])){$pending_reason = $_POST["pending_reason"];}else{$pending_reason = "";}
    
        if (isset($_POST["txn_id"])){$txn_id = $_POST["txn_id"];}else{$txn_id = null;}
        
        }
        

    header("HTTP/1.1 200 OK");
