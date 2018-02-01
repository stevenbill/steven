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
    
    
    /*
    
    
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
    /*
    
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
    
    
    
    

    
          <script>
              
              $(document).ready(function(){
    
       /*$("button").click(function(){
           
           $(".msg").load("AJAX1.php h1")
           
       });*/
                  
$("form").submit(function(){
   /* var user = $("#user").val();*/
    $.ajax({
        url:"ajaxcall1.php",
        type:"POST",
        data:$("form").serialize(),
        success:function(r){
            $(".msg").html(r);
            
            
        }
        
    });
    
    return false;
    
});
   
       
 
});
              
              
              /*
            function send(){
                
                 var pass=document.getElementById('pass').value;
                var country=document.getElementById('country').value;
                var state=document.getElementById('state').value;
                 var Brand=document.getElementById('Brand').value; 
                var Dep=document.getElementById('Dep').value; 
                var StateofCall=document.getElementById('StateofCall').value;
                 var StateofCompany=document.getElementById('StateofCompany').value; 
                   var StateofRequest=document.getElementById('StateofRequest').value; 
                var Caller_Follow=document.getElementById('Caller_Follow').value; 
                  var NewFieldWork=document.getElementById('NewFieldWork').value; 
                var CallRank=document.getElementById('CallRank').value; 
                 var FollowAfter=document.getElementById('FollowAfter').value; 
                var Call=document.getElementById('Call').value;
                var Negotiation=document.getElementById('Negotiation').value; 
                var Visit=document.getElementById('Visit').value;
                var Promotion=document.getElementById('Promotion').value; 
                var Hold=document.getElementById('Hold').value; 
                var NoData=document.getElementById('NoData').value; 
                 var Profile=document.getElementById('Profile').value; 
                  var Fax=document.getElementById('Fax').value; 
                 var Email=document.getElementById('Email').value; 
                var Phone=document.getElementById('Phone').value; 
                var Visit=document.getElementById('Visit').value; 
                var NoData=document.getElementById('NoData').value; 
            
                  
           
                
$("#test").load("ajaxcall1.php",{pass:pass,country:country,state:state,Brand:Brand,Dep:Dep,StateofCall:StateofCall,StateofCompany:StateofCompany,StateofRequest:StateofRequest,Caller_Follow:Caller_Follow,NewFieldWork:NewFieldWork,CallRank:CallRank,FollowAfter:FollowAfter,Call:Call,Negotiation:Negotiation,Visit:Visit,Promotion:Promotion,Hold:Hold,NoData:NoData,Profile:Profile,Fax:Fax,Email:Email,Phone:Phone,Visit:Visit,NoData:NoData});
               
                
            }*/
        </script>
  

</head>
<body>
    <form> 
          <div id="test" class="msg">

    
        </div>
   
    
     	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                         <h1><a href="add.php">Edit call and order  </a></h1>
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
         $Type1 = $row1['Type'];
         $Brand1 = $row1['Brand']; 
          $Dep1 = $row1['Dep'];
         $Ar_Name1 = $row1['Ar_Name'];
         $En_Name1 = $row1['En_Name'];
         $Field_of_Work1 = $row1['Field_of_Work']; 
         $fax11 = $row1['fax1'];
         $fax12 = $row1['fax2'];
         $fax13 = $row1['fax3'];
         $Phone11 = $row1['Phone1'];
         $Phone12 = $row1['Phone2'];
         $Phone13 = $row1['Phone3'];
         $mobile11 = $row1['mobile1'];
         $mobile12 = $row1['mobile2'];
         $mobile13 = $row1['mobile3'];
         $EMail11 = $row1['EMail1'];
         $EMail12 = $row1['EMail2'];
         $EMail13 = $row1['EMail3'];
         $oldURL1 = $row1['oldURL'];
         $Url1 = $row1['Url']; 
         $Address1 = $row1['Address']; 
        
        
    }
    
$sql="SELECT * FROM calls where id='$id' " ;
$q=mysql_query($sql) ;
    
    while($row=mysql_fetch_array($q)){


        $Type = $row['Type'];
        $Brand = $row['Brand'];
        $Dep = $row['Dep'];
      
        $StateofCall = $row['StateofCall'];
        $StateofCompany = $row['StateofCompany'];
        $StateofRequest = $row['StateofRequest']; 
        $NewFieldWork  = $row['NewFieldWork'];
        $CallRank  = $row['CallRank'];
   
    
    
    
   
   
   
    
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
    
         

<select class="form-control selectpicker"  name="country" id="country" class="dropdown" onchange="change_country();" <?php echo  $CompanyNamefax ;?> required>
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<?php
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;Brand</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required  name='Brand' id='Brand' class='form-control' $Brand  >";
       echo"<option value='$Brand'>$Brand</option>"; 
           echo"<option value='Engineer'>Maptec</option>";
      echo"<option value='Estasmer
'>Estasmer
</option>";
        
  

     
    echo"</select>";
    echo"</div>";
echo"</div>";
echo"</div>";
    
     
    /******************************************************************/

     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;Dep</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required  name='Dep' id='Dep' class='form-control' $Dep  >";
       echo"<option value='$Dep'>$Dep</option>"; 
   
      echo"<option> Service</option>";
      
         echo"<option>Gis</option>";
         echo"<option>constraction</option>";
      
     
     
    echo"</select>";
    echo"</div>";
echo"</div>";
echo"</div>";
    
    
    
     echo"<div class='well'>";

echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;State of Call</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required  name='StateofCall' id='StateofCall' class='form-control' $StateofCall1  >";
    
       echo"<option value='$StateofCall'>$StateofCall</option>"; 
       
      echo"<option>Valid</option>";
      echo"<option>Out of Service</option>";
         echo"<option>Un Reached Now</option>";
         echo"<option>No Answer</option>";
         echo"<option>Line Busy</option>";
         echo"<option>Invalid Number</option>";
        echo" <option>Wrong Number</option>";
         echo"<option>Not Reachable</option>";
 
     
     
    echo"</select>";
    echo"</div>";
echo"</div>";
echo"</div>";
    
    
    
    
        echo"<div class='well'>";


echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;State of Company</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required  name='StateofCompany' id='StateofCompany' class='form-control' $StateofCompany  >";
       echo"<option value='$StateofCompany'>$StateofCompany</option>"; 
   echo" <option>Open</option>";
      echo"<option>Hold Status </option>";
      
         echo"<option>Out of Field</option>";
         echo"<option>Change Field Work</option>";
    echo"<option>Closed</option>";
    echo"<option>Paused</option>";
     
     
    echo"</select>";
    echo"</div>";
echo"</div>";
echo"</div>";
    

    
    

    
        echo"<div class='well'>";


echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;State of Request</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required  name='StateofRequest' id='StateofRequest' class='form-control' $StateofRequest  >";
       echo"<option value='$StateofRequest'>$StateofRequest</option>"; 
   echo" <option>Accapt</option>";
      echo"<option>Call Later</option>";
      
         echo"<option>Hold Request</option>";
         echo"<option>No Data</option>";
    
     
    echo"</select>";
    echo"</div>";
echo"</div>";
echo"</div>";
    

    
    
    


    
    
    
    
    

mysql_connect("localhost", "estasm5_yousry","4562008") or die(mysql_error());
mysql_select_db("estasm5_mapcompany")  or die(mysql_error());

$query = "SELECT * FROM users  ";
$result = mysql_query($query) or die(mysql_error()."[".$query."]");
?>
   
<div class='well'>
<div class="form-group"> 
  <label class='col-xs-5 control-label'><strong>1.</strong>&nbsp;Caller_Follow</label>
   <div class='col-xs-2'>
    <select   class="form-control selectpicker"  name="Caller_Follow" id="Caller_Follow" >
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
    
    
    
    
<div class='well'>
<div class="form-group"> 
  <label class='col-xs-5 control-label'><strong>1.</strong>&nbsp;New Field Work</label>
   <div class='col-xs-2'>
    <select   name="NewFieldWork" class="form-control selectpicker" id="NewFieldWork">
     	
       <?php echo "<option value='$NewFieldWork'>$NewFieldWork</option>";?> 
        
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
    
    
    <div class='well'>
<div class="form-group"> 
    
   <div class="form-group"> 
  <label class="col-md-4 control-label"> Request</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        </div>
       </div>
       
        <center> 
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="Call" value="Call" name="Call"> Call
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input  class="game" type="checkbox" id="Negotiation" value="Negotiation" name="Negotiation"> Negotiation
  </label>
</div>
<div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="Visit" value="Nog" name="Nog" > Visit
  </label>
</div>
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="Promotion" value="Promotion" name="Promotion" > Promotion
  </label>
</div>
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="Hold" value="Hold" name="Hold" > Hold
  </label>
</div>
         <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game"  type="checkbox" id="NoData" value="NoData" name="NoData" > NoData
  </label>
</div>
         <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input class="game" type="checkbox" id="Profile" value="Profile" name="Profile" > Profile
  </label>
</div>
        
        </div>
        </div>
        </div>
    </center>
    
        
    <div class='well'>
<div class="form-group"> 
 
    <div class="form-group"> 
  <label class="col-md-4 control-label"> Request_Media</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        </div>
        </div>
    </div>
    
        </div>
           <center> 
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input class="ahmed" type="checkbox" id="Fax" value="Fax" name="Fax" > Fax
  </label>
</div>
<div class="form-check form-check-inline">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="Email" value="Email" name="Email"> Email
  </label>
</div>
<div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="Address" value="Address" name="Address" > Address
  </label>
</div>
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="Phone" value="Phone" name="Phone" > Phone
  </label>
</div>
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="Visit" value="Visit" name="Visit"> Visit
  </label>
</div>
         <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
   <input  class="ahmed" type="checkbox" id="whats" value="whats" name="whats"> whats
  </label>
</div>
         <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="Null" value="Null" name="Null" > Null
  </label>
</div>
        
        <div class="form-check form-check-inline disabled">
  <label class="form-check-label">
    <input  class="ahmed" type="checkbox" id="No Data" value="No Data" name="NoData2" > No Data
  </label>
</div>
        
        </center>


   

 
  
    
    
    
      
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<?php
    
    
    
    
        echo"<div class='well'>";


echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;Call Rank</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required  name='CallRank' id='CallRank' class='form-control' $CallRank  >";
       echo"<option value='$CallRank'>$CallRank</option>"; 
   echo" <option>1</option>";
      echo"<option>2</option>";
      
         echo"<option>3</option>";
         echo"<option>4</option>";
      echo"<option>5</option>";
      echo"<option>6</option>";
      echo"<option>7</option>";
      echo"<option>8</option>";
      echo"<option>9</option>";
      echo"<option>10</option>";
    
    
     
     
    echo"</select>";
    echo"</div>";
echo"</div>";
echo"</div>";
    

    
 
      echo"<div class='well'>";


echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;   Follow After</label>";
    echo"<div class='col-xs-2'>";
    
 
       echo"<input type='datetime-local' id='FollowAfter' name='FollowAfter'>"; 

    echo"</div>";
echo"</div>";
echo"</div>";
    
    
   
    
    
    /**********************************************************************************************************************/
       
    /************************************************************************************************/
 
   
     
    
    
echo"<input type='text' hidden='hidden' id='pass' name='pass' placeholder='pass' value='$id'  >";
 
    ?>
    
    

    

<center>
    

<input onclick="send()" type="submit" name="send" value=" Update" class='btn btn-success'  >
<br>
<br>
    </center>
    </form>
    </body>
</html>