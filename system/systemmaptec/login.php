<?php
session_start();
date_default_timezone_set("Africa/Cairo");


if (@$_POST['submit'] ){


$c=mysql_connect("localhost","estasm5_yousry","4562008");
mysql_select_db("estasm5_mapcompany",$c);
extract($_REQUEST); 

$password=$_POST['pass'];
$user=$_POST['name'];


$result=mysql_query("select * from users where user='$user' and pass='$password'");

if(mysql_num_rows($result))
{

	  
	 
	 $_SESSION['logindata']=$_POST['name'];

	  
	

	
    header('location: index.php');
    
}
else
{
function ahmed(){
    date_default_timezone_set("Africa/Cairo");
  echo"<div class='alert alert-danger'>";
    echo"<strong>Sorry!</strong> you can't enter user or password is not valid ";
  echo"</div>";
}

}






}

	
	 echo"<style>";

echo".no-js #loader { display: none;  }";
echo".js #loader { display: block; position: absolute; left: 100px; top: 0; }";
echo".se-pre-con {";
	echo"position: fixed;";
	echo"left: 0px;";
	echo"top: 0px;";
	echo "width: 100%;";
	echo"height: 100%;";
echo"	z-index: 9999;";
	echo"background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;";
echo"}";
echo"</style>";

echo"<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>";
echo"<script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js'></script>";
echo"<script>";
	
echo"	$(window).load(function() {";
		
		echo"$('.se-pre-con').fadeOut('slow');;";
	echo"});";
echo"</script>";

echo"</head>";

echo"<body>";

	echo"<div class='se-pre-con'></div>";

	
	echo"<div class='content'>";
	echo"<div class='back-to-article'></div>";

	echo"</div>";
	





?>        





















<!DOCTYPE html>
<html>
  <head>
    <title>estasmer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

  <link rel="icon" type="image/jpg" href="ahmed.jpg">

  
      <style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>

</head>

<body>
	<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
	
	<div class="content">
	<div class="back-to-article"></div>

	</div>
	
    
    
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Maptec System</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
							<h6>Login</h6>
											<form action="login.php"  method="POST"> 
			                <input class="form-control" type="text" placeholder="Your User" name="name">
			                <input class="form-control" type="password" placeholder="Password" name="pass">
			            
			                <div class="action">
													
													 <input class="btn btn-primary signup"  type="submit"name="submit" value="login">
													
							</div>
						
											</form>  
												
			            </div>
			           
							</div>
							 <?php  @ahmed(); ?>
							

			        <div class="already">
			          
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>