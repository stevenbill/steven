<?php
session_start();
date_default_timezone_set("Africa/Cairo");
/*
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;

}*/
/*

if(!isset($_SESSION['logindata']))
{
 header('location: destroy.php');
exit;

}
*/

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

$PhoneNumber =$_POST['PhoneNumber'];



$date=date("Y/m/d") ;
$time=date("h:i:sa") ;
$Response = $_POST['Response']; 

$Note1 = $_POST['Note1'];
$FollowedBy =  $_POST['FollowedBy']; 

$Req_Serial= $_POST['Req_Serial']; 
$Apartment= $_POST['Apartment'];  
$Response_Comment = $_POST['Response_Comment']; 

$CallType  = $_POST['CallType']; 

$CallStatus  = $_POST['CallStatus']; 
$CallRank  = $_POST['CallRank']; 
$FollowStatus  = $_POST['FollowStatus'];     

$FollowSchedule  = $_POST['FollowSchedule'];   

$Out1  = $_POST['Out1'];  



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

$sql2="INSERT INTO `customerfollow`(PhoneNumber,Reg_By,Time,Date,FollowedBy,CallType,CallStatus,CallRank,FollowStatus,FollowSchedule,Out1,Note) VALUES ('$PhoneNumber','$seg','$time','$date','$FollowedBy','$CallType','$CallStatus','$CallRank','$FollowStatus','$FollowSchedule','$Out1','$Note1')";


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
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Joli Admin</a>
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
                    <li>
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                    <li class="xn-openable">
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
                                    <li><a href="pages-login.html">App Login</a></li>
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
                    </li>
                    <li class="xn-openable">
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
                    <li class="xn-openable active">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                        <ul>
                            <li>
                                <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                                <div class="informer informer-danger">New</div>
                                <ul>
                                    <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                                    <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                                    <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                    <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                                </ul>
                            </li>
                            <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                            <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                            <li class="active"><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                            <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                            <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>
                            <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                            <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                            <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
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
                                                    <li><a href="#">Fifth Level</a></li>
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
                    <li class="active">Form Wizards</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Form Wizards</h2>
                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">



                            <!-- START WIZARD WITH SUBMIT BUTTON -->
                            <div class="block">
                                <h4>Wizard With Submit</h4>
                                <form action="form-wizards.php" role="form" class="form-horizontal"  method="post" >
                                <div class="wizard show-submit">
                                    <ul>
                                        <li>
                                            <a href="#step-5">
                                                <span class="stepNumber">1</span>
                                                <span class="stepDesc">User<br /><small>Personal data</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-6">
                                                <span class="stepNumber">2</span>
                                                <span class="stepDesc">Contact<br /><small>Information</small></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="step-5">

                                       <?php
include('db_config.php');
$sql= "SELECT * FROM `Customer`";
$query = $db->query($sql);
$data = $query->fetch_assoc();

?>


        <p>   <div class="form-group">
                                      <label class="col-md-3 col-xs-12 control-label">Phone Number</label>
                                      <div class="col-md-6 col-xs-12">

<select class="form-control " name="PhoneNumber" >
<option> </option>
<?php while($row = $query->fetch_assoc()) { ?>
<option  value="<?php echo $row['Mobile01']; ?>"><?php echo $row['Mobile01']; ?> </option>
<?php } ?>
</select>
</div>
</div></p>

<br>



                                         <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">In/Out</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control " name="Out1" >
                                                <option> </option>
                                                <option value="Out"> Out</option>


                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Followed By</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control " name="FollowedBy" >
                                                <option> </option>
                                                <option value="EMAIL"> EMAIL</option>
                                                    <option value="Phone"> Phone</option>
                                                        <option value="SMS"> SMS</option>



                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>


                                       <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Call Type</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control " name="CallType" >
                                                <option> </option>
                                                <option value="EMAIL"> Follow</option>
                                                    <option value="Request"> Request</option>
                                                        <option value="Update Info"> Update Info</option>
                                                         <option value="Request"> Request</option>
                                                          <option value="Validation"> Validation</option>
                                                           <option value="Verification"> Verification</option>



                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>


                                         <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Call Status</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control " name=" CallStatus" >
                                                <option> </option>
                                                <option value="Done"> Done</option>
                                                    <option value="Line Busy"> Line Busy</option>
                                                        <option value="No Answer"> No Answer</option>
                                                         <option value="Not Reachable"> Not Reachable</option>
                                                          <option value="Wrong Number"> Wrong Number</option>




                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>







                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">  Call Rank</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control " name=" CallRank" >
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


                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Follow Status</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control " name=" FollowStatus" >
                                                <option> </option>

                                                         <option value="Accept"> Accept</option>
                                                <option value="Refused"> Refused</option>


                                                <option value="Call Later"> Call Later</option>
                                                 <option value="Hold Request"> Hold Request</option>



                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>





                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Follow Schedule</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control " name=" FollowSchedule" >
                                                <option> </option>

                                                         <option value="Day"> Day</option>
                                                <option value="Two Days"> Two Days</option>


                                                <option value="Three Days"> Three Days</option>
                                                 <option value="Week">Week</option>
                                                  <option value="Two Week">Two Week</option>
                                                   <option value="Three Week">Three Week</option>
                                                    <option value="Month">Month</option>
                                                     <option value="Two Month">Two Month</option>
                                                      <option value="Three Month">Three Month</option>
                                                       <option value="Six Month">Six Month</option>
                                                        <option value="Year">Year</option>





                                            </select>
                                            <span  class ="error">Select box example</span>
                                        </div>
                                    </div>











                                        <div class="form-group">
                                            <label class="col-md-2 control-label">About</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="5" placeholder="Something about you"></textarea>
                                            </div>
                                        </div>
                                        <center>  
<input type='submit' value='send' name='send'>
</center>
                                    </div>
                                    
                                    
                                    
                                    <div id="step-6">

                                     <!---------------another form------------------->






                                      <?php
include('db_config.php');
$sql= "SELECT * FROM `Customer`";
$query = $db->query($sql);
$data = $query->fetch_assoc();

?>

          <div class="form-group">
                                         <label class="col-md-4 control-label">Phone Number</label>
                                        <div class="col-md-6 col-xs-12">



<select class="form-control selectpicker"  name="PhoneNumber2" id="country"  class="dropdown" onchange="change_country();" >
<option value="">Select Company</option>
<?php while($row = $query->fetch_assoc()) { ?>
  <option  value="<?php echo $row['Mobile01']; ?>"><?php echo $row['Mobile01']; ?> </option>
<?php } ?>
</select>
 </div>
</div>






           <div class="form-group">
                                          <label class="col-md-4 control-label">Req_Serial </label>
                                        <div class="col-md-6 col-xs-12">



<select class="form-control selectpicker" name="Req_Serial" id="state" class="dropdown" >
<option value="">Select State</option>

</select>
 </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
function change_country()
{
  var country = $("#country").val();

     $.ajax({
    type: "POST",
    url: "state.php",
    data: "country="+country,
    cache: false,
    success: function(response)
      {
          //alert(response);return false;
        $("#state").html(response);
      }
      });















}



  </script>








































                                      <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"> Apartment  </label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control" name="Apartment" >

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
                                        <label class="col-md-3 col-xs-12 control-label">  	Response   </label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control" name="Response" >






                                                        <option> </option>
<option value="Accept">Accept</option>
                                                <option value="Refuse">Refuse</option>



                                                                <option value="Accept with Comment">Accept with Comment</option>

                                                                        <option value="Refuse with Comment">Refuse with Comment</option>





                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>








                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Response_Comment</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" rows="5" name="Response_Comment"></textarea>
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>






                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Note</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" rows="5" name="Note1"></textarea>
                                            <span class="help-block">Default textarea field</span>
                                        </div>
                                    </div>

















                                        <center>  
<input type='submit' value='send' name='send'>
</center>
               




                                    </div>
                                </div>
                                </form>
                            </div>
                            <!-- END WIZARD WITH SUBMIT BUTTON -->



                        </div>

                    </div>

                </div>
                <!-- PAGE CONTENT WRAPPER -->
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
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
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

        <script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.js"></script>
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->

    </body>
</html>
