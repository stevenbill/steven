<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                   
                    <li class="current"><a href="tables.html"><i class="glyphicon glyphicon-list"></i> الوحدات</a></li>
                 
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
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


$sql="SELECT * FROM `salestable` WHERE saled=''" ;
$q=mysql_query($sql) ;

    

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   
    
	 echo" <center>       <h1> وحدات  غير موباعه</h1>  </center>";
  while($row=mysql_fetch_array($q)){
   
    
    
     
     echo"<div class='container'>";

                                                                    
 echo" <div class='table-responsive'>";          
  echo"<table class='table'style='width:50%'>";

    echo"<thead>";
     echo' <tr>';
      echo  '<th>#ID</th>';
 
      
              echo'<th> sales</th>';
        echo'<td> تاريخ</td>';
        echo'<td> لاسم</td>';
       echo' <td>رقم الموبيل</td>';
       echo' <td>  المنطقه</td>';
        echo'<td>   العنوان</td>';
           echo'<td>نوع الوحده</td>';
           echo'<td> نوع العمليه</td>';
           echo'<td>   الرخصه</td>';
           echo'<td>   الواجهه</td>';
       echo'<td> المساحه</td>';
       echo'<td>دور</td>';
       echo'<td> عدد الغرف</td>';
       echo'<td>عدد الحمامات</td>';
       echo'<td>الريسبشن</td>';
       echo'<td> الغرف مطلات</td>';
        echo'<td>  على الشارع</td>';
       echo'<td> عدد ادوار العقار</td>';
       echo'<td>باكيه الجراج</td>';
       echo'<td> مبانى</td>';
       echo'<td> نوع التشطيب</td>';
        echo'<td>اسانسير</td>';
         echo'<td>عدادات</td>';
       echo'<td>عداد المياه</td>';
       echo'<td>عداد الغاز</td>';
       echo'<th>عداد الكهرباء</th>';
          echo'<td> عدد شقق فى دور</td>';
           echo'<td>سعر الوحده</td>';
            echo'<td> قسط</td>';
             echo'<td>فتره سداد</td>';
              echo'<td>كاش</td>';
               echo'<td>مدخل العماره  </td>';
                echo'<td>عرض الشارع</td>';
                 echo'<td>العموله</td>';
                  echo'<td> ملاحظه</td>';
     
      echo'</tr>';
    echo'</thead>';
   echo' <tbody>';
      echo'<tr>';
     echo "<td>". $row['ID']."</td>" ;
      echo "<td>". $row['seg']."</td>" ;
     
       echo "<td>". $row['date']."</td>" ;
      
       echo "<td>". $row['name']."</td>" ;

       echo "<td>". $row['number']."</td>" ;
           echo "<td>". $row['address']."</td>" ;
                echo "<td>". $row['address_houes']."</td>" ;
                  echo "<td>". $row['kind_houes']."</td>" ;
                   echo "<td>". $row['kind_of_pro']."</td>" ;
                    echo "<td>". $row['num_land']."</td>" ;

      echo "<td>". $row['wagha']."</td>" ;
    
      
       echo "<td>". $row['msaha']."</td>" ;
         echo "<td>". $row['dor']."</td>" ;
          echo "<td>". $row['room']."</td>" ;
  echo "<td>". $row['bath']."</td>" ;

 echo "<td>". $row['resh']."</td>" ;
  echo "<td>". $row['matalat']."</td>" ;
        echo "<td>". $row['onstreet']."</td>" ;
      
      
   echo "<td>". $row['num_dor']."</td>" ;
     echo "<td>". $row['garash']."</td>" ;
       echo "<td>". $row['mabany']."</td>" ;
         echo "<td>". $row['tashteb']."</td>" ;
           echo "<td>". $row['asanser']."</td>" ;
             echo "<th>". $row['adad']."</th>" ;
       echo "<td>". $row['water']."</td>" ;
       echo "<td>". $row['gas']."</td>" ;
       echo "<td>". $row['kahrba']."</td>" ;
             echo "<td>". $row['num_of_houes']."</td>" ;
               echo "<td>". $row['price']."</td>" ;
               echo "<td>". $row['aset']."</td>" ;
 echo "<td>". $row['sadad']."</td>" ;
 echo "<td>". $row['cash']."</td>" ;
 echo "<td>". $row['enter']."</td>" ;
  echo "<td>". $row['w_street']."</td>" ;
   echo "<td>". $row['3mola']."</td>" ;
    echo "<td>". $row['message']."</td>" ;
   
 
 
      echo'</tr>';
    echo'</tbody>';
  echo'</table>';
  echo'</div>';
echo'</div>';






        
    }
    

   

    
    
    





        
    
    

   




































/*********************************************************************************************************************/
?>

    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>