<?php
session_start();
date_default_timezone_set("Africa/Cairo");
/*
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;

}*/


if(!isset($_SESSION['logindata']))
{
 header('location: destroy.php');
exit;

}


// 10 mins in seconds
$inactive = 900;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive; 

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("Location:destroy.php");     }

$_SESSION['timeout']=time();

?>






<?php
$seg= $_SESSION['logindata'];

$Type=$_POST['Type'];


$DealType=$_POST['DealType'];




$Sector =$_POST['Sector'];

$Area =$_POST['Area'];  

$MinBuildingYear =$_POST['MinBuildingYear'];

$BuildingSide =$_POST['BuildingSide'];

$StreetType = $_POST['StreetType'];





$Address = $_POST['Address'];




$Nearto = $_POST['Nearto'];


$City = $_POST['City'];

$Buildingno  = $_POST['Buildingno'];



$Floorno  = $_POST['Floorno'];

$UnitsinFloor  = $_POST['UnitsinFloor']; 


$Elevatorno  = $_POST['Elevatorno']; 


$BuildingType  = $_POST['BuildingType'];


$ResidentialDeposit  = $_POST['ResidentialDeposit'];   
/*
$UnitsinFloor  = $_POST['UnitsinFloor']; */

$LicenseFloor  = $_POST['LicenseFloor'];  

$Garage  = $_POST['Garage']; 

$AcceptLastFloor  = $_POST['AcceptLastFloor']; 



$Note = $_POST['Note'];

$Verification  = "Yes";
$Status = "Open";
$date=date("Y/m/d") ;
$time=date("h:i:sa") ;

/*$Bui_Serial   = substr(uniqid(rand(), true), 7, 7);*/

$SourceBY= $_POST['SourceBY'];


/*
$verification = "no";

$Honorific = $_POST['Honorific'];
$Gender = $_POST['Gender'];

$KnownFrom= $_POST['KnownFrom'];

$Status1 = "Open";

$date=date("Y/m/d") ;
$time=date("h:i:sa") ;
$Note =$_POST['Note'];
$Req_Serial  = substr(uniqid(rand(), true), 7, 7);

 Bui._Serial 

/*************************************************************************/
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {
mysql_set_charset('utf8');
mysql_select_db($db) or die("db selction error ");


if($_POST['send']){

$sql2="INSERT INTO `Building1`(Type,DealType,Sector,Area,BuildingYear,BuildingSide,StreetType,Buildingno,Address,Nearto,City,Floorno,UnitsinFloor,Elevatorno,BuildingType,ResidentialDeposit,LicenseFloor,Garage,AcceptLastFloor,Note,Verification,Status,Date,Time,Reg_By,SourceBY) VALUES ('$Type','$DealType','$Sector','$Area','$MinBuildingYear','$BuildingSide','$StreetType','$Buildingno','$Address','$Nearto','$City','$Floorno','$UnitsinFloor','$Elevatorno','$BuildingType','$ResidentialDeposit','$LicenseFloor','$Garage','$AcceptLastFloor','$Note','$Verification','$Status','$date','$time','$seg','$SourceBY')";


mysql_query($sql2);
    $last_insert_id = mysql_insert_id();
       $time=date("Y/m") ;
   
    
    $up="UPDATE `Building1` SET `Bui_Serial`='$last_insert_id.$time' WHERE id='$last_insert_id' ";
mysql_query($up);
echo "<h1> its last </h1>".$last_insert_id;

echo "<script type='text/javascript'>alert('Your data has been sent successfully! ');</script>";

}


}else{
  
  mysql_error();
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        
      
        <!-- EOF CSS INCLUDE -->                   
    </head>
    <body>
            
        
        <!-- aly 3la shmal -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.php"><?php   session_start();
	echo "welcom ". $seg= $_SESSION['logindata']         ?></a>
                        
                        	                        
                        
                        
                        
                        
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>    
                    
                    <!--<li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                        <ul>
                            <li><a href="pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                            <li><a href="pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                                <ul>
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                                <ul>
                                    <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                                    <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                                    <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                            <li><a href="pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                            <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                            <li><a href="pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                            <li><a href="pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                            <li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-file"></span> Blog</a>
                                
                                <ul>                                    
                                    <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                                    <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                                <ul>                                    
                                    <li><a href="pages-login.php">App Login</a></li>
                                    <li><a href="pages-login-website.html">Website Login</a></li>
                                    <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                                <ul>                                    
                                    <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                                    <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                                    <li><a href="pages-error-500.html"> Error 500</a></li>
                                </ul>
                            </li>                            
                        </ul>
                    </li>-->
                   <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
                        <ul>
                            <li><a href="layout-boxed.html">Boxed</a></li>
                            <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
                            <li><a href="layout-nav-top.html">Navigation Top</a></li>
                            <li><a href="layout-nav-right.html">Navigation Right</a></li>
                            <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>                            
                            <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
                            <li><a href="layout-frame-left.html">Frame Left Column</a></li>
                            <li><a href="layout-frame-right.html">Frame Right Column</a></li>
                            <li><a href="layout-search-left.html">Search Left Side</a></li>
                            <li><a href="blank.html">Blank Page</a></li>
                        </ul>
                    </li>
                    <li class="xn-title">Components</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>                        
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>                            
                            <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                            <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>                            
                            <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                            <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                            <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                            <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                            <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                            <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>                            
                            <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                            <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                        </ul>
                    </li>    
                    -->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                        <ul>
                            <li>
                                <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Forms </a>
                                <div class="informer informer-danger">New</div>
                                <ul>
                                    <li><a href="form-layouts-one-column.php"><span class="fa fa-align-justify"></span> Customer</a></li>
                                    
                                     <li><a href="Customer_Calls.php"><span class="fa fa-align-justify"></span> Customer_Calls</a></li>
                                     
                                        <li><a href="request.php"><span class="fa fa-align-justify"></span> Request</a></li>
                                        
                                         <li><a href="woner.php"><span class="fa fa-align-justify"></span> Owners</a></li>
                                          
                                   <li><a href="Building.php"><span class="fa fa-download"></span> Building</a></li>
                                   
                                              
                                   <li><a href="customer-follow.php"><span class="fa fa-download"></span>Customer-Follow</a></li> 
                                        
                                    
                                    <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                    <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                                </ul> 
                            </li>
                            <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                            <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                            <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                            <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="tables.php"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>                            
                            <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                            <li><a href="Customer-Calls.php"><span class="fa fa-sort-alpha-desc"></span>Customer-Calls</a></li>
                            <li><a href="table-export.php"><span class="fa fa-download"></span> Customer</a></li>  
                            
                             <li><a href="Building-show.php"><span class="fa fa-download"></span> Building</a></li>  
                            
                            
                                <li><a href="request-show.php"><span class="fa fa-download"></span> Request</a></li> 
                                
                                  <li><a href="owner-show.php"><span class="fa fa-download"></span> Owner</a></li>
                                  <li><a href=" customer-follow-show.php"><span class="fa fa-download"></span>  customer-follow Show</a></li>
                                  
                                   <li><a href=" requestfollowshow.php"><span class="fa fa-download"></span>  Request Follow Show</a></li>
                                   
                                  
                                 
                                  
                                 
                                  
                                                   
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                        <ul>
                            <li><a href="charts-morris.html"><span class="xn-text">Morris</span></a></li>
                            <li><a href="charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                            <li><a href="charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                            <li><a href="charts-other.html"><span class="xn-text">Other</span></a></li>
                        </ul>
                    </li>                    
                    <li>
                        <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
                    </li>   
                    <!--
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                        <ul>                            
                            <li class="xn-openable">
                                <a href="#">Second Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Third Level</a>
                                        <ul>
                                            <li class="xn-openable">
                                                <a href="#">Fourth Level</a>
                                                <ul>
                                                    <li><a href="#">Fifth Level</a></li>-->
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>                            
                        </ul>
                    </li>
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forms Stuff</a></li>
                    <li><a href="#">Form Layout</a></li>
                    <li class="active">New Client</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" action='Building.php' >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Request/</strong> Form</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p>
                                </div>
                           
                                   <div class="panel-body">                                                              

    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                
                                
                             
                                
                                
                                
                                
                                
                                
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Type</label> 
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="Type" >
                                             
                                                        <option> </option>
                                                <option value="Internal
">Internal
</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                
                                                
                                                
                                              
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                
                                 
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Deal Type</label> 
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="DealType" >
                                             
                                                        <option> </option>
                                                <option value="A">Internal</option>
                                                <option value="B">External</option>
                                                
                                                
                                                
                                              
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Sector</label> 
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="Sector"  >
                                                <option> </option>
                                                <option value="Buy">A</option>
                                                <option value="Rent">B</option>
                                                
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                       <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Area</label> 
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="Area" >
                                                <option> </option>
                                                <option value="45"> 45</option>
                                                <option value=" ابويوسف  ">ابويوسف</option>
                                               
                                                <option value=" الاقبال  "> الاقبال</option>
                                                 <option value=" الإبراهيمية "> الإبراهيمية</option>

                                                  <option value=" الساعة "> الساعة</option>

                                                   <option value=" السيوف"> السيوف</option>

                                                    <option value=" العصافرة "> العصافرة</option>

                                                     <option value="العطارين"> العطارين</option>

                                                      <option value="الفلكي"> الفلكي</option>

                                                       <option value="المندرة"> المندرة</option>

                                                        <option value="بولكلى"> بولكلى</option>
                                                        
                                                        <option value="ثروت"> ثروت</option>
                                                        
                                                        
                                                    <option value="جليم"> جليم</option>
                                                    
                                                    <option value="جناكليس"> جناكليس</option>
                                                    <option value="رشدى"> رشدى</option>
                                                    <option value="زيزينيا"> زيزينيا</option>
                                                    
                                                    <option value="سابا باشا "> سابا باشا </option>
                                                    
                                                    <option value="سبورتنج"> سبورتنج</option>
                                                    
                                                    <option value="ستانلى"> ستانلى</option>
                                                    
                                                    <option value="سموحة"> سموحة</option>
                                                    <option value="سيدى جابر "> سيدى جابر </option>
                                                    
                                                    <option value="سيدي بشر "> سيدي بشر </option>
                                                    
                                                    <option value="شدس"> شدس</option>
                                                    
                                                    <option value="فلمنج"> فلمنج</option>
                                                    
                                                    <option value="فيكتوريا"> فيكتوريا</option>
                                                    
                                                    <option value="كامب شيزار"> كامب شيزار</option>
                                                    
                                                    <option value="كفر عبده"> كفر عبده</option>
                                                    
                                                    <option value="كليوباترا"> كليوباترا</option>
                                                    
                                                    <option value="لوران "> لوران </option>
                                                    
                                                    <option value="محرم بك "> محرم بك </option>


                                                    <option value="ميامي"> ميامي</option>
  
  
                                                    <option value="أخرى"> أخرى</option>
    
    

      
      </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                    
                                    
                                    
                                    
                                          <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Building Year</label>  



                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="MinBuildingYear" >
                                                <option> </option>
                                                <option value="Before 2000"> Before 2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                 <option value="2003">2003</option>
                                                  <option value="2004">2004</option>
                                                   <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                     <option value="2007">2007</option>
                                                      <option value="2008">2008</option>
                                                       <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                         <option value="2011">2011</option>
                                                          <option value="2012">2012</option>
                                                           <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                             <option value="2015">2015</option>
                                                              <option value="2016">2016</option>
                                                                 <option value="2017">2017</option>
                                                                    <option value="2018">2018</option>
                                                           
                                        
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div> 
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                      <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Building Side</label> 


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="BuildingSide"  >
                                                <option> </option>
                                                <option value="قبلي ">قبلي </option>
                                                <option value="بحري ">بحري </option>
                                                
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                
                                     
                                    
                                    
                                    
                                    
                                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Street Type</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control " name="StreetType" >
                                                <option> </option>
                                                <option value="جانبي"> جانبي</option>

                                                <option value="رئيسي">رئيسي</option>

                                                <option value="كلاهما">كلاهما</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Buliding no.</label>  


                                        <div class="col-md-6 col-xs-12">
                                           
                                           
                                           <input type="text" class="form-control" name="Buildingno" ="required" pattern="[0-1-2]{3}[0-9]{8}">
                                           
                                           
                                           
                                            <span class="help-block">Start with 01(0,1,2)+ 8 Num</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Address</label>  


                                        <div class="col-md-6 col-xs-12">
                                           
                                           
                                           
                                           <input type="text" class="form-control" name="Address" ="required" pattern="[a-zA-ZS]+">
                                           
                                           
                                           
                                            <span class="help-block">Start with Capital Letter , don't accept spaces , symbols , numbers and arabic letters</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Near to</label>  


                                        <div class="col-md-6 col-xs-12">
                                           
                                           
                                           <input type="text" class="form-control" name="Nearto" pattern="[a-zA-ZS]+">
                                           
                                           
                                           
                                            <span class="help-block">Start with Capital Letter , don't accept spaces , symbols , numbers and arabic letters</span>
                                        </div>
                                    </div>
                                    
                                    
                    
                                
                                    <!-------forget text box --------------->
                                    
                                    
                                    
                                    
                                    
                                    
                                           <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">City</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="City"  >
                                                <option> </option>
                                                <option value="Alexandria"> Alexandria</option>
                                     
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Floor no.</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="Floorno"  >
                                                <option> </option>
                                                <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                  
                                    
                                    
                                    
                                
                                           <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Units in Floor</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control " name=" UnitsinFloor"  >
                                                <option> </option>
                                                <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Building Type</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control " name="BuildingType" >
                                                <option> </option>
                                                <option value="Residential"> Residential</option>

                                                <option value="ResidentialComplex">Residential Complex</option>

                                                <option value="Residentialcompound">Residential compound</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Residential Deposit</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="ResidentialDeposit" >
                                                <option> </option>
                                                <option value="Yes"> Yes</option>

                                                <option value="No">No</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> License Floor</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control " name=" LicenseFloor"  >
                                                <option> </option>
                                                <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Elevator no.</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="Elevatorno" >
                                                <option> </option>
                                                <option value="Yes"> Yes</option>

                                                <option value="No"> No</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Garage</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control" name="Garage" >
                                                <option> </option>
                                                <option value="Verification">Verification</option>

                                                <option value="Auto">Auto</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                
                                
                                    
                               
                                      <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Accept Last Floor</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control " name="AcceptLastFloor"  >
                                                <option> </option>
                                                <option value="Yes"> Yes</option>
                                                <option value="No">No</option>
                                             
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                               
                               
                               
                               
                               
                                    
                               <!------------------code here--------------------------->
                      
 
                               
                               
                               
                               
                               
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Note</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" rows="5" name="Note"></textarea>
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>
                                
                               
                               
                                           
 
 
 
 
     
                             
                                        
                               
                                      <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Source BY</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control " name="SourceBY"  >
                                                <option> </option>
                                                <option value="Ahmed Hani
"> Ahmed Hani
</option>
                                                <option value="Raghda Ahmed
">Raghda Ahmed
</option>
                                                 <option value="Other
">Other
</option>
                                             
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <input type="submit" name="send" class="btn btn-primary pull-right" value='Submit'>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="destroy.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/pl