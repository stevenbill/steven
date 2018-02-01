<?php
date_default_timezone_set("Africa/Cairo");
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
              
   session_start();
 session_destroy();  
header('location:/web');
exit;
}
?>




<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>مواعيد</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
 <!-- <table>
  <thead>
    <tr>
      <td></td>
      <th>Basic</th>
      <th>Premium</th>
      <th>Deluxe</th>
      <th>Business</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Feature 1</th>
      <td>✔</td>
      <td>✔</td>
      <td>✔</td>
      <td>✔</td>
    </tr>
     <tr>
      <th>Feature 2</th>
      <td>❌</td>
      <td>✔</td>
      <td>✔</td>
      <td>✔</td>
    </tr>
     <tr>
      <th>Feature 3</th>
      <td>❌</td>
      <td>❌</td>
      <td>✔</td>
      <td>✔</td>
    </tr>
     <tr>
      <th>Feature 4</th>
      <td>❌</td>
      <td>❌</td>
      <td>❌</td>
      <td>✔</td>
    </tr>-
  <tbody>
</table>-->
  
    <script src="js/index.js"></script>

</body>
</html>

  <?php  
  
$localhost="localhost";
$user_db="estasm5_yousry";/*estasm5_yousry*/
$pass_db="4562008";
$db="estasm5_sales";

$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

}else{
  
  mysql_error();
}
                
                 
   session_start();
  $seg= $_SESSION['logindata'];


    
  
$sql="SELECT * FROM `ins` WHERE seg='$seg' " ;



$q=mysql_query($sql) ;

    

    

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   
        echo"<center>"."<h1>  مواعيد تصوير و زيرات  </h1>".$seg."</center>";



  while($row=mysql_fetch_array($q)){

   
    
  echo"<table>";
 echo" <thead>";
    echo"<tr>";
 echo"<th>ID</th>";

      echo"<th>اسم </th>";
        echo"<th>تليفون </th>";
          
                 echo"<th> العنوان </th>";
                  echo"<th>اليوم</th>";
        echo"<th> الميعاد </th>";
        
                   
      echo"<th>ملاحظه </th>";
    
   echo" </tr>";
 echo" </thead>";

  echo"<tbody>";

      echo "<td>". $row['id']."</td>" ;
   echo "<td>". $row['name']."</td>" ;

   echo "<td>". $row['number']."</td>" ;
        echo "<td>". $row['adress']."</td>" ;
   
   
          echo "<td>". $row['day']."</td>" ;
       echo "<td>". $row['date']."</td>" ;
          
      
      
           echo "<td>". $row['malahza']."</td>" ;
  
   echo" <tr>";
   

   
   echo" </tr>";
    

  echo"<tbody>";
echo"</table>";
      
      
      

        
    }

    



?>
                






