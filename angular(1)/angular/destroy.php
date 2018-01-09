<?php
ob_start();
session_start();
session_destroy();
header("location: pages-login.php");

ob_end_flush();
?>