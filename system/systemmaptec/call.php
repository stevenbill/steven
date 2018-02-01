<?php
session_start();
$seg=$_SESSION['logindata'];
if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }



if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}
	
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
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
   
</head>
<body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        
  

    
        $(function () {
            $("#ddlPassport").change(function () {
                if ($(this).val() == "Change Field Work") {
              $("#dvPassport").slideDown(500);
                  $("#newfield").attr('disabled', false);
                   
                
                     
                } else {
                    $("#dvPassport").slideUp(1000);
                $("#newfield").attr('disabled', true);
                }
            });
        });
    </script>




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

  
</head>

<body>
  <div class="container">

    <form class="well form-horizontal" action="call.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Calls and orders</legend>
    
    <?php
    echo "welcom ***" .$seg."***";
    ?>

<!-- Text input-->

    <?php
   
    
    
    /*
    
    mysql_connect("localhost","root","4562008");
mysql_select_db("estasm5_mapcompany");

//query
$sql=mysql_query("SELECT * FROM `company`");
if(mysql_num_rows($sql)){
$select= '<select name="select">';
while($rs=mysql_fetch_array($sql)){
      $ahmed.='<option value="'.$rs['CompanyName'].'">'.$rs['CompanyName'].'</option>';
  }
}
$select.='</select>';
echo $select;
    */
    
    
    
    
    
    
    
    ?>
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
  <label class="col-md-4 control-label">Phone Number </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select class="form-control selectpicker" name="state" id="state" class="dropdown" required>
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
    url: "statecall.php",
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


    
<!--
         <div class="form-group">
  <label class="col-md-4 control-label">  Phone Number</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="PhoneNumber"  class="form-control" type="number"  pattern="[012] [010] [011] [0-9]{10}" >
    </div>
  </div>
</div> -->
    

    
<!--
<div class="form-group"> 
  <label class="col-md-4 control-label">Company Name</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   class="form-control selectpicker" name="CompanyName"  >
              <option> </option>
 
      <option value="office">office</option>
      <option value="field">field</option>
     
    </select>
  </div>
</div>
</div>

<!-- Text input-->
 

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

<!-- Text input-->
     
<div class="form-group"> 
  <label class="col-md-4 control-label">Brand</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   name="Brand" class="form-control selectpicker" required>
      <option> </option>
      <option value="Estasmer">Estasmer</option>
      <option value="Maptec">Maptec</option>
        
     
     
    </select>
  </div>
</div>
</div>


<div class="form-group"> 
  <label class="col-md-4 control-label">Dep</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   name="Dep" class="form-control selectpicker"required>
      <option> </option>
      <option>Survey</option>
      <option>Gis</option>
        
      <option>constraction</option>
     
    </select>
  </div>
</div>
</div>

    
    

<div class="form-group"> 
  <label class="col-md-4 control-label">State of Call</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   name="StateofCall" class="form-control selectpicker" required>
      <option> </option>
      <option>Valid</option>
      <option>Out of Service</option>
         <option>Un Reached Now</option>
         <option>No Answer</option>
         <option>Line Busy</option>
         <option>Invalid Number</option>
         <option>Wrong Number</option>
         <option>Not Reachable</option>
       
     
    </select>
  </div>
</div>
</div>
    
    
     <div class="form-group"> 
  <label class="col-md-4 control-label">State of Company</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   name="StateofCompany" class="form-control selectpicker"  id="ddlPassport" required>
      <option> </option>
      <option>Open</option>
      <option>Hold Status </option>
        <option>Out of Field</option>
        <option>Change Field Work</option>
        <option>Closed</option>
        <option>Paused</option>
        
        
     
     
    </select>
  </div>
</div>
</div>
    

    
    
      <div id="dvPassport" style="display: none">
   
      
        
        <div class="form-group"> 
  <label class="col-md-4 control-label">New Field Work</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   name="NewFieldWork" class="form-control selectpicker" required  id="newfield">
      <option> </option>
      <option value="Mechanical">Mechanical</option>
      <option value="Electromechanical">Electromechanical</option>
        <option value="Advertising">Advertising</option>
        <option value="Marketing">Marketing</option>
        <option value="Electricity">Electricity</option>
        <option value="Planning">Planning</option>
        <option value="Chemicals">Chemicals</option>
        
        <option value="Consulting">Consulting</option>
        <option value="Supply">Supply</option>
        <option value="Import & Export">Import & Export</option>
        <option value="Security">Security</option>
        <option value="Tourism">Tourism</option>
  <option value="مقولات تكيفيه مركزيه">      مقولات تكيفيه مركزيه </option> 
        <option value="Real Estate">Real Estate</option>
        <option value="Fittings">Fittings</option>
        <option value="Rental">Rental</option>
        
        
        
        
    
     
    </select>
  </div>
</div>
</div>   
    
        
        
        
        
        
        
        
        
        
    </div>  
    
    
    
    
    

<!-- Text input-->
       
<div class="form-group"> 
  <label class="col-md-4 control-label">State of Request</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   name="StateofRequest" class="form-control selectpicker" required>
      <option> </option>
      <option>Accapt</option>
      <option>Refuesd</option>
        <option>Call Later</option>
        <option>Hold Request</option>
        <option>No Data</option>
        
        
        
     
     
    </select>
  </div>
</div>
</div> 

    
    
    
    
    
 
    
    
    
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script>
/*var max_limit1 = 2; // Max Limit
$(document).ready(function (){
    $(".game:input:checkbox").each(function (index){
        this.checked = (".game:input:checkbox" < max_limit);
    }).change(function (){
        if ($(".game:input:checkbox:checked").length > max_limit){
            this.checked = false;
        }
    });
});*/
    
    
    
    var max_limit = 3; // Request_Media   Max Limit
$(document).ready(function (){
    $(".ahmed:input:checkbox").each(function (index){
        this.checked = (".ahmed:input:checkbox" < max_limit);
    }).change(function (){
        if ($(".ahmed:input:checkbox:checked").length > max_limit){
            this.checked = false;
        }
    });
});
    
    
    
    
    
    
    
</script>
    
    
    
    
   <script>  
    
    
      var max = 2; // Request  Max Limit
$(document).ready(function (){
    $(".game:input:checkbox").each(function (index){
        this.checked = (".game:input:checkbox" < max);
    }).change(function (){
        if ($(".game:input:checkbox:checked").length > max){
            this.checked = false;
        }
    });
});
    
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!-- Text input-->
    <div class="form-group"> 
  <label class="col-md-4 control-label"> Request</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="inlineCheckbox1" value="Call" name="Call"> Call
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input  class="game" type="checkbox" id="inlineCheckbox2" value="Negotiation" name="Negotiation"> Negotiation
  </label>
</div>
<div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="inlineCheckbox3" value="Nog" name="Nog" > Visit
  </label>
</div>
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="inlineCheckbox3" value="Promotion" name="Promotion" > Promotion
  </label>
</div>
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="inlineCheckbox3" value="Hold" name="Hold" > Hold
  </label>
</div>
         <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game"  type="checkbox" id="inlineCheckbox3" value="NoData" name="NoData" > NoData
  </label>
</div>
         <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="inlineCheckbox3" value="Profile" name="Profile" > Profile
  </label>
</div>
        
        </div>
        </div>
        </div>
    
    
    <div class="form-group"> 
  <label class="col-md-4 control-label"> Request_Media</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="ahmed" type="checkbox" id="inlineCheckbox1" value="Fax" name="Fax" > Fax
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="inlineCheckbox2" value="Email" name="Email"> Email
  </label>
</div>
<div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="inlineCheckbox3" value="Address" name="Address" > Address
  </label>
</div>
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="inlineCheckbox3" value="Phone" name="Phone" > Phone
  </label>
</div>
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="inlineCheckbox3" value="Visit" name="Visit"> Visit
  </label>
</div>
         <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
   <input  class="ahmed" type="checkbox" id="inlineCheckbox3" value="whats" name="whats"> whats
  </label>
</div>
         <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="inlineCheckbox3" value="Null" name="Null" > Null
  </label>
</div>
        
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="inlineCheckbox3" value="No Data" name="NoData" > No Data
  </label>
</div>
        
        </div>
        </div>
        </div>
    
    
    
    
    <?php
mysql_connect("localhost", "estasm5_yousry","4562008") or die(mysql_error());
mysql_select_db("estasm5_mapcompany")  or die(mysql_error());

$query = "SELECT * FROM users  ";
$result = mysql_query($query) or die(mysql_error()."[".$query."]");
?>
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Caller_Follow</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   class="form-control selectpicker"  name="Caller_Follow"  >
<?php 
while ($row = mysql_fetch_array($result))
{

    echo "<option   value='".$row['user']."'>'".$row['user']."'</option>";
     
}
    
   
?> 

 
</select>
          </div>
</div>
</div>
    
    <!--              waited             
    <div class="form-group"> 
  <label class="col-md-4 control-label">Caller_Follow</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   name="Caller_Follow" class="form-control selectpicker"  >
      <option> </option>
      <option>Survey</option>
      <option>Gis</option>
        
      <option>constraction</option>
     
    </select>
  </div>
</div>
</div> -->
    

    
    
    
    <div class="form-group">
  <label class="col-md-4 control-label"> Notes</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="Notes"  class="form-control" type="text" >
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Call Rank  </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select   name="CallRank" class="form-control selectpicker" required>
      <option> </option>
      <option value="1">1</option>
      <option value="2">2</option>
        
      <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
   
     
    </select>
  </div>
</div>
</div> 
    
    
<!-- Text input-->
 
<!--<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>-->
    
   
    
    
       
    
    
       <div class="form-group"> 
  <label class="col-md-4 control-label">Follow After  </label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <input type="datetime-local"   name="FollowAfter" class="form-control selectpicker"  >
        
    
  </div>
</div>
</div> 
    
    



    
    
       
         
           
    


 
    
    
  
    

    


    
    
   <!--     
<div class="form-group">
  <label class="col-md-4 control-label">Time</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name=" " placeholder="Time" class="form-control" type="text">
    </div>
  </div>
</div>
<!-- Select Basic -->
    
    
    
    
 
    
    
    
    

    <!--
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
     <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <!--<select name="City" class="form-control selectpicker" >
      <option value=" " ></option>
      <option value="alex">alex</option>
      <option value="cairo">cairo </option>

    </select>
        <select name="state" id="state"  class="form-control selectpicker"></select>
  </div>
</div>
</div>
    
    
    
    
<div class="form-group">
  <label class="col-md-4 control-label">Country</label>  
     <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
 <!-- <select name=" " class="form-control selectpicker" >
      <option value=" " >Please select your Branchs</option>
      <option>مصر</option>
      <option>السعوديه </option>

    </select>-
         <select id="country" name="country"class="form-control selectpicker"></select>

   
  </div>
</div>
</div>-->
       
     
    
    
    
    

    

    
     

    
    
    
    
    
       <div align="center">


        
    
    
    
    
    
    
    
   

    
    
   <!--
<div class="form-group"> 
  <label class="col-md-4 control-label">Refrence</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="Refrence" class="form-control selectpicker" >
      <option value=" " ></option>
      <option value="Alabama">Alabama</option>
      <option value="Alaska">Alaska</option>
      <option value="Arizona" >Arizona</option>
      <option value="Arkansas" >Arkansas</option>
   
    </select>
  </div>
</div>
</div>

<!-- Text input

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>

<!-- Text input-->


<!-- radio checks
 <div class="form-group">
                        <label class="col-md-4 control-label">Do you have hosting?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="yes" /> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> No
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text area -->
  


<!-- Success message -->


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input type="submit" class="btn btn-warning"  value="send" name="send" >
  </div>
    <br>
    
  

    


</div>
  
           

</fieldset>
       
</form>
      
    <?php
        
        if($_POST['show']){
            
            
           header('location: show.php'); 
            
        }
        
        
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_mapcompany";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    
$seg= $_SESSION['logindata'];

   







}else{
	
	mysql_error();
}
        
   


$CompanyName =$_POST['counntry'];

 $Brand=$_POST['Brand'];
        $Dep=$_POST['Dep'];
        $StateofCall=$_POST['StateofCall'];
        $StateofCompany=$_POST['StateofCompany'];
        $StateofRequest =$_POST['StateofRequest'];
        $Call =$_POST['Call'];
        $Negotiation =$_POST['Negotiation'];
        $Nog =$_POST['Nog'];
        $Promotion =$_POST['Promotion'];
        $Hold=$_POST['Hold']; 
        $NoData =$_POST['NoData']; 
        $Profile =$_POST['Profile']; 
        $NewFieldWork=$_POST['NewFieldWork'];
        $Fax =$_POST['Fax']; 
        $Email =$_POST['Email']; 
        $Address =$_POST['Address']; 
        $Phone =$_POST['Phone']; 
        $Visit =$_POST['Visit'];
        $Null =$_POST['Null'];
        $NoData =$_POST['NoData'];
        $whats =$_POST['whats'];
        $Notes =$_POST['Notes'];
        $Caller_Follow =$_POST['Caller_Follow'];
     
        $PhoneNumber=$_POST['state']; 
        $CallRank=$_POST['CallRank']; 

      $date=@date("Y/m/d h:i:sa") ;
        $FollowAfter=$_POST['FollowAfter']; 

$sql="insert into  calls (Brand,Dep,StateofCall,StateofCompany,StateofRequest,Call1,Negotiation,Nog,Promotion,Hold,NoData,Profile,NewFieldWork,Fax,Email,Address,Phone,Visit,Null1,NoData1,whats,Notes,CompanyName,Caller_Follow,date,FollowAfter,PhoneNumber,CallRank,Caller) values('$Brand','$Dep','$StateofCall','$StateofCompany','$StateofRequest','$Call','$Negotiation','$Nog','$Promotion','$Hold','$NoData','$Profile','$NewFieldWork','$Fax','$Email','$Address','$Phone','$Visit','$Null','$NoData','$whats','$Notes','$CompanyName','$Caller_Follow','$date','$FollowAfter','$PhoneNumber','$CallRank','$seg')";
        
       


if (@ $_POST['send']) {


  mysql_query($sql); 
    echo "<script> alert('Thank you for your insert ?  ') </script>";
echo $del;
echo"<div class='alert alert-success' role='alert' id='success_message'>Success <i class='glyphicon glyphicon-thumbs-up'></i> Thanks for send data.</div>";

/*
 $sql2="SELECT  `sendemail` FROM `users` WHERE user='ahmed'";
         while($row=mysql_fetch_array($sql2)){
        /*echo $row['sendemail'];*/
    $sql2="SELECT  `sendemail` FROM `users` WHERE user='ahmed'  " ;
$q2=mysql_query($sql2) ;
  while($row2=mysql_fetch_array($q2)){
   $mai= $row2['Email'];
    
      
  }

   echo $mai; 
    
    $to = $mai;
$subject = "Syestem order";
$txt = "please check"."  "."this company"."  ".$CompanyName."  "."And phone number is ".$PhoneNumber;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
      
  }































      ?>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js'></script>

    <script src="js1/index.js"></script>


    <script src="js/index.js"></script>
    

</body>
</html>
