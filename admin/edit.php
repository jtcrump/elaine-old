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
include("./menu.inc.php");


$id = $_GET['id'];
include("../inc/dbdfdsfghjyt.inc.php");
$data = GetProductDetail($id,'');
?>

This is the edit page for: <b><?php print strtoupper($data['title']); ?></b>

<br /><br /><br />

<?php
if($id == ''){
?>
<meta http-equiv="refresh" content="0;URL='./new.php'" />
<?php
}
?>

		    <form method="post" action="./process.php" enctype="multipart/form-data" name="form1">
<input type="hidden" name="do" value="edit">
<input type="hidden" name="id" value="<?php print $data['id']; ?>">
				<table width="500" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr><td>Title: </td><td height="35px"><input type="text" name="title" size="50" value="<?php print $data['title']; ?>"></td></tr>
		<tr><td>Sold: </td><td height="35px">

<select name="sold">
<option value="<?php print $data['sold']; ?>"><?php print $data['sold']; ?></option>
<option value="true">true</option>
<option value="false">false</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; status: 
<select name="status">
<option value="<?php print $data['status']; ?>"><?php print $data['status']; ?></option>
<option value="active">active</option>
<option value="archive">archive</option>
<option value="hidden">hidden</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; private: 
<select name="private">
<option value="<?php print $data['private']; ?>"><?php 
if($data['private'] == 0){
print "No";
} else {
print "Yes";
}
 ?></option>
<option value="0">No</option>
<option value="1">Yes</option>
</select>

</td></tr>
		<tr><td>Price: </td><td height="35px"><input type="text" name="price" value="<?php print $data['price']; ?>"></td></tr>
		<tr><td>Paypal: </td><td height="35px"><input type="text" name="paypal" value="<?php print $data['paypal']; ?>"></td></tr>
		<tr><td>Quantity: </td><td height="35px"><input type="text" name="quantity" value="<?php print $data['quantity']; ?>"></td></tr>

		<tr><td>Category </td><td height="35px">
<select name="category">
<option value="<?php print $data['category']; ?>"><?php print $data['category']; ?></option>
<option value="bracelets">Bracelets</option>
<option value="bracelets">Buckles</option>
<option value="earrings">Earrings</option>
<option value="necklaces">Necklaces</option>
<option value="rings">Rings</option>
<option value="video">Video</option>
</select>
</td></tr>
		<tr><td>Video: </td><td><input type="text" name="video" value="<?php print $data['video']; ?>"></td></tr>
               <tr><td>&nbsp;</td><td></td></tr>
		<tr><td>Description: </td><td><textarea name="description" rows="5" cols="50"><?php print $data['description']; ?></textarea></td></tr>
	<tr><td></td>
		<td valign="top" height="35px" class="help"><br /><br />Make sure the image filename is in this format: <b>earring_15_metal_cone.jpg</b> and at least 750px wide<br />Image maximum size <b>400 </b>kb</span></td>
		</tr>

		<tr><td>Image alt tag: </td><td height="35px"><input type="text" size="50" name="alt_tag" value="<?php print $data['alt_tag']; ?>"></td></tr>
		<tr><td>Image title tag: </td><td height="35px"><input type="text" size="50" name="alt_title" value="<?php print $data['title_tag']; ?>"></td></tr>

               <tr><td style="height:25px">&nbsp;</td></tr>
		<tr>
          <td width="150"><div align="right" class="titles">Image 1<img src="../gallery/<?php print $data['image1']; ?>" style="width:100px; height:auto;" >&nbsp;</div></td>
<input type="hidden" name="image1" value="<?php print $data['image1']; ?>">

          <td width="350" align="left">
            <div align="left">
              <input size="25" name="file" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box"/	  
              </div></td>
        </tr>
		<tr><td></td>
		<td valign="top" height="35px" class="help"></span></td>
		</tr>



		<tr>
          <td width="150"><div align="right" class="titles">Image 2
<?php
if(strlen($data['image2']) > 5){
print "<img src=\"../gallery/" . $data['image2'] . "\" style=\"width:100px; height:auto;\" style=\"width:100px; height:auto;\" >";
print "<input type=\"hidden\" name=\"image2\" value=\"" . $data['image2'] . "\">";
}
?>
&nbsp;</div></td>
          <td width="350" align="left">
            <div align="left">
              <input size="25" name="file2" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box"/	  
              </div></td>
        </tr>





		<tr>
          <td width="150"><div align="right" class="titles">Image 3
<?php
if(strlen($data['image3']) > 5){
print "<img src=\"../gallery/" . $data['image3'] . "\" style=\"width:100px; height:auto;\" style=\"width:100px; height:auto;\" >";
print "<input type=\"hidden\" name=\"image3\" value=\"" . $data['image3'] . "\">";
}
?>
&nbsp;</div></td>
          <td width="350" align="left">
            <div align="left">
              <input size="25" name="file3" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box"/	  
              </div></td>
        </tr>


		<tr>
          <td width="150"><div align="right" class="titles">Image 4
<?php
if(strlen($data['image4']) > 5){
print "<img src=\"../gallery/" . $data['image4'] . "\" style=\"width:100px; height:auto;\" style=\"width:100px; height:auto;\" >";
print "<input type=\"hidden\" name=\"image4\" value=\"" . $data['image4'] . "\">";
}
?>
&nbsp;</div></td>
          <td width="350" align="left">
            <div align="left">
              <input size="25" name="file4" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box"/	  
              </div></td>
        </tr>






		<tr><td></td><td valign="top" height="35px" class="help"></span></td></tr>
		<tr><td></td><td valign="top" height="35px"><input type="submit" id="mybut" value="Update" name="Submit"/></td></tr>
        <tr>
          <td width="200">&nbsp;</td>
          <td width="200"><table width="200" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="200" align="center"><div align="left"></div></td>
                <td width="100">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      </table>
				</form>

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>
</html>
