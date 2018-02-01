<?php

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


/***************************************/

    $id = $_GET['up'];
    
        
$sql="SELECT * FROM company where id='$id' " ;
$q=mysql_query($sql) ;



echo"<form action='edit.php' method='post'>";
while($row=mysql_fetch_array($q)){
    $fax1 = $row['fax1'];
    $fax2 = $row['fax2'];
    
    
    echo"<input type='text' name='' value='$fax1'> <br>";
    echo"<input type='text' name='' value='$fax2'> <br>";
   
   
    
}

 echo"<input type='submit' name='' value='update'> ";
?>










