<?php
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
              
   session_start();
 session_destroy();  
header('location:/report');
exit;
}
?>




<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>مخازن</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
 
    
  
    <script src="js/index.js"></script>

</body>
</html>

  <?php  
  
$localhost="localhost";
$user_db="root";/*estasm5_yousry*/
$pass_db="4562008";
$db="sales";

$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

}else{
  
  mysql_error();
}
                
                 
   session_start();
  $seg= $_SESSION['logindata'];


        
  
$sql="SELECT * FROM `report` ORDER BY id DESC;  " ;
$q=mysql_query($sql) ;

    

    

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   
        echo"<center>"."<h1> تقرير المخازن  </h1>".$seg."</center>";



  while($row=mysql_fetch_array($q)){

   
    
  echo"<table>";
 echo" <thead>";
    echo"<tr>";
 echo"<th>ID</th>";

      echo"<th>اسم المورد</th>";
        echo"<th>اسم الصنف</th>";
          
                 echo"<th> رقم الوحده </th>";
                  echo"<th>سعر الوحده</th>";
        echo"<th> اجمالى السعر</th>";
         echo"<th>  عدد االوحدات</th>";
       echo"<th>   سعر البيع الحقيقى</th>";
                    echo"<th>تاريخ</th>";
      echo"<th>ملاحظه </th>";
    
   echo" </tr>";
 echo" </thead>";

  echo"<tbody>";

      echo "<td>". $row['id']."</td>" ;
   echo "<td>". $row['name']."</td>" ;

   echo "<td>". $row['number']."</td>" ;
        echo "<td>". $row['h']."</td>" ;
   
   
          echo "<td>". $row['wasela']."</td>" ;
       echo "<td>". $row['total']."</td>" ;
           echo "<td>". $row['sumnumber']."</td>" ;
      
      
           echo "<td>". $row['realprice']."</td>" ;
      echo "<td>". $row['date']."</td>" ;
       echo "<td>". $row['malahza']."</td>" ;
       
      
   
  
   echo" <tr>";
   

   
   echo" </tr>";
    

  echo"<tbody>";
echo"</table>";
      
      
      

        
    }

    





?>
                






