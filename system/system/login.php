<?php
if (@$_POST['submit'] ){

date_default_timezone_set("Africa/Cairo");
$c=mysql_connect("localhost","estasm5_yousry","4562008");
mysql_select_db("estasm5_users",$c);
extract($_REQUEST); 

$password=$_POST['pass'];
$user=$_POST['name'];


$result=mysql_query("select * from users where user='$user' and pass='$password'");

if(mysql_num_rows($result))
{

	  
session_start();
$_SESSION['logindata']=$_POST['name'];

	  
	

	
header('location: index.php');
    
}
else
{

  echo"<div class='alert alert-danger'>";
    echo"<strong>Sorry!</strong> you can't enter user or password is not valid ";
  echo"</div>";


}






}







?>        







<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Estasmer System</a></h1>
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