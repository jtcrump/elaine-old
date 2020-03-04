<!doctype html>
<html>
<head>









<?php 


function showOrderDetails() {
    //echo order details
}
 
function sendEmailToBuyer($emailAddress) {
    //send a thank you email to buyer
}
 
function checkIfTransactionHasAlreadyBeenProcessed($tx) {
    //check if transaction with this id has already been process
}
 
function checkThatPaymentIsReceivedAtYourEmailAddress($email) {
    //check $email againt the email address which was suppose receive the payment
}
 
function checkPaymentAmountAndCurrency($amount, $currency) {
    //verify that the amount and currency code are as required.
}
 
function processOrder() {
    // process the order
}
 
function exitCode() {
    die("Error");
    //exit with error message
}




// $Identity_Token = "NuEAla2OKeLny52hnLxaHFLeGVdpZdjYLD5MhEufGBKi53uAlgeKvi7Q0aq";
$Identity_Token = "EHcewl9M4RpWm9rhRAtWhKa1wfsTHe1ru1aUKTsdBu3vN_TT3VA37jkzOJOjhQc8MCNm5W3Id5kSqteJ";


//look if the parameter 'tx' is set in the GET request and that it does not have a null or empty value
if(isset($_GET['tx']) && ($_GET['tx'])!=null && ($_GET['tx'])!= "") {
    $tx = $_GET['tx'];
    verifyWithPayPal($tx);
}
else {
    exitCode();
}








function verifyWithPayPal($tx) {
    $req = 'cmd=_notify-synch';
    $tx_token = $tx;
    $auth_token = "NuEAla2OKeLny52hnLxaHFLeGVdpZdjYLD5MhEufGBKi53uAlgeKvi7Q0aq";
    $req .= "&tx=$tx_token&at=$auth_token";
 
    // post back to PayPal system to validate
    $header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
    $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
    $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
 
    // url for paypal sandbox
    //$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);    
 
    // url for payal
    // $fp = fsockopen ('www.paypal.com', 80, $errno, $errstr, 30);
    // If possible, securely post back to paypal using HTTPS
    // Your PHP server will need to be SSL enabled
     $fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);
 
    if (!$fp) {
        exitCode();
    } else {

        fputs ($fp, $header . $req);
        // read the body data
        $res = '';
        $headerdone = false;
        while (!feof($fp)) {
            $line = fgets ($fp, 1024);
            if (strcmp($line, "\r\n") == 0) {
                // read the header
                $headerdone = true;
            }
            else if ($headerdone) {
                // header has been read. now read the contents
// print $line."<br />";
                $res .= $line;
            }
        }
 






/*
        // parse the data
        $lines = explode("\n", $res);
 
        $response = array();
 
        if (strcmp ($lines[0], "SUCCESS") == 0) {
 
            for ($i=1; $i<count($lines);$i++){
                list($key,$val) = explode("=", $lines[$i]);
                $response[urldecode($key)] = urldecode($val);
            }
 $num_cart_items = response['num_cart_items'];
            $itemName = $response['item_name'];
            $amount = $response['payment_gross'];
            $myEmail = $response['receiver_email'];
            $userEmailPaypalId = $response['payer_email'];
            $paymentStatus = $response['payment_status'];
            $paypalTxId = $response['txn_id'];
            $currency = $response['mc_currency'];
 
print "<hr><br />".$itemNam."<br />";
print "<br />".$num_cart_items."<br />";

            // check the payment_status is Completed
            if($paymentStatus!="Completed") {
                paymentNotComplete($paymentStatus);
            }
 
            // check that txn_id has not been previously processed
            checkIfTransactionHasAlreadyBeenProcessed($paypalTxId);
            // check that receiver_email is your Primary PayPal email
            checkThatPaymentIsReceivedAtYourEmailAddress($myEmail);
            // check that payment_amount/payment_currency are correct
            checkPaymentAmountAndCurrency($amount, $currency);
            // process the order
            processOrder();
            } else {
            exitCode();
        }
*/


    }
        fclose ($fp);
}


?>

<!---
<form method=post action="https://www.paypal.com/cgi-bin/webscr">
  <input type="hidden" name="cmd" value="_notify-synch">
  <input type="hidden" name="tx" value="<?php echo $tx; ?>">
  <input type="hidden" name="at" value="<?php echo $Identity_Token; ?>">
  <input type="submit" value="PDT">
</form>

RETURNS
payment_status=Completed
num_cart_items=1
inventory1=0
item_name1=White+Pearl+Earrings

--->


<?php include("./inc/header.inc.php"); ?>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4"><h2>Thank you for your payment!</h2><br /></div>
<div class="col-lg-4"></div>
</div>

<div class="row"><div class="col-lg-12">


<h4>Your transaction has been completed!</h4>
<p style="font-family: arial;">Your payment transaction with details will be emailed to you shortly.</p>
<p style="font-family: arial;">You may log into your account at www.paypal.com to view details of this transaction.</p>
</div></div>

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/magiczoomplus.js"></script>

</body>
</html>
