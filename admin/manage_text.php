<!doctype html>
<html>
<head> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
<head>
<link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">

<?php
include("./menu.inc.php");
include("../inc/dbdfdsfghjyt.inc.php");

$data = GetMyText();
$extra = " and deleted not like 'true' ORDER BY title";
$items = GetProduct('%',$extra,'');
$featured = getFeatured();

?>

<div class="row"><h3>Manage Home Page</h3><h4 style="float:left !important;"><a href="./add_text.php">Add New Text</a></h4></div>

<div class="row">
<div class="col-md-12 col-lg-12">featured items 

<form name="myText" action="./process.php" method="POST">
<input type="hidden" name="do" value="manage_text">





<?php 
$x=0;

while($x < 4){
$f = ($featured[$x]);
$id = $f['id'];
$fi = GetFeaturedItem($id);
if($x == 2){ echo "<br />"; }
print "<select name=\"featured_" . ($x+1) . "\">";
	if(isset($fi['title'])){
	print "<option value=\"" . $fi['id'] . "\">" . $fi['title'] . "</option>";
	} else {
	print "<option value=\"\">Featured Item</option>";
	}
print "<option value=\"\">Default Gallery</option>";
print "<option value=\"\">None</option>";
	foreach($items as $i){
	print "<option value=\"" . $i['id'] . "\">" . $i['title'] . "</option>";
	}
print "</select>";
$x++;
}

?>







</div></div>
<div class="row"><hr></div>
<?php

$x=1;
foreach($data as $d2){
?>
<div class="row">
<div class="col-sm-12 col-md-6 col-lg-4"><a href="./process.php?do=delete&id=<?php print $d2['id']; ?>">delete</a> &nbsp;&nbsp;&nbsp;text<br /><textarea name="text_<?php print $x; ?>" rows="6" cols="50"><?php print $d2['text']; ?></textarea></div>
<input type="hidden" name="cnt" value="<?php print $x; ?>">
<input type="hidden" name="id_<?php print $x; ?>" value="<?php print $d2['id']; ?>">

<div class="col-sm-4 col-md-2 col-lg-2">color<br />
<select name="color_<?php print $x; ?>">
<?php 
if(isset($d2['color'])){
print "<option value=\"" . $d2['color'] . "\">" . $d2['color'] . "</option>";
} else {
print "<option value=\"\">Select Color</option>";
}
?>
<option value="white">White</option>
<option value="red">Red</option>
<option value="yellow">Yellow</option>
<option value="green">Green</option>
</select></div>



<div class="col-sm-4 col-md-2 col-lg-3">placement<br />
<select name="placement_<?php print $x; ?>">
<?php 
if(isset($d2['placement'])){
print "<option value=\"" . $d2['placement'] . "\">" . $d2['placement'] . "</option>";
} else {
print "<option value=\"\">Select Placement</option>";
}
?>
<option value="title">Title</option>
<option value="notice">Notice</option>
<option value="description">Description</option>
</select></div>



<div class="col-sm-4 col-md-2 col-lg-3">active<br />
<select name="active_<?php print $x; ?>">
<?php 
if(isset($d2['active'])){
print "<option value=\"" . $d2['active'] . "\">" . $d2['active'] . "</option>";
} else {
print "<option value=\"\">Active/Not Active</option>";
}
?>
<option value="true">True</option>
<option value="false">False</option>
</select></div>

</div>

<div class="row"><hr></div>

<?php
$x++;
}
?>

<div class="row"><input type="submit" name="submit" value="submit" style="padding:20px;"></div>
</form>



  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</div>
</body>
</html>