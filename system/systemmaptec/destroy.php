<?php
ob_start();
session_start(); 
date_default_timezone_set("Africa/Cairo");
header("location: login.php");

session_destroy();
ob_end_flush();


?>