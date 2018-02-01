<?php
session_start();

if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}

date_default_timezone_set("Africa/Cairo");



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


    date_default_timezone_set("Africa/Cairo");
    $date= date("h:i:sa");
/*echo "The time is " . date("h:i:sa");*/
echo $date;
    
$sql="SELECT * FROM fax ORDER BY id DESC " ;
$q=mysql_query($sql) ;


$sql3="SELECT * FROM  users where user='$seg' " ;
$q3=mysql_query($sql3) ;
  while($row=mysql_fetch_array($q3)){
     $dele=$row['faxdelet'];
       $edit=$row['faxedit'];
      
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
	

   
     echo"<table class='table'>";
   


     
    echo" <td>ID</td>";


      





             echo" <td>CompanyName</td>";
        echo"<td>PhoneNumber</td>";
        echo"<td>FaxResult</td>";
             echo" <td>	FaxDep</td>";
       echo" <td>FaxBrand</td>";
        echo"<td>	Notes</td>";
 
              echo"<td>	date</td>";
echo"<td> Fax list</td>";

echo"<td>EMail</td>";
echo"<td>whats</td>";
echo"<td>new fax</td>";
       


 echo"<td>employe</td>"; 
echo"<td>employemod</td>";
echo"<td>Datemod</td>";
echo"<td>Delete</td>"; 
               echo"<td>Edit</td>";

      echo "</tr>";
         echo "<tr>";

  while($row=mysql_fetch_array($q)){
   

     
    

          echo "<td>". $row['id']."</td>" ;
      

      
     echo "<td>". $row['CompanyName']."</td>" ;
 echo "<td>". $row['PhoneNumber']."</td>" ;
       echo "<td>". $row['FaxResult']."</td>" ;
       echo "<td>". $row['FaxDep']."</td>" ;
       echo "<td>". $row['FaxBrand']."</td>" ;
       echo "<td>". $row['Notes']."</td>" ;
  
      
      
      
      
      
      
      
      
       echo "<td>". $row['date']."</td>" ;
      echo "<td>". $row['Faxroot']."</td>" ;
      
      
       echo "<td>". $row['EMail']."</td>" ;
       echo "<td>". $row['NewFaxNumber']."</td>" ;
      echo "<td>". $row['newfax']."</td>" ;
      
      
      echo "<td>". $row['seg']."</td>" ;
    
      echo "<td>". $row['lastmod']."</td>" ;  	 
       echo "<td>". $row['segmod']."</td>" ; 
      
       $id=$row['id'];
                
      echo"<td>";
  
      if(!$dele=='yes'){
        echo"<a data-id='row-64' href='faxshow.php?delet=$id' class='btn btn-md btn-danger' onclick='return confirmation()'>Delete</a>";
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
  echo"<a data-id='row-64' id='user' href='ajaxfax2.php?up=$id' class='btn btn-md btn-success'    >Edit</a>";
      echo"</td>";
            }
            else{
                
                
            }
      
      
      if (isset($_GET['delet'])){
          
          $delet_id=$_GET['delet'];
          
          $sql2="DELETE FROM `fax` WHERE id='$delet_id'; ";
         mysql_query($sql2) ;
          @header('location:faxshow.php');
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

</head>

<body>
	<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
	
	<div class="content">
	<div class="back-to-article"></div>

	</div>
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
  <h2>Company Fax</h2>
            
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