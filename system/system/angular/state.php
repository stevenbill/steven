<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
        $("option[value=Null]").remove();
       
 
});
</script>
</head>
<body>














<?php
include('db_config.php');
$country = $_POST['country'];
$sql= "SELECT  * FROM `request1` WHERE PhoneNumber ='$country'";
$query = $db->query($sql);
echo '<option value="">Select State</option>';
while($res = $query->fetch_assoc()){
echo '<option value="'.$res['Req_Serial'].'">'.$res['Req_Serial'].'</option>';

	
}
?>
