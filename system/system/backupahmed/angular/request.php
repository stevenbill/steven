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

$En_Fname=$_POST['En_Fname'];

$En_Fname =ucfirst("$En_Fname");

$En_Lname=$_POST['En_Lname'];

$En_Lname=ucfirst("$En_Lname");

$Ar_Fname =$_POST['Ar_Fname'];

$Ar_Lname =$_POST['Ar_Lname'];

$Phone1 = $_POST['Phone1'];





$Mobile01 = $_POST['Mobile01'];




$Mobile02 = $_POST['Mobile02'];


$Whatsapp = $_POST['Whatsapp'];

$Email = $_POST['Email'];

$Class = $_POST['Class'];

$verification = "no";

$Honorific = $_POST['Honorific'];
$Gender = $_POST['Gender'];

$KnownFrom= $_POST['KnownFrom'];

$Type = "Internal";

$date=date("Y/m/d h:i:sa") ;
$Note =$_POST['Note'];


/*************************************************************************/
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");


if($_POST['send']){

$sql2="INSERT INTO `Customer`(`En_Fname`,En_Lname,Ar_Fname,Ar_Lname,Phone1,Mobile01,Whatsapp,Email,Class,verification,Date,Reg_By,Honorific,Gender,Known_From,Type,Mobile02,Note) VALUES ('$En_Fname','$En_Lname','$Ar_Fname','$Ar_Lname','$Phone1','$Mobile01','$Whatsapp','$Email','$Class','$verification','$date','$seg','$Honorific','$Gender','$KnownFrom','$Type','$Mobile02','$Note')";


mysql_query($sql2);

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
        <!-- EOF CSS INCLUDE -->                   
    </head>
    <body>
              <!-- aly 3la shmal --------------------------------->
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
                                    <li><a href="form-layouts-one-column.php"><span class="fa fa-align-justify"></span> New Client</a></li>
                                    
                                     <li><a href="Customer_Calls.php"><span class="fa fa-align-justify"></span> Customer_Calls</a></li>
                                    
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
                            <li><a href="table-export.php"><span class="fa fa-download"></span> New clients</a></li>                            
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
                <!-- END X-NAVIGATION ----------------------------------------------------------->
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
                            
                            <form class="form-horizontal" method="post" action='form-layouts-one-column.php' >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>New Client</strong> Form</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p>
                                </div>
                                <div class="panel-body">                                                                        
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Phone Number</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="PhoneNumber" required="required">
                                                <option> </option>
                                                <option value="A"> A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Sector</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Sector" required="required">
                                             
                                                        <option> </option>
                                                <option value="A"> A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                
                                                
                                                
                                              
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                       
                                  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Req Type</label> 
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Class" required="required">
                                                <option> </option>
                                                <option value="Buy"> Buy</option>
                                                <option value="Rent">Rent</option>
                                                
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                
                                
                                      
                                  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Area 01</label> 
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Class" required="required">
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
                                        <label class="col-md-3 col-xs-12 control-label">Area 02</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Class" required="required">
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
                                        <label class="col-md-3 col-xs-12 control-label">Area 03</label>

                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Class" required="required">
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
                                        <label class="col-md-3 col-xs-12 control-label">View</label> 


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="View" required="required">
                                                <option> </option>
                                                <option value="قبلي ">قبلي </option>
                                                <option value="بحري ">بحري </option>

                                                <option value="كلاهما"> كلاهما</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                
                                           <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Min Building Year</label>  



                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="MinBuildingYear" required="required">
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
                                        <label class="col-md-3 col-xs-12 control-label"> Street Type</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="StreetType" required="required">
                                                <option> </option>
                                                <option value="جانبي"> جانبي</option>

                                                <option value="رئيسي">رئيسي</option>

                                                <option value="كلاهما">كلاهما</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                
             
                                           <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Max Price EGP</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="MaxPriceEGP" required="required">
                                                <option> </option>
                                 <option value="100000"> 100000</option>
                                                
                        
                                                <option value="200000">200000</option>
                                                <option value="300000">300000</option>
                                                
                                                  <option value="400000">400000</option>
                                                    <option value="500000">500000</option>
                                                      <option value="600000">600000</option>
                                                        <option value="700000">700000</option>
                                                          <option value="800000">800000</option>
                                                            <option value="900000">900000</option>
                                                              <option value="1000000">1000000</option>
                                                              
                                                                <option value="1100000">1100000</option>
                                                                  <option value="120000">120000</option>
                                                                    <option value="130000">130000</option>
                                                                      <option value="140000">140000</option>
                                                                        <option value="150000">150000</option>
                                                                          <option value="160000">160000</option>
                                                                            <option value="170000">170000</option>
                                                                              <option value="180000">180000</option>
                                                                                <option value="190000">190000</option>
                                                                                  <option value="2000000">2000000</option> 
                                                                                  <option value="2100000">2100000</option>
                                                                                  
                                                                                   <option value="320000">320000</option>
                                                                    <option value="330000">330000</option>
                                                                      <option value="340000">340000</option>
                                                                        <option value="350000">350000</option>
                                                                          <option value="360000">360000</option>
                                                                            <option value="370000">370000</option>
                                                                              <option value="380000">380000</option>
                                                                                <option value="390000">390000</option> 
                                                                                <option value="4000000">4000000</option> 
                                                                                  
                                                                                   <option value="410000">410000</option>
                                                                                         <option value="420000">420000</option>
                                                                    <option value="430000">430000</option>
                                                                      <option value="440000">440000</option>
                                                                        <option value="450000">450000</option>
                                                                          <option value="460000">460000</option>
                                                                            <option value="470000">470000</option>
                                                                              <option value="480000">480000</option>
                                                                                <option value="490000">490000</option>
                                                                                <option value="5000000">5000000</option>
                                                                                 <option value="more 50000000">more 50000000</option> 
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                
                                           <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Low Price EGP</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="LowPriceEGP" required="required">
                                                <option> </option>
                                                <option value="100000"> 100000</option>
                                                
                        
                                                <option value="200000">200000</option>
                                                <option value="300000">300000</option>
                                                
                                                  <option value="400000">400000</option>
                                                    <option value="500000">500000</option>
                                                      <option value="600000">600000</option>
                                                        <option value="700000">700000</option>
                                                          <option value="800000">800000</option>
                                                            <option value="900000">900000</option>
                                                              <option value="1000000">1000000</option>
                                                              
                                                                <option value="1100000">1100000</option>
                                                                  <option value="120000">120000</option>
                                                                    <option value="130000">130000</option>
                                                                      <option value="140000">140000</option>
                                                                        <option value="150000">150000</option>
                                                                          <option value="160000">160000</option>
                                                                            <option value="170000">170000</option>
                                                                              <option value="180000">180000</option>
                                                                                <option value="190000">190000</option>
                                                                                  <option value="2000000">2000000</option> 
                                                                                  <option value="2100000">2100000</option>
                                                                                  
                                                                                   <option value="320000">320000</option>
                                                                    <option value="330000">330000</option>
                                                                      <option value="340000">340000</option>
                                                                        <option value="350000">350000</option>
                                                                          <option value="360000">360000</option>
                                                                            <option value="370000">370000</option>
                                                                              <option value="380000">380000</option>
                                                                                <option value="390000">390000</option> 
                                                                                <option value="4000000">4000000</option> 
                                                                                  
                                                                                   <option value="410000">410000</option>
                                                                                         <option value="420000">420000</option>
                                                                    <option value="430000">430000</option>
                                                                      <option value="440000">440000</option>
                                                                        <option value="450000">450000</option>
                                                                          <option value="460000">460000</option>
                                                                            <option value="470000">470000</option>
                                                                              <option value="480000">480000</option>
                                                                                <option value="490000">490000</option>
                                                                                <option value="5000000">5000000</option>
                                                                                 <option value="more 50000000">more 50000000</option> 

                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                
                                           <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Apartmentsm2</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Apartmentsm2" required="required">
                                                <option> </option>
                                                <option value="Low 100 m2"> Low 100 m2</option>
                                                <option value="100 m2 - 120 m2">100 m2 - 120 m2</option>
                                                
                                                <option value="120 m2 - 140 m2">120 m2 - 140 m2</option>
                                                
                                                     <option value="140 m2 - 160 m2">140 m2 - 160 m2</option>
                                                     
                                                          <option value="160 m2 - 180 m2">160 m2 - 180 m2</option>
                                                          
                                                               <option value="180 m2 - 200 m2">180 m2 - 200 m2</option>
                                                                    <option value="200 m2 - 220 m2">200 m2 - 220 m2</option>
                                                                    
                                                                         <option value="240 m2 - 260 m2">240 m2 - 260 m2</option>
                                                                         
                                                                              <option value="260 m2 - 280 m2">260 m2 - 280 m2C</option>
                                                                              
                                                                                   <option value="280 m2 - 300 m2">280 m2 - 300 m2</option>
                                                                                   
                                                                                        <option value="more 300 m2">more 300 m2</option>
                                                                                        
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                
                                
                                           <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Rooms no.</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Roomsno" required="required">
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
                                        <label class="col-md-3 col-xs-12 control-label">Bathroom no.</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Bathroomno" required="required">
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
                                        <label class="col-md-3 col-xs-12 control-label">Max Floor</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="MaxFloor" required="required">
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
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Accept Last Floor</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="AcceptLastFloor" required="required">
                                                <option> </option>
                                                <option value="تحت الأنشاء "> تحت الأنشاء</option>
                                                
                                                <option value=" على الطوب ">على الطوب</option>
                                                
                                                <option value="عادي">عادي</option>
                                                
                                                <option value="نصف تشطيب">نصف تشطيب</option>
                                                
                                                <option value="لوكس">لوكس</option>
                                                
                                                <option value="سوبر لوكس">سوبر لوكس</option>
                                                
                                                <option value="الترا لوكس">الترا لوكس</option>
                                                
                                                
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Finishing Type</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Finishing Type" required="required">
                                                <option> </option>
                                                <option value="Yes"> Yes</option>
                                                <option value="No">No</option>
                                             
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Paied Type</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="PaiedType" required="required">
                                                <option> </option>
                                                <option value="Cash"> Cash</option>
                                                <option value="Installment">Installment</option>
                                              
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Deposite</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Deposite" required="required">
                                                <option> </option>
                                                <option value="100000"> 100000</option>
                                                
                        
                                                <option value="200000">200000</option>
                                                <option value="300000">300000</option>
                                                
                                                  <option value="400000">400000</option>
                                                    <option value="500000">500000</option>
                                                      <option value="600000">600000</option>
                                                        <option value="700000">700000</option>
                                                          <option value="800000">800000</option>
                                                            <option value="900000">900000</option>
                                                              <option value="1000000">1000000</option>
                                                              
                                                                <option value="1100000">1100000</option>
                                                                  <option value="120000">120000</option>
                                                                    <option value="130000">130000</option>
                                                                      <option value="140000">140000</option>
                                                                        <option value="150000">150000</option>
                                                                          <option value="160000">160000</option>
                                                                            <option value="170000">170000</option>
                                                                              <option value="180000">180000</option>
                                                                                <option value="190000">190000</option>
                                                                                  <option value="2000000">2000000</option> 
                                                                                  <option value="2100000">2100000</option>
                                                                                  
                                                                                   <option value="320000">320000</option>
                                                                    <option value="330000">330000</option>
                                                                      <option value="340000">340000</option>
                                                                        <option value="350000">350000</option>
                                                                          <option value="360000">360000</option>
                                                                            <option value="370000">370000</option>
                                                                              <option value="380000">380000</option>
                                                                                <option value="390000">390000</option> 
                                                                                <option value="4000000">4000000</option> 
                                                                                  
                                                                                   <option value="410000">410000</option>
                                                                                         <option value="420000">420000</option>
                                                                    <option value="430000">430000</option>
                                                                      <option value="440000">440000</option>
                                                                        <option value="450000">450000</option>
                                                                          <option value="460000">460000</option>
                                                                            <option value="470000">470000</option>
                                                                              <option value="480000">480000</option>
                                                                                <option value="490000">490000</option>
                                                                                <option value="5000000">5000000</option>
                                                                                 <option value="more 50000000">more 50000000</option> 

                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Installment Seq.</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="InstallmentSeq" required="required">
                                                <option> </option>
                                                <option value="Low 3 Month"> Low 3 Month</option>
                                                <option value="3 Month - 6 Month">3 Month - 6 Month</option>
                                                 <option value="6 Month - 12 Month">6 Month - 12 Month</option>
                                                    <option value="12 Month - 18 Month">12 Month - 18 Month</option>
                                                       <option value="18 Month - 24 Month">18 Month - 24 Month</option>
                                                          <option value="24 Month - 30 Month">24 Month - 30 Month</option>
                                                             <option value="30 Month - 36 Month">30 Month - 36 Month</option>
                                                                <option value="More 36 Month">More 36 Month</option>
                                                                   
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                
                                
                                
                                           <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Available Stock</label>  


                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="AvailableStock" required="required">
                                                <option> </option>
                                                <option value="Yes"> Yes</option>
                                                <option value="No">No</option>
                                              
                                                
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
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>





