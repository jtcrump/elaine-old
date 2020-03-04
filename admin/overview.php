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

if(isset($_GET['del_id'])){
$del_id = $_GET['del_id'];
// print $del_id;
 DeleteProduct($del_id);
}


include("./menu.inc.php");
$extra = " and deleted NOT LIKE 'true' ORDER BY category, title";
$data = GetProduct('%',$extra,'');

foreach($data as $d2){

print "&nbsp;&nbsp;<a href='edit.php?id=" . $d2['id'] . "'>edit</a> ";


if($d2['sold'] == "true"){
print " **SOLD** ";
}
print " - ";
print $d2['category'];
print " - ";
print $d2['title'];
print " - ";
?>

<script>
function myFunction(del_id, del_title) {
 var r = confirm("Do you really want to delete " + del_title + "?");

if (r == true) {
document.getElementById("del_link_" + del_id).click();
} else {

}

}
</script>
<a href="./overview.php?del_id=<?php print $d2['id']; ?>" id="del_link_<?php print $d2['id']; ?>"></a>
<label onclick="myFunction(<?php print $d2['id']; ?>, '<?php print $d2['title']; ?>')">Delete</label>



<?php
print "<hr>";
}

?>

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>
</html>