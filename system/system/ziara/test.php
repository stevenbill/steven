<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            function send(){
                var user=document.getElementById('user').value;
                  var pass=document.getElementById('pass').value;
                  $("#test").load("server.php",{user:user,pass:pass});
            }
        </script>
    
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>
<body>
    
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>تسجيل الزيارات</h2>
    </div>
    <div class="modal-body">
      <center><strong>تم تسجيل البيانات بنجاح</strong></center>
      
    </div>
    <div class="modal-footer">
      <h3>Estasmer System</h3>
    </div>
  </div>

</div>
    

<form action="test.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">بيانات الزياره</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border "type="text" name="namemalek" placeholder="اسم الماللك ">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" type="text" name="telmalek"  placeholder=" تليفون المالك ">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border"  type="text" name="nameamel" placeholder="اسم العميل">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" type="text" name="telamel"  placeholder="تليفون العميل">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border"  type="text"name="address" placeholder=" العنوان">
    </div>
</div>
    
    
    
    
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" type="text" name="code" id="user" placeholder=" code">
    </div>
</div>
    
    
    
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border"  type="text" name="result" placeholder="  نتيجه الزياره">
    </div>
</div>
    
    
    
    
    
    
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border"   type="text" name="date"  placeholder=" التاريخ">
    </div>
</div>
    
    
    
    
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" type="text" name="me3ad"  placeholder=" الميعاد">
    </div>
</div>
    
    
    

<input class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding"  id="myBtn" type="submit"  value="send" name="send">
    
    
         
  
      
      
      
      
      
      
      
      
      
      

</form>
    
    
      <div id="test">

    
        </div>
            

<input type="text" id="pass" placeholder="pass" hidden="hidden">
<input onclick="send()" type="button"  value="test code">
      
      
      

</body>
</html> 

<?php 
date_default_timezone_set("Africa/Cairo");
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    /*
	 session_start();

	/*$seg= $_SESSION['logindata'];
   /* echo var_dump($seg);*/

}else{
	
	mysql_error();
}

$namemalek=$_POST['namemalek'];
$telmalek=$_POST['telmalek'];
$nameamel=$_POST['nameamel'];
$telamel=$_POST['telamel'];
$address=$_POST['address'];
$code=$_POST['code'];
$result=$_POST['result'];
$date=$_POST['date'];
$me3ad=$_POST['me3ad'];


$sql="insert into  ziara (namemalek,telmalek,nameamel,telamel,address,code,result,date,me3ad) values('$namemalek','$telmalek','$nameamel','$telamel','$address','$code','$result','$date','$me3ad')";
if ($_POST['send']) {


  
 mysql_query($sql); 




  echo" <script>

var modal = document.getElementById('myModal');

var btn = document.getElementById('myBtn');


var span = document.getElementsByClassName('close')[0];



    modal.style.display = 'block';


span.onclick = function() {
    modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>";
  # code...
}


?>
