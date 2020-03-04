<?php

$link = mysql_connect('68.178.217.44', 'jcrump', 'Eve!@nd2216');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("jcrump", $link);






   // Send an empty HTTP 200 OK response to acknowledge receipt of the notification
   header('HTTP/1.1 200 OK');


// read the IPN notification from PayPal and add the 'cmd' parameter to the beginning of the acknowledgement you will send back
$req = 'cmd=_notify-validate';

// Loop through the notification name-value pairs
foreach ($_POST as $key => $value) {
	// Encode the values
    $value = urlencode(stripslashes($value));
    // Add the name-value pairs to the acknowledgement
    $req .= "&$key=$value";

}

$req_str = print_r($req);
$result = mysql_query("INSERT INTO messages (message) VALUES('" . req_str . "')");









	// $site = "www.paypal.com"; //works
	// $port = 443;
	// $fp = fsockopen($site, $port, $errno, $errstr, 30);

 $header = "POST /cgi-bin/webscr HTTP/1.1\r\n";

$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

// If testing on Sandbox use:
// $header .= "Host: www.sandbox.paypal.com:443\r\n";
// For live servers use 
$header .= "Host: www.paypal.com:443\r\n";

// Open a socket for the acknowledgement request
// If testing on Sandbox use:
// $fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
// For live servers use 
$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);

// Send the HTTP POST request back to PayPal for validation
fputs($fp, $header . $req);



$result = mysql_query("INSERT INTO messages (message) VALUES('" . $fp . "')");
$result = mysql_query("INSERT INTO messages (message) VALUES('" . $header . "')");
$result = mysql_query("INSERT INTO messages (message) VALUES('" . $req . "')");










 while (!feof($fp)) {
 $ipn_response .= fgets($fp, 1024);
 }




	fclose ($fp);








mysql_close($link);
?>