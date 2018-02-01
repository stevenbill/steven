<?php
/*if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}*/

?>



<?php

session_start();

if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }
	function con(){
									         
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
    
    }
  
	
 
    

?>

<!DOCTYPE html>
<html>
  <head>
        <title>Estasmer System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php"> Estasmer system
                     
                     
                     
                     
                     </a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                 <!-- <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <!--<button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>-->
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php   session_start();
	echo "welcom ". $seg= $_SESSION['logindata']         ?>  <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                         
                            <li><a href="../map/destroy.php" name="logout">Logout</a>  </li>
                            








                            
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
    
    
  

								         


$sql="SELECT * FROM `share` WHERE user='$seg' " ;
$q=mysql_query($sql) ;
  while($row=mysql_fetch_array($q)){
     $idshare= $row['id_share'] ;

       $usershare=  $row['user'] ;
       
      echo      $idshare;
      echo  $usershare ;

  }





$sql="SELECT * FROM `salestable` WHERE id='$idshare' " ;
$q=mysql_query($sql) ;

    



  while($row=mysql_fetch_array($q)){
   
    
    
     
     echo"<div class='container'>";
  echo"<h2>بينات استماره العقارات</h2>"; 
   echo"<a href='http://estasmer.com/pro/form2/imgdow/imgdow.php' target='_blank'>download image!</a>";                                                                        
 echo" <div class='table-responsive'>";          
  echo"<table class='table'>";
    echo"<thead>";
     echo' <tr>';
      echo  '<th>#ID</th>';


      
/*****************************************************************/

          
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
       echo "<th>". $row['saled']."</th>" ;
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

         
 
 
      echo'</tr>';
    echo'</tbody>';
  echo'</table>';
  echo'</div>';
echo'</div>';






        
    }
    

  

   

    

	?>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">

                    
                
       

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    
  </body>
</html>



</body>
</html>
