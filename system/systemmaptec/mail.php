<?php

session_start();
    
$seg=$_SESSION['logindata'];
date_default_timezone_set("Africa/Cairo");
echo"<style>";

echo".no-js #loader { display: none;  }";
echo".js #loader { display: block; position: absolute; left: 100px; top: 0; }";
echo".se-pre-con {";
	echo"position: fixed;";
	echo"left: 0px;";
	echo"top: 0px;";
	echo "width: 100%;";
	echo"height: 100%;";
echo"	z-index: 9999;";
	echo"background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;";
echo"}";
echo"</style>";

echo"<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>";
echo"<script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js'></script>";
echo"<script>";
	
echo"	$(window).load(function() {";
		
		echo"$('.se-pre-con').fadeOut('slow');;";
	echo"});";
echo"</script>";

echo"</head>";

echo"<body>";

	echo"<div class='se-pre-con'></div>";

	
	echo"<div class='content'>";
	echo"<div class='back-to-article'></div>";

	echo"</div>";
        
   
        
        
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_mapcompany";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    
session_start();
$seg= $_SESSION['logindata'];


       echo  "******".$seg."*****";

$sql3="SELECT * FROM  users where user='$seg' " ;
$q3=mysql_query($sql3) ;
  while($row=mysql_fetch_array($q3)){
     $session=$row['Email'];

      
  }

echo $session;




}else{
	
	mysql_error();
}
  ?>  
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    
    
    
    
    
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
      <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css'>


     

  

    
    
    
    
    
    
    
    
    
    
    
    
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22897853-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<style type="text/css">
<!--
body,td,th {font-family: Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 12px; 	color: #333;}
body {margin-left:0px;}
.maindiv{ width:690px; margin:0 auto;}
.textbox{ padding:2px 4px; width:200px;}
.submit{ border:solid 1px #008000; background:#008000; color:#FFF; font-weight:bold;}
-->
</style>
</head>
<body>

<div style="text-align:center;">
 </div>
  
<div class="maindiv">
<div><?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

   // Set the "To" email address
 

	//Subject of the mail
   $subject="Welcom to maptech company";

   // Get the sender's name and email address plug them a variable to be used later
   $from = stripslashes($_POST['to'])."<".stripslashes($_POST['to']).">";
	
	// Check for empty fields
   if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['message']))
	{
		$errors .= "\n Error: all fields are required";
	}
	
	// Get all the values from input
	  $to= $_POST['email'];
	$name = $_POST['name'];
	$email_address = $_POST['to'];
	$message = $_POST['message'];

	// Check the email address
	if (!eregi(	"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_address))
	{
		$errors .= "\n Error: Invalid email address";
	}

   // Now Generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // Now Store the file information to a variables for easier access
   $tmp_name = $_FILES['filename']['tmp_name'];
   $type = $_FILES['filename']['type'];
   $file_name = $_FILES['filename']['name'];
   $size = $_FILES['filename']['size'];

   // Now here we setting up the message of the mail
   $message = "\n\n Name: $name \n\n Email: $email_address \n\nMessage: \n\n $message \n\nHere is your file: $file_name";

   // Check if the upload succeded, the file will exist
   if (file_exists($tmp_name)){

      // Check to make sure that it is an uploaded file and not a system file
      if(is_uploaded_file($tmp_name)){

         // Now Open the file for a binary read
         $file = fopen($tmp_name,'rb');

         // Now read the file content into a variable
         $data = fread($file,filesize($tmp_name));

         // close the file
         fclose($file);

         // Now we need to encode it and split it into acceptable length lines
         $data = chunk_split(base64_encode($data));
     }

      // Now we'll build the message headers
      $headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
         "Content-Type: multipart/mixed;\r\n" .
         " boundary=\"{$mime_boundary}\"";

      // Next, we'll build the message body note that we insert two dashes in front of the  MIME boundary when we use it
      $message = "This is a multi-part message in MIME format.\n\n" .
         "--{$mime_boundary}\n" .
         "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
         "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";

      // Now we'll insert a boundary to indicate we're starting the attachment we have to specify the content type, file name, and disposition as an attachment, then add the file content and set another boundary to indicate that the end of the file has been reached
      $message .= "--{$mime_boundary}\n" .
         "Content-Type: {$type};\n" .
         " name=\"{$file_name}\"\n" .
         //"Content-Disposition: attachment;\n" .
         //" filename=\"{$fileatt_name}\"\n" .
         "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n" .
         "--{$mime_boundary}--\n";

      // Thats all.. Now we need to send this mail... :)
      if (@mail($to, $subject, $message, $headers))
	  {
         ?>
         <div><center><h1>Mail Sent successfully !!</h1></center></div>
         <?php
	  }else
	  {
         ?>
         <div><center>
           <h1>Error !! Unable to send Mail..</h1></center></div>
         <?php
	  }
   }
}
?></div>
<div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    
        
        
        
        
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
  <p><label for="email">Email1:</label><br>
<?php echo"<input id='email' name='to' type='text'  readonly value='$session' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$'/>"; ?>
  </p>
  
  <p><label for="email">Email:</label><br>
<!--<input id="email" name="email" type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />-->
  </p>
  
        
        
           
   
        
        
        
   <?php
include('db_config.php');
$sql= "SELECT * FROM `company`";
$query = $db->query($sql);
$data = $query->fetch_assoc();

?>
<div class="form-group"> 
  <label class="col-md-4 control-label">Company name</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>

<select class="form-control selectpicker"  name="counntry" id="country" class="dropdown" onchange="change_country();" required>
<option value="">Select Company</option>
<?php while($row = $query->fetch_assoc()) { ?>
  <option  value="<?php echo $row['CompanyName']; ?>"><?php echo $row['CompanyName']; ?> </option>
<?php } ?>
</select>
 </div>
</div>
</div>
    




<div class="form-group"> 
  <label class="col-md-4 control-label">Email  </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select class="form-control selectpicker" name="email" id="state" class="dropdown" required>
<option value="">Select State</option>

</select>
 </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
function change_country()
{
  var country = $("#country").val();
  
     $.ajax({
    type: "POST",
    url: "statemail.php",
    data: "country="+country,
    cache: false,
    success: function(response)
      {
          //alert(response);return false;
        $("#state").html(response);
      }
      });
  
}
</script>      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
  
  

  
  
  
  <p>
    <label for="tele">Upload Your Resume:</label><br>
    <input id="tele" name="filename" type="file" name="fax" />
  </p>
  <p>
    <label for="message">Message:<br></label>
    <textarea cols="71" rows="5" name="message"></textarea>
  </p>
</div>
<input class="formbtn" type="submit" name="send" value="Send Message" />
</form>
</div>
</div>

</body>
</html>
     
    <?php
   

$CompanyName=$_POST['CompanyName'];
     $date=@date("Y/m/d h:i:sa") ;

$message606=$_POST['message'];



                
        
        
    

$sql="insert into  email (CompanyName,fax,Message,seg,email,Date) values('$CompanyName','$file_name','$message606','$seg','$email_address','$date')";

if (@ $_POST['send']) {


  mysql_query($sql); 

    
    echo "<script> alert('Thank you for your insert ?  ') </script>";

    echo $file_name;
    /*

echo"<div class='alert alert-success' role='alert' id='success_message'>Success <i class='glyphicon glyphicon-thumbs-up'></i> Thanks for send data.</div>";*/




}










?>
