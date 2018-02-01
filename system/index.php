<?php
if ( @$_GET['order']) {
ob_start();
date_default_timezone_set("Africa/Cairo");
header("Location: http://estasmer.com/request.php");
ob_end_flush();
}
if (@$_GET['send']){
$to =$_GET['email'];
$subject = "estasmer web site";
$txt = "شكرا لتواصللك مع شركه استثمر";
$headers = "From: ESTASMER request@estasmer.com" . "\r\n" .
"CC:  request@estasmer.com";

mail($to,$subject,$txt,$headers);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Coming Soon ESTASMER</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" />	
    
    <!-- =======================================================
        Theme Name: ComingSoon
        Theme URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	
	<div class="title">
		<div class="container">	
			<div class="col-lg-12 welcome">
				<h1>WELCOME TO  ESTASMER</h1>
				<p><span> website is under construction.</span><br>We`ll be here soon with  new awesome site</p>
			</div>
		</div>
	</div>
	
	<div class="timer">
		<div class="container">		
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<!-- Countdown dashboard start -->
					<div id="countdown_dashboard">
						<div class="countDown">
							<div class="dash days_dash">
								<span class="dash_title">days</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>

							<div class="dash hours_dash">
								<span class="dash_title">hours</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>

							<div class="dash minutes_dash">
								<span class="dash_title">minutes</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>

							<div class="dash seconds_dash">
								<span class="dash_title">seconds</span>
								<div class="digit">0</div>
								<div class="digit">0</div>
							</div>
						</div>
					</div>
					<!-- Countdown dashboard end -->	
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">	
		<div class="col-lg-12">
			<form class="form-horizontal">
				<div class="text-center">
					<div class="subscribe">
						<form action="index.php" method="post" id="subscribe_form">

                            
							<input type="email" name="email" id="email_field" class="faded" value="" placeholder="ادخل ايميلك "        />
                            
                            <input type="submit" name="send" id="subscribe_button" value="ارسال" />
                              <input type="submit" id="subscribe_button" value=" سجل طلب العقار" name="order" />
        
						</form>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="social-icon">
		<div class="container">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/estasmer/" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/estasmer1" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="mailto:info@estasmer.com" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						
				</div>
			</div>
		</div>
	</div>
	
	<!-- Footer start here -->
	<footer> 
		<div class="col-md-6 col-md-offset-3">
			<div class="text-center">
				<div class="copyright">
					&copy;Copyright 2011-2017 ESTASMER Egypt .
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=ComingSoon
                        -->
                      <!--  <a href="https://bootstrapmade.com/">ESTASMER </a> by <a href="https://bootstrapmade.com/">ESTASMER </a>-->
                    </div>
				</div>
			</div>	
		</div>		
	</footer>
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
	<script src="js/functions.js"></script>
    
</body>
</html>