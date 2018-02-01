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



	$seg= $_SESSION['logindata'];


    
    
   
$sql="SELECT * FROM list  " ;
$q=mysql_query($sql) ;

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

     echo"<table class='table'>";
   


     
    echo" <td>ID</td>";


      





        echo"<td>Name</td>";
        echo"<td>Postion</td>";
             echo" <td>Phone 01</td>";
       echo" <td>Phone 02</td>";
        echo"<td>Mobile 01</td>";
              echo"<td>Mobile 02</td>";
        echo"<td>Email_01</td>";
        echo"<td>Email_02</td>";

 echo"<td>Email_03</td>";
        echo"<td>employe</td>";
        echo"<td>Date</td>";
echo"<td>empmod</td>";
echo"<td>empdate</td>";


 echo"<td>Delet</td>";
        echo"<td>Edit</td>";




      echo "</tr>";
         echo "<tr>";

  while(@$row=mysql_fetch_array(@$q)){
   

     
    

          echo "<td>". $row['id']."</td>" ;
      

      
       echo "<td>". $row['Name']."</td>" ;
 echo "<td>". $row['Postion']."</td>" ;
       echo "<td>". $row['Phone1']."</td>" ;
     
      echo "<td>". $row['Phone2']."</td>" ;
       echo "<td>". $row['Mobile1']."</td>" ;
      
      
      
      
      
      
      
      
       echo "<td>". $row['Mobile2']."</td>" ;
       echo "<td>". $row['Email1']."</td>" ;
       echo "<td>". $row['Email2']."</td>" ;
      
      echo "<td>". $row['Email3']."</td>" ;
       echo "<td>". $row['Reg_Name']."</td>" ;
       echo "<td>". $row['date']."</td>" ;
      
      echo "<td>". $row['segmod']."</td>" ;
      echo "<td>". $row['datemod']."</td>" ;
      
      
       $id=$row['id'];
                
      echo"<td>";
      
   
      
        $link="<a data-id='row-64' href='showlist.php?delet=$id' class='btn btn-md btn-danger' onclick='return confirmation()' >Delete</a>";
    
      if($del=='yes'){
         
      }else{
           echo $link;
      }
      
      echo"</td>";
      
                 
     /* echo"<td>";
        echo"<a data-id='row-64' href='show.php?delet=$id' class='btn btn-md btn-success' onclick='return confirm('Are you sure?');' >Edit</a>";
       echo" <a data-id='row-64'  href='show.php?update=$id'  class='btn btn-md btn-success' data-toggle='modal' data-target='#myModal' onclick='return confirm('Are you sure?');' >Edit</a>";*/
      
       echo"<td>";
     /*
       echo "<form action='show.php' method='GET' >";
        echo "<input type='submit' id='user' onclick='send()' name='edit' class='btn btn-md btn-success' data-toggle='modal' data-target='#myModal' value='$id'>";*/
  echo"<a data-id='row-64' id='user' href='ajaxlist2.php?up=$id' class='btn btn-md btn-success'    >Edit</a>";
      echo"</td>";
    
      
      
      if (isset($_GET['delet'])){
          
          $delet_id=$_GET['delet'];
          
          $sql2="DELETE FROM `list` WHERE id='$delet_id'; ";
         mysql_query($sql2) ;
          @header('location:showlist.php');
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
  <h2>list</h2>
            
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
  
  <form class="form-horizontal" action="showlist.php" >
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