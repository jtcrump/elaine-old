<?php 
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);

         return $ext;
 }


function ProcessImage($image, $pos){

/*
$my_file = '../gallery/file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); 
*/


$dir = "../gallery/";
error_reporting(1);

$change="";
$abc="";


$image = str_replace("_750","",$image);
$image = str_replace("_350","",$image);
$image = str_replace("_200","",$image);
$image = str_replace("_140","",$image);

 define ("MAX_SIZE","400");


 $errors=0;
  
 
 	// $image =$image;

if($pos == 1){
	$uploadedfile = $_FILES['file']['tmp_name'];
// echo $image . "<br />";
} 


if($pos == 2){
	$uploadedfile = $_FILES['file2']['tmp_name'];
// echo $image . "<br />";
}

if($pos == 3){
	$uploadedfile = $_FILES['file3']['tmp_name'];
// echo $image . "<br />";
}


if($pos == 4){
	$uploadedfile = $_FILES['file4']['tmp_name'];
// echo $image . "<br />";
}

 
 	if ($image) 
 	{
 	
 		$filename = stripslashes($image);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		
		
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		
 			$change='<div class="msgdiv">Unknown Image extension </div> ';
 			$errors=1;
 		}
 		else
 		{

 $size=filesize($uploadedfile);




if ($size > MAX_SIZE*1024)
{
	$change='<div class="msgdiv">You have exceeded the size limit!</div> ';
	$errors=1;
}




if($extension=="jpg" || $extension=="jpeg" )
{
$uploadedfile = $uploadedfile;
$src = imagecreatefromjpeg($uploadedfile);
// print $uploadedfile;
// D:\Temp\php\php342B.tmp

}
else if($extension=="png")
{
$uploadedfile = $uploadedfile;
$src = imagecreatefrompng($uploadedfile);

}
else 
{
$src = imagecreatefromgif($uploadedfile);
}

/*
print "<pre>";
print_r(getimagesize($uploadedfile));
print "</pre>";
*/


list($width,$height)=getimagesize($uploadedfile);

// echo $uploadedfile;

$newwidth=750;
$newheight=($height/$width)*$newwidth;
$tmp=imagecreatetruecolor($newwidth,$newheight);


$newwidth1=350;
$newheight1=($height/$width)*$newwidth1;
$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

$newwidth2=200;
$newheight2=($height/$width)*$newwidth2;
$tmp2=imagecreatetruecolor($newwidth2,$newheight2);

$newwidth3=140;
$newheight3=($height/$width)*$newwidth3;
$tmp3=imagecreatetruecolor($newwidth3,$newheight3);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);
imagecopyresampled($tmp2,$src,0,0,0,0,$newwidth2,$newheight2,$width,$height);
imagecopyresampled($tmp3,$src,0,0,0,0,$newwidth3,$newheight3,$width,$height);


if($pos == 1){
$filename = $dir . str_replace(".jpg","_750.jpg",$_FILES['file']['name']);
$filename1 = $dir . str_replace(".jpg","_350.jpg",$_FILES['file']['name']);
$filename2 = $dir . str_replace(".jpg","_200.jpg",$_FILES['file']['name']);
$filename3 = $dir . str_replace(".jpg","_140.jpg",$_FILES['file']['name']);


$filename = $dir . str_replace(".jpeg","_750.jpg",$filename);
$filename1 = $dir . str_replace(".jpeg","_350.jpg",$filename1);
$filename2 = $dir . str_replace(".jpeg","_200.jpg",$filename2);
$filename3 = $dir . str_replace(".jpeg","_140.jpg",$filename3);

} 

if($pos == 2){
$filename = $dir . str_replace(".jpg","_750.jpg",$_FILES['file2']['name']);
$filename1 = $dir . str_replace(".jpg","_350.jpg",$_FILES['file2']['name']);
$filename2 = $dir . str_replace(".jpg","_200.jpg",$_FILES['file2']['name']);
$filename3 = $dir . str_replace(".jpg","_140.jpg",$_FILES['file2']['name']);

$filename = $dir . str_replace(".jpeg","_750.jpg",$filename);
$filename1 = $dir . str_replace(".jpeg","_350.jpg",$filename1);
$filename2 = $dir . str_replace(".jpeg","_200.jpg",$filename2);
$filename3 = $dir . str_replace(".jpeg","_140.jpg",$filename3);
}


if($pos == 3){
$filename = $dir . str_replace(".jpg","_750.jpg",$_FILES['file3']['name']);
$filename1 = $dir . str_replace(".jpg","_350.jpg",$_FILES['file3']['name']);
$filename2 = $dir . str_replace(".jpg","_200.jpg",$_FILES['file3']['name']);
$filename3 = $dir . str_replace(".jpg","_140.jpg",$_FILES['file3']['name']);

$filename = $dir . str_replace(".jpeg","_750.jpg",$filename);
$filename1 = $dir . str_replace(".jpeg","_350.jpg",$filename1);
$filename2 = $dir . str_replace(".jpeg","_200.jpg",$filename2);
$filename3 = $dir . str_replace(".jpeg","_140.jpg",$filename3);
}


if($pos == 4){
$filename = $dir . str_replace(".jpg","_750.jpg",$_FILES['file4']['name']);
$filename1 = $dir . str_replace(".jpg","_350.jpg",$_FILES['file4']['name']);
$filename2 = $dir . str_replace(".jpg","_200.jpg",$_FILES['file4']['name']);
$filename3 = $dir . str_replace(".jpg","_140.jpg",$_FILES['file4']['name']);

$filename = $dir . str_replace(".jpeg","_750.jpg",$filename);
$filename1 = $dir . str_replace(".jpeg","_350.jpg",$filename1);
$filename2 = $dir . str_replace(".jpeg","_200.jpg",$filename2);
$filename3 = $dir . str_replace(".jpeg","_140.jpg",$filename3);
}



$fn = str_replace($dir,"",$filename);
$fn1 = str_replace($dir,"",$filename1);
$fn2 = str_replace($dir,"",$filename2);
$fn3 = str_replace($dir,"",$filename3);


// filename = ../gallery/earrings_750.jpg


imagejpeg($tmp,$filename,100);
imagejpeg($tmp1,$filename1,100);
imagejpeg($tmp2,$filename2,100);
imagejpeg($tmp3,$filename3,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
imagedestroy($tmp2);
imagedestroy($tmp3);


}



// echo $fn1 . "<br />";
return $fn1;
}

print $_POST['Submit'];

//If no errors registred, print the success message
 if(isset($_POST['Submit']) && !$errors) 
 {
 
   // mysql_query("update {$prefix}users set img='$big',img_small='$small' where user_id='$user'");
 	$change=' <div class="msgdiv">Image Uploaded Successfully!</div>';
 } else {

}
 

}
?>
