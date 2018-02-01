<?php
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}


	
session_start();

if(!isset($_SESSION['admin']))
    {
        header('Location: destroy.php');
    }
												

	
?>



<!DOCTYPE html>


<html>
  <head>
    <title>Administration Bage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	  
	<![endif]-->
	
	
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                         <h1><a href="add.php">Administration Bage</a></h1>
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
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo "Admin/".$seg= $_SESSION['admin'];    ?>          <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">

	                          
	                       <li><a href="destroy.php">Logout</a></li>
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
                    <!-- Main menu 
                    <li><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>-->
                    <li class="current"><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Add users</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> وحدات
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
							<li><a href="saled.php">وحدات الموباعه </a></li>
							<li><a href="out.php">وحدات غير موباعه </a></li>
								<li><a href="map.php">  اماكن الوحدات </a></li>
							
								<li><a href="chart.php">  اجمالى  مبيعات الشركه  </a></li>
                          
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-6">
					  
						
			  				<div class="panel-heading">
					          
								</div>

			  				</div>
			  			</div>
					</div>
				</div>
<!--                                                                                   -->
				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">  New Employee</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<div id="rootwizard">
								<div class="navbar">
								  <div class="navbar-inner">
								    <div class="container">
								<ul class="nav nav-pills">
								  	<li class="active"><a href="#tab1" data-toggle="tab">Step1</a></li>
									<!--<li><a href="#tab2" data-toggle="tab">Second</a></li>-->
									<li><a href="#tab3" data-toggle="tab">Step2</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Step3</a></li>
								</ul>
								 </div>
								  </div>
								</div>
								<div class="tab-content">
								    <div class="tab-pane active" id="tab1">

								   <!-- form-->   <form class="form-horizontal" role="form"   action="add.php"  method="POST">                     
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">User Name  </label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" id="inputEmail3" placeholder="User Name " name="user">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Password </label>
										    <div class="col-sm-10">
											  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass"> 
											  

											  
											  
											</div>

											
											
											
										  </div>
                                          
                                            <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">E-mail </label>
										    <div class="col-sm-10">
											  <input type="email" class="form-control" id="inputPassword3"  pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[maptec]+(\.[a-zA-Z0-9-]+)*" E-mail" name="email" title="exam:***@maptec.com">
											  

											  
											  
											</div>

											
											
											
										  </div>
                                          
										  <div class="form-group">
										  <!--  <label class="col-sm-2 control-label">Textarea</label>-
										    <div class="col-sm-10">
										      <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
										    </div>
										  </div>
										  <div class="form-group">-->
										    <label class="col-sm-2 control-label"></label>
										    <div class="col-sm-10">
										      
										    </div>
										  </div>-
										  <div class="form-group">
										    <div class="col-sm-offset-2 col-sm-10">
										      <div class="checkbox">
										        <label>
										          <input type="checkbox"> Checkbox
										        </label>
										      </div>
										      <div class="checkbox">
										        <label>
										          <input type="checkbox"> Checkbox
										        </label>
										      </div>
										    </div>
										  </div>

				<!--</form> -->						
								    </div>
								   <div class="tab-pane" id="tab2">
								      <form class="form-inline" role="form">
							
											<fieldset>
												<div class="form-group col-sm-3">
												
												
												</div>
												<div class="form-group  col-sm-3">
													
													


												



												
												<div class="checkbox col-sm-3">
													<label>
														<input type="checkbox" class="checkbox">
														<span>Remember me </span></label>
												</div>
												<button type="submit" class="btn btn-primary">
													Sign in
												</button>
											</fieldset>

											
											
										
								    </div>
									<div class="tab-pane" id="tab3">
										<fieldset>
											<legend>  صلاحيات الموظف</legend>

											<div class="form-group">
												<label class="col-md-2 control-label">تسجيل البيانات</label>
												<div class="col-md-10">
													<label class="checkbox-inline">
														<input type="checkbox" name="inserthome" value="http://estasmer.com/pro/map/form2/index.php"> 
														 ادخال بيانات العقار</label>

													<label class="checkbox-inline">
														<input type="checkbox"name="insertcatch" value="http://estasmer.com/pro/map/insert/insert.php" >
														 تسجيل التصوير</label>

													<label class="checkbox-inline" >
														<input type="checkbox" name="insertcall" value="http://estasmer.com/pro/map/report/report.php">
													 تسجيل لاتصالات </label>

													 <label class="checkbox-inline" >
														<input type="checkbox" name="insertcall" value="http://estasmer.com/pro/map/taswg.php">
													 تسجيل عقد التسويق </label>



													 <label class="checkbox-inline" >
														<input type="checkbox" name="ziara3" value="http://estasmer.com/pro/map/ziara/test.php">
													 تسجيل الزيارات </label>


														  
												</div>
											</div>
											<br><br>
											<hr>
<!--
											<div class="form-group">
												<label class="col-md-2 control-label">  صلحيات الموظف  </label>
												<div class="col-md-10">
													<div class="checkbox">
														<label>
															<input type="checkbox">
															 ادخال بيانات العقار</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox">
															 تسجيل التصوير</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox">
															 تسجيل لاتصالات </label>
													</div>
												</div>
											</div>
											-->
											
											<div class="form-group">
												<label class="col-md-2 control-label">اظهار البيانات</label>
												<div class="col-md-10">
													<label class="checkbox-inline">
														<input type="checkbox" name="showcall" value="http://estasmer.com/pro/map/insert/table/">
														 اظهار بيانات لاتصال </label>

													<label class="checkbox-inline">
														<input type="checkbox" name="showcatch" value="http://estasmer.com/pro/map/report/show/table/"> 	
														 اظهار بيانات التصوير </label>

														 <label class="checkbox-inline">
														<input type="checkbox" name="showhome" value="http://estasmer.com/pro/map/form2/show.php"> 	
														 اظهار بيانات العقار </label>


														 <label class="checkbox-inline">
														<input type="checkbox" name="showhomesaled" value="http://estasmer.com/pro/map/saled.php"> 	
														 اظهار بيانات العقارات المباعه </label>
                                                                                                                                              
                                        <label class="checkbox-inline" >
														<input type="checkbox" name="ad" value="http://localhost/pro/map/3ad.php">
													  اظهار بيانات عقد التسويق  </label>
                                                                                    


<label class="checkbox-inline">
														<input type="checkbox" name="showhomenotsaled" value="http://estasmer.com/pro/map/out.php"> 	
														 اظهار بيانات العقارات غير مباعه </label>


														<input type="checkbox">
															البحث فى البيانات </label>
															<input type="checkbox" name="search" value="http://estasmer.com/pro/search.php">


															<label class="checkbox-inline">
														<input type="checkbox"  name="shared" value="http://estasmer.com/pro/map/share.php">
														 اظهار بيانات مشيره </label>
												</div>

												
                                                     
                                                                                                                                        
											</div>
											
										</fieldset>
								    </div>

<!--------------------                                                    ----------------------------------------->

                        		<div class="tab-pane" id="tab4">
										<fieldset>
											<legend>    صلاحيات اظهار بيانات موظف الى موظف</legend>

											<div class="form-group">
											
													  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">   موظف لاول    </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder="    موظف لاول  " name="seeone"> 
											  

											  
											  
											</div>

											
										  </div>
                                          
                                                
                                                
														  
												</div>
                                            
                                            
                                            	  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">     الموظف الثانى  </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder="      الموظف الثانى   " name="seetow"> 
											  

											  
											  
											</div>

											
										  </div>
                                            
                                            <br> <br>
                                            
                                          <div class="form-group">
										    <div class="col-sm-offset-2 col-sm-10">
										      <div class="checkbox">
										        <label>
										          <input type="checkbox" name="seeall" value="seeall"> اظهار جميع بيانات
										        </label>
										      </div>
										     
												<?php
												con();
												
    
$sql="SELECT * FROM users " ;
	$sq="
ALTER TABLE users ADD see1 text";
	$s= mysql_query($sq) ;
$q=mysql_query($sql) ;
  while($row=mysql_fetch_array($q)){

		$x = $row['user'];
												echo" <div class='checkbox'>";
										        echo"<label>";
										          echo"<input type='checkbox' value='ahmed' >  " . $row['user'];
														
										        echo "</label>";
										      echo"</div>" ;



$file=fopen($user.'.txt', 'a+');
$read=fread($file, 9000);

fwrite($file,  $row['user'] );
fwrite($file, ",");
fwrite($file,PHP_EOL);



													}
												


/*
	$sql="ALTER TABLE seeusers ADD see1 text;";*/
	

												?>
												
													
													
												</div>

												
											</div>
                                            	
                                            
											</div>
                                        
                                        
                                





















									<ul class="pager wizard">
										<li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>
										<li class="previous disabled"><a href="javascript:void(0);">Previous</a></li>
										<li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
										  <li class="next"><a href="javascript:void(0);">Next</a></li>
										  


									<!-- Split button -->
<div <div class="btn-toolbar text-center well">
	
 

	
	  <input type="submit" class="btn btn-danger"class="sp" value="Delete" name="Delete"> 
		  <input type="submit"  class=" btn btn-primary"class="sp" value="Update">
	
	  <input type="submit" class="btn btn-success"class="sp" name="send" value="New">
  
									</ul>
                                                                                    						  
												
													
													
												</div>
											</div>
                                            	
</form>

  
  
								<?php 


/**************************************************enter new user************************************************************************************/
								function con(){
				         
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="users";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

  

}else{
  
  mysql_error();
}
    
								}
							

								$user= $_POST['user'];
								$pass=$_POST['pass'];
								$email=$_POST['email'];
								$insertcall=$_POST['insertcall'];
								$insertcatch=$_POST['insertcatch'];
								$inserthome=$_POST['inserthome'];
								$dow=$_POST['dow'];
								/*********show**************/
								$showcall=$_POST['showcall'];
								$showcatch=$_POST['showcatch'];
								$showhome=$_POST['showhome'];
								$search=$_POST['search'];
								$showhomesaled = $_POST['showhomesaled'];
								$showhomenotsaled = $_POST['showhomenotsaled'];
								$seeall =  $_POST['seeall'];
								$seeone = $_POST['seeone'];
								$seetow = $_POST['seetow'];
                                $ad =$_POST['ad'];
																$shared =$_POST['shared'];
																$ziara3=$_POST['ziara3']; 

								
							
								

								

								if (@$_POST['send'] ){
									con();

$sql="insert into users (user,pass,email,insertcall,insertcatch,inserthome,dow,showcall,showcatch,showhome,search,showhomesaled,showhomenotsaled,seeall,seeone,seetow,ad,shared,ziara3) values('$user','$pass','$email','$insertcall','$insertcatch','$inserthome','$dow','$showcall','$showcatch','$showhome','$search','$showhomesaled','$showhomenotsaled','$seeall','$seeone','$seetow','$ad','$shared','$ziara3')";

    

  mysql_query($sql); 

  echo"<div class='alert alert-success'>";
   echo" <strong>Success!</strong> 
The success of adding a new employee";
  echo"</div>";


	
	
 
    
}

/**************************************************************************************************************************************/

/*******************************************************delete user********************************************************************************/

								if (@$_POST['Delete'] ){
									con();

$sql="DELETE FROM `users` WHERE user='$user' ";

    

  mysql_query($sql); 


  echo"<div class='alert alert-danger'>";
    echo"<strong>Danger!</strong> The success of Deleting a old employee";
  echo"</div>";




	
	
 
    
}


/***************************************************************************************************************************************************/







								
	


								?>
								</div>	
							
							</div>
		  				</div>
		  			</div>
					</div>
				</div>


	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>
