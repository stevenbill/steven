<?php
ob_start();

/*if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}*/



?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title class='tit'> الفتوره  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">


  
</head>

<body>
 
  
    <script src="js/index.js"></script>

    
<html>
    <head>
          <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
@media print { 
 /* All your print styles go here */
 #form { display: none !important; } 
    .tit  { display: none !important; } 
}
  

</style>

</body>
</html>

<?php

$localhost="localhost";
$user_db="root";
$pass_db="4562008";
$db="sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    

}else{
  
  mysql_error();
}

    
    














  
$sql="SELECT `id`, `name`, `number`, `price`, `sale`, `malahz`, `num`, `total`, `priceaaftersale`, `sal`, `date`, `tota2` FROM `customer`  ORDER BY id DESC " ;  

           

/*$sql="SELECT * FROM `report` WHERE  name LIKE '%".$name."%'  or wasela LIKE '%".$wasela."%'  or number LIKE '%".$number."%'   "    ;*/

$q=mysql_query($sql) ;

 

    

   

  while($row=mysql_fetch_array($q)){

   
    
  echo"<table>";
 echo" <thead>";
    echo"<tr>";
 echo"<th>ID</th>";

    
        echo"<th>اسم الصنف</th>";
          
                 echo"<th> رقم الوحده </th>";
                  echo"<th>سعر الوحده</th>";
        echo"<th>  عدد االوحدات</th>";
        echo"<th>   خصومات</th>";
        echo"<th> اجمالى السعر</th>";
        echo"<th>  سعر قبل الخصم  </th>";
        echo"<th>  سعر  خصم </th>";
        echo"<th>  اجمالى السعر بعد الخصم </th>";
        echo"<th>ملاحظه </th>";
                    echo"<th>تاريخ</th>";
     
    
   echo" </tr>";
 echo" </thead>";

  echo"<tbody>";

      echo "<td>". $row['id']."</td>" ;
   echo "<td>". $row['name']."</td>" ;

   echo "<td>". $row['number']."</td>" ;
        echo "<td>". $row['price']."</td>" ;
   
   
          echo "<td>". $row['num']."</td>" ;
       echo "<td>". $row['sal']."</td>" ;
           echo "<td>". $row['total']."</td>" ;
      
      
           echo "<td>". $row['total']."</td>" ;
      echo "<td>". $row['priceaaftersale']."</td>" ;
       echo "<td>". $row['tota2']."</td>" ;
       echo "<td>". $row['malahz']."</td>" ;
           echo "<td>". $row['date']."</td>" ;
       
      
   
  
   echo" <tr>";
   

   
   echo" </tr>";
    

  echo"<tbody>";
echo"</table>";
      
      
      

        
    }

    




   

   


        
      
 

    
    
    
    



      

    ?>