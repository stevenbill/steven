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
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
      <script>
      
      
      
      </script>
    <title>Administration Maptec</title>
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
	                         <h1><a href="add.php">Administration Maptec</a></h1>
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
    
<!--                                                                                   -->
				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">  New User</div>
							
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
								  	<li class="active"><a href="#tab1" data-toggle="tab">Data user</a></li>
									<!--<li><a href="#tab2" data-toggle="tab">Second</a></li>-->
									<li><a href="#tab3" data-toggle="tab">Company List</a></li>
                                    <li><a href="#tab4" data-toggle="tab">formes</a></li>
                                    <li><a href="#tab5" data-toggle="tab">Contact List</a></li>
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
										    <label for="inputPassword3" class="col-sm-2 control-label">Email </label>
										    <div class="col-sm-10">
											  <input type="email" class="form-control" id="inputPassword3" placeholder="Email" name="Email" required> 
											  

											  
											  
											</div>

											
											
											
										  </div>
                                          
                                            <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">   </label>
										    <div class="col-sm-10">
											  
											  

											  
											  
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
											<legend> Denied list for Company List:  </legend>

											<div class="form-group">
													<div class="col-md-10">
													

                                                               <ul class="main">
    <li><input type="checkbox" id="select_all" /> Select all</li>
    <ul>
   
      
    </ul>
</ul>
     
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        

													
                                                       <label class="checkbox-inline">
														<input type="checkbox" name="Type" value="disabled" class="checkbox"> 
														    Type:</label>
                                                        
													

													 <label class="checkbox-inline" >
                                                         <input type="checkbox" name="Brand" value="disabled" class="checkbox"> 
														    Brand:</label>
														</label>



													 <label class="checkbox-inline" >
														<input type="checkbox" name="Dep" value="disabled" class="checkbox"> 
													   Dep:</label>
                                                
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Ar_Name" value="disabled" class="checkbox"> 
													   Ar_Name:</label>
                                                
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="En_Name" value="disabled" class="checkbox"> 
													   En_Name:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Field_of_Work" value="disabled" class="checkbox"> 
													   	Field_of_Work:</label>
                                                
                                                 <label class="checkbox-inline" >
														<input type="checkbox" name="fax1" value="disabled" class="checkbox"> 
													   	fax1:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="fax2" value="disabled" class="checkbox"> 
													   	fax2:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="fax3" value="disabled" class="checkbox"> 
													   	fax3:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Phone1" value="disabled" class="checkbox"> 
													   	Phone1:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Phone2" value="disabled" class="checkbox"> 
													   	Phone2:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Phone3" value="disabled" class="checkbox"> 
													   	Phone3:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="mobile1" value="disabled" class="checkbox"> 
													   	mobile1:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="mobile2" value="disabled" class="checkbox"> 
													   	mobile2:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="mobile3" value="disabled" class="checkbox"> 
													   	mobile3:</label>
                                                <br>  <br>  <br>
                                                 <label class="checkbox-inline" >
														<input type="checkbox" name="EMail1" value="disabled" class="checkbox"> 
													   	EMail1:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="EMail2" value="disabled" class="checkbox"> 
													   	EMail2:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="EMail3" value="disabled" class="checkbox"> 
													   	EMail3:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="oldURL" value="disabled" class="checkbox"> 
													   	oldURL:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Url" value="disabled"class="checkbox"> 
													   	Url:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Address" value="disabled" class="checkbox"> 
													   	Address:</label>
                                                 <label class="checkbox-inline" >
														<input type="checkbox" name="Delet" value="yes"class="checkbox"> 
													   	Delete:</label>
													   	
													   	
													   	   <label class="checkbox-inline" >
														<input type="checkbox" name="Editfax" value="yes"class="checkbox"> 
													   	Edit fax:</label>
													   	
													   	
													   	   <label class="checkbox-inline" >
														<input type="checkbox" name="Deletfax" value="yes"class="checkbox"> 
													   	Delete fax:</label>


														  
												</div>
											</div>
											<br><br>
											<hr>
<!--
											<div class="form-group">
												<label class="col-md-2 control-label">     </label>
												<div class="col-md-10">
													<div class="checkbox">
														<label>
															<input type="checkbox">
															   </label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox">
															 </label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox">
															 </label>
													</div>
												</div>
											</div>
											-->
											
											<div class="form-group">
												<label class="col-md-2 control-label">  </label>
												<div class="col-md-10">
													<label class="checkbox-inline">
														
														</label>

													<label class="checkbox-inline">
															
</label>

														 <label class="checkbox-inline">
														 	
														</label>


														 <label class="checkbox-inline">
															
														</label>
                                                                                                                                              
                                        <label class="checkbox-inline" >
													
													  </label>
                                                                                    


<label class="checkbox-inline">
															
													</label>


													


															
												</div>

												
                                                     
                                                                                                                                        
											</div>
											
										</fieldset>
								    </div>

<!--------------------                                                    ----------------------------------------->

                        		<div class="tab-pane" id="tab4">
										<fieldset>
											<legend> Forms Denied </legend>

											<div class="form-group">
											
													  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">    </label>
										    <div class="col-sm-10">
											
											  

											   <label class="checkbox-inline" >
														<input type="checkbox" name="companylist" value="disabled" class="checkbox"> 
													   	company list:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="ContactList" value="disabled" class="checkbox"> 
													   	Contact List:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Callandorder" value="disabled"class="checkbox"> 
													   	Call and order:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Companyfax" value="disabled" class="checkbox"> 
													   	Company fax:</label>
                                                
                                                     <label class="checkbox-inline" >
														<input type="checkbox" name="upload" value="disabled" class="checkbox"> 
													   	upload fax:</label>
                                                <br> <br>
                                                
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="showcompanylist" value="disabled" class="checkbox"> 
													   	show company list:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="showContactList" value="disabled" class="checkbox"> 
													   	show Contact List:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="showCallandorder" value="disabled"class="checkbox"> 
													   	show Call and order:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="showCompanyfax" value="disabled" class="checkbox"> 
													   	show Company fax:</label>
                                                
                                                
                                                
                                                
                                                
											  
											</div>

											
										  </div>
                                          
                                                
                                                
														  
												</div>
                                            
                                            
                                            	  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">     </label>
										    <div class="col-sm-10">
											  
											  

											  
											  
											</div>

											
										  </div>
                                            
                                            <br> <br>
                                            
                                          <div class="form-group">
										    <div class="col-sm-offset-2 col-sm-10">
										      <div class="checkbox">
										        <label>
										          
										        </label>
										      </div>
										     
				
												

                                                
                                                
												
													
													
												</div>

												
											</div>
                                            	
                                            
											</div>
                                    
                                    
                                    
                                         		<div class="tab-pane" id="tab5">
										<fieldset>
											<legend> Contact List </legend>

											<div class="form-group">
											
													  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">    </label>
										    <div class="col-sm-10">
											
											  

											   <label class="checkbox-inline" >
														<input type="checkbox" name="companylist1" value="disabled" class="checkbox"> 
													   	Company list:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Name" value="disabled" class="checkbox"> 
													   	Name:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Postion" value="disabled"class="checkbox"> 
													   	Postion:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Phone01" value="disabled" class="checkbox"> 
													   	Phone 01:</label>
                                                <br> <br>
                                                
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Phone02" value="disabled" class="checkbox"> 
													   	Phone 02:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Mobile01" value="disabled" class="checkbox"> 
													   	Mobile 01:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Mobile02" value="disabled"class="checkbox"> 
													   	Mobile 02:</label>
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Email_01" value="disabled" class="checkbox"> 
													   	Email_01:</label>
                                                
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Email_02" value="disabled" class="checkbox"> 
													   Email_02:</label>
                                                
                                                <label class="checkbox-inline" >
														<input type="checkbox" name="Email_03" value="disabled" class="checkbox"> 
													  Email_03:</label>
                                                
                                                
                                                
                                                
                                                
											  
											</div>

											
										  </div>
                                          
                                                
                                                
														  
												</div>
                                            
                                            
                                            	  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">     </label>
										    <div class="col-sm-10">
											  
											  

											  
											  
											</div>

											
										  </div>
                                            
                                            <br> <br>
                                            
                                          <div class="form-group">
										    <div class="col-sm-offset-2 col-sm-10">
										      <div class="checkbox">
										        <label>
										          
										        </label>
										      </div>
										     
				
												

                                                
                                                
												
													
													
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
$db="estasm5_mapcompany";


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
                                $Type =$_POST['Type'];
                                $Brand =$_POST['Brand'];
                                $Dep=$_POST['Dep'];
                                $Ar_Name=$_POST['Ar_Name'];
                                $En_Name=$_POST['En_Name'];
                                $Field_of_Work =$_POST['Field_of_Work'];
                                $fax1 =$_POST['fax1'];
                                $fax2 =$_POST['fax2'];
                                $fax3 =$_POST['fax3'];
                                $Phone1=$_POST['Phone1'];
                                $Phone2=$_POST['Phone2'];
                                $Phone3=$_POST['Phone3'];
                                $mobile1=$_POST['mobile1'];
                                $mobile2=$_POST['mobile2'];
                                $mobile3=$_POST['mobile3'];
                                $EMail1=$_POST['EMail1'];
                                $EMail2=$_POST['EMail2'];
                                $EMail3=$_POST['EMail3'];
                                $oldURL=$_POST['oldURL'];
                                $Url=$_POST['Url'];
                                $Address =$_POST['Address'];
                                    $Delet =$_POST['Delet'];
                                    $Email =$_POST['Email'];
                                    
                                    
                                    $companylist =$_POST['companylist'];
                                   $ContactList =$_POST['ContactList'];
                                    $Callandorder =$_POST['Callandorder'];
                                    $Companyfax =$_POST['Companyfax'];
                                    
                                    /*************************************/
                                     $showcompanylist =$_POST['showcompanylist'];
                                   $showContactList =$_POST['showContactList'];
                                    $showCallandorder =$_POST['showCallandorder'];
                                    $showCompanyfax =$_POST['showCompanyfax'];
                                        /*******************************************/
                                        $companylist1 =$_POST['companylist1'];
                                        $Name=$_POST['Name'];
                                        $Postion=$_POST['Postion'];
                                        $Phone01=$_POST['Phone01'];
                                        $Phone02=$_POST['Phone02'];
                                        $Mobile01=$_POST['Mobile01'];
                                        $Mobile02=$_POST['Mobile02'];
                                        $Email_01=$_POST['Email_01'];
                                        $Email_02=$_POST['Email_02'];
                                        $Email_03=$_POST['Email_03'];
                                        $upload=$_POST['upload'];
                                        $Editfax =$_POST['Editfax'];
                                        $Deletfax  =$_POST['Deletfax'];
                                    
								
								
							
								

								

								if (@$_POST['send'] ){
									con();

$sql="insert into users (user,pass,Type,Brand,Dep,Ar_Name,En_Name,Field_of_Work,fax1,fax2,fax3,Phone1,Phone2,Phone3,mobile1,mobile2,mobile3,EMail1,EMail2,EMail3,oldURL,Url,Address,delet,Email,companylist,ContactList,Callandorder,Companyfax,showcompanylist,showContactList,showCallandorder,showCompanyfax,companylist1,Name,Postion,Phone01,Phone02,Mobile01,Mobile02,Email_01,Email_02,Email_03,upload,faxedit,faxdelet) values('$user','$pass','$Type','$Brand','$Dep','$Ar_Name','$En_Name','$Field_of_Work','$fax1','$fax2','$fax3','$Phone1','$Phone2','$Phone3','$mobile1','$mobile2','$mobile3','$EMail1','$EMail2','$EMail3','$oldURL','$Url','$Address','$Delet','$Email','$companylist','$ContactList','$Callandorder','$Companyfax','$showcompanylist','$showContactList','$showCallandorder','$showCompanyfax','$companylist1','$Name','$Postion','$Phone01','$Phone02','$Mobile01','$Mobile02','$Email_01','$Email_02','$Email_03','$upload','$Editfax','$Deletfax')";

    

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
