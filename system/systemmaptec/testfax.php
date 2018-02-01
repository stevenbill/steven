

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
   

       



    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../dist/bootstrap-session-timeout.js"></script>

    <script>
    $.sessionTimeout({
        keepAliveUrl: 'keep-alive.html',
        logoutUrl: 'login.php',
        redirUrl: 'destroy.php',
        warnAfter: 70000,
        redirAfter: 90000,
        countdownBar: true
    });
    </script>
</body>

</html>


















	   <form action="testfax.php" method="post" enctype="multipart/form-data">


    <!--<input type="file" name="up[]" id="fileToUpload" multiple="multiple">-->
           
           <input type="file" name="up[]" id="fileToUpload">
    <input type="submit" value="Upload Fax" name="send1" >












<?php
if ($_POST['send1']) {
  $move=move_uploaded_file($path,$dir.$name);
  echo var_dump($name);
 
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
