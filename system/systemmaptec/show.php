<?php
session_start();
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 


	$seg= $_SESSION['logindata'];


    
    
$sql="SELECT * FROM company  ORDER BY id DESC " ;
$q=mysql_query($sql) ;


$sql3="SELECT * FROM  users where user='$seg' " ;
$q3=mysql_query($sql3) ;
  while($row=mysql_fetch_array($q3)){
     $dele=$row['compnydel'];
       $edit=$row['compnyedi'];
      
  }
   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   
     echo"<table class='table'>";
   


     
    echo" <td>ID</td>";


      





             echo" <td>Type</td>";
        echo"<td>Brand</td>";
        echo"<td>Dep</td>";
             echo" <td>Ar_Name</td>";
       echo" <td>En_Name</td>";
        echo"<td>Field_of_Work</td>";
              echo"<td>fax1</td>";
        echo"<td>fax2</td>";
        echo"<td>fax3</td>";

 echo"<td>phone1</td>";
        echo"<td>phone2</td>";
        echo"<td>phone3</td>";




           echo"<td>mobile1</td>";
        echo"<td>mobile2</td>";
        echo"<td>mobile3</td>";
           echo"<td>Mail1 </td>";
        echo"<td>Mail2</td>";
        echo"<td>Mail3</td>";
          
          echo"<td>old URL</td>";
          echo"<td>Url</td>";
          echo"<td>Address</td>";
          echo"<td>Bra_Address</td>";
         echo" <td>City</td>";
          echo"<td>Country</td>";
          echo"<td>Date</td>"; 
               echo"<td>Refrence</td>"; 
               echo"<td>Notes</td>"; 
echo"<td>last modified</td>";
echo"<td>user modified</td>";


 echo"<td>seg</td>"; 
echo"<td>Delete</td>"; 
               echo"<td>Edit</td>";

      echo "</tr>";
         echo "<tr>";

  while($row=mysql_fetch_array($q)){
   

     
    

          echo "<td>". $row['id']."</td>" ;
      

      
     echo "<td>". $row['Type']."</td>" ;
 echo "<td>". $row['Brand']."</td>" ;
       echo "<td>". $row['Dep']."</td>" ;
       echo "<td>". $row['Ar_Name']."</td>" ;
       echo "<td>". $row['CompanyName']."</td>" ;
       echo "<td>". $row['Field_of_Work']."</td>" ;
      
      
      
      
      
      
      
      
       echo "<td>". $row['fax1']."</td>" ;
       echo "<td>". $row['fax2']."</td>" ;
       echo "<td>". $row['fax3']."</td>" ;
      
      echo "<td>". $row['Phone1']."</td>" ;
       echo "<td>". $row['Phone2']."</td>" ;
       echo "<td>". $row['Phone3']."</td>" ;
      
      
      
       echo "<td>". $row['mobile1']."</td>" ;
       echo "<td>". $row['mobile2']."</td>" ;
       echo "<td>". $row['mobile3']."</td>" ; 
       echo "<td>". $row['EMail1']."</td>" ;
      echo "<td>". $row['EMail2']."</td>" ;
      echo "<td>". $row['EMail3']."</td>" ;
      echo "<td>". $row['oldURL']."</td>" ;
      echo "<td>". $row['Url']."</td>" ;
       echo "<td>". $row['Address']."</td>" ;
       echo "<td>". $row['Bra']."</td>" ;
        
       echo "<td>". $row['City']."</td>" ;
       
       echo "<td>". $row['Country']."</td>" ;
      echo "<td>". $row['date']."</td>" ;
      echo "<td>". $row['Refrence']."</td>" ;
      echo "<td>". $row['Notes']."</td>" ;
      
      echo "<td>". $row['lastmod']."</td>" ;
      echo "<td>". $row['segmod']."</td>" ;
      
      echo "<td>". $row['seg']."</td>" ;
       $id=$row['id'];
          
      
 
      
      
      
      
      
      
      
      
      echo"<td>";
       
      
           if(!$dele=='yes'){
 echo"<a data-id='row-64' href='show.php?delet=$id' class='btn btn-md btn-danger' onclick='return confirmation()'>Delete</a>";
      echo"</td>";
      }else{
          
          
      }
      echo"</td>";
      
                 
     /* echo"<td>";
        echo"<a data-id='row-64' href='show.php?delet=$id' class='btn btn-md btn-success' onclick='return confirm('Are you sure?');' >Edit</a>";
       echo" <a data-id='row-64'  href='show.php?update=$id'  class='btn btn-md btn-success' data-toggle='modal' data-target='#myModal' onclick='return confirm('Are you sure?');' >Edit</a>";*/
      
       echo"<td>";
     /*
       echo "<form action='show.php' method='GET' >";
        echo "<input type='submit' id='user' onclick='send()' name='edit' class='btn btn-md btn-success' data-toggle='modal' data-target='#myModal' value='$id'>";*/
      
      
        if(!$edit=='yes'){
  echo"<a data-id='row-64' id='user' href='ajax2.php?up=$id' class='btn btn-md btn-success'    >Edit</a>";
      echo"</td>";
            }
            else{
                
                
            }
      
      
      
      
      
      
      
      
      
      
      

      echo"</td>";
    
      
      
      if (isset($_GET['delet'])){
          
          $delet_id=$_GET['delet'];
          
          $sql2="DELETE FROM `company` WHERE id='$delet_id'; ";
         mysql_query($sql2) ;
          @header('location:show.php');
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
  <h2>Company list</h2>
            
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