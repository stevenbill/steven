<?php
$host= "localhost";
$username= "estasm5_yousry";
$password = "4562008";
$db_name = "estasm5_sales";
$db = new mysqli($host,$username,$password,$db_name);
if($db->connect_error)
{
	die("connection failed:". $db->connect_error);
	
}
?>