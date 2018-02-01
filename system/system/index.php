<?php
session_start();
date_default_timezone_set("Africa/Cairo");

if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}



// set timeout period in seconds (600 = 10 minutes)
$inactive = 300;
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
    $session_life = time() - $_SESSION['timeout'];
    if($session_life > $inactive)
        { session_destroy(); header("Location: destroy.php"); }
}
$_SESSION['timeout'] = time();



if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }
	function con(){
									         
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_users";


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
	background-color: #627BAE;
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

<body>
<div class="shout_box">
<div class="header">Estasmer group  <div class="close_btn">&nbsp;</div></div>
  <div class="toggle_chat">
  <div class="message_box">
    </div>
    <div class="user_info">
    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
   <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
    </div>
    </div>
</div>
</body>
</html>






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
	                         
                            <li><a href="../system/destroy.php" name="logout">Logout</a>  </li>
                            








                            
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
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> الرئيسيه</a></li>
                    
                   <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>  تسجيل بينات  
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                             
                             <li><a href='http://estasmer.com/system/form2/index.php '>تسجيل العقار></li>
							 <li><a href='http://estasmer.com/system/insert/insert.php'>تسجيل التصوير</a></li>
							  <li><a href='http://estasmer.com/system/report/report.php'> تسجيل لاتصالات </a></li>
							   <li><a href='http://estasmer.com/system/taswg.php'> تسجيل عقد التسويق  </a></li>
								<li><a href='http://estasmer.com/system/ziara/test.php'>'.' تسجيل  الزيارات  </a></li>
                             <?php 
                       
    
 
    
 
   
     

 
                          
                         
                            
  
                            ?>
                           
                          
                           

                           
                              
                             
                        </ul>
                    </li>





                      <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>   اظهار البيانات   
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <!--<li><a href="form2/dow.php" class="btn btn-default btn-lg disabled" role="button"> تحميل   </a></li>-->
                                           
   <li><a href='http://estasmer.com/system/insert/table/'>  اظهار بيانات التصوير</a></li>
    
    <li><a href='http://estasmer.com/system/report/show/table/'> اظهار بيانات  لاتصالات </a></li>
    
    <li><a href='http://estasmer.com/system/form2/show.php'>  اظهار بيانات  العقار  </a></li>
      
      
    <li><a href='http://estasmer.com/system/3ad.php'>  اظهار بيانات  التسويق   </a></li>
      
      
      <li><a href='http://estasmer.com/system/table/search.php'>   بحث فى بيانات    </a>'</li>

         <li><a href='http://estasmer.com/system/saled.php'>  اظهار العقارات المباعه    </a></li>
     <li><a href='http://estasmer.com/system/out.php'>     اظهار العقارات  غير المباعه   </a></li>

     <li>'.'<a href='http://estasmer.com/system/share.php'>      اظهار البيانات المشيره     </a></li>

     

                           
                              
                              
                             
                        </ul>
                    </li>

                     <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>  تحميل  بينات  
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="form2/dow.php" class="btn btn-default btn-lg disabled" role="button"> تحميل   </a></li>

                            
                               

                         
                     
                             
                        </ul>
                    </li>
                    
                    
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
