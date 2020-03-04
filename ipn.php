<?php

 $mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');

 $mysqli->select_db("db_a42efb_jcrump");

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

	if($key == 'item_name1'){
	$item_name1 = $value;
	}
	if($key == 'quantity1'){
	$quantity1 = $value;
	}

	if($key == 'item_name2'){
	$item_name2 = $value;
	}
	if($key == 'quantity2'){
	$quantity2 = $value;
	}

	if($key == 'item_name3'){
	$item_name3 = $value;
	}
	if($key == 'quantity3'){
	$quantity3 = $value;
	}

	if($key == 'item_name4'){
	$item_name4 = $value;
	}
	if($key == 'quantity4'){
	$quantity4 = $value;
	}

	if($key == 'item_name5'){
	$item_name5 = $value;
	}
	if($key == 'quantity5'){
	$quantity5 = $value;
	}

	if($key == 'item_name6'){
	$item_name6 = $value;
	}
	if($key == 'quantity6'){
	$quantity6 = $value;
	}

	if($key == 'item_name7'){
	$item_name7 = $value;
	}
	if($key == 'quantity7'){
	$quantity7 = $value;
	}

	if($key == 'item_name8'){
	$item_name8 = $value;
	}
	if($key == 'quantity8'){
	$quantity8 = $value;
	}

	if($key == 'item_name9'){
	$item_name9 = $value;
	}
	if($key == 'quantity9'){
	$quantity9 = $value;
	}

	if($key == 'item_name10'){
	$item_name10 = $value;
	}
	if($key == 'quantity10'){
	$quantity10 = $value;
	}
}

$result = $mysqli->query("INSERT INTO messages (message) VALUES('" . $req . "')");



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



$ipn_response = '';
 while (!feof($fp)) {
 $ipn_response .= fgets($fp, 1024);
 }



fclose ($fp);






$action = $_POST['payment_status'];


if(strlen(@$item_name1) > 4){
$val = str_replace("+"," ",$item_name1);
$result = $mysqli->query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = $result->fetch_assoc();
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity1);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity1);
	}

$result = $mysqli->query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}


if(strlen(@$item_name2) > 4){
$val = str_replace("+"," ",$item_name2);
$result = mysql_query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = $result->fetch_assoc();
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity2);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity2);
	}

$result = $mysqli->query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}


if(strlen(@$item_name3) > 4){
$val = str_replace("+"," ",$item_name3);
$result = $mysqli->query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = $result->fetch_assoc();
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity3);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity3);
	}

$result = $mysqli->query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}


if(strlen(@$item_name4) > 4){
$val = str_replace("+"," ",$item_name4);
$result = mysql_query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = mysql_fetch_array($result);
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity4);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity4);
	}

$result = mysql_query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}


if(strlen(@$item_name5) > 4){
$val = str_replace("+"," ",$item_name5);
$result = mysql_query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = mysql_fetch_array($result);
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity5);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity5);
	}

$result = mysql_query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}

if(strlen(@$item_name6) > 4){
$val = str_replace("+"," ",$item_name6);
$result = mysql_query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = mysql_fetch_array($result);
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity6);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity6);
	}

$result = mysql_query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}



if(strlen(@$item_name7) > 4){
$val = str_replace("+"," ",$item_name7);
$result = mysql_query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = mysql_fetch_array($result);
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity7);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity7);
	}

$result = mysql_query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}



if(strlen(@$item_name8) > 4){
$val = str_replace("+"," ",$item_name8);
$result = mysql_query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = mysql_fetch_array($result);
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity8);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity8);
	}

$result = $mysqli->query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}



if(strlen(@$item_name9) > 4){
$val = str_replace("+"," ",$item_name9);
$result = $mysqli->query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = mysql_fetch_array($result);
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity9);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity9);
	}

$result = $mysqli->query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}



if(strlen(@$item_name10) > 4){
$val = str_replace("+"," ",$item_name10);
$result = $mysqli->query("SELECT quantity FROM products WHERE title LIKE '" . $val . "'");
$row = $result->fetch_assoc();
$qty = $row['quantity'];

	if($action == "Refunded"){
	$new_qty = ($qty + $quantity10);
	} 
	if($action == "Completed"){
	$new_qty = ($qty - $quantity10);
	}

$result = $mysqli->query("UPDATE products SET quantity = '" . $new_qty . "' where title LIKE '" . $val . "'");
}


$mysqli->close();
?>
