<?php
session_start();
ob_start();




if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}

date_default_timezone_set("Africa/Cairo");

	function con(){
									         
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_mapcompany";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

  

}else{
  
  mysql_error();
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
ob_end_flush();
?>




































<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat Box</title>
<style type="text/css">
<!--
.shout_box {
	background: #627BAE;
	width: 260px;
	overflow: hidden;
	position: fixed;
	bottom: 0;
	right: 20%;
	z-index:9;
}
.shout_box .header .close_btn {
	background: url(images/close_btn.png) no-repeat 0px 0px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .close_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -16px;
}

.shout_box .header .open_btn {
	background: url(images/close_btn.png) no-repeat 0px -32px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .open_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -48px;
}
.shout_box .header{
	padding: 5px 3px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: bold;
	color:#fff;
	border: 1px solid rgba(0, 39, 121, .76);
	border-bottom:none;
	cursor: pointer;
}
.shout_box .header:hover{
	background-color: dodgerblue;
}
.shout_box .message_box {
	background: #FFFFFF;
	height: 200px;
	overflow:auto;
	border: 1px solid #CCC;
}
.shout_msg{
	margin-bottom: 10px;
	display: block;
	border-bottom: 1px solid #F3F3F3;
	padding: 0px 5px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	color:#7C7C7C;
}
.message_box:last-child {
	border-bottom:none;
}
time{
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: normal;
	float:right;
	color: #D5D5D5;
}
.shout_msg .username{
	margin-bottom: 10px;
	margin-top: 10px;
}
.user_info input {
	width: 98%;
	height: 25px;
	border: 1px solid #CCC;
	border-top: none;
	padding: 3px 0px 0px 3px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
}
.shout_msg .username{
	font-weight: bold;
	display: block;
}
-->
</style>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('shout.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box

});

</script>
    
</head>

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



<body>
	<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
	
	<div class="content">
	<div class="back-to-article"></div>

	</div>
<body>
    <!--
<div class="shout_box">
<div class="header">Maptec group  <div class="close_btn">&nbsp;</div></div>
  <div class="toggle_chat">
  <div class="message_box">
    </div>
    <div class="user_info">
    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
   <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
    </div>
    </div>
</div>-->
</body>
</html>



<!DOCTYPE html>
<html>
  <head>
        <title>Maptec system</title>
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
	                 <h1><a href="index.php"> Maptec system
                     
                     
                     
                     
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
	                         
                            <li><a href="destroy.php" name="logout">Logout</a>  </li>
                            








                            
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
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i>     home</a></li>
                    
                   <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>   Insert Data  
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                             
                          
                             
                             <?php 
                            con();
                                
                    $sql2="SELECT * FROM users where user='$seg' " ;
$q2=mysql_query($sql2) ;
    
    while($row1=mysql_fetch_array($q2)){
         $companylist = $row1['companylist'];
         $ContactList = $row1['ContactList']; 
          $Callandorder = $row1['Callandorder'];
         $Companyfax = $row1['Companyfax'];
         
        
    }
                
                         
           
     echo " <li><a href='companylist.php' class='btn' $companylist> company list  </a></li>";
                             
                               echo"<li><a href='list.php' class='btn' $ContactList> Contact List  </a></li>";
                             
                               echo"<li><a href='call.php' class='btn' $Callandorder> Call and order  </a></li>";
                             
                             
                               echo"<li><a href='fax.php' class='btn' $Companyfax> Company fax  </a></li>";
                             

 
     
     
    
  

                 
                            
                            
  
                            ?>
                           
                          
                           

                           
                              
                             
                        </ul>
                    </li>





                      <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>   Data show    
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                             
                          
                             
                       
                             
                            <!--<li><a href="form2/dow.php" class="btn btn-default btn-lg disabled" role="button"> تحميل   </a></li>-->
                                         <?php 
                            con();
                       
                              $sql3="SELECT * FROM users where user='$seg' " ;
$q3=mysql_query($sql3) ;
    
    while($row1=mysql_fetch_array($q3)){
         $showcompanylist = $row1['showcompanylist'];
         $showContactList = $row1['showContactList']; 
          $showCallandorder = $row1['showCallandorder'];
         $showCompanyfax = $row1['showCompanyfax'];
         
        
    }
                
                         
           
     echo " <li><a href='show.php' class='btn' $showcompanylist>  Company List   </a></li>";
                             
                               echo"<li><a href='showcall.php' class='btn' $showCallandorder> Call and order </a></li>";
                             
                               echo"<li><a href='showlist.php' class='btn' $showContactList> Contact List </a></li>";
                             
                             
                               echo"<li><a href='faxshow.php' class='btn' $showCompanyfax> Company fax   </a></li>";
                               
                                echo"<li><a href='showemail.php' class='btn' $showshowemail.php> Email Sent   </a></li>";
                                 echo"<li><a href='mailtest/up/tracker/showbademail.php' class='btn' $showshowemail.php> wrong email  </a></li>";
                                  echo"<li><a href='mailtest/up/tracker/showproemail.php' class='btn' $showshowemail.php> Email processing   </a></li>";
                             
                               echo"<li><a href='mailtest/up/tracker/report.php' class='btn' $showshowemail.php> Email report   </a></li>";

 

                 
                            
                            
  
                            ?>
                          
                           
                              
                              
                             
                        </ul>
                    </li>
            <?php 
                            con();
                      $sql4="SELECT * FROM users where user='$seg' " ;
$q4=mysql_query($sql4) ;
    
    while($row1=mysql_fetch_array($q4)){
         $uplode = $row1['upload'];
    
         
        
    }
                    echo" <li class='submenu'>";
                        echo" <a href='#'>";
                           echo" <i class='glyphicon glyphicon-list'></i>    Upload Data  ";
                           echo"<span class='caret pull-right'></span>";
                         echo "</a>";
                       
                        echo"<ul>";
                           echo" <li><a href='uplode/testfax.php' class='btn btn-default btn-lg' role='button' $uplode> Fax Upload    </a></li>";

                            
                               

                         
                     
                             
                       echo"</ul>";
                    echo"</li>";
                    
                    
                    
                    
                    echo" <li class='submenu'>";
                        echo" <a href='#'>";
                           echo" <i class='glyphicon glyphicon-list'></i>    Send email  ";
                           echo"<span class='caret pull-right'></span>";
                         echo "</a>";
                       
                        echo"<ul>";
                           echo" <li><a href='mail.php' class='btn btn-default btn-lg' role='button' $uplode> Send email    </a></li>";
                           
                                  echo" <li><a href='../mailtest/up/tracker/server2.php' class='btn btn-default btn-lg' role='button' $uplode> auto email    </a></li>";
                                  
                               
                                    
                                    
                                     echo" <li><a href='../mailtest/up/tracker/mailtest.php' class='btn btn-default btn-lg' role='button' $uplode> attach email      </a></li>";

                            
                               

                         
                     
                             
                       echo"</ul>";
                    echo"</li>";
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    ?>
                    
                    <!--
                    <li><a href="table/index.php"><i class="glyphicon glyphicon-calendar"></i> تقررير المخازن</a></li>
                    
                     <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> اظهار الفواتير
                            <span class="caret pull-right"></span>
                         </a>
                       
                         <ul>
                            <li><a href="fatora/fatora.php">   فواتير  </a></li>
                        
                        </ul>
                    </li>
                   
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> مرتجعات
                            <span class="caret pull-right"></span>
                         </a>
                       
                         <ul>
                            <li><a href="mortag.php">مسح  فتوره من مخزن  خالصص </a></li>
                            <li><a href="amel.php">مرتجع كل الببضاعه من العميل</a></li>
                               <li><a href="ahmed2.php">مرتجع عدد معين من العميل</a></li>
                               <li><a href="ahmed.php">مرتجع من المخزن</a></li>
                           
                        </ul>
                    </li>-->
       

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    
  </body>
</html>



</body>
</html>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
   

       



    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../dist/bootstrap-session-timeout.js"></script>

    <script>
    $.sessionTimeout({
        keepAliveUrl: 'keep-alive.html',
        logoutUrl: 'login.php',
        redirUrl: 'destroy.php',
        warnAfter: 70000,
        redirAfter: 90000,
        countdownBar: true
    });
    </script>
</body>

</html>

