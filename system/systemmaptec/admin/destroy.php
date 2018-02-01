<?php
ob_start();
header("location: login.php");
session_start(); 
date_default_timezone_set("Africa/Cairo");
echo "The time is " . date("h:i:sa");
session_destroy();
ob_end_flush();


?>