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
?>

THIS IS THE PAGE TO INSERT NEW PRODUCTS<br /><br /><br />

		    <form method="post" action="./process.php" enctype="multipart/form-data" name="form1">
<input type="hidden" name="do" value="insert">
				<table width="500" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr><td>Title: </td><td height="35px"><input type="text" size="50" name="title"></td></tr>
		<tr><td>Price: </td><td height="35px"><input type="text" name="price"></td></tr>
		<tr><td>Paypal: </td><td height="35px"><input type="text" name="paypal"></td></tr>
		<tr><td>Quantity: </td><td height="35px"><input type="text" name="quantity"></td></tr>
		<tr><td>Private: </td><td height="35px">
<select name="private">
<option value="0">No</option>
<option value="1">Yes</option>
</select>
</td></tr>
		<tr><td>Image alt tag: </td><td height="35px"><input type="text" size="50" name="alt_tag"></td></tr>
		<tr><td>Image title tag: </td><td height="35px"><input type="text" size="50" name="alt_title"></td></tr>
		<tr><td>Category </td><td height="35px"> 
<select name="category">
<option value="">Select Category</option>
<option value="bracelets">Bracelets</option>
<option value="bracelets">Buckles</option>
<option value="earrings">Earrings</option>
<option value="necklaces">Necklaces</option>
<option value="rings">Rings</option>
<option value="video">Video</option>
</select>
</td></tr>
		<tr><td>Video ID: </td><td><input type="text" name="video"> eg 6NM5lUFiGlQ</td></tr>
               <tr><td>&nbsp;</td><td></td></tr>
		<tr><td>Description: </td><td><textarea name="description" rows="5" cols="50"></textarea></td></tr>
	<tr><td></td>
		<td valign="top" height="35px" class="help"><br /><br />Make sure the image filename is in this format: <b>earring_15_metal_cone.jpg</b> and at least 750px wide</span></td>
		</tr>
               <tr><td style="height:25px">&nbsp;</td></tr>




		<tr>
          <td width="150"><div align="right" class="titles">Image 1  
            : </div></td>
          <td width="350" align="left">
            <div align="left">
              <input size="25" name="file" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box"/	  
              </div></td>
        </tr>





		<tr>
          <td width="150"><div align="right" class="titles">Image 2  
            : </div></td>
          <td width="350" align="left">
            <div align="left">
              <input size="25" name="file2" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box"/	  
              </div></td>
        </tr>



		<tr>
          <td width="150"><div align="right" class="titles">Image 3  
            : </div></td>
          <td width="350" align="left">
            <div align="left">
              <input size="25" name="file3" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box"/>	  
              </div></td>
        </tr>



		<tr>
          <td width="150"><div align="right" class="titles">Image 4  
            : </div></td>
          <td width="350" align="left">
            <div align="left">
              <input size="25" name="file4" type="file" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt" class="box"/>	  
              </div></td>
        </tr>



		<tr><td></td><td valign="top" height="35px" class="help">Image maximum size <b>400 </b>kb</span></td></tr>
		<tr><td></td><td valign="top" height="35px"><input type="submit" id="mybut" value="Upload" name="Submit"/></td></tr>
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
