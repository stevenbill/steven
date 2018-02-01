<?php
ob_start();
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
    

 $name=$_POST['name'];
  $number=$_POST['number'];
    $adress=$_POST['adress'];
$day=$_POST['day'];

$bad=$_POST['bad'];



$sql="insert into  ins (name,number,adress,day,date,seg) values('$name','$number','$adress','$day','$bad','$seg')";
if (@ $_POST['send']) {


  mysql_query($sql); 

 echo "<script type='text/javascript'>alert(' تم ارسال ');</script>";



}








ob_end_flush();
?>





<!doctype html>
<html>
<head>
<title>Profile Login Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Unique Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files  -->
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!-- /font files  -->
<!-- css files -->
<link href="css/animate-custom.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
<div class="header">
	<!--<h1> estasmer </h1>-->
</div>
<div class="content">	
	<section>				
        <div id="container_demo" >
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
				<div id="login" class="animate form">
					<div class="content-img">
						<img src="images/profile.png" alt="img" class="w3l-img">
					</div>
                    <form  action="insert.php"  method="post"> 
                        <h2>ادخل بيانات التصوير </h2> 
                        <p> 
							<label for="username" class="uname" data-icon="u" > الاسم </label>
                            <input id="username" name="name"  type="text" placeholder="الاسم "/>
                        </p>
						<p> 
                            <label for="password" class="youpasswd" data-icon="p"> التلليفون </label>
                            <input id="password" name="number"  type="text" placeholder="التيلفون"  onfocus="this.value = '';" 
				onblur="if (this.value == '') {this.value = 'رقم التليفون';}"  pattern="^[0-9]{11}$" title='Phone Number (Format: +012(11رقم))' tabindex="1" autofocus="autofocus" required>  

                        </p>



                        <p> 
                            <label for="password" class="youpasswd" data-icon="p"> العنوان </label>
                            <input id="password" name="adress"  type="text" placeholder="العنوان" /> 
                        </p>

  <p> 
                            <label for="password" class="youpasswd" data-icon="p"> اليوم </label>
                            <input id="password" name="day" " placeholder="اليوم" /> 
                        </p>




<p> 
                            <label for="password" class="youpasswd" data-icon="p"> الميعاد </label>
                            <input id="password" name="bad"  placeholder="الميعاد" /> 
                        </p>









						</p>
                        <p class="login button"> 
                            <input type="submit" value="send" name="send" /> 
						</p>


   <!-- <a href="table"   target="_blank">اظهار كل بينات</a> -->
      
  </div>
                        <p class="change_link">
							
						<!--	<a href="#toregister" class="to_register">Join us</a>-->
						</p>
                    </form>



                </div>

              

</body>
</html>

