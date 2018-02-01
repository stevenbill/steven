 
<?php
/*
$dirname=dirname(__FILE__);

$path=$_FILES['UP']['tmp_name'];
$name=$_FILES['UP']['name'];
/*$size=$_FILES['UP']['size'];
$type=$_FILES['UP']['type'];
$error=$_FILES['UP']['error'];*/




$dir=dirname(__FILE__)."/up/";
$path=$_FILES['up']['tmp_name'];
$name=$_FILES['up']['name'];
$size=$_FILES['UP']['size'];
$type=$_FILES['UP']['type'];

if ($_POST['send']) {
	$move=move_uploaded_file($path,$dir.$name);
	/*$com=new zip_entry_compressedsize("pro/form2/up/m.mp4");*/
	if (@$_POST['send']){
$to ="ayousry943@gmail.com";
$subject = "estasmer web site";
$txt = "شكرا لتواصللك مع شركه استثمر";
$headers = "From: ESTASMER request@estasmer.com" . "\r\n" .
"CC:  request@estasmer.com";

mail($to,$subject,$dir,$headers);
}
}











  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>upload</title>
  </head>
  <body>
  
<form action="include1.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="up" id="fileToUpload">
    <input type="submit" value="Upload Image" name="send">
    <a href="download.php" > download img </a>
</form>
  </body>
  </html>