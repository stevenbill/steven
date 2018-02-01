<!DOCTYPE html>
<html lang="en">

<head>
<script>
    echo '<script type="text/javascript"> alert('$map')</script>';
	<meta charset="utf-8">
	<title>ESTASMER show IMAGE </title>

	<!-- Google Fonts -->



	<!-- Custom Stylesheet -->
		<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">


<script type="text/javascript">
function load()
{

window.open('https://www.google.com.eg/maps/@31.2241109,29.9548859,12z?hl=en','_blank');

}
</script>

</head>

<body>
	<div class="container">
	<div class="top">
			<!--<h1 id="title" class="hidden"><span id="logo"> <span>SHOW IMAGE </span></span></h1>-->
		</div>
		<div class="login-box animated fadeInUp">
              <form method="post" action="imgdow.php">
                  
			<div class="box-header">
				<h2>SEARCH</h2>
			</div>
			<label for="username">ID</label>
			<br/>
			<input type="text" id="username" name="name">
			<br/>
		<!--	<label for="password">Password</label>
			<br/>
			<input type="password" id="password">
			<br/>-->
 <input type="submit" name="send"  value=" search "></input>
  <input type="submit" name="location"  value=" location "></input>



			<br/>
<!--			<a href="#"><p class="small">Forgot your password?</p></a>-->
<?php



if ($_POST['location']) {
function database(){
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    

}else{
  
  mysql_error();
}
}

database();










	$text=$_POST['name'];

 
$sql="SELECT * FROM `salestable` WHERE id ='$text' " ;
$q=mysql_query($sql) ;

  while($row=mysql_fetch_array($q)){
   


$map=$row['fsite'];

$map1=$row['lsite'];
echo $map;

echo '<br>'.$map1;


echo "<body onload='load()'>";











}






?>
		</div>



	</div>
    </form>
</body>


</html>
<?php


if ($_POST['send']) {
function database(){
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    

}else{
  
  mysql_error();
}
}

database();
/**********************connect to data base *****************************************************/

 $filename="download.zip";

unlink($filename);

 

$text=$_POST['name'];



 
$sql="SELECT * FROM `imagtable` WHERE sales_id ='$text' " ;
$q=mysql_query($sql) ;

  while($row=mysql_fetch_array($q)){
   

$id=$row['id'];

}





$sql="SELECT * FROM `imagtable` WHERE sales_id ='$text'"  ;
$q=mysql_query($sql) ;


  while($row=mysql_fetch_array($q)){
 
 
 
      echo "<td>";?> <img src="<?php echo $row['image'];?>" height="500" width="500"> <?php echo"</td>";






      /*
      for($lop=0; $lop<count($row['image']); $lop++)
{
          
echo $lop;
      
      
      
}
    $lop=$row['image'];
echo var_dump($lop);

}

*/


 $thisdir="./";

$zip = new ZipArchive();
$filename = "./download.zip";

if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
exit("cannot open <$filename>\n");
}

/*$zip->addFromString($thisdir . time(), "download (1).jpg" );*/

$zip->addFile($thisdir .$row['image'],$row['image']);

echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();
     





}



 $date= @date("sa");
echo $date;



 $file_url = 'http://estasmer.com/pro/form2/imgdow/download.zip';
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
readfile($file_url);









}

























}


?>