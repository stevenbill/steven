

<?php
if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }



if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}


?>



<?php

session_start();





/*
// set timeout period in seconds (600 = 10 minutes)
$inactive = 300;
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
    $session_life = time() - $_SESSION['timeout'];
    if($session_life > $inactive)
        { session_destroy(); header("Location: destroy.php"); }
}
$_SESSION['timeout'] = time();



if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }*/
?>

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
             
                
                 var Name=document.getElementById('Name').value;
                  var Mobile01=document.getElementById('Mobile01').value;
                 var Phone02=document.getElementById('Phone02').value; 
                 var Phone01=document.getElementById('Phone01').value; 
                  var Mobile02=document.getElementById('Mobile02').value; 
                var Email1=document.getElementById('Email1').value;
                 var Email2=document.getElementById('Email2').value;
                 var Email3=document.getElementById('Email3').value;
                 
                
               
                
                
$("#test").load("ajaxlist1.php",{Name:Name,Mobile01:Mobile01,Phone02:Phone02,Phone01:Phone01,Mobile02:Mobile02,Email1:Email1,Email3:Email3,Email2:Email2});
               
                
            }
        </script>
  

</head>
<body>
    
          <div id="test">

    
        </div>
   
    
     	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                         <h1><a href="add.php">Edit Contact list  </a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	               
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo "user/".$seg= $_SESSION['logindata'];    ?>          <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">

	                          
	                       <li><a href="destroy.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
    
    
    
    <?php
    session_start();

 $seg=$_SESSION['logindata'];
    
    
    $id=$_GET['up'];
    
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
    
$sql2="SELECT * FROM users where user='$seg' " ;
$q2=mysql_query($sql2) ;
    
    while($row1=mysql_fetch_array($q2)){
         $companylist1 = $row1['companylist1'];
         $Phone01 = $row1['Phone01']; 
         $Phone02 = $row1['Phone02']; 
          $Name1 = $row1['Name'];
         $Mobile01 = $row1['Mobile01'];
         $Mobile02 = $row1['Mobile02'];
         $Email_01 = $row1['Email_01']; 
         $Email_02 = $row1['Email_02'];
         $Email_03 = $row1['Email_03'];
         $Postion = $row1['Postion'];
        
        
        
    }
    
$sql="SELECT * FROM list where id='$id' " ;
$q=mysql_query($sql) ;
    
    while($row=mysql_fetch_array($q)){
    $Phone1 = $row['Phone1'];
        $Phone2 = $row['Phone2'];
         $Name = $row['Name'];
        $Mobile1 = $row['Mobile1'];
        $Mobile2 = $row['Mobile2'];
        $Email1 = $row['Email1'];
        $Email2 = $row['Email2'];
        $Email3 = $row['Email3'];
        
    
    
   
   
   
    
}
    
      
    

    
    
    
    
    
  ?>
  <?php
mysql_connect("localhost", "root","4562008") or die(mysql_error());
mysql_select_db("estasm5_mapcompany")  or die(mysql_error());

$query = "SELECT * FROM list ";
$result = mysql_query($query) or die(mysql_error()."[".$query."]");
?>
   
<div class='well'>
<div class='form-group'>
    <label class='col-xs-5 control-label'><strong>2.</strong>&nbsp;Contact list</label>
    <div class='col-xs-2'>
      <?php
    echo"<select id='CompanyName'  required class='form-control selectpicker' name='CompanyName' $companylist1 >"; ?>
<?php 
while ($row = mysql_fetch_array($result))
{
 
    echo "<option   value='".$row['companylist1']."'>'".$row['companylist1']."'</option>";

     
   
}
   
        
   
?> 

 
</select>
          </div>
</div>
</div>
    <?php
   
    
       echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>7.</strong>&nbsp;Phone01</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='Phone01' type='text' value='$Phone1' class='form-control' $Phone01 >"; 
    
echo"</div>";
echo"</div>";
echo"</div>";
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>7.</strong>&nbsp;Phone02</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='Phone02' type='text' value='$Phone2' class='form-control' $Phone02 >"; 
    
echo"</div>";
echo"</div>";
echo"</div>";
    
    
    
    
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>7.</strong>&nbsp;Name</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='Name' type='text' value='$Name' class='form-control' $Name1 >"; 
    
echo"</div>";
echo"</div>";
echo"</div>";
    
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>7.</strong>&nbsp;Mobile01</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='Mobile01' type='text' value='$Mobile1' class='form-control' $Mobile01 >"; 
    
echo"</div>";
echo"</div>";
echo"</div>";
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>7.</strong>&nbsp;Mobile02</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='Mobile02' type='text' value='$Mobile2' class='form-control' $Mobile02 >"; 
    
echo"</div>";
echo"</div>";
echo"</div>";
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>7.</strong>&nbsp;Email_01</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='Email1' type='text' value='$Email1' class='form-control' $Email_01 >"; 
    
echo"</div>";
echo"</div>";
echo"</div>";
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>7.</strong>&nbsp;Email_02</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='Email2' type='text' value='$Email2' class='form-control' $Email_02 >"; 
    
echo"</div>";
echo"</div>";
echo"</div>";
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>7.</strong>&nbsp;Email_03</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='Email3' type='text' value='$Email3' class='form-control' $Email_03 >"; 
    
echo"</div>";
echo"</div>";
echo"</div>";
    
    
    
    
    
    
    
    
    
    
    
    
       

    
    
echo"<input type='text' hidden='hidden' id='pass' placeholder='pass' value='$id'  >";
 
    ?>
    
    


    <center>

<input onclick="send()" type="button" name="send" value=" Update" class='btn btn-success'  >
<br>
<br>
    </center>
    
    </body>
</html>