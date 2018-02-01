<html>
<head>
   <link rel="stylesheet" href="css/style.css">
 
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 100%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

#myDIV {
  
    overflow-y:scroll;
}
</style>
</head>
<body>



<!-- The Modal -->

<script>

var modal = document.getElementById('go');

var btn = document.getElementById('myBtn');


var span = document.getElementsByClassName('close')[0];



    modal.style.display = 'block';


span.onclick = function() {
    modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>

</body>
</html>







<?php

echo $user=$_POST['user'] ; 


    

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

      
      
    
$sql="SELECT * FROM salestable WHERE code123 ='$user'  " ;
$q=mysql_query($sql) ;

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/


  while($row=mysql_fetch_array($q)){
   
   echo " <div id='go' class='modal'>";

  
  echo "<div class='modal-content'>";
    echo"<div class='modal-header'>";
      echo "<span class='close'>&times;</span>";
      echo "<h2>Modal Header</h2>";
    echo "</div>";
    echo "<div class='modal-body'>";
     
     




     echo"<div class='container' id = 'myDIV'>";

                                                                
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
       echo "<th>". $row['saled']."</th>" ;
 
 
      echo'</tr>';
    echo'</tbody>';
  echo'</table>';
  echo'</div>';
echo'</div>';


















    echo "</div>";
    echo "<div class='modal-footer'>";
      echo "<h3>Modal Footer</h3>";
   echo " </div>";
  echo "</div>";

echo "</div>";
    
     





        
    }
    

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
     ?> 
      
      
      
      
      


