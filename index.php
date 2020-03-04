<!doctype html>
<html>
<head>

<?php 
// get the gallery category from the URL

		if(isset($_COOKIE['cookie'])) {
			if($_COOKIE['cookie']['uid'] == "995"){
			print "Welcome to the online NYC sale!";
			}
		}



include("./inc/dbdfdsfghjyt.inc.php");
$home_title = getHomeTitle();
$notice = getHomeNotice();

/*
print "<pre>";
print_r($notice);
print "</pre>";
*/

$description = getHomeDescription();

$featured = getFeatured();

// query the db for data
if(isset($_GET['gal'])){
$gal = $_GET['gal'];
$extra=" and status LIKE 'active' ";
$sort=" ORDER BY private ASC, sold ASC, ts DESC";




$data = GetProduct($gal,$extra,$sort);
/*
print "<pre>";
print_r($data);
print "</pre>";
*/

	if($gal == "earrings"){
	$classes = "col-md-6 col-lg-3 gallery";
	$column_counter = 4;
	$title = "Earrings by Elaine Rader";
	}

	if($gal == "bracelets"){
	$classes = "col-md-6 col-lg-3 gallery";
	$column_counter = 4;
	$title = "Bracelets by Elaine Rader";
	}

	if($gal == "rings"){
	$classes = "col-md-4 col-lg-4 gallery wide_350";
	$column_counter = 3;
	$title = "Rings by Elaine Rader";
	}

	if($gal == "chains"){
	$classes = "col-md-6 col-lg-3 gallery";
	$column_counter = 4;
	$title = "Chicans by Elaine Rader";
	}

	if($gal == "necklaces"){
	$classes = "col-md-4 col-lg-4 gallery_long wide_350";
	$column_counter = 3;
	$title = "Necklaces & Pendants by Elaine Rader";
	}
	
	if($gal == "beltbuckle"){
	$classes = "col-md-4 col-lg-4 gallery_long wide_350";
	$column_counter = 3;
	$title = "Beltbuckles by Elaine Rader";
	}

	$x=0;

		
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
<?php include("./inc/nav.inc.php"); ?>
</div>

<?php


/*
if(isset($gal)){
		foreach($data as $d2){
			if(strlen($d2['title']) > 3){
				if($x == 0){
				print "<div class=\"row gallery\">";
				}
			$x++;
			?>
     			<div class="col-sm-12 <?php print $classes; ?>">
      			<a href="./product.php?item=<?php print str_replace(" ","",$d2['title']); ?>&gal=<?php print $gal; ?>">
			<img src="./gallery/<?php print $d2['image1']; ?>" alt="<?php print $d2['alt_tag']; ?>" title="<?php print @$d2['alt_title']; ?>" /></a>
      			</div>
			<?php
				if($x == $column_counter){
				print "</div>";
				$x=0;
				}
			}
		}
}
*/


if(!isset($_GET['gal'])){
?>

<div class="row" style="max-width:980px;">
<?php


print "<h2 class=\"welcome\" style=\"border:0px solid white;color:" . $home_title['color'] . ";margin-right:auto;margin-left:auto;\">" . $home_title['text'] . "</h2>";
print "<h3 class=\"welcome\" style=\"color:" . $notice['color'] . ";margin-right:auto;margin-left:auto;\">" . $notice['text'] . "</h3>";
print "<h4 class=\"welcome\" style=\"color:" . $description['color'] . ";margin-right:auto;margin-left:auto;\">" . $description['text'] . "</h4>";

if(isset($gal)){
		foreach($data as $d2){
			if(strlen($d2['title']) > 4){
				if($x == 0){
				print "<div class=\"row gallery\">";
				}
			$x++;
			?>
     			<div class="col-sm-12 <?php print $classes; ?>">
      			<a href="./product.php?item=<?php print str_replace(" ","",$d2['title']); ?>&gal=<?php print $gal; ?>">
			<img src="./gallery/<?php print $d2['image1']; ?>" alt="<?php print $d2['alt_tag']; ?>" title="<?php print @$d2['alt_title']; ?>" /></a>
      			</div>
			<?php
				if($x == $column_counter){
				print "</div>";
				$x=0;
				}
			}
		}
} else {


	if(isset($featured[0]) AND !isset($_GET['gal'])){
?>

<div class="row col-lg-12" style="width:100%;margin-left:auto;margin-right:auto;border-width:2px;border-style:double;background-color:#000;border-radius: 15px;">

<?php
/*
$w = "100";
$m = "370";

if(isset($featured[1])){
$w = "100";
$m = "240";
}

if(isset($featured[2])){
$w = "100";
$m = "90";
}

if(isset($featured[3])){
$w = "100";
$m = "240";
}
*/

?>

<ul class="footer-nav" style="max-width:<?php print $w; ?>%;border:0px solid red;padding-left:<?php print $m; ?>px;">

<li style="max-width:230px;overflow:hidden;float:left;">
<?php
$vid0 = $featured[0]['video'];
if(strlen($vid0) > 3){
?>
<iframe width="230"  src="https://www.youtube.com/embed/<?php echo $vid0; ?>" frameborder="0" allowfullscreen></iframe>
<!---
<iframe src="https://player.vimeo.com/video/<?php echo $vid0; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p style="max-width: 230px;"><a href="https://vimeo.com/<?php echo $vid0; ?>"><?php echo $featured[0]['title']; ?></a></p>
--->
<?php
} else {
?>
<a href="./product.php?item=<?php print str_replace(" ","",$featured[0]['title']); ?>&gal=<?php print $featured[0]['category']; ?>">
<img src="./gallery/<?php print $featured[0]['image1']; ?>" style="height:300px;border-radius:10px;padding-top:10px;padding-bottom:10px;">
</a> 
<?php
}
?>
</li>


<?php
if(isset($featured[1])){
?>
<li style="max-width:230px;overflow:hidden;float:left;">

<?php
$vid1 = $featured[1]['video'];
if(strlen($vid1) > 3){
?>
<iframe width="230"  src="https://www.youtube.com/embed/<?php echo $vid1; ?>" frameborder="0" allowfullscreen></iframe>
<?php
} else {
?>
<a href="./product.php?item=<?php print str_replace(" ","",$featured[1]['title']); ?>&gal=<?php print $featured[1]['category']; ?>">
<img src="./gallery/<?php print $featured[1]['image1']; ?>" style="height:300px;border-radius:10px;padding-top:10px;padding-bottom:10px;">
</a>
<?php
}
?>
</li>



<?php
}

if(isset($featured[3])){
echo "</ul>";
echo "<ul class=\"footer-nav\" style=\"max-width:" . $w . "%;border:0px solid red;padding-left:" . $m . "px;\">";
}


if(isset($featured[2])){
?>

<li style="max-width:230px;overflow:hidden;float:left;">
<?php
$vid2 = $featured[2]['video'];
if(strlen($vid2) > 3){
?>
<iframe width="230"  src="https://www.youtube.com/embed/<?php echo $vid2; ?>" frameborder="0" allowfullscreen></iframe>
<?php
} else {
?>
<a href="./product.php?item=<?php print str_replace(" ","",$featured[2]['title']); ?>&gal=<?php print $featured[2]['category']; ?>">
<img src="./gallery/<?php print $featured[2]['image1']; ?>" style="height:300px;border-radius:10px;padding-top:10px;padding-bottom:10px;"></a>
<?php
}
?>
</li>
<?php
}



if(isset($featured[3])){
?>
<li style="max-width:230px;overflow:hidden;float:left;">
<?php
$vid3 = $featured[3]['video'];
if(strlen($vid3) > 3){
?>
<iframe width="230"  src="https://www.youtube.com/embed/<?php echo $vid3; ?>" frameborder="0" allowfullscreen></iframe>
<?php
} else {
?>
	<a href="./product.php?item=<?php print str_replace(" ","",$featured[3]['title']); ?>&gal=<?php print $featured[3]['category']; ?>">
	<img src="./gallery/<?php print $featured[3]['image1']; ?>" style="height:300px;border-radius:10px;padding-top:10px;padding-bottom:10px;">
	</a>
<?php
}
?>
</li>
<?php
}


?>
</ul>





</div>

<?php
}
	} 
 }
?>





<?php
if(!isset($gal)){
	if(!isset($featured[0])){ }
?>
	<div class="row">
		<div class="col-md-2 col-lg-2">&nbsp;</div>
		<div class="col-sm-12 col-md-4 col-lg-4 center erquote erquote-sm index_new spacer" >
		Earrings<br />
		<a href="./index.php?gal=earrings"><img src="/index-images/2.jpg" alt="" title=""></a>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4 center erquote erquote-sm index_new spacer">
		Necklaces & Chains<br />
		<a href="./index.php?gal=necklaces"><img src="/index-images/4.jpg" alt="" title=""></a>
		</div>
		<div class="col-md-2 col-lg-2">&nbsp;</div>
	</div>

	<div class="row">
		<div class="col-md-2 col-lg-2">&nbsp;</div>
		<div class="col-sm-12 col-md-4 col-lg-4 center erquote erquote-sm index_new spacer">
		Bracelets<br />
		<a href="./index.php?gal=bracelets"><img src="/index-images/1.jpg" alt="" title=""></a>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4 center erquote erquote-sm index_new spacer">
		Rings<br />
		<a href="./index.php?gal=rings"><img src="/index-images/3.jpg" alt="" title=""></a>
		</div>

		<div class="col-md-2 col-lg-2">&nbsp;</div>
	</div>
<?php
	

} else {
		foreach($data as $d2){

			if(strlen($d2['title']) > 4){

				if($x == 0){
				print "<div class=\"row gallery\">";
				}
			$x++;
			?>
     			<div 
<?php
if($d2['private'] == '1' and !isset($_COOKIE['cookie'])){
	// if($_COOKIE['cookie']['uid'] == "995"){
	print "style=\"display: none;\"";
	// } 
}


if($d2['private'] == '1' and isset($_COOKIE['cookie'])){
if($_COOKIE['cookie']['uid'] == "995"){

} else {
print "style=\"display: none;\"";
}
}
?>
 class="col-sm-12 <?php print $classes; ?>">
      			<a href="./product.php?item=<?php print str_replace(" ","",$d2['title']); ?>&cat=<?php print $gal; ?>">
			<img src="./gallery/<?php print $d2['image1']; ?>" alt="<?php print $d2['alt_tag']; ?>" title="<?php print @$d2['alt_title']; ?>" /></a>
			<p><div style="margin-left: 20%;">

<?php 
			if($d2['sold'] == 'false'){
			print "$".$d2['price'].".00";
			} else {
			print '<div style="color: red; font-weight: bold;">SOLD</div>';
			}

// print $_COOKIE['cookie']['uid'];
?>

</div></p>
		<?php

			if(@$_COOKIE['cookie']['uid'] == "997" and $d2['private'] == '1'){
			print "<center>This is a NYC exclusive!</center>";
			}
		?>
      			</div>
			<?php
				if($x == $column_counter){
				print "</div>";
				$x=0;
				}
			}
		}
}
?>


</div>






</div>  
</div> 
<div class="row"><p>&nbsp;</p><p>&nbsp;</p></div>
<?php include("./inc/footer.inc.php"); ?>

<!-- javascript -->
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</body>
</html>

