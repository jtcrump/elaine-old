<?php

$x = 1;
$item_name = array();
$quantity = array();

$cart_items = $_GET['num_cart_items'];

while($x <= $cart_items){
$item_name[$x] = $_GET['item_name' . $x];
$quantity[$x] = $_GET['quantity' . $x];
$x++;
}


foreach($item_name as $val){
echo $val . "<br />";
}

?>

