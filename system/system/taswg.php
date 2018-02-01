<?php
date_default_timezone_set("Africa/Cairo");
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}


	
session_start();

if(!isset($_SESSION['logindata']))
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
	                         <h1><a href="add.php">Estasmer system</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <span class="input-group-btn">
	                        
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
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo "Welcom/".$seg= $_SESSION['logindata'];    ?>          <b class="caret"></b></a>
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
							<div class="panel-title">  عقد التسويق </div>
							
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
                            <li><a href="#tab3" data-toggle="tab">حاله الايجار</a></li>
                                    <li><a href="#tab4" data-toggle="tab"> حاله البيع</a></li>
								</ul>
								 </div>
								  </div>
								</div>
								<div class="tab-content">
								    <div class="tab-pane active" id="tab1">

								   <!-- form-->   <form class="form-horizontal" role="form"   action="taswg.php"  method="POST">    
									                    
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label"> اسم المالك  </label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" id="inputEmail3" placeholder=" اسم المالك " name="malek">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">تليفون لارضى </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder="تليفون لارضى " name="tel"> 
											  

											  
											  
											</div>

											
										  </div>
                                          
                                        <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">موبيل </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3"  name="mob">
											  

											  
											  
											</div>

											
											
											
										  </div>
										  

										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label"> واتس    </label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" id="inputEmail3" placeholder=" واتس " name="wats">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">عنوان سكن المالك </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder="عنوان سكن المالك" name="anwan"> 
											  

											  
											  
											</div>

											





											

											
											
											
										  </div>
                                          
                                            <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">كود الشقه </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3"  name="codeh">
											  

											  
											  
											</div>

											
											
											
										  </div>
										  
										  




											

											
											
									
                                          
                                            <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">العموله </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" name="amola">
											  

											  
											  
											</div>

											
											
											
										  </div>
										  
										  


										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label"> ملاحظات   </label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" id="inputEmail3" placeholder="ملاحظات  " name="malhoza">
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
										         
										        </label>
										      </div>
										      <div class="checkbox">
										        <label>
										        
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
														
												</div>
												<button type="submit" class="btn btn-primary">
												
												</button>
											</fieldset>

											
											
										
								    </div>
									<div class="tab-pane" id="tab3">
										<fieldset>
											<legend>    فى حاله لايجار فقط؟؟؟ </legend>

											<div class="form-group">
											
													  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label"> قيمه الايجار </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder=" قيمه الايجار  " name="rant"> 
											  

											  
											  
											</div>

											
										  </div>
                                          
                                                
                                                
														  
												</div>
                                            
                                            
                                            	  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label"> طريقه الدفع </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder=" طريقه الدفع  " name="pay"> 
											  

											  
											  
											</div>

											
										  </div>
                                            
                                            
                                            
                                             <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">  اقل مده ايجار </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder="  اقل مده ايجار   " name="lerang"> 
											  

											  
											  
											</div>

											
										  </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                             <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">   اكثر مده  ايجار  </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder="  اكثر مده  ايجار      " name="more"> 
											  

											  
											  
											</div>

											
										  </div>
                                            
                                            

                                            
                                            
                                            
                                             <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label"> الزياده السنويه </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder="  الزياده السنويه     " name="zeada"> 
											  

											  
											  
											</div>

											
										  </div>
                                            
                                            
                                            
                                            
                                             <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">  قيمه التامين</label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder="   قيمه التامين      " name="tamen"> 
											  

											  
											  
											</div>

											
										  </div>
                                            
                                            

                                            
                                            
                                            
                                            <br> <br>
                                              
											</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        		<div class="tab-pane" id="tab4">
										<fieldset>
											<legend>    فى حاله البيع فقط؟؟؟ </legend>

											<div class="form-group">
											
													  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">قيمه التسويق بمبلغ قدره   </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder=" قيمه التسويق بمبلغ قدره  " name="tas"> 
											  

											  
											  
											</div>

											
										  </div>
                                          
                                                
                                                
														  
												</div>
                                            
                                            
                                            	  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label"> تسليم العقار خلال  الايام  </label>
										    <div class="col-sm-10">
											  <input type="text" class="form-control" id="inputPassword3" placeholder="  تسليم العقار خلال  الايام   " name="home"> 
											  

											  
											  
											</div>

											
										  </div>
                                            
                                            <br> <br>
                                            
                                            <div class="form-group">
												<label class="col-md-2 control-label">   نوع العقد  </label>
												<div class="col-md-10">
                                                    
                                                     <div class="radio">
      <label><input type="radio" name="sale" value="بيع"> بيع </label>
    </div>
    <div class="radio">
      <label><input type="radio" name="rank" value=" ايجار قانون جديد  "> ايجار قانون جديد    </label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="mafrosh" value="ليجار مفروش " > ليجار مفروش    </label>
    </div>
                                                    
                                                    
													
													</div>
													
													
												</div>
											</div>
                                            	
                                            
											</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
											<br><br>
											<hr>

											
										</fieldset>
								    </div>
									<ul class="pager wizard">
										<li class="previous first disabled" style="display:none;"><a href="javascript:void(0);">First</a></li>
										<li class="previous disabled"><a href="javascript:void(0);">Previous</a></li>
										<li class="next last" style="display:none;"><a href="javascript:void(0);">Last</a></li>
										  <li class="next"><a href="javascript:void(0);">Next</a></li>
										  


									<!-- Split button -->
<div <div class="btn-toolbar text-center well">
	
 

	
	  <input type="submit" class="btn btn-success"class="sp" name="send" value="send">
  
									</ul>
</form>

  
  
								<?php 


/**************************************************enter new user************************************************************************************/
								function con(){
				         
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

  

}else{
  
  mysql_error();
}
    
								}

								$malek=$_POST['malek'];  
									$tel=$_POST['tel']; 
									$mob = $_POST['mob'];
									$wats = $_POST['wats']; 
									$anwan =  $_POST['anwan']; 
									$codeh =  $_POST['codeh']; 
								$date=date("Y/m/d h:i:sa") ;
								$amola = $_POST['amola']; 
								$malhoza = $_POST['malhoza']; 
								$rant =  $_POST['rant']; 
								$pay =  $_POST['pay']; 
								$lerang = $_POST['lerang']; 
								$zeada  = $_POST['zeada']; 
								$tamen  = $_POST['tamen']; 
							     $more   = $_POST['more']; 
                                       $tas  = $_POST['tas']; 
                                       $home  = $_POST['home']; 
                                       $sale  = $_POST['sale'];
                                       $rank  = $_POST['rank']; 
                                       $mafrosh = $_POST['mafrosh']; 

							

								

								if (@$_POST['send'] ){
									con();

$sql="insert into taswg (malek,tel,mob,wats,anwan,codeh,date,amola,malhoza,rant,pay,lerang,zeada,tamen,more,tas,home,sale,rank,mafrosh,seg) values('$malek','$tel','$mob','$wats','$anwan','$codeh','$date','$amola','$malhoza','$rant','$pay','$lerang','$zeada','$tamen','$more','$tas','$home','$sale','$rank','$mafrosh','$seg')";

    

  mysql_query($sql); 

  echo"<div class='alert alert-success'>";
   echo" <strong>Success!</strong> 
The success of adding a new employee";
  echo"</div>";



	
	
 
    
}

/**************************************************************************************************************************************/

/*******************************************************delete user********************************************************************************/

								
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
