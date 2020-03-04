<!doctype html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">

<link href="../css/bootstrap.css" rel="stylesheet">

<?php
$cat=$_GET['cat'];


include("../inc/dbdfdsfghjyt.inc.php");
$sort = " ORDER BY sold ASC, sequence ASC";
$extra="";
$data = GetProduct($cat,$extra,$sort);

?>
	<meta charset="utf-8">
	<title>HTML5 Sortable jQuery Plugin</title>
	<style>
		header, section {
			display: block;
		}
		body {
			font-family: 'Droid Serif';
		}
		h1, h2 {
			text-align: center;
			font-weight: normal;
		}
		#features {
			margin: auto;
			width: 560px;
			font-size: 0.9em;
		}
		.connected, .sortable, .exclude, .handles {
			margin: auto;
			padding: 0;
<?php
if($cat=="rings" or $cat=="necklaces"){
print "width: 480px;";
} else {
print "width: 580px;";
}
?>
			/* width: 410px; this sets the width the defines the number of columns. 410 4 cols, 310 3 cols */
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		.sortable.grid {
			overflow: hidden;
		}
		.connected li, .sortable li, .exclude li, .handles li {
			list-style: none;
			border: 1px solid #CCC;
			/* background: #F6F6F6; */
			font-family: "Tahoma";
			color: #1C94C4;
			margin: 5px;
			padding: 5px;
			height: 22px;
		}
		.handles span {
			cursor: move;
		}
		li.disabled {
			opacity: 0.5;
		}
		.sortable.grid li {
			line-height: 80px;
			float: left;
			width: 110px;
			height: 110px;
			text-align: center;
		}
		li.highlight {
			background: #FEE25F;
		}
		#connected {
			width: 440px;
			overflow: hidden;
			margin: auto;
		}
		.connected {
			float: left;
			width: 200px;
		}
		.connected.no2 {
			float: right;
		}
		li.sortable-placeholder {
			border: 1px dashed #CCC;
			background: none;
		}
	#submit{
	display: block;
	margin-left: auto;
	margin-right: auto;
	}
	</style>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
</head>

<body>
	<header>
		<h1>Order the <?php print ucfirst($cat); ?> Gallery Page</h1>
	</header>

<?php
include("./menu.inc.php");
?>
<form name="sort" action="./process.php" method="POST">
<input type="hidden" name="do" value="reorder">
	<section>
		<h2>Sortable Grid</h2>
		<ul class="sortable grid">
<?php
$x=1;
foreach($data as $d2){
print "<li><input type=\"hidden\" name=\"id" . $x . "\" value=\"" . $d2['id'] . "\"><img src='../gallery/" . $d2['image1'] . "' height='110px' width='110px'></li>";
$x++;
}
?>

<!---
			<li><input type="hidden" name="id1" value="1">Item 1</li>
			<li><input type="hidden" name="id2" value="2">Item 2</li>
			<li><input type="hidden" name="id3" value="3">Item 3</li>
			<li><input type="hidden" name="id4" value="4">Item 4</li>
			<li><input type="hidden" name="id5" value="5">Item 5</li>
			<li><input type="hidden" name="id6" value="6">Item 6</li>
			<li><input type="hidden" name="id7" value="7">Item 7</li>
			<li><input type="hidden" name="id8" value="8">Item 8</li>
			<li><input type="hidden" name="id9" value="9">Item 9</li>
--->
		</ul>
	</section>
<br />
<input type="submit" name="submit" value="submit" id="submit">
</form>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="jquery.sortable.js"></script>
	<script>
		$(function() {
			$('.sortable').sortable();
			$('.handles').sortable({
				handle: 'span'
			});
			$('.connected').sortable({
				connectWith: '.connected'
			});
			$('.exclude').sortable({
				items: ':not(.disabled)'
			});
		});
	</script>


</body>
</html>
