<?php
ob_start();
session_start();
$seg=$_SESSION['logindata'];
date_default_timezone_set("Africa/Cairo");

        
  if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }



if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }



if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}

        
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

   







}else{
	
	mysql_error();
}
        
   




$CompanyName =$_POST['CompanyName'];
 $PhoneNumber=$_POST['PhoneNumber'];
  $FaxResult= $_POST['FaxResult'];
 $FaxDep= $_POST['FaxDep'];
   
      $FaxBrand= $_POST['FaxBrand'];
      $Notes = $_POST['Notes'];
      $Faxroot = $_POST['Faxroot'];
    
      $date=@date("Y/m/d h:i:sa") ;
       $EMail= $_POST['EMail'];
$NewFaxNumber = $_POST['NewFaxNumber'];
$newfax = $_POST['newfax']; 
        

                
        
        
    

$sql="insert into  fax (CompanyName,PhoneNumber,FaxResult,FaxDep,FaxBrand,Notes,date,Faxroot,seg,EMail,NewFaxNumber,newfax) values('$CompanyName','$PhoneNumber','$FaxResult','$FaxDep','$FaxBrand','$Notes','$date','$Faxroot','$seg','$EMail','$NewFaxNumber','$newfax')";

if (@ $_POST['send']) {


  mysql_query($sql); 

    
    echo "<script> alert('Thank you for your insert ?  ') </script>";
/*
echo"<div class='alert alert-success' role='alert' id='success_message'>Success <i class='glyphicon glyphicon-thumbs-up'></i> Thanks for send data.</div>";*/




}






























ob_end_flush();
?>



<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
   

       



    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../dist/bootstrap-session-timeout.js"></script>

    <script>
    $.sessionTimeout({
        keepAliveUrl: 'keep-alive.html',
        logoutUrl: 'login.php',
        redirUrl: 'destroy.php',
        warnAfter: 70000,
        redirAfter: 90000,
        countdownBar: true
    });
    </script>
</body>

</html>








<!DOCTYPE html>
<html >
<head>
  <style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
    
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        
  

    
       
      
        
        
        
        
        
      $(function () {
            $("#ddlPassport2").change(function () {
                if ($(this).val() == "Wrong number") {
              $("#dvPassport2").slideDown(500);
                  $("#newfield2").attr('disabled', false);
                   
                
                     
                } else {
                    $("#dvPassport2").slideUp(1000);
                $("#newfield2").attr('disabled', true);
                }
                
                
                
                
               
                
               
                 if ($(this).val() == "Request") {
              $("#dvPassport3").slideDown(500);
                    
                          
                      
                 
                   
                
                     
                }else {
                    $("#dvPassport3").slideUp(1000);
               $("#dvPassport1").slideUp(1000);
                $("#newfield1").attr('disabled', true);
                    
                     $("#dvPassport").slideUp(1000);
                $("#newfield").attr('disabled', true);
              
                    
                }
                
                
                
                
                
            });
        });
          
        
        
        
        
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </script> 
    
    
    
    
    
    
    
    

</head>

<body>
	<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
	
	<div class="content">
	<div class="back-to-article"></div>

	</div>   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <style>
    .btn-bs-file{
    position:relative;
}
.btn-bs-file input[type="file"]{
    position: absolute;
    top: -9999999;
    filter: alpha(opacity=0);
    opacity: 0;
    width:0;
    height:0;
    outline: none;
    cursor: inherit;
}
    
    
    </style>
  <meta charset="UTF-8">
  <title>Maptec syestem </title>
    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    
     
    
 
    
    
    
   


  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
      <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
    
    
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
   
    
    
    

    
 


<br>
<br>
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  <div class="container">

    <form class="well form-horizontal" action="fax.php" method="post"  id="contact_form">
    

 
  


<body>
    

<!-- Form Name -->
<legend>Company Fax</legend>
    
    <?php
    echo "welcom ***" .$seg."***";
    ?>

<!-- Text input-->

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

<select class="form-control selectpicker"  name="CompanyName" id="country"  class="dropdown" onchange="change_country();" required>
<option value="">Select Company</option> 
<?php while($row = $query->fetch_assoc()) { ?>
  <option  value="<?php echo $row['CompanyName']; ?>"><?php echo $row['CompanyName']; ?> </option>
<?php } ?>
</select>
 </div>
</div>
</div>
    
    
    



<div class="form-group"> 
  <label class="col-md-4 control-label">Phone Number </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select class="form-control selectpicker" name="PhoneNumber" id="state" class="dropdown" required>
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
    url: "state.php",
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
    
 
<!-- Text input-->


      
    
    
    
    

 
        <div class="form-group"> 
  <label class="col-md-4 control-label">Fax Result</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="FaxResult" id="ddlPassport2" class="form-control selectpicker" required>
      <option></option>
      <option value="Sent">Sent</option>
      <option value="No Answer">No Answer</option>
        <option value="Reject">Reject</option>
         <option value="Out of services">Out of services</option>
          <option value="Wrong number">Wrong number</option>
           <option value="Request">Request</option>
            <option value="No Fax Number">No Fax Number</option>

    </select>
  </div>
</div>
</div>
    
    
   <div id="dvPassport3" style="display: none">
    
     <div class="form-group"> 
  <label class="col-md-4 control-label">Request type:</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="Requesttype" id="ddlPassport"   class="form-control selectpicker" >
      <option></option>
      <option value="Whats App">Whats App</option>
      <option value="Email">Email</option>
        

    </select>
  </div>
</div>
</div>
         </div>
    
      <div id="dvPassport" style="display: none">
<div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="EMail" id="newfield" id="ddlPassport1"   placeholder="E-Mail Address" class="form-control"  type="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
    </div>
  </div>
</div>
          </div> 
    
    
    
        <div id="dvPassport1" style="display: none">
       <div class="form-group"> 
  <label class="col-md-4 control-label">whats Number   </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <input type="number" id="newfield1"   name="NewFaxNumber" class="form-control selectpicker"  >
        
    
  </div>
</div>
</div> 
 </div>   
    
    
   <div id="dvPassport2" style="display: none">
       <div class="form-group"> 
  <label class="col-md-4 control-label">new fax   </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
          <input type="text" id="newfield2"   name="newfax" class="form-control selectpicker" pattern="\d*" maxlength="10" minlength="7"  >
        
    
  </div>
</div>
</div> 
</div>
    
    
    
    
    
    
    
    
    
      <div class="form-group"> 
  <label class="col-md-4 control-label">Fax Dep</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="FaxDep"  class="form-control selectpicker" required>
      <option></option>
      <option value="GIS">GIS</option>
      <option value="Survey">Survey</option>
        <option value="Construction">Construction</option>

    </select>
  </div>
</div>
</div>
    
    
    
    
     <div class="form-group"> 
  <label class="col-md-4 control-label">Fax Brand</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="FaxBrand"  class="form-control selectpicker" required>
      <option ></option>
      <option value="Maptec">Maptec</option>
      <option value="Estasmer">Estasmer</option>
 

    </select>
  </div>
</div>
</div>

    
    
       <div align="center">


        <hr/>

    
    
    
           
           
           



           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
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
    <select  required class="form-control selectpicker" name="Faxroot" id="user" >
<?php 
while ($row = mysql_fetch_array($result))
{
 
    echo "<option   value='".$row['fax']."'>'".$row['fax']."'</option>";

     
   
}
   
    
   
?> 

 
</select>
          </div>
</div>
</div>
       
           
         
           
           
           
           
           
           
         
       <a onclick="send()"> See Fax</a>
           


    

           
           
           
           
           
           
           
           
           
           
           
           
           
    
    

    <?php  echo $root."  ".$ahmedfax;    ?>
    
    
         

<div class="form-group">
  <label class="col-md-4 control-label">Notes</label>
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="Notes" placeholder="Project Description" ></textarea>
  </div>
  </div>
</div>
           
           
           
           
     
           
           
        
          

    

<!-- Success message -->
<br> <br> 

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input type="submit" class="btn btn-warning"  value="save" name="send" >

       

  </div>
    <br>
       
    
  <br> <br>
           


    


</div>
          



    </div>
        </body>
     
      </form>
    
       
       

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js'></script>

    <script src="js1/index.js"></script>


    <script src="js/index.js"></script>
               
     

