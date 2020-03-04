<?php

function GetPrivate(){
 $mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
 $mysqli->select_db("db_a42efb_jcrump");

$data = array();

$result = $mysqli->query("SELECT * FROM private ORDER BY ts DESC");
	while ($row = $result->fetch_assoc()) {
	array_push($data,$row);
	}
// echo "SELECT * FROM private ORDER BY private ASC";
return $data;
$mysqli->close();
}



// get the active categories from the db to build the menu for active galleries
function GetCategories(){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("SELECT DISTINCT (
category
) AS category
FROM  `products` 
WHERE STATUS =  'active' 
AND category NOT LIKE  '' 
AND category NOT LIKE  'video' 
ORDER BY category ASC");

	if($result){
	while ($row = $result->fetch_assoc()) {
	array_push($data,$row);
	}
}
return $data;
$mysqli->close();
}



function GetProduct($cat,$extra,$sort){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");
$jobData = array();
$result = $mysqli->query("SELECT  id, title, description, paypal, image1, image2, image3, image4, alt_tag, title_tag, category, price, sold, quantity, sequence, featured_item, featured_order, private, status  FROM products WHERE category LIKE '$cat' " . $extra . " " . $sort);

// print "SELECT  id, title, description, paypal, image1, image2, image3, image4, alt_tag, title_tag, category, price, sold, quantity, sequence, featured_item, featured_order, private, status  FROM products WHERE category LIKE '$cat' " . $extra . " " . $sort;

	if($result){
    	while ($row = $result->fetch_assoc()) {
	array_push($data,$row);
	}
	}
// echo "SELECT * FROM products WHERE category LIKE '$cat' " . $extra . " " . $sort . ", private ASC";
return $data;
$mysqli->close();
}



function add_private($uname,$pword,$ip){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');

$mysqli->select_db("db_a42efb_jcrump");
$result = $mysqli->query("INSERT INTO private (email,password,ip) VALUES('" . $uname . "','" . $pword . "','" . $ip . "')");
$mysqli->close();
}


function GetMyText(){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");
$jobData = array();
$result = $mysqli->query("SELECT * FROM text ORDER BY placement DESC, ts DESC");
	if($result){
	while ($row = $result->fetch_assoc()) {
	array_push($data,$row);
	}
}
return $data;
}





function Login($uname, $pword){

$info = array();
	if($uname == "ER5771" and $pword == "Metals@123"){
	$info['uname'] = "elaine";
	$info['company'] = "elaine";
	$info['ugroup'] = "admin";
	$info['id'] = "1";
	}
return $info;
}





function GetProductDetail($id){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("SELECT id, title, description, paypal, image1, image2, image3, image4, alt_tag, title_tag, category, price, sold, quantity, sequence, featured_item, featured_order, private, status  FROM products WHERE id LIKE '$id'");
// $row = mysql_fetch_array($result);

// print "SELECT id, title, description, paypal, image1, image2, image3, image4, alt_tag, title_tag, category, price, sold, quantity, sequence, featured_item, featured_order, private, status  FROM products WHERE id LIKE '$id'";
	$row = $result->fetch_assoc();

/*
print "<pre>";
print_r($row);
print "</pre>";
*/

return $row;
$mysqli->close();

}



function DeleteProduct($id){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("UPDATE products SET featured_order = '0', featured_item = '', deleted = 'true', status = 'hidden' WHERE id LIKE '$id'");

$mysqli->close();

}



function InsertNewProduct($fields,$vals){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("INSERT INTO products 
(" . $fields . ")

VALUES(" . $vals . ")
");

echo "INSERT INTO products (" . $fields . ")VALUES(" . $vals . ")";
$mysqli->close();
}





function UpdateProductDetail($id, $fields){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");

 $result = $mysqli->query("UPDATE products  SET " . $fields . " WHERE id LIKE '$id'");

 echo "UPDATE products SET " . $fields . " WHERE id LIKE '$id'";

$mysqli->close();
}


function UpdateSequence($seq,$id){

$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("UPDATE products SET sequence = '$seq' WHERE id LIKE '$id'");
 echo "UPDATE products SET sequence = '$seq' WHERE id LIKE '$id'";

$mysqli->close();
}



function clear_featured(){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("UPDATE products SET featured_item = ''");

$mysqli->close();
}


function set_featured($featured,$ord){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("UPDATE products SET featured_item = 'true', featured_order = '$ord' WHERE id = '$featured'");

$mysqli->close();
}





function updateText($id,$text,$color,$placement,$active){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("UPDATE text SET text = '$text', color = '$color', placement = '$placement', active = '$active' WHERE id = '$id'");
// echo "UPDATE text SET text = '$text', color = '$color', placement = '$placement', active = '$active' WHERE id = '$id'";
$mysqli->close();
}


function addText($text,$color,$placement,$active){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");


$result = $mysqli->query("INSERT INTO text (text,color,placement,active) VALUES('$text','$color','$placement','$active')");
$mysqli->close();
}




function deleteText($id){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("DELETE FROM text WHERE id = '$id'");
$mysqli->close();
}





function getHomeTitle(){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");
$result = $mysqli->query("SELECT * FROM text WHERE placement = 'title' AND active = 'true' ORDER by ts DESC LIMIT 0, 1");
// $row = mysql_fetch_array($result);

	$row = $result->fetch_assoc();

return $row;
$mysqli->close();
}


function getHomeNotice(){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");
$result = $mysqli->query("SELECT color, text, placement FROM text WHERE placement = 'notice' AND active = 'true' ORDER by ts DESC LIMIT 0, 1");
// $row = mysql_fetch_array($result);

	$row = $result->fetch_assoc();


return $row;
$mysqli->close();
}

function getHomeDescription(){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");
$result = $mysqli->query("SELECT * FROM text WHERE placement = 'description' AND active = 'true' ORDER by ts DESC LIMIT 0, 1");
// $row = mysql_fetch_array($result);
// print "SELECT * FROM text WHERE placement = 'description' AND active = 'true' ORDER by ts DESC LIMIT 0, 1";
	$row = $result->fetch_assoc();

return $row;
$mysqli->close();
}


function getFeatured(){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');
$data = array();
$mysqli->select_db("db_a42efb_jcrump");
$result = $mysqli->query("SELECT * FROM products WHERE featured_item = 'true' ORDER BY featured_order ASC");

	if($result){
	while ($row = $result->fetch_assoc()) {
	array_push($data,$row);
	}
}

return $data;
$mysqli->close();
}


function GetFeaturedItem($id){

$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');

    
$data = array();
$mysqli->select_db("db_a42efb_jcrump");

$result = $mysqli->query("SELECT id, title FROM products WHERE id LIKE '$id'");
// $row = mysql_fetch_array($result);

	while ($row = $result->fetch_assoc()) {
	array_push($data,$row);
	}

return $data;
$mysqli->close();
}



function ViewDeleted(){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');

    
$data = array();
$mysqli->select_db("db_a42efb_jcrump");
$result = $mysqli->query("SELECT * FROM products WHERE deleted = 'true' ORDER BY title ASC");
	if($result){
	while ($row = $result->fetch_assoc()) {
	array_push($data,$row);
	}
}
return $data;
$mysqli->close();
}


function RestoreDeleted($id){
$mysqli = new mysqli('MYSQL5012.site4now.net', 'a42efb_jcrump', 'Eve!@nd2216');

    
$mysqli->select_db("db_a42efb_jcrump");
$result = $mysqli->query("UPDATE products SET deleted = '' WHERE id LIKE '$id'");
$mysqli->close();
}
?>