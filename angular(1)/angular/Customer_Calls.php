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
$inactive = 2700;
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





$date=date("Y/m/d") ;
$time=date("h:i:sa") ;


$PhoneNumber = $_POST['PhoneNumber'];

$Receivedby = $_POST['Receivedby'];

$Honorific  = $_POST['Honorific'];


$KnownFrom  = $_POST['KnownFrom'];

$CallType  = $_POST['CallType'];
$Note = $_POST['Note'];
$Apartment_Code = $_POST['Apartment_Code'];



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

$sql2="INSERT INTO `CustomerCalls`(Note,CallType ,KnownFrom,Receivedby,PhoneNumber,En_Fname,En_Lname,Ar_Fname,Ar_Lname,Date,Reg_By,Honorific,time,Apartment_Code) VALUES ('$Note','$CallType','$KnownFrom','$Receivedby','$PhoneNumber','$En_Fname','$En_Lname','$Ar_Fname','$Ar_Lname','$date','$seg','$Honorific','$time','$Apartment_Code')";





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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
   
    
      
        
        
        
        
        
      $(function () {
            $("#ddlPassport2").change(function () {
                if ($(this).val() == "Enquiry") {
              $("#dvPassport2").slideDown(500);
                  $("#newfield2").attr('disabled', false);
                   
                
                     
                } else {
                    $("#dvPassport2").slideUp(1000);
                $("#newfield2").attr('disabled', true);
                }
                
                
                
                
               
                
               
                 if ($(this).val() == "Request") {
              $("#dvPassport3").slideDown(500);
                    
                          
                      
                 
                   
                
                     
                }else {
                    $("#dvPassport3").slideUp(1000);
               $("#dvPassport1").slideUp(1000);
                $("#newfield1").attr('disabled', true);
                    
                     $("#dvPassport").slideUp(1000);
                $("#newfield").attr('disabled', true);
              
                    
                }
                
                
                
                
                
            });
        });
          
        
        
        
                 

        
        
        </script>
  
    </head>
    <body>
           <!-- START PAGE CONTAINER -->
        
        
        
        
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
                            
                            <form class="form-horizontal" method="post" action='Customer_Calls.php' >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong> Customer Calls</strong> Form</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                     <?php
                                    $connection = mysqli_connect("localhost","estasm5_yousry","4562008","estasm5_sales") or die("Error " . mysqli_error($connection));

//fetch data from database
$sql = "select Mobile01 from Customer";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
?>





<div class="form-group">
                                          <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Phone Number</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" list="categoryname"  class="form-control" autocomplete="off" id="pcategory"  required="required" name="PhoneNumber" pattern="[0-1-2]{3}[0-9]{8}"/>
                                            
                                            <datalist id="categoryname">
        <?php while($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['Mobile01']; ?>"><?php echo $row['Mobile01']; ?></option>
        <?php } ?>
    </datalist>    
                                            </div>                                            
                            
                                        </div>
                                    </div>
                                    </div>







 
    <?php mysqli_close($connection); ?>

                                    
                                
                                
                                
                                
                               
                               
                               
                               
                               
                     
                               
                               
                               
                       
                                         <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Received by</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control " name="Receivedby" required="required">
                                                <option> </option>
                                                <option value="Phone"> Phone</option>
                                                <option value="Voicemail">Voicemail</option>
                                          
                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                                
                                
                                
   
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                    
                                    
                               
                                    
                                    
                                    
                                         <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Honorific</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control " name="Honorific" required="required">
                                                <option> </option>
                                                <option value="Mr."> Mr.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Mss.">Mss.</option>
                                                
                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">En_Fname</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name='En_Fname'  required="required"pattern="[a-zA-ZS]+"/>
                                                
                                            </div>                                            
                                            <span  class ="error">Start with Capital Letter , don't accept spaces , symbols , numbers and arabic letters</span>
                                        </div>
                                    </div>
                                    
                                   

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">        
                                    
                                    
                                    
                                                   
                                        <label class="col-md-3 col-xs-12 control-label">En_Lname</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name='En_Lname'  required="required" pattern="[a-zA-ZS]+"/>
                                            </div>            
                                            <span  class ="error">Start with Capital Letter , don't accept spaces , symbols , numbers and arabic letters</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                       <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Ar_Fname</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="text" class="form-control" name='Ar_Fname'  required="required" pattern="^[\u0621-\u064A\u0660-\u0669S]+$"/>
                                            </div>            
                                            <span  class ="error">Don't accept spaces , symbols ,numbers and english letters</span>
                                        </div>
                                    </div>
                                    
                                 
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Ar_Lname</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name='Ar_Lname'  required="required"  pattern="^[\u0621-\u064A\u0660-\u0669S]+$" >
<!-- pattern="[ي-ؤ-ئ-ا-ى]+"  -->                                                
                                            </div>                                            
                                            <span  class ="error">Don't accept spaces , symbols ,numbers and english letters</span>
                                        </div>
                                    </div>
                                    
                                    
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Known From</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="KnownFrom" class="form-control " required="required">
                                                     <option  > </option>
                                                <option value="Ext. Websites." >Ext. Websites </option>
                                                <option value="Friend">Friend</option>
                                                
                                                 <option value="Internal source">Internal source</option>
                                                  <option value="Newspaper">Newspaper</option>
                                                   <option value="Other">Other</option>
                                                      <option value="SMS">SMS</option>
                                                          <option value="Social Media">Social Media</option>
                                                          
                                                          <option value="Website">Website</option>
                                                          
                                            
                                            
                                            
                                        
                                               
                                                
                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>

                                        <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Call Type</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="CallType" class="form-control " required="required" id="ddlPassport2">
                                                     <option  > </option>
                                                <option value="Request" >Request </option>
                                                <option value="Enquiry">Enquiry</option>
                                                
                                                 <option value="Follow"> Follow</option>
                                              
                                                
                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>

    
   <div id="dvPassport2" style="display: none">
 
       
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Apartment </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name='Apartment_Code'  pattern="[a-zA-Z\S]+"  id="newfield2" required="required"/>
                                                
                                            </div>                                 
                                        </div>
                                    </div>

</div>
    
    
         
            <br><br>  
                                        
                                        
                                        
                                     
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                      
                                      
                                      
                                      
                                      
                                      
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Note</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                           
                                               <textarea name="Note" rows="4" cols="50" class="form-control">

</textarea> 
                                                
                                                
                                                
                                            </div>                                            
                                            <span class="help-block">Start with Capital Letter , don't accept spaces , symbols , numbers and arabic letters</span>
                                        </div>
                                    </div>
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                        
                                        
                                        
                                        
                                        
                                        <!--
                                    
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Phone1</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name='Phone1'  pattern="^0[23]{1}[\s]{0,1}[\-]{0,1}[\s]{0,1}[1-9]{1}[0-9]{6}$" />
                                               <!-- pattern="\d*" maxlength="10" minlength="7" --> 
                                          <!--  </div>                                            
                                            <span class="help-block">Code Area (0--)+7 num</span>
                                        </div>
                                    </div>
                                    
                                    
                                   
                                    
                                    
                                    
                                    
                                        <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Mobile01</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name='Mobile01'   required="required"   pattern="[0-2]{2}[0-9]{9}"  />
                                                <!--pattern="\d*" maxlength="11" minlength="11"  ^[0-9]{0,5}[ ]{0,1}[0-9]{0,6}$-->
                                                 	

                                           <!--     
                                            </div>                                            
                                            <span class="help-block">Start with 01(0,1,2)+ 8 Num</span>
                                        </div>
                                    </div>
                                    
                                                                            <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Mobile02</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name='Mobile02' pattern="[0-2]{2}[0-9]{9}"/>
                                                
                                            </div>                                            
                                            <span class="help-block">Start with 01(0,1,2)+ 8 Num</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                      <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Whatsapp</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name='Whatsapp' pattern="[0-2]{2}[0-9]{9}"/>
                                                
                                            </div>                                            
                                            <span class="help-block">Start with 01(0,1,2)+ 8 Num</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                       <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="email" class="form-control" name='Email'  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"    />
                                                
                                            </div>                                            
                                            <span class="help-block">End with @xxx.com</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                   
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                  <!--  <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Datepicker</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" value="2014-11-01">                                            
                                            </div>
                                            <span class="help-block">Click on input field to get datepicker</span>
                                        </div>
                                    </div>
                                    
                                    -->
                                   <!-- <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Textarea</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" rows="5"></textarea>
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>-->
                                    
                                   <!-- <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tags</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <input type="text" class="tagsinput" value="First,Second,Third"/>
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>-->
                                    
                            <!--        <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">class</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="Class" required="required">
                                                <option> </option>
                                                <option value="A"> A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                         <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">verification</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="verification" class="form-control select" required="required">
                                                     <option  > </option>
                                                <option value="yes" > yes</option>
                                                <option value="no">no</option>
                                               
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                        <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Honorific</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="Honorific" class="form-control select" required="required">
                                                     <option  > </option>
                                                <option value="Mr." > Mr.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Mss..">Mss..</option>
                                               
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Gender</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="Gender" class="form-control select" required="required">
                                                     <option  > </option>
                                                <option value="male." >Male </option>
                                                <option value="Female">Female</option>
                                            
                                            
                                            
                                        
                                               
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                       
                                    
                                    
                                    
                                            <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Type</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="Type" class="form-control select" required="required">
                                                     <option  > </option>
                                                <option value="Internal" >Internal </option>
                                                <option value="External">External</option>
                                            
                                            
                                            
                                        
                                               
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                  <!--  <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">File</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"/>
                                            <span class="help-block">Input type file</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Checkbox</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Checkbox title</label>
                                            <span class="help-block">Checkbox sample, easy to use</span>
                                        </div>
                                    </div>

                                </div>-->
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





