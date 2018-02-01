<?php
ob_start();
  

 session_start($_SESSION['logindata']);
  
  	$file="myfile.txt";
unlink($file);
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
$seg= $_SESSION['logindata']; 

 
echo  $_SESSION['logindata'];

$s=$_SESSION['logindata'];


if (isset($s) ) {

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


    


    
$sql="SELECT * FROM salestable" ;
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
/*$file=fopen("myfile.txt", "a+");
fread($file, 9000);
fwrite($file, $row['name']);*/
/*echo"<form action='dow.php' method='post'> ";
echo"<input type='submit' name='do'>";

echo"</form>";*/
  echo " <a  href='download.php' id='insert'> download</a>"."<br>";



$file=fopen('myfile.txt', 'a+');
$read=fread($file, 9000);


fwrite($file,'sales');
fwrite($file, ",");
fwrite($file, 'تاريخ');
fwrite($file, ",");
fwrite($file, 'لاسم');
fwrite($file, ",");
fwrite($file, 'رقم الموبيل');
fwrite($file, ",");
fwrite($file, 'منطقه');
fwrite($file, ",");
fwrite($file, 'العنوان');
fwrite($file, ",");
fwrite($file, 'نوع الوحده');
fwrite($file, ",");
fwrite($file, 'نوع العمليه');
fwrite($file, ",");
fwrite($file, 'الرخصه');
fwrite($file, ",");
fwrite($file, 'الواجهه');
fwrite($file, ",");
fwrite($file, 'المساحه');
fwrite($file, ",");
fwrite($file,'دور');
fwrite($file, ",");
fwrite($file, 'عدد الغرف');
fwrite($file, ",");
fwrite($file, 'عدد الحمامات');
fwrite($file, ",");
fwrite($file,'الريسبشن');
fwrite($file, ",");
fwrite($file, 'غرف مطلات');
fwrite($file, ",");
fwrite($file, 'غلى الشارع');
fwrite($file, ",");
fwrite($file, 'عدد ادوار العقار');
fwrite($file, ",");
fwrite($file, 'باكيه الجراج');
fwrite($file, ",");
fwrite($file, 'مبانى');
fwrite($file, ",");
fwrite($file, 'نوع التشطيب');
fwrite($file, ",");
fwrite($file, 'اسانسير');
fwrite($file, ",");
fwrite($file, 'عدادات');
fwrite($file, ",");
fwrite($file, 'عداد المياه');
fwrite($file, ",");
fwrite($file, 'عداد الغاز');
fwrite($file, ",");
fwrite($file, 'عداد الكهرباء');
fwrite($file, ",");
fwrite($file, 'عدد شقق فى الدور');
fwrite($file, ",");
fwrite($file, 'سعر الوحده');
fwrite($file, ",");
fwrite($file, 'قسط');
fwrite($file, ",");
fwrite($file, 'فتره سداد');
fwrite($file, ",");
fwrite($file, 'كاش');
fwrite($file, ",");
fwrite($file, 'مدخل العماره');
fwrite($file, ",");
fwrite($file, 'عرض الشارع ');
fwrite($file, ",");
fwrite($file, 'عموله');
fwrite($file, ",");
fwrite($file, 'ملاحظه');
fwrite($file, ",");
fwrite($file,PHP_EOL);



















fwrite($file, $row['seg']);
fwrite($file, ",");


fwrite($file, $row['date']);
fwrite($file, ",");

fwrite($file, $row['name']);
fwrite($file, ",");
fwrite($file, $row['number']);
fwrite($file, ",");
fwrite($file, $row['address']);
fwrite($file, ",");
fwrite($file, $row['address_houes']);
fwrite($file, ",");
fwrite($file, $row['kind_houes']);
fwrite($file, ",");
fwrite($file, $row['kind_of_pro']);
fwrite($file, ",");
fwrite($file, $row['num_land']);
fwrite($file, ",");
fwrite($file, $row['wagha']);
fwrite($file, ",");
fwrite($file, $row['msaha']);
fwrite($file, ",");
fwrite($file, $row['dor']);
fwrite($file, ",");
fwrite($file, $row['room']);
fwrite($file, ",");
fwrite($file, $row['bath']);
fwrite($file, ",");
fwrite($file, $row['resh']);
fwrite($file, ",");
fwrite($file, $row['matalat']);
fwrite($file, ",");
fwrite($file, $row['onstreet']);
fwrite($file, ",");
fwrite($file, $row['num_dor']);
fwrite($file, ",");
fwrite($file, $row['garash']);
fwrite($file, ",");
fwrite($file, $row['mabany']);
fwrite($file, ",");
fwrite($file, $row['tashteb']);
fwrite($file, ",");
fwrite($file, $row['asanser']);
fwrite($file, ",");
fwrite($file, $row['water']);
fwrite($file, ",");
fwrite($file, $row['gas']);
fwrite($file, ",");
fwrite($file, $row['water']);/*num_dor*/
fwrite($file, ",");
fwrite($file, $row['kahrba']);
fwrite($file, ",");
fwrite($file, $row['num_of_houes']);
fwrite($file, ",");
fwrite($file, $row['price']);
fwrite($file, ",");
fwrite($file, $row['aset']);
fwrite($file, ",");
fwrite($file, $row['sadad']);
fwrite($file, ",");
fwrite($file, $row['cash']);
fwrite($file, ",");
fwrite($file, $row['enter']);
fwrite($file, ",");
fwrite($file, $row['w_street']);
fwrite($file, ",");
fwrite($file, $row['3mola']);
fwrite($file, ",");
fwrite($file, $row['message'].PHP_EOL);



  /*header("location: ../index.php");*/
}
	

/*

 file_put_contents('myfile.txt', $row['seg'] . $row['date']. $row['name']  . $row['address'] . $row['address_houes']  . $row['num_land']. $row['wagha'] . $row['msaha']. $row['dor']. $row['room'] . $row['bath'].PHP_EOL);  */
    
}
else{

	header("location: ../login.php");
}

    

    
    /**************************************************************************/
    
    
    
    
    


      

    ?>