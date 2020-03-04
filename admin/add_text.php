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

?>

<div class="row"><h3>Add Home Page Text</h3></div>



<form name="myText" action="./process.php" method="POST">
<input type="hidden" name="do" value="add_text">


<div class="col-sm-12 col-md-12 col-lg-12">text: 
<textarea name="text" rows="6" cols="50"></textarea>
</div>

<div class="row"><div class="col-sm-12 col-md-12 col-lg-12">&nbsp;<br /></div></div>

<div class="col-sm-12 col-md-12 col-lg-12">color: 
<select name="color">
<option value="">Color</option>
<option value="white">White</option>
<option value="red">Red</option>
<option value="yellow">Yellow</option>
<option value="green">Green</option>
</select>
</div>


<div class="row"><div class="col-sm-12 col-md-12 col-lg-12">&nbsp;<br /></div></div>

<div class="col-sm-12 col-md-12 col-lg-12">placement: 
<select name="placement">
<option value="">Placement</option>
<option value="title">Title</option>
<option value="notice">Notice</option>
<option value="description">Description</option>
</select>
</div>

<div class="row"><div class="col-sm-12 col-md-12 col-lg-12">&nbsp;<br /></div></div>

<div class="col-sm-12 col-md-12 col-lg-12">active: 
<select name="active">
<option value="">Active</option>
<option value="true">True</option>
<option value="false">False</option>
</select>
</div>


<div class="row"><div class="col-sm-12 col-md-12 col-lg-12">&nbsp;<br /></div></div>



<div class="row"><input type="submit" name="submit" value="submit" style="padding:20px;"></div>
</form>



  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</div>
</body>
</html>