


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="map//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="map/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="map/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="map/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="map/css/forms.css" rel="stylesheet">
    

    
          <script>
            function send(){
                var user=document.getElementById('user').value;
           
                
$("#test").load("ajaxtest2.php",{user:user});
               
                
            }
        </script>
  

</head>
<body>
    
          <div id="test">

    
        </div>
   
    
    
    

    
    
    
     <?php
mysql_connect("localhost", "estasm5_yousry","4562008") or die(mysql_error());
mysql_select_db("estasm5_mapcompany")  or die(mysql_error());

$query = "SELECT * FROM faxroot ";
$result = mysql_query($query) or die(mysql_error()."[".$query."]");
?>
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Fax list</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select  required class="form-control selectpicker" name="Faxroot"  id='user' >
<?php 
while ($row = mysql_fetch_array($result))
{
 
    echo "<option   value='".$row['fax']."'>'".$row['fax']."'</option>";
 
}    
   
?> 

<input onclick="send()" type="button" name="send" value=" Update" class='btn btn-success'  >
<br>
<br>
   