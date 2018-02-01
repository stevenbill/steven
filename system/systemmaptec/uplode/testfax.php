



<?php
if ($_POST['send1']) {
  $move=move_uploaded_file($path,$dir.$name);

 
for($i=0; $i<count($_FILES['up']['name']); $i++)
{


$dir=dirname(__FILE__)."/imgdow/";
$path=$_FILES['up']['tmp_name'][$i];
$name=$_FILES['up']['name'][$i];
$size=$_FILES['UP']['size'][$i];
$type=$_FILES['UP']['type'][$i];
if ($_POST['send1']) {
  $move=move_uploaded_file($path,$dir.$name);
 /* echo var_dump($name);*/
    echo $name;
    
   $root=$_POST['counntry'];
      echo $root;
  
        $localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_mapcompany";

$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

}else{
	
	mysql_error();
}


         $sql2="INSERT INTO `faxroot`(`fax`) VALUES ('$name')"; 
     mysql_query($sql2) ;
    
 echo "<script type='text/javascript'>alert('تم ارسال  بنجاح');</script>";





}
   
     }
     }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Uplod Fax</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="styles/index.css">
    <title>Uplod Fax</title>
    <script src="scripts/zepto.min.js"></script>
    <script src="scripts/index.js"></script>
  </head>
  <body>
    <section class="qrcode-maker">
      <header>
        <h1>Uplod Fax</h1>
      </header>
      <form class="upload-form" action="testfax.php" method="post" enctype="multipart/form-data">
        <div class="dropbox clearfix" id="qrcodeDropbox">
          <div class="dropbox-filed block clearfix uploading" data-dropbox="dragndrop">
            <h1 class="dropbox-filed-text">Drop files here</h1>
            <h2 class="dropbox-filed-text">Or click here to upload</h2>
            <input data-dropbox="file" type="file" accept="image/*" name="up[]" id="fileToUpload">
          </div>
          <div class="dropbox-loading" data-dropbox="loading"></div>
          <div class="dropbox-content block clearfix" data-dropbox="content">
            <div class="qrcode-truth" id="qrcode"></div>
            <canvas class="upload-content-image" id="preview" data-dropbox="preview"></canvas>
            <button class="btn btn-error" data-dropbox="destory" type="button" role="button">Remove Image</button>
          </div>
        </div>
        <div class="block clearfix">

        <div class="block clearfix">
      
        </div>
        <div class="block clearfix">
          <input  value="Upload Fax" name="send1"class="btn btn-success" id="qrcodeDownload" type="submit" role="button"> 
        </div>
      </form>
      <footer>
        <p>Maptec system</p>
      </footer>
    </section>
  </body>
</html>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/zepto/1.1.4/zepto.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
