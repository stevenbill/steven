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

$Note = $_POST['Note'];
$Note2 = $_POST['Note2'];

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


$PhoneNumber1 =$_POST['PhoneNumber1'];



$date=date("Y/m/d") ;
$time=date("h:i:sa") ;
$Response = $_POST['Response'];




$Req_Serial= $_POST['Req_Serial'];
$Apartment= $_POST['Apartment'];
$Response_Comment = $_POST['Response_Comment'];


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

$sql2="INSERT INTO `customerfollow`(PhoneNumber,Reg_By,Time,Date,FollowedBy,CallType,CallStatus,CallRank,FollowStatus,FollowSchedule,Out1,Note) VALUES ('$PhoneNumber','$seg','$time','$date','$FollowedBy','$CallType','$CallStatus','$CallRank','$FollowStatus','$FollowSchedule','$Out1','$Note')";


mysql_query($sql2);


echo "<script type='text/javascript'>alert('Your data has been sent successfully! ');</script>";

}





if($_POST['send1']){

$sql3="INSERT INTO `requestfollow`(PhoneNumber,Reg_By,Time,Date,Req_Serial,Apartment,Response,Response_Comment,Note) VALUES ('$PhoneNumber1','$seg','$time','$date','$Req_Serial','$Apartment','$Response','$Response_Comment','$Note2')";


mysql_query($sql3);
$sql2="INSERT INTO `customerfollow`(PhoneNumber,Reg_By,Time,Date,FollowedBy,CallType,CallStatus,CallRank,FollowStatus,FollowSchedule,Out1,Note) VALUES ('$PhoneNumber','$seg','$time','$date','$FollowedBy','$CallType','$CallStatus','$CallRank','$FollowStatus','$FollowSchedule','$Out1','$Note')";
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

          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">


 $(function () {








            $("#FollowStatus,#CallStatus").change(function ()   {
                if ($("#FollowStatus").val() == "Accept" &&





                $("#CallStatus").val() == "Done" ) {


              $("#dvPassport2").slideDown(500);

                  $("#Response").attr('disabled', false);
                 /*  $("#country").attr('disabled', false);*/
                   $("#state").attr('disabled', false);
                   $("#Apartment").attr('disabled', false);

                     $("#Out1").attr('disabled', false);
                     $("#FollowedBy").attr('disabled', false);
                     $("#CallType").attr('disabled', false);
                      $("#FollowStatus").attr('disabled', false);
                          $("#FollowSchedule").attr('disabled', false);

                             $("#Response_Comment").attr('disabled', false);
                  $("#send").hide();





                } else {
                    $("#dvPassport2").slideUp(1000);

               $("#Response").attr('disabled', true);
                /*$("#country").attr('disabled', true);*/
                $("#state").attr('disabled', true);
                  $("#Apartment").attr('disabled', true);

                  $("#Out1").attr('disabled', true);
                  $("#FollowedBy").attr('disabled', true);
                   $("#CallType").attr('disabled', true);


                     $("#FollowSchedule").attr('disabled', true);
                      $("#Response_Comment").attr('disabled', true);
                    $("#send").show();

                }












            });
        });





/************************************************************************/



      $(function () {
            $("#Response").change(function () {
                if ($(this).val() == "Accept with Comment"  || $(this).val() == "Refuse with Comment") {
              $("#dvPassport23").slideDown(500);

              $("#Response_Comment").attr('disabled', false);





                } else {
               $("#dvPassport23").slideUp(1000);

               $("#Response_Comment").attr('disabled', true);

                }












            });
        });




$(function () {
            $("#FollowStatus").change(function () {
                if ($(this).val() == "Accept"  || $(this).val() == "Call Later"  || $(this).val() == "Hold Request") {
              $("#dvPassport24").slideDown(500);

              $("#FollowSchedule").attr('disabled', false);





                } else {
               $("#dvPassport24").slideUp(1000);

               $("#FollowSchedule").attr('disabled', true);

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

                            <form class="form-horizontal" method="post" action='customer-follow.php' >
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






          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">



        </script>























































































































                                     <script>
                                     function sync()
                                     {
                                       var n1 = document.getElementById('n1');
                                       var n2 = document.getElementById('country');
                                       n2.value = n1.value;
                                     }
                                     </script>


























                                                                          <!---------------another form------------------->




  <?php
                                     include('db_config.php');
                                     $sql= "SELECT * FROM `Customer`";
                                     $query = $db->query($sql);
                                     $data = $query->fetch_assoc();

                                     ?>


                                             <p>   <div class="form-group">
                                                                           <label class="col-md-3 col-xs-12 control-label">Phone Number</label>
                                                                           <div class="col-md-6 col-xs-12">

                                     <select class="form-control " name="PhoneNumber"  id="n1" onclick="sync()"  required>
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
                                                                                 <select class="form-control " name="Out1" required  >
                                                                                     <option> </option>
                                                                                     <option value="Out"> Out</option>


                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>

                                                                          <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Followed By</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="FollowedBy" required >
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
                                                                                 <select class="form-control " name="CallType" required >
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
                                                                                 <select class="form-control " name=" CallStatus" required id='CallStatus' >
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
                                                                                 <select class="form-control " name=" CallRank" required>
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
                                                                                 <select class="form-control " name="FollowStatus" id='FollowStatus' required >
                                                                                     <option> </option>

                                                                                              <option value="Accept"> Accept</option>
                                                                                     <option value="Refused"> Refused</option>


                                                                                     <option value="Call Later"> Call Later</option>
                                                                                      <option value="Hold Request"> Hold Request</option>



                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>



   <div id="dvPassport24" style="display: none">

                                                                         <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Follow Schedule</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name=" FollowSchedule" id='FollowSchedule' required >
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



</div>







                                                                             <div class="form-group">
                                                                                 <label class="col-md-2 control-label">Note</label>
                                                                                 <div class="col-md-10">
                                                                                     <textarea class="form-control" name='Note' rows="5" placeholder="Something about you"></textarea>
                                                                                 </div>
                                                                             </div>
                                                                             <div id='send' >
                                                                             <center>
                                     <input type='submit' value='send' name='send' >
                                     </center>
                                                                         </div>
</div>


























































































   <div id="dvPassport2" style="display: none">


                                      <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Phone Number</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"name="PhoneNumber1" id="country" onmousedown="change_country();" readonly  required />

                                            </div>

                                        </div>
                                    </div>






                                                <div class="form-group">
                                                                               <label class="col-md-4 control-label">Req_Serial </label>
                                                                             <div class="col-md-6 col-xs-12">



                                     <select class="form-control selectpicker" name="Req_Serial" id="state" class="dropdown" required  >
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
                                        <label class="col-md-3 col-xs-12 control-label">Apartment</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"name="Apartment"  id='Apartment' required/>

                                            </div>

                                        </div>
                                    </div>















                                                                             <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">  	Response   </label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control" name="Response"  id='Response'  required>






                                                                                             <option> </option>
                                     <option value="Accept">Accept</option>
                                                                                     <option value="Refuse">Refuse</option>



                                                                                                     <option value="Accept with Comment">Accept with Comment</option>

                                                                                                             <option value="Refuse with Comment">Refuse with Comment</option>





                                                                                 </select>
                                                                                 <span class="help-block">Select box example</span>
                                                                             </div>
                                                                         </div>


   <div id="dvPassport23" style="display: none">


    <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Response_Comment</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <textarea class="form-control" rows="5" name="Response_Comment"   id='Response_Comment' required></textarea>
                                                                                 <span class="help-block">Default textarea field</span>
                                                                             </div>
                                                                         </div>
 </div>





                                                                        <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Note</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <textarea class="form-control" rows="5" name="Note2" id='newfield6'></textarea>
                                                                                 <span class="help-block">Default textarea field</span>
                                                                             </div>
                                                                         </div>












                                                            <center>
                                     <input type='submit' value='send1' name='send1'>
                                     </center>





</div>


















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
