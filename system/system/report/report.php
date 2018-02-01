<?php
ob_start();
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
          
session_start();
session_destroy(); 
header('location:../index.php');
exit;
}
?>
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location:../index.php');
exit;
}


/*echo $_SESSION['logindata'];*/



$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    
	 session_start();
	$seg= $_SESSION['logindata'];
    echo var_dump($seg);

}else{
	
	mysql_error();
}
    

$date=@date("Y/m/d h:i:sa") ;
$name=$_POST['name'];
$number=$_POST['number'];
$house=$_POST['house'];

$wasela=$_POST['wasela'];

$da=$_POST['da'];



$email=$_POST['email'];
$wats=$_POST['wats'];
$malhoza=$_POST['malhoza'];





$sql="SELECT `number` FROM `report` WHERE number='$number'";
$q=mysql_query($sql) ;

$insert="insert into report (name,date,number,seg,h,wasela,dae,email,wats,malhoza) values('$name','$date','$number','$seg','$house','$wasela','$da','$email','$wats','$malhoza')";

if (@$_POST['send']) {


  while($row=mysql_fetch_array($q)){

   

      echo  $row['number'] ;
	  $x="<script type='text/javascript'> alert (' !!!!!!! احظر الرقم مسجل سابقا !!!!!!! '); </script>";
echo $x;


}
     if(!isset($x)){
mysql_query($insert) ;
	 echo "<script type='text/javascript'> alert ('** تم تسجيل البيانات بنجاح**'); </script>";
 

        
    }

		
	
	
	
}




ob_end_flush();
?>




<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>WELCOM  TO  REPORT </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Proficient Login Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type='text/css' media="all" />
<!-- /css -->
</head>
<body>
<div class="overlay">
	<h1 class="w3layouts agileits">تقرير لاتصالات اليوميه  </h1>
	<div class="content-w3ls agileits">
		<img src="images/girl.jpg" alt="" class="user-wthree">

		<form action="report.php" method="post">

			<div class="form-group1-agile agile-info">
                
                
                
                <!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>


<div class="dropdown">
  <button class="dropbtn">click me  </button>
         <br> 
  <div class="dropdown-content">
    <a href="show/table">تقرير الاتصالات اليوميه</a>
  </div>
</div>



</body>
</html>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

				<input type="text"  name="name" value="اسم العميل" onfocus="this.value = '';" 
				onblur="if (this.value == '') {this.value = 'اسم العميل';}">

			</div>
            
				<div class="form-group1-agile agile-info">

				<input type="text"  name="number" value="رقم التليفون" onfocus="this.value = '';" 
				onblur="if (this.value == '') {this.value = 'رقم التليفون';}"  pattern="^[0-9]{11}$" title='Phone Number (Format: +012(11رقم))' tabindex="1" autofocus="autofocus" required>


				


			</div>
            
            <div class="form-group1-agile agile-info">

				<input type="text"  name="house" value=" الوحده" onfocus="this.value = '';" 
				onblur="if (this.value == '') {this.value = ' الوحده';}">

			</div>
            
            <div class="form-group1-agile agile-info">

				<input type="text"  name="wasela" value="  عن طريق" onfocus="this.value = '';" 
				onblur="if (this.value == '') {this.value = '  عن طريق';}">

			</div>
            
             <div class="form-group1-agile agile-info">

				<input type="text"  name="da" value=" المطلوب" onfocus="this.value = '';" 
				onblur="if (this.value == '') {this.value = ' المطلوب';}">

			</div>





<!------------------------------------------------------------>


            <div class="form-group1-agile agile-info">

				<input type="text"  name="email" value=" البريد الكترونى" onfocus="this.value = '';" 
				onblur="if (this.value == '') {this.value = ' البريد الكترونى';}" >

			</div>

<div class="form-group1-agile agile-info">

				<input type="text"  name="wats" value=" رقم الواتس" onfocus="this.value = '';" 
				onblur="if (this.value == '') {this.value = ' رقم الواتس';}">

			</div>


<div class="form-group1-agile agile-info">

				<input type="text"  name="malhoza" value=" ملاحظات" onfocus="this.value = '';" 
				onblur="if (this.value == '') {this.value = ' ملاحظات';}">

			</div>



<!-- -------------------------------------------------------------------------------------->











			
			<div class="form-group3-agile wthree">
				<input type="checkbox" id="brand" value="">
				<!--<label for="brand"><span></span> Keep Me Logged In?</label>-->
			</div>
			<input type="submit" value="SEND" name="send">
		</form>
	
	</div>
	<div class="footer-w3ls w3-agile">
	<!--	<p class="w3-agileits">© 2017 Proficient Login Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>-->
	</div>	
</div>
<video autoplay loop id="video-background" poster="video/city.jpg" muted>
  <source src="video/city.mp4" type="video/mp4">
</video>	
<!-- js -->
<script src="js/modernizr.min.js"></script>
<!-- /js -->
</body>
</html>
