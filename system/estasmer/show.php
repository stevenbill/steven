<?php
ob_start();

?>
<html>
    <head>
          <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

</body>
</html>

<?php
function show(){   
   
   
$localhost="localhost";
$user_db="estasm5_yousry";
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

    
    
$sql="SELECT * FROM salestable WHERE seg ='$seg' " ;
$q=mysql_query($sql) ;

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   
    

  while($row=mysql_fetch_array($q)){
   
    
    
     
     echo"<div class='container'>";
  echo"<h2>بينات استماره العقارات</h2>";                                                                  
 echo" <div class='table-responsive'>";          
  echo"<table class='table'>";
    echo"<thead>";
     echo' <tr>';
      echo  '<th>#</th>';
              echo'<th> sales</th>';
        echo'<th> تاريخ</th>';
        echo'<th> لاسم</th>';
       echo' <th>رقم الموبيل</th>';
       echo' <th>  المنطقه</th>';
        echo'<th>   العنوان</th>';
           echo'<th>نوع الوحده</th>';
           echo'<th> نوع العمليه</th>';
           echo'<th>   الرخصه</th>';
           echo'<th>   الواجهه</th>';
       echo'<th> المساحه</th>';
       echo'<th>دور</th>';
       echo'<th> عدد الغرف</th>';
       echo'<th>عدد الحمامات</th>';
       echo'<th>الريسبشن</th>';
       echo'<th> الغرف مطلات</th>';
        echo'<th>  على الشارع</th>';
       echo'<th> عدد ادوار العقار</th>';
       echo'<th>باكيه الجراج</th>';
       echo'<th> مبانى</th>';
       echo'<th> نوع التشطيب</th>';
        echo'<th>اسانسير</th>';
         echo'<th>عدادات</th>';
       echo'<th>عداد المياه</th>';
       echo'<th>عداد الغاز</th>';
       echo'<th>عداد الكهرباء</th>';
          echo'<th> عدد شقق فى دور</th>';
           echo'<th>سعر الوحده</th>';
            echo'<th> قسط</th>';
             echo'<th>فتره سداد</th>';
              echo'<th>كاش</th>';
               echo'<th>مدخل العماره  </th>';
                echo'<th>عرض الشارع</th>';
                 echo'<th>العموله</th>';
                  echo'<th> ملاحظه</th>';
     
      echo'</tr>';
    echo'</thead>';
   echo' <tbody>';
      echo'<tr>';
     echo "<td>". $row['ID']."</td>" ;
      echo "<th>". $row['seg']."</th>" ;
     
       echo "<th>". $row['date']."</th>" ;
      
       echo "<th>". $row['name']."</th>" ;

       echo "<th>". $row['number']."</th>" ;
           echo "<th>". $row['address']."</th>" ;
                echo "<th>". $row['address_houes']."</th>" ;
                  echo "<th>". $row['kind_houes']."</th>" ;
                   echo "<th>". $row['kind_of_pro']."</th>" ;
                    echo "<th>". $row['num_land']."</th>" ;

      echo "<th>". $row['wagha']."</th>" ;
    
      
       echo "<th>". $row['msaha']."</th>" ;
         echo "<th>". $row['dor']."</th>" ;
          echo "<th>". $row['room']."</th>" ;
  echo "<th>". $row['bath']."</th>" ;

 echo "<th>". $row['resh']."</th>" ;
  echo "<th>". $row['matalat']."</th>" ;
        echo "<th>". $row['onstreet']."</th>" ;
      
      
   echo "<th>". $row['num_dor']."</th>" ;
     echo "<th>". $row['garash']."</th>" ;
       echo "<th>". $row['mabany']."</th>" ;
         echo "<th>". $row['tashteb']."</th>" ;
           echo "<th>". $row['asanser']."</th>" ;
             echo "<th>". $row['adad']."</th>" ;
       echo "<th>". $row['water']."</th>" ;
       echo "<th>". $row['gas']."</th>" ;
       echo "<th>". $row['kahrba']."</th>" ;
             echo "<th>". $row['num_of_houes']."</th>" ;
               echo "<th>". $row['price']."</th>" ;
               echo "<th>". $row['aset']."</th>" ;
 echo "<th>". $row['sadad']."</th>" ;
 echo "<th>". $row['cash']."</th>" ;
 echo "<th>". $row['enter']."</th>" ;
  echo "<th>". $row['w_street']."</th>" ;
   echo "<th>". $row['3mola']."</th>" ;
    echo "<th>". $row['message']."</th>" ;
         echo "<th>". $row['seg']."</th>" ;
 
 
      echo'</tr>';
    echo'</tbody>';
  echo'</table>';
  echo'</div>';
echo'</div>';







	 
   
    
}
    
    /**************************************************************************/
    
	 session_start();
	$seg= $_SESSION['logindata'];

    if($seg=='usera'){
        var_dump($seg);
  
$sql="SELECT * FROM `salestable` WHERE seg='yassen' " ;
$q=mysql_query($sql) ;

    

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   
    

  while($row=mysql_fetch_array($q)){
   
    
    
     
     echo"<div class='container'>";
  echo"<h2>بينات استماره العقارات</h2>";                                                                  
 echo" <div class='table-responsive'>";          
  echo"<table class='table'>";
    echo"<thead>";
     echo' <tr>';
      echo  '<th>#</th>';
              echo'<th> sales</th>';
        echo'<th> تاريخ</th>';
        echo'<th> لاسم</th>';
       echo' <th>رقم الموبيل</th>';
       echo' <th>  المنطقه</th>';
        echo'<th>   العنوان</th>';
           echo'<th>نوع الوحده</th>';
           echo'<th> نوع العمليه</th>';
           echo'<th>   الرخصه</th>';
           echo'<th>   الواجهه</th>';
       echo'<th> المساحه</th>';
       echo'<th>دور</th>';
       echo'<th> عدد الغرف</th>';
       echo'<th>عدد الحمامات</th>';
       echo'<th>الريسبشن</th>';
       echo'<th> الغرف مطلات</th>';
        echo'<th>  على الشارع</th>';
       echo'<th> عدد ادوار العقار</th>';
       echo'<th>باكيه الجراج</th>';
       echo'<th> مبانى</th>';
       echo'<th> نوع التشطيب</th>';
        echo'<th>اسانسير</th>';
         echo'<th>عدادات</th>';
       echo'<th>عداد المياه</th>';
       echo'<th>عداد الغاز</th>';
       echo'<th>عداد الكهرباء</th>';
          echo'<th> عدد شقق فى دور</th>';
           echo'<th>سعر الوحده</th>';
            echo'<th> قسط</th>';
             echo'<th>فتره سداد</th>';
              echo'<th>كاش</th>';
               echo'<th>مدخل العماره  </th>';
                echo'<th>عرض الشارع</th>';
                 echo'<th>العموله</th>';
                  echo'<th> ملاحظه</th>';
     
      echo'</tr>';
    echo'</thead>';
   echo' <tbody>';
      echo'<tr>';
     echo "<td>". $row['ID']."</td>" ;
      echo "<th>". $row['seg']."</th>" ;
     
       echo "<th>". $row['date']."</th>" ;
      
       echo "<th>". $row['name']."</th>" ;

       echo "<th>". $row['number']."</th>" ;
           echo "<th>". $row['address']."</th>" ;
                echo "<th>". $row['address_houes']."</th>" ;
                  echo "<th>". $row['kind_houes']."</th>" ;
                   echo "<th>". $row['kind_of_pro']."</th>" ;
                    echo "<th>". $row['num_land']."</th>" ;

      echo "<th>". $row['wagha']."</th>" ;
    
      
       echo "<th>". $row['msaha']."</th>" ;
         echo "<th>". $row['dor']."</th>" ;
          echo "<th>". $row['room']."</th>" ;
  echo "<th>". $row['bath']."</th>" ;

 echo "<th>". $row['resh']."</th>" ;
  echo "<th>". $row['matalat']."</th>" ;
        echo "<th>". $row['onstreet']."</th>" ;
      
      
   echo "<th>". $row['num_dor']."</th>" ;
     echo "<th>". $row['garash']."</th>" ;
       echo "<th>". $row['mabany']."</th>" ;
         echo "<th>". $row['tashteb']."</th>" ;
           echo "<th>". $row['asanser']."</th>" ;
             echo "<th>". $row['adad']."</th>" ;
       echo "<th>". $row['water']."</th>" ;
       echo "<th>". $row['gas']."</th>" ;
       echo "<th>". $row['kahrba']."</th>" ;
             echo "<th>". $row['num_of_houes']."</th>" ;
               echo "<th>". $row['price']."</th>" ;
               echo "<th>". $row['aset']."</th>" ;
 echo "<th>". $row['sadad']."</th>" ;
 echo "<th>". $row['cash']."</th>" ;
 echo "<th>". $row['enter']."</th>" ;
  echo "<th>". $row['w_street']."</th>" ;
   echo "<th>". $row['3mola']."</th>" ;
    echo "<th>". $row['message']."</th>" ;
         echo "<th>". $row['seg']."</th>" ;
 
 
      echo'</tr>';
    echo'</tbody>';
  echo'</table>';
  echo'</div>';
echo'</div>';






        
    }
}
    

    
 
    
 session_start();
	$seg= $_SESSION['logindata'];

    if($seg=='userb'){
        var_dump($seg);
  
$sql="SELECT * FROM `salestable` WHERE seg='hassan' " ;
$q=mysql_query($sql) ;

    

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   
    

  while($row=mysql_fetch_array($q)){
   
    
    
     
     echo"<div class='container'>";
  echo"<h2>بينات استماره العقارات</h2>";                                                                  
 echo" <div class='table-responsive'>";          
  echo"<table class='table'>";
    echo"<thead>";
     echo' <tr>';
      echo  '<th>#</th>';
              echo'<th> sales</th>';
        echo'<th> تاريخ</th>';
        echo'<th> لاسم</th>';
       echo' <th>رقم الموبيل</th>';
       echo' <th>  المنطقه</th>';
        echo'<th>   العنوان</th>';
           echo'<th>نوع الوحده</th>';
           echo'<th> نوع العمليه</th>';
           echo'<th>   الرخصه</th>';
           echo'<th>   الواجهه</th>';
       echo'<th> المساحه</th>';
       echo'<th>دور</th>';
       echo'<th> عدد الغرف</th>';
       echo'<th>عدد الحمامات</th>';
       echo'<th>الريسبشن</th>';
       echo'<th> الغرف مطلات</th>';
        echo'<th>  على الشارع</th>';
       echo'<th> عدد ادوار العقار</th>';
       echo'<th>باكيه الجراج</th>';
       echo'<th> مبانى</th>';
       echo'<th> نوع التشطيب</th>';
        echo'<th>اسانسير</th>';
         echo'<th>عدادات</th>';
       echo'<th>عداد المياه</th>';
       echo'<th>عداد الغاز</th>';
       echo'<th>عداد الكهرباء</th>';
          echo'<th> عدد شقق فى دور</th>';
           echo'<th>سعر الوحده</th>';
            echo'<th> قسط</th>';
             echo'<th>فتره سداد</th>';
              echo'<th>كاش</th>';
               echo'<th>مدخل العماره  </th>';
                echo'<th>عرض الشارع</th>';
                 echo'<th>العموله</th>';
                  echo'<th> ملاحظه</th>';
     
      echo'</tr>';
    echo'</thead>';
   echo' <tbody>';
      echo'<tr>';
     echo "<td>". $row['ID']."</td>" ;
      echo "<th>". $row['seg']."</th>" ;
     
       echo "<th>". $row['date']."</th>" ;
      
       echo "<th>". $row['name']."</th>" ;

       echo "<th>". $row['number']."</th>" ;
           echo "<th>". $row['address']."</th>" ;
                echo "<th>". $row['address_houes']."</th>" ;
                  echo "<th>". $row['kind_houes']."</th>" ;
                   echo "<th>". $row['kind_of_pro']."</th>" ;
                    echo "<th>". $row['num_land']."</th>" ;

      echo "<th>". $row['wagha']."</th>" ;
    
      
       echo "<th>". $row['msaha']."</th>" ;
         echo "<th>". $row['dor']."</th>" ;
          echo "<th>". $row['room']."</th>" ;
  echo "<th>". $row['bath']."</th>" ;

 echo "<th>". $row['resh']."</th>" ;
  echo "<th>". $row['matalat']."</th>" ;
        echo "<th>". $row['onstreet']."</th>" ;
      
      
   echo "<th>". $row['num_dor']."</th>" ;
     echo "<th>". $row['garash']."</th>" ;
       echo "<th>". $row['mabany']."</th>" ;
         echo "<th>". $row['tashteb']."</th>" ;
           echo "<th>". $row['asanser']."</th>" ;
             echo "<th>". $row['adad']."</th>" ;
       echo "<th>". $row['water']."</th>" ;
       echo "<th>". $row['gas']."</th>" ;
       echo "<th>". $row['kahrba']."</th>" ;
             echo "<th>". $row['num_of_houes']."</th>" ;
               echo "<th>". $row['price']."</th>" ;
               echo "<th>". $row['aset']."</th>" ;
 echo "<th>". $row['sadad']."</th>" ;
 echo "<th>". $row['cash']."</th>" ;
 echo "<th>". $row['enter']."</th>" ;
  echo "<th>". $row['w_street']."</th>" ;
   echo "<th>". $row['3mola']."</th>" ;
    echo "<th>". $row['message']."</th>" ;
         echo "<th>". $row['seg']."</th>" ;
 
 
      echo'</tr>';
    echo'</tbody>';
  echo'</table>';
  echo'</div>';
echo'</div>';






        
    }
}
    
    
    
    
    
    
    
 session_start();
	$seg= $_SESSION['logindata'];

    if($seg=='userc'){
        var_dump($seg);
  
$sql="SELECT * FROM `salestable` WHERE seg='Hani' " ;
$q=mysql_query($sql) ;

    

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   
    

  while($row=mysql_fetch_array($q)){
   
    
    
     
     echo"<div class='container'>";
  echo"<h2>بينات استماره العقارات</h2>";                                                                  
 echo" <div class='table-responsive'>";          
  echo"<table class='table'>";
    echo"<thead>";
     echo' <tr>';
      echo  '<th>#</th>';
              echo'<th> sales</th>';
        echo'<th> تاريخ</th>';
        echo'<th> لاسم</th>';
       echo' <th>رقم الموبيل</th>';
       echo' <th>  المنطقه</th>';
        echo'<th>   العنوان</th>';
           echo'<th>نوع الوحده</th>';
           echo'<th> نوع العمليه</th>';
           echo'<th>   الرخصه</th>';
           echo'<th>   الواجهه</th>';
       echo'<th> المساحه</th>';
       echo'<th>دور</th>';
       echo'<th> عدد الغرف</th>';
       echo'<th>عدد الحمامات</th>';
       echo'<th>الريسبشن</th>';
       echo'<th> الغرف مطلات</th>';
        echo'<th>  على الشارع</th>';
       echo'<th> عدد ادوار العقار</th>';
       echo'<th>باكيه الجراج</th>';
       echo'<th> مبانى</th>';
       echo'<th> نوع التشطيب</th>';
        echo'<th>اسانسير</th>';
         echo'<th>عدادات</th>';
       echo'<th>عداد المياه</th>';
       echo'<th>عداد الغاز</th>';
       echo'<th>عداد الكهرباء</th>';
          echo'<th> عدد شقق فى دور</th>';
           echo'<th>سعر الوحده</th>';
            echo'<th> قسط</th>';
             echo'<th>فتره سداد</th>';
              echo'<th>كاش</th>';
               echo'<th>مدخل العماره  </th>';
                echo'<th>عرض الشارع</th>';
                 echo'<th>العموله</th>';
                  echo'<th> ملاحظه</th>';
     
      echo'</tr>';
    echo'</thead>';
   echo' <tbody>';
      echo'<tr>';
     echo "<td>". $row['ID']."</td>" ;
      echo "<th>". $row['seg']."</th>" ;
     
       echo "<th>". $row['date']."</th>" ;
      
       echo "<th>". $row['name']."</th>" ;

       echo "<th>". $row['number']."</th>" ;
           echo "<th>". $row['address']."</th>" ;
                echo "<th>". $row['address_houes']."</th>" ;
                  echo "<th>". $row['kind_houes']."</th>" ;
                   echo "<th>". $row['kind_of_pro']."</th>" ;
                    echo "<th>". $row['num_land']."</th>" ;

      echo "<th>". $row['wagha']."</th>" ;
    
      
       echo "<th>". $row['msaha']."</th>" ;
         echo "<th>". $row['dor']."</th>" ;
          echo "<th>". $row['room']."</th>" ;
  echo "<th>". $row['bath']."</th>" ;

 echo "<th>". $row['resh']."</th>" ;
  echo "<th>". $row['matalat']."</th>" ;
        echo "<th>". $row['onstreet']."</th>" ;
      
      
   echo "<th>". $row['num_dor']."</th>" ;
     echo "<th>". $row['garash']."</th>" ;
       echo "<th>". $row['mabany']."</th>" ;
         echo "<th>". $row['tashteb']."</th>" ;
           echo "<th>". $row['asanser']."</th>" ;
             echo "<th>". $row['adad']."</th>" ;
       echo "<th>". $row['water']."</th>" ;
       echo "<th>". $row['gas']."</th>" ;
       echo "<th>". $row['kahrba']."</th>" ;
             echo "<th>". $row['num_of_houes']."</th>" ;
               echo "<th>". $row['price']."</th>" ;
               echo "<th>". $row['aset']."</th>" ;
 echo "<th>". $row['sadad']."</th>" ;
 echo "<th>". $row['cash']."</th>" ;
 echo "<th>". $row['enter']."</th>" ;
  echo "<th>". $row['w_street']."</th>" ;
   echo "<th>". $row['3mola']."</th>" ;
    echo "<th>". $row['message']."</th>" ;
         echo "<th>". $row['seg']."</th>" ;
 
 
      echo'</tr>';
    echo'</tbody>';
  echo'</table>';
  echo'</div>';
echo'</div>';






        
    }
}
    
      
    
       }
    
    
    
    
show();


      

    ?>