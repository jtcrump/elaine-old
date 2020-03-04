<?php
include("../inc/dbdfdsfghjyt.inc.php");



if($_POST['do'] == "edit"){

// do the fetch
$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$price = str_replace(",","",$price);
$price = str_replace(".00","",$price);
$price = str_replace("$","",$price);
$sold = $_POST['sold'];
$paypal = $_POST['paypal'];
$quantity = $_POST['quantity'];
$alt_tag = $_POST['alt_tag'];
$title_tag = $_POST['title_tag'];
$category = $_POST['category'];
$video = $_POST['video'];
$description = $_POST['description'];
$image1 = $_POST['image1'];
$image2 = $_POST['image2'];
$image3 = $_POST['image3'];
$image4 = $_POST['image4'];
$file = @$_POST['file'];
$file2 = @$_POST['file2'];
$file3 = @$_POST['file3'];
$file4 = @$_POST['file4'];
$status = $_POST['status'];
$private = $_POST['private'];
$Submit = $_POST['Submit'];


// process the images if new ones
$tmp_image =$_FILES["file"]['name'];
$tmp_image2 =$_FILES["file2"]['name'];
$tmp_image3 =$_FILES["file3"]['name'];
$tmp_image4 =$_FILES["file4"]['name'];

include("./process_image.php");

if($image1 != $tmp_image AND strlen($tmp_image) > 4){
$image1 = ProcessImage($tmp_image,"1");
}

if($image2 != $tmp_image2 AND strlen($tmp_image2) > 4){
$image2 = ProcessImage($tmp_image2,"2");
}

if($image3 != $tmp_image3 AND strlen($tmp_image3) > 4){
$image3 = ProcessImage($tmp_image3,"3");
}

if($image4 != $tmp_image4 AND strlen($tmp_image4) > 4){
$image4 = ProcessImage($tmp_image4,"4");
}

// update
$fields = "title = '" . str_replace("'","&#39;",$title) . "', ";
$fields .= "private = '" . $private . "', ";
$fields .= "status = '" . $status . "', ";
$fields .= "price = '" . str_replace("'","&#39;",$price) . "', ";
$fields .= "sold = '" . str_replace("'","&#39;",$sold) . "', ";
$fields .= "paypal = '" . str_replace("'","&#39;",$paypal) . "', ";
$fields .= "quantity = '" . str_replace("'","&#39;",$quantity) . "', ";
$fields .= "alt_tag = '" . str_replace("'","&#39;",$alt_tag) . "', ";
$fields .= "title_tag = '" . str_replace("'","&#39;",$title_tag) . "', ";
$fields .= "category = '" . str_replace("'","&#39;",$category) . "', ";
$fields .= "video = '" . $video . "', ";
$fields .= "description = '" . str_replace("'","&#39;",$description) . "', ";
$fields .= "image1 = '" . str_replace("'","&#39;",$image1) . "', ";
$fields .= "image3 = '" . str_replace("'","&#39;",$image3) . "', ";
$fields .= "image4 = '" . str_replace("'","&#39;",$image4) . "', ";
if($status != 'hidden'){
$fields .= "deleted = 'false', ";
}

$fields .= "image2 = '" . str_replace("'","&#39;",$image2) . "' ";


UpdateProductDetail($id, $fields);
print "\"<meta http-equiv=\"refresh\" content=\"0;URL='./overview.php'\" />";
}





if($_POST['do'] == "insert"){
// do the fetch
$title = $_POST['title'];
$price = $_POST['price'];
$price = str_replace(",","",$price);
$price = str_replace(".00","",$price);
$price = str_replace("$","",$price);
$paypal = $_POST['paypal'];
$quantity = $_POST['quantity'];
$private = $_POST['private'];
$alt_tag = $_POST['alt_tag'];
$title_tag = $_POST['title_tag'];
$category = $_POST['category'];
$video = $_POST['video'];
$description = $_POST['description'];
$image1 = $_POST['ima ge1'];
$image2 = $_POST['image2'];
$image3 = $_POST['image3'];
$image4 = $_POST['image4'];
$file = @$_POST['file'];
$file2 = @$_POST['file2'];
$file3 = @$_POST['file3'];
$file4 = @$_POST['file4'];

// process the images
$tmp_image =$_FILES["file"]['name'];
$tmp_image2 =$_FILES["file2"]['name'];
$tmp_image3 =$_FILES["file3"]['name'];
$tmp_image4 =$_FILES["file4"]['name'];

include("./process_image.php");

if($image1 != $tmp_image AND strlen($tmp_image) > 4){
$image1 = ProcessImage($tmp_image,"1");
}

if($image2 != $tmp_image2 AND strlen($tmp_image2) > 4){
$image2 = ProcessImage($tmp_image2,"2");
}

if($image3 != $tmp_image3 AND strlen($tmp_image3) > 4){
$image3 = ProcessImage($tmp_image3,"3");
}

if($image4 != $tmp_image4 AND strlen($tmp_image4) > 4){
$image4 = ProcessImage($tmp_image4,"4");
}

$fields = "title, price, paypal, quantity, private, alt_tag, title_tag, category, video, description, image1, image2, image3, image4 ";
$vals = "'" . $title . "', ";
$vals .= "'" . $price . "', ";
$vals .= "'" . $paypal . "', ";
$vals .= "'" . $quantity . "', ";
$vals .= "'" . $private . "', ";
$vals .= "'" . $alt_tag . "', ";
$vals .= "'" . $title_tag . "', ";
$vals .= "'" . $category . "', ";
$vals .= "'" . $video . "', ";
$vals .= "'" . $description . "', ";
$vals .= "'" . $image1 . "', ";
$vals .= "'" . $image2 . "', ";
$vals .= "'" . $image3 . "', ";
$vals .= "'" . $image4 . "' ";

// do the insert
InsertNewProduct($fields,$vals);
print "<meta http-equiv=\"refresh\" content=\"0;URL='./overview.php'\" />";

}




if($_POST['do'] == "reorder"){
$x=1;
	foreach ($_POST as $key => $value){
// echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
		if($value != "submit" and $value != "reorder"){
		UpdateSequence($x,$value);
		// echo "UPDATE products SET sequence = '$x' WHERE id LIKE '$value'";
		echo "<br /><br />";
		$x++;
		}
	}
print "<meta http-equiv=\"refresh\" content=\"0;URL='./overview.php'\" />";
}




if($_POST['do'] == "manage_text"){
$featured1 = $_POST['featured_1'];
$featured2 = $_POST['featured_2'];
$featured3 = $_POST['featured_3'];
$featured4 = $_POST['featured_4'];

clear_featured();

if($featured1 > 0){
$ord = 1;
set_featured($featured1,$ord);
}
if($featured2 > 0){
$ord = 2;
set_featured($featured2,$ord);
}
if($featured3 > 0){
$ord = 3;
set_featured($featured3,$ord);
}

if($featured4 > 0){
$ord = 4;
set_featured($featured4,$ord);
}

// now update the text field info
$cnt = $_POST['cnt'];
$x=1;

while($x <= $cnt){
$id = $_POST['id_'.$x];
$text = $_POST['text_'.$x];
$color = $_POST['color_'.$x];
$placement = $_POST['placement_'.$x];
$active = $_POST['active_'.$x];

$text = str_replace("'","&#39;",$text);
$text = str_replace("\"","&#34;",$text);

// update the row
updateText($id,$text,$color,$placement,$active);

$x++;
}
print "<meta http-equiv=\"refresh\" content=\"0;URL='./manage_text.php'\" />";

}


if($_GET['do'] == "delete"){
$id = $_GET['id'];
deleteText($id);
print "<meta http-equiv=\"refresh\" content=\"0;URL='./manage_text.php'\" />";
}


if($_POST['do'] == "add_text"){
$text = $_POST['text'];
$color = $_POST['color'];
$placement = $_POST['placement'];
$active = $_POST['active'];


$text = str_replace("'","&#39;",$text);
$text = str_replace("\"","&#34;",$text);


addText($text,$color,$placement,$active);
print "<meta http-equiv=\"refresh\" content=\"0;URL='./manage_text.php'\" />";
}