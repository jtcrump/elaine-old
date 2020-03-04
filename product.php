<!doctype html>
<html>
<head>
<?php


$title = '';
$description = '';
$price = '';
$image1 = '';
$image2 = '';
$alt_tag = '';
$title_tag = '';
$sold = '';
$paypal = '';
$quantity = '';

if(isset($_GET['item'])){
// get the category and name of item
$cat = $_GET['cat'];
$item = $_GET['item'];

// now open the data 
include("./inc/dbdfdsfghjyt.inc.php");
$data = GetProduct($cat,'','');

// loop through the data looking for the correct record


	foreach($data as $d2){

		if($item == str_replace(" ","",$d2['title'])) {
// sold;price;title;image1;image2;paypal_info;description;alt_tag;title_tag
		$title = $d2['title'];
		$description = $d2['description'];
		$price = $d2['price'];
		$image1 = $d2['image1'];
		$image2 = $d2['image2'];
		$image3 = $d2['image3'];
		$image4 = $d2['image4'];
		$alt_tag = $d2['alt_tag'];
		$title_tag = $d2['title_tag'];
		$sold = $d2['sold'];
		$paypal = $d2['paypal'];
		$quantity = $d2['quantity'];
		}
	}
}

include("./inc/header.inc.php");
?>
</head>

<body>

<!-- Facebook Js Script -->
 <div id="fb-root"></div>
<script>(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
  
<div class="container">
<img src="./pictsx/e_logo2_white_350_2015.png" width="350" height="125" alt="" title="" class="pull-center "> </a>
	

<div class="row">
<?php
include("./inc/nav.inc.php");



?>
</div>
  
<div class="row"><div class="col-lg-12">&nbsp;</div></div>
<div class="row"><div class="col-lg-12">&nbsp;</div></div>


<div class="row">
<div class="col-sm-12 col-lg-5">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 class="h4"><?php print $title; ?></h2>
<p align="left" class="Classic_title"><?php print $description; ?></p>
<p>$<?php print $price; ?>.00</p>



<?php
if(substr_count($paypal,"|") > 0){
$opts = explode("|",$paypal);
?>
<!--- Paypal code --->
<!-- multi options -->
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="<?php print $opts[0]; ?>">
<input type="hidden" name="currency_code" value="USD">
<table>
<tr><td>
<input type="hidden" name="on0" value="Select Option">Select Option</td></tr>
<tr><td>
<select name="os0" class="black">
<?php

$x=0;

	foreach($opts as $opt){
		if($x > 0){
		$ov = explode(" $",$opt);

		print "<option value=\"" . $ov[0] . "\">";
		print $opt;
		print "</option>";
		}
	$x++;
	}
?>
</select>
</td></tr>
</table>
<br />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


<?php
} else {
	if($sold == "false" and $quantity > 0){
?>
<!-- single options -->
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="<?php print $paypal; ?>">
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<!--- end Paypal code --->
<?php
	} else { print "<h3>SOLD</h3>"; }
}
?>

</div>


<div class="col-sm-12 col-lg-7">
      <a href="./gallery/<?php print str_replace("_200","_750",str_replace("_350","_750",$image1)); ?>" class="MagicZoomPlus" id="trainers">
	<img src="./gallery/<?php print  str_replace("_750","_350",str_replace("_200","_350",$image1)); ?>" align="baseline"></a>
<?php


 // print $image3."|||";

if(file_exists("./gallery/" . str_replace("_350","_140",$image2)) AND strlen($image2) > 6 or file_exists("./gallery/" . str_replace("_200","_140",$image2)) AND strlen($image2) > 6){
      print "<br> <br>";
      print "<a href=\"./gallery/" . str_replace("_200","_750",str_replace("_350","_750",$image2)) . "\" rel=\"zoom-id:trainers\" rev=\"./gallery/" . str_replace("_750","_350",$image2) . "\">";
      print "<img src=\"./gallery/" . $image2 . "\" style=\"width: 140px; height: auto;\">";
	print "&nbsp;&nbsp;";


	if(file_exists("./gallery/" . str_replace("_350","_140",$image3)) AND strlen($image3) > 6 or file_exists("./gallery/" . str_replace("_200","_140",$image3)) AND strlen($image3) > 6){
      		print "<br> <br>";
      		print "<a href=\"./gallery/" . str_replace("_200","_750",str_replace("_350","_750",$image3)) . "\" rel=\"zoom-id:trainers\" rev=\"./gallery/" . str_replace("_750","_350",$image3) . "\">";
      		print "<img src=\"./gallery/" . $image3 . "\" style=\"width: 140px; height: auto;\">";
		print "&nbsp;&nbsp;";
	}


	if(file_exists("./gallery/" . str_replace("_350","_140",$image4)) AND strlen($image4) > 6 or file_exists("./gallery/" . str_replace("_200","_140",$image4)) AND strlen($image4) > 6){
      		print "<br> <br>";
      		print "<a href=\"./gallery/" . str_replace("_200","_750",str_replace("_350","_750",$image4)) . "\" rel=\"zoom-id:trainers\" rev=\"./gallery/" . str_replace("_750","_350",$image4) . "\">";
      		print "<img src=\"./gallery/" . $image4 . "\" style=\"width: 140px; height: auto;\">";
		print "&nbsp;&nbsp;";
	}


      print "<a href=\"./gallery/" . str_replace("_200","_750",str_replace("_350","_750",$image1)) . "\" rel=\"zoom-id:trainers\" rev=\"./gallery/" . str_replace("_750","_350",$image1) . "\">";
      print "<img src=\"./gallery/" . str_replace("_750","_350",$image1) . "\" style=\"width: 140px; height: auto;\">";
} else {


}

?>
</a>
</div>
</div>


<div class="row"><div class="col-lg-12">&nbsp;</div></div>
<!-- javascript -->
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/magiczoomplus.js"></script>

</body>
</html>
