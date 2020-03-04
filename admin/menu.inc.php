
<?php


if (getenv("HTTP_CLIENT_IP")) $ip = getenv("HTTP_CLIENT_IP");
else if(getenv("HTTP_X_FORWARDED_FOR")) $ip = getenv("HTTP_X_FORWARDED_FOR");
else if(getenv("REMOTE_ADDR")) $ip = getenv("REMOTE_ADDR");
else $ip = "UNKNOWN";

// echo "Value is: " . print_r($_COOKIE['cookie']);
		if(!isset($_COOKIE['cookie'])) {
		$URL = "../login.php";
		echo "<META HTTP-EQUIV='refresh' CONTENT='0;URL=" . $URL . "'>";
		exit();
		}
?>
<div class="row">


<!---
  	<nav class="navbar navbar-nav" style="width:90%;float:right;border:0px solid red;margin-right:30px;">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse" style="border:1px solid black !important;">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar" style="color: black;">nav</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
        </button>
      </div>
--->

      <div class="" id="" style="margin-left:auto; margin-right: auto;>
        <ul class="nav navbar-nav">
	<li><a href="overview.php">Overview</a></li>
	<li><a href="new.php">Add New</a></li> 
	<li class="dropdown"><a href="#" data-toggle="dropdown">Sequence<span class="caret"></span></a>
		<ul class="dropdown-menu">
		<li><a href="./sequence.php?cat=bracelets">Bracelets</a></li>
		<li><a href="./sequence.php?cat=earrings">Earrings</a></li> 
		<li><a href="./sequence.php?cat=necklaces">Necklaces</a></li> 
		<li><a href="./sequence.php?cat=rings">Rings</a></li>
		</ul>
	</li>
	<li><a href="./manage_text.php">Manage Home Page</a></li>
	<li><a href="./deleted.php">Manage Hidden Page</a></li>
	<li><a href="./private.php">Private Logins</a></li>
        </ul> 
      </div>

<!---
     </nav> 
--->
</div>

<br /><br />