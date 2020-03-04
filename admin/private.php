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
include("../inc/dbdfdsfghjyt.inc.php");
include("./menu.inc.php");

$data = GetPrivate();
?>
<center><table>
<tr><td><strong>Email Address</strong></td><td><strong>Timestamp</strong></td></tr>
<?php
foreach($data as $d2){
print "<tr>";
print "<td>" . $d2['email'] . "</td>";
print "<td>" . $d2['ts'] . "</td>";
print "</tr>";
}
?>
</table><center>


  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>
</html>