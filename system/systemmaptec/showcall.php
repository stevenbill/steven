<?php
session_start();
date_default_timezone_set("Africa/Cairo");
echo "The time is " . date("h:i:sa");
if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }



if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}
   function database(){
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

   }
database();
    



	$seg= $_SESSION['logindata'];


    
    
   
$sql="SELECT * FROM calls  " ;
$q=mysql_query($sql) ;


$sql3="SELECT * FROM  users where user='$seg' " ;
$q3=mysql_query($sql3) ;
  while($row=mysql_fetch_array($q3)){
     $dele=$row['calldelet'];
       $edit=$row['calledit'];
      
  }

   

   
     echo"<table class='table'>";
   

	
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
	
     
    echo" <td>ID</td>";


      





             echo" <td>Company Name</td>";
        echo"<td>Phone Number</td>";
        echo"<td>Brand</td>";
             echo" <td>Dep</td>";
       echo" <td>State of Call</td>";
        echo"<td>State of Company</td>";
              echo"<td>State of Request</td>";
        echo"<td>Call</td>";
        echo"<td>Negotiation</td>";


        echo"<td>Promotion</td>";
        echo"<td>Hold</td>";




           echo"<td>No Data</td>";
        echo"<td>Profile</td>";

        echo"<td>Fax</td>";
           echo"<td>Phone </td>";
        echo"<td>Null</td>";
        echo"<td>Email</td>";
          
          echo"<td>Visit </td>";
          echo"<td>No Data2</td>";
          echo"<td>Address</td>";
          echo"<td>What's</td>";

         echo" <td>Caller_Follow</td>";
          echo"<td>New Field Work</td>";
          echo"<td>Notes</td>"; 
               echo"<td>Call Rank</td>"; 
               echo"<td>Call Date</td>"; 
echo"<td>Caller</td>";
echo"<td>Follow After </td>";
   echo"<td>lastmod</td>";   	 
      echo"<td>datmod</td>";  

 echo"<td>Delet</td>"; 
echo"<td>Edit</td>"; 
             

      echo "</tr>";
         echo "<tr>";

  while($row=mysql_fetch_array($q)){
   

     
    

          echo "<td>". $row['id']."</td>" ;
      

      
     echo "<td>". $row['CompanyName']."</td>" ;
       echo "<td>". $row['PhoneNumber']."</td>" ;
 echo "<td>". $row['Brand']."</td>" ;
       echo "<td>". $row['Dep']."</td>" ;
     
      echo "<td>". $row['StateofCall']."</td>" ;
       echo "<td>". $row['StateofCompany']."</td>" ;
      
      
      
      
      
      
      
      
       echo "<td>". $row['StateofRequest']."</td>" ;
       echo "<td>". $row['Call1']."</td>" ;
       echo "<td>". $row['Negotiation']."</td>" ;
      
    
       echo "<td>". $row['Promotion']."</td>" ;
       echo "<td>". $row['Hold']."</td>" ;
      
      
      
       echo "<td>". $row['NoData']."</td>" ;
       echo "<td>". $row['Profile']."</td>" ;
       echo "<td>". $row['Fax']."</td>" ; 
       echo "<td>". $row['Phone']."</td>" ;
      echo "<td>". $row['Null1']."</td>" ;
      echo "<td>". $row['Email']."</td>" ;
      echo "<td>". $row['Visit']."</td>" ;
      echo "<td>". $row['NoData1']."</td>" ;
       echo "<td>". $row['Address']."</td>" ;
       echo "<td>". $row['whats']."</td>" ;
        echo "<td>". $row['Caller_Follow']."</td>" ;
        
       echo "<td>". $row['NewFieldWork']."</td>" ;
       
       echo "<td>". $row['Notes']."</td>" ;
      echo "<td>". $row['CallRank']."</td>" ;
      echo "<td>". $row['date']."</td>" ;
    
      
      echo "<td>". $row['Caller']."</td>" ;
      echo "<td>". $row['FollowAfter']."</td>" ;
         echo "<td>". $row['lastmod']."</td>" ;  	 
       echo "<td>". $row['segmod']."</td>" ; 
     
   
                
  
       $id=$row['id'];
                
      
      
         if(!$dele=='yes'){
      echo"<td>";
        
        echo"<a data-id='row-64' href='showcall.php?delet=$id' class='btn btn-md btn-danger' onclick='return confirmation()'>Delete</a>";
               
      echo"</td>";
                 }else{
          
          
      }
      
                 
     /* echo"<td>";
        echo"<a data-id='row-64' href='show.php?delet=$id' class='btn btn-md btn-success' onclick='return confirm('Are you sure?');' >Edit</a>";
       echo" <a data-id='row-64'  href='show.php?update=$id'  class='btn btn-md btn-success' data-toggle='modal' data-target='#myModal' onclick='return confirm('Are you sure?');' >Edit</a>";*/
      
       echo"<td>";
     /*
       echo "<form action='show.php' method='GET' >";
        echo "<input type='submit' id='user' onclick='send()' name='edit' class='btn btn-md btn-success' data-toggle='modal' data-target='#myModal' value='$id'>";*/
            if(!$edit=='yes'){
  echo"<a data-id='row-64' id='user' href='ajaxcall2.php?up=$id' class='btn btn-md btn-success'    >Edit</a>";
      echo"</td>";
                  }
            else{
                
                
            }
    
      
      
      if (isset($_GET['delet'])){
          
          $delet_id=$_GET['delet'];
          
          $sql2="DELETE FROM `calls` WHERE id='$delet_id'; ";
         mysql_query($sql2) ;
          @header('location:showcall.php');
      }
      
     
    
      echo "</tr>";
/*
     if($_GET['edit']){
    
          $edit_id =$_GET['edit'];
        
               $sql2="UPDATE `company` SET `fax1`='hahahahahaha' WHERE  id='$edit_id'; ";
         mysql_query($sql2) ;
         
         
     }*/
     
          


	 
   
    
}


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
<html lang="en">
<head>
  <title>Company data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     

          <script>
            function send(){
                var user=document.getElementById('user').value;
                  var pass=document.getElementById('pass').value;
                  $("#test").load("ajax1.php",{user:user,pass:pass});
            }
        </script>
    
    
    
    
    
    <script>
$(document).ready(function(){
    $("button").click(function(){
      
        $("#div2").fadeToggle("slow");
        
    });
});
</script>
</head>
<body>

<div class="container">
  <h2>Call and Order</h2>
            
<br> <br> 


  

</div>
    
<div class="container">


<div class="container">

  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
    
       <center>

<div class="container" >
  
  <form class="form-horizontal" action="show.php" >
     <br> <br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">fax1:</label>
      <div class="col-sm-3">
        <input type="email" class="form-control" id="email" placeholder="fax" name="fax">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-3">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-3">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-3">
        <input type="submit" class="btn btn-default" value="Submit">
      </div>
    </div>
  </form>
</div>
     </center>    
          
          
          
          
          
          
          
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>




    
    
   
    </div>
  

    
</body>
</html>





<script type="text/javascript"></script>
<script type="text/javascript">
    function confirmation() {
      return confirm('Are you sure you want to Delete this?');
    }
</script>
</html>