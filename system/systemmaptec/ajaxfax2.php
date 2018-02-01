<?php
session_start();
date_default_timezone_set("Africa/Cairo");
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
               
                  var pass=document.getElementById('pass').value;
                    var country=document.getElementById('country').value;
                var state=document.getElementById('state').value; 
                var FaxDep1=document.getElementById('FaxDep1').value;
                 var FaxBrand1=document.getElementById('FaxBrand1').value;
                var Faxroot=document.getElementById('Faxroot').value;
                 var FaxResult=document.getElementById('FaxResult').value;
                
               
                
$("#test").load("ajaxfax1.php",{pass:pass,country:country,state:state,FaxDep1:FaxDep1,FaxBrand1:FaxBrand1,Faxroot:Faxroot,FaxResult:FaxResult});
               
                
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
	                         <h1><a href="add.php">Edit Fax  </a></h1>
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
         $CompanyNamefax = $row1['CompanyNamefax'];
         $FaxResult = $row1['FaxResult']; 
          $FaxDep = $row1['FaxDep'];
         $FaxBrand = $row1['FaxBrand'];
         $Faxlist = $row1['Faxlist'];
      
    
    }
    
$sql="SELECT * FROM fax where id='$id' " ;
$q=mysql_query($sql) ;
    
    while($row=mysql_fetch_array($q)){
    $FaxResult1 = $row['FaxResult'];
         $FaxDep1 = $row['FaxDep'];
        $FaxBrand1 = $row['FaxBrand'];
         $Faxroot = $row['Faxroot'];
        
      
      
        /*$mobile1= $row['mobile1'];
       */
       
       
    
    
    
   
   
   
    
}
    
      
    


    
    
    
  ?>
   <?php
include('db_config.php');
$sql= "SELECT * FROM `company`";
$query = $db->query($sql);
$data = $query->fetch_assoc();

?>
<div class='well'>
<div class="form-group"> 
  <label class='col-xs-5 control-label'><strong>1.</strong>&nbsp;company name</label>
   <div class='col-xs-2'>
    
         

<select class="form-control selectpicker"  name="counntry" id="country" class="dropdown" onchange="change_country();" <?php echo  $CompanyNamefax ;?> required>

       <option   value=""> Select Company</option>  
<?php while($row = $query->fetch_assoc()) { ?>



  <option  value="<?php echo $row['CompanyName']; ?>"><?php echo  $row['CompanyName']; ?>   </option>
<?php } ?>
</select>
 </div>
</div>
</div>
    

    
       



<div class='well'>
<div class="form-group"> 
  <label class='col-xs-5 control-label'><strong>1.</strong>&nbsp;Phone Number</label> 
   <div class='col-xs-2'>
    
<select class="form-control selectpicker" name="PhoneNumber" id="state" class="dropdown" required<?php echo  $PhoneNumberfax ;?> >
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
<?php
    
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;Fax Result
</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required  name='Dep' id='FaxResult' class='form-control' $FaxResult  >";
       echo"<option value='$FaxResult1'>$FaxResult1</option>"; 
    
        
      echo"<option value='Send
'>Send</option>";
        echo"<option value='No Answer'>No Answer</option>";
        echo"<option value='Reject'>Reject
</option>";

 echo"<option value='Out of services'>Out of services</option>";
          echo"<option value='Wrong number'>Wrong number</option>";
           echo"<option value='Request'>Request</option>";
            echo"<option value='No Fax Number'>No Fax Number</option>";

     
    echo"</select>";
    echo"</div>";
echo"</div>";
echo"</div>";

     
    /******************************************************************/

     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;Fax Dep</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required  name='Dep' id='FaxDep1' class='form-control' $FaxDep  >";
       echo"<option value='$FaxDep1'>$FaxDep1</option>"; 
   echo" <option>GiS</option>";
      echo"<option>Survey</option>";
      
         echo"<option>constraction</option>";
       
     
     
    echo"</select>";
    echo"</div>";
echo"</div>";
echo"</div>";
    


    
    
    
    
?>
    

    
<div class='well'>
<div class="form-group"> 
  <label class='col-xs-5 control-label'><strong>1.</strong>&nbsp;Fax Brand</label>
   <div class='col-xs-2'>
    <select  id="FaxBrand1"  name="NewFieldWork" class="form-control selectpicker"  <?php echo  $FaxBrand ;?> >
    <?php echo"<option value='$FaxBrand1'>$FaxBrand1</option>";  ?>
      <option value="Maptec">Maptec</option>
      <option value="Estasmer">Estasmer</option>
     
        
        
        
        
    
     
    </select>
  </div>
</div>
</div> 
    
    
    
            <?php
mysql_connect("localhost", "estasm5_yousry","4562008") or die(mysql_error());
mysql_select_db("estasm5_mapcompany")  or die(mysql_error());

$query = "SELECT * FROM faxroot ";
$result = mysql_query($query) or die(mysql_error()."[".$query."]");
?>
   
    
<div class='well'>
<div class="form-group"> 
  <label class='col-xs-5 control-label'><strong>1.</strong>&nbsp;Fax list</label> 
   <div class='col-xs-2'>

    <select id="Faxroot" required class="form-control selectpicker" name="Faxroot"<?php echo  $Faxlist ;?> >
       
<?php 
         echo "<option   value='$Faxroot'>$Faxroot </option>";
while ($row = mysql_fetch_array($result))
{
 
    echo "<option   value='".$row['fax']."'>'".$row['fax']."'</option>";

     
   
}
   
        
   
?> 
    
        <?php
    
    
    /**********************************************************************************************************************/
    
    /************************************************************************************************/
   
   echo" <br> <br> <br> <br> <br>";
    
    
echo"<input type='text' hidden='hidden' id='pass' placeholder='pass' value='$id'  >";
 
    ?>
    
    
    <center>

    

<input onclick="send()" type="button" name="send" value=" Update" class='btn btn-success'  >
<br>
<br>
    </center>
    
    </body>
</html>