<?php
;
session_start();
 
$seg=$_SESSION['logindata'];
date_default_timezone_set("Africa/Cairo");
  $file="myfile.txt";
unlink($file);

 $file2="order.txt";
unlink($file2);

echo"<style>";

echo".no-js #loader { display: none;  }";
echo".js #loader { display: block; position: absolute; left: 100px; top: 0; }";
echo".se-pre-con {";
  echo"position: fixed;";
  echo"left: 0px;";
  echo"top: 0px;";
  echo "width: 100%;";
  echo"height: 100%;";
echo" z-index: 9999;";
  echo"background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;";
echo"}";
echo"</style>";

echo"<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>";
echo"<script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js'></script>";
echo"<script>";
  
echo" $(window).load(function() {";
    
    echo"$('.se-pre-con').fadeOut('slow');;";
  echo"});";
echo"</script>";

echo"</head>";

echo"<body>";

  echo"<div class='se-pre-con'></div>";

  
  echo"<div class='content'>";
  echo"<div class='back-to-article'></div>";

  echo"</div>";
        
   
        
        
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_mapcompany";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    
    
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
session_start();
$seg= $_SESSION['logindata'];
 

       echo  "******".$seg."*****";
$datesend =@date("Y/m/d") ;

echo "its date:".$datesend;
 $sql3="SELECT * FROM proemail where Date = '$datesend' " ;
$q3=mysql_query($sql3) ;
  while($row=mysql_fetch_array($q3)){
  

    $em=$row['email'];
    echo  $em;
   




    
 
   
$file=fopen('myfile.txt', 'a+');




fwrite($file,$em);
fread($file,10000);
fclose($file);
 



    
    
    
    
    
    
    
    
      
  }




 $to=file_get_contents('myfile.txt');
$tooo=explode(",",$to);









}else{
  
  mysql_error();
}
  ?>  
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    
    
    
    
    
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
      <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css'>


     

  

    
    
    
    
    
    
    
    
    
    
    
    
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22897853-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<style type="text/css">
<!--
body,td,th {font-family: Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 12px;   color: #333;}
body {margin-left:0px;}
.maindiv{ width:690px; margin:0 auto;}
.textbox{ padding:2px 4px; width:200px;}
.submit{ border:solid 1px #008000; background:#008000; color:#FFF; font-weight:bold;}
-->
</style>
</head>
<body>

<div style="text-align:center;">
 </div>
  
<div class="maindiv">
<div><?php

?></div>
<div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    
        
        
          <?php
include('db_config.php');
$sql= "SELECT * FROM `back`";
$query = $db->query($sql);
$data = $query->fetch_assoc();

?>
<div class="form-group"> 
  

<select   name="back" >
<option value="">background</option>
<?php while($row = $query->fetch_assoc()) { ?>
  <option  value="<?php echo $row['back']; ?>"><?php echo $row['back']; ?> </option>
<?php } ?>
</select>
 </div>
</div>
</div>  

<?php
include('db_config.php');
$sql= "SELECT * FROM `atta`";
$query = $db->query($sql);
$data = $query->fetch_assoc();

?>
<div class="form-group"> 
  

<select   name="attach" >
<option value="">attach</option>
<?php while($row = $query->fetch_assoc()) { ?>
  <option  value="<?php echo $row['atta']; ?>"><?php echo $row['atta']; ?> </option>
<?php } ?>
</select>
 </div>
</div>
</div> 
     
        
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
  <p><label for="email">Email1:</label><br>
<?php echo"<input id='email' name='to' type='text'  readonly value='$session' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$'/>"; ?>
  </p>
  
  <p><label for="email">Email:</label><br>
<!--<input id="email" name="email" type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />-->
  </p>
  
        
        
           
   
        
        
        
  
        
        
        
        
        
  
  

  
  
    <p>
    <label for="tele">number:</label><?php echo $mails2['total']; ?> <br>
  <input  type="number" name="number" />
  </p>
  

  
  <p>
    <label for="tele">Upload Your attachment:</label><br>




</select>


















  </p>
  
 
  
  
  <p>
    <label for="message">Message:<br></label>
    <textarea cols="71" rows="5" name="message"></textarea>
  </p>
  

     <input  type="date" name="date"  min="<?php  ?>" />
</div>
<input class="formbtn" type="submit" name="send" value="Send Message" />
<input class="formbtn" type="submit" name="send1" value="make orders" /> 
 
</form>
</div>
</div>

</body>
</html>
     











<?php




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





if($_POST['send1']){
$result2=mysql_query("SELECT count(email) as total from test");
$mails2=mysql_fetch_assoc($result2);






$prodate1 =$_POST['date'] ;
$file="date.txt";
unlink($file);

$mails2['total'];
$number = $_POST['number'] ;
$loop = $mails2['total']/$number;

/*$mes = date ("Y-m-d ") ;*/


$mes = $prodate1;
//Counter months
$m = 1;
//LOOP month
while($m <= 1){
  //Variables days
  /*$prodate1 = $mes;*/
  //Counter days
  $x = 1;
  //LOOP days
  while($x <= $loop){
    /*var_dump($prodate1);*/
    /*echo $x.'<br>';*/
    /*echo "$prodate1".'<br>';*/



   
    $datefile=fopen('date.txt', 'a+');




    fwrite($datefile,$prodate1);
    fwrite($datefile,':');




    fread($datefile,10000);
    fclose($datefile);








    //adding one day
    $prodate1 = strtotime("$prodate1 + 1 days");
    $prodate1 = date("Y-m-d",$prodate1);







    ++$x;

  }
  //adding one month
  $mes = strtotime("$mes + 1 month");
  $mes = date("Y-m-d",$mes);
  ++$m;


}

$read=file_get_contents('date.txt');
/*echo var_dump($read)."<br>";*/
/*echo print_r($read)."<br>";*/


$tooo=explode(":",$read);
/*echo print_r($tooo);*/

$array_date=[];
foreach ($tooo as $value2) {
    array_push($array_date, $value2);
   
    }
echo count($array_date);


$sqlm="SELECT * FROM   test" ;


$qm=mysql_query($sqlm) ;

  while($row=mysql_fetch_array($qm)){
  

    $em=$row['email'];
   

   
    $order=fopen('order.txt', 'a+');


    fwrite($order,$em);
    fread($order,10000);
    fclose($order);
 
    
      
  }



$toos=file_get_contents('order.txt');
$too=explode(",",$toos);

$array_mail=[];

foreach ($too as $value1) {
    array_push($array_mail, $value1);
    /*echo "<p>$value1</p>";*/
    
}



 for($q=0;  $q  <=count($array_mail)-1;  $q++){

             

}


echo count($array_mail);
$coc=0;

for ($x = 0; $x <= count($array_date)-2; $x++) {
    echo "The number is: $x <br>";
    
    for ($y = 0; $y <=$number-1; $y++) {
      
        
       



    $current_time=date("H:i:s");
    $back = $_POST['back'];
    $attach = $_POST['attach'];
    $sql2="insert into  `proemail` (email,back,Message,Date,time,attach) values('$array_mail[$coc]','$back','$message','$array_date[$x]','$current_time','$attach')";
    mysql_query($sql2); 
   
        
        $coc++;
    }
    
    
}


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    


}else{
  
  mysql_error();
}

/*$sqlB = "SELECT Date, COUNT(Date) FROM proemail GROUP BY Date HAVING ( COUNT(Date) > 1 )";*/
$sqlB = "SELECT Date, COUNT(Date) FROM proemail GROUP BY Date HAVING ( COUNT(Date) > 1 )";
$timeq=mysql_query($sqlB);
$time=@date("H:i:s");
$dated=[];
$count=[];
$id2=[];
$result=[];
$time = array('9:00:00','10:00:00','11:00:00','12:00:00','13:00:00','14:00:00','15:00:00','16:00:00','17:00:00');

for($q=0;  $q  <=count($time)-1;  $q++){

       
          
}

while($row=mysql_fetch_array($timeq))
 
{
      
          array_push($dated,$row['Date']);
          array_push($count,$row['COUNT(Date)']);
          /*array_push($id,array($row['id']));*/
           /*echo '<h1>'.$dated.'</h1>';*/
          /* echo '<h1>'.$count.'</h1>';*/
           echo '<h1>'.count($dated).'</h1>';
         /* echo var_dump($dated);*/
           
}
           
for($q=0;  $q  <=count($dated)-1;  $q++){
           
           $sql_id= "SELECT * FROM proemail WHERE Date ='$dated[$q]'";
            $get_id=mysql_query($sql_id);
         
            $id=[];
             while($rows=mysql_fetch_array($get_id))
              
             {
               echo ($rows['id'])."<br>";
                /*echo var_dump($rows['id'])."<br>";*/
               array_push($id,$rows['id']);
                /*echo ($id[$q])."<br>";*/
           
           
                 }
            /*array_push($id2,$id);*/
            $result[$q]=$id;
            
         
}
echo var_dump($dated)."<br>";
echo var_dump($result)."<br>";
$index_count=0;
       for($v=0;  $v  <=count($dated)-1;  $v++){
         
           
           $index_count=0;
           $mail_count= ceil((count($result[$v]))/(count($time)));
        

           for($ii=0; $ii  <=count($time)-1;    $ii++){
                      
                        
                         for($i2=0; $i2  <=($mail_count-1);    $i2++){
                             if (!(empty(($result[$v][$index_count])))) {
                             echo $result[$v][$index_count];
                             echo "<br>";
                             $try_time=$time[$ii];
                             /*echo "<h1>"."the try_time::".$try_time."</h1>";*/
                             $try_date=$dated[$v];
                             /*echo "<h1>"."the try_date::".$try_date."</h1>";*/
                             $try_id=$result[$v][$index_count];
                             /*echo "<h1>"."the try_id::".$try_id."</h1>";*/
                             $UPDATE_time= "UPDATE `proemail` SET time ='$try_time' WHERE id =$try_id";
                             mysql_query($UPDATE_time);
                             $index_count++;
                             }
                         }
                   
             
             
                }
    }
       
       
 


mysqli_close($connect);
}




$to=explode(',',$to);
date_default_timezone_set("Africa/Cairo");

function domain_exists($email,$record = 'MX')
{
  list($user,$domain) = split('@',$email);
  return checkdnsrr($domain,$record);
}



/**********************************************************************************************************************/


foreach ($to as $value) {

$mailbody="$value\n\n";

/*mail("$value", "testing 123", "$mailbody", "From: Myself<me@myself.com>");*/
echo "<p>$value</p>";











if(domain_exists($value))
{
    echo '<i style="color:green;font-size:30px;font-family:calibri ;">
     ***I will accept this email*** </i> ';
   
    

$CompanyName=$_POST['CompanyName'];
     $date=@date("Y/m/d h:i:sa") ;

$message606=$_POST['message'];

$send = "System(Auto)";
                
        
        
    

$sql="insert into  email (CompanyName,fax,Message,seg,email,Date,send) values('$CompanyName','$file_name','$message606','$seg','$value','$date','$send')";
/*$f1 = "  UPDATE proemail SET email = CONCAT(',',email) WHERE email IS NOT NULL  " ;
$f2 = "  UPDATE proemail SET email = CONCAT(email,',') WHERE email IS NOT NULL  " ;
  mysql_query($f1); 
    mysql_query($f2); */

if (@ $_POST['send']) {


  mysql_query($sql); 

    
   /* echo "<script> alert('Thank you for your insert ?  ') </script>";*/

    echo $file_name;
    /*

echo"<div class='alert alert-success' role='alert' id='success_message'>Success <i class='glyphicon glyphicon-thumbs-up'></i> Thanks for send data.</div>";*/


require( 'config.inc.php' );

//Assign default empty variables for message output
$success = '';
$error = '';
if ($_SERVER['REQUEST_METHOD']=="POST"){

    
    //Add the tracker to the message.
    $message = "<html><head></head><body>";
   // Set the "To" email address
 
     $localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_mapcompany";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

echo "its date:".$datesend;
 $sql3="SELECT * FROM proemail where fax = 'http://estasmer.com/mailtest/up/tracker/lazar.jpg' " ;
$q3=mysql_query($sql3) ;
  while($row=mysql_fetch_array($q3)){
  

    $em=$row['fax'];
    echo  $em;
 
      
  }
}  
    
    
  

  //Subject of the mail
   $subject="Welcom to maptech company";

  

  


    
    $from = "ayousry943@gmail.com";
 $tracker = THIS_WEBSITE_URI . '/record.php?log=true&subject=' . urlencode( $subject ) . '&user=' . urlencode( $to );
    
    //Add the tracker to the message.
    $message .= '<img border="0" src="'.$tracker.'" width="1" height="1" />';
    
    //Since this must be HTML email, we'll need to set some headers
    //See "Example #4 Sending HTML email" at http://php.net/manual/en/function.mail.php
    $headers = "From: $from  <".$from.">\r\n";
    $headers.= "Return-Path: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";





$headers = "From: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n"
  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
  
$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"
  ."--1a2a3a\r\n";
 
$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
  ."Content-Transfer-Encoding: 7bit\r\n\r\n"
  ."hey my <b>good</b> welcom haaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
  /*."<p>Your password is : <span style='color:red'><b>User@1$#!</b></span></p> \r\n"*/
  
  ."<img src='http://estasmer.com/mailtest/up/tracker/lazar.jpg' alt='image not found' />\r\n"

  
  
  
  
  ."--1a2a3a\r\n";
  
  
 
$file = file_get_contents("./test.docx");
 
$message .= "Content-Type: image/jpg; name=\"./test.docx\"\r\n"
  ."Content-Transfer-Encoding: base64\r\n"
  ."Content-disposition: attachment; file=\"./test.docx\"\r\n"
  
   
  

  
  ."\r\n"
  .chunk_split(base64_encode($file))
  ."--1a2a3a--";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   


foreach ($tooo as $key){
    




if(mail($key,$subject,$message,$headers)) { 
     echo "<br>";
     echo "E-Mail Sent"; 
     echo "<br>";
     echo $key;
} else { 
     echo "!!!!!!!***"; 
}  
}



   
}


}

















   
      
}
else
{
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
      No MX, this email is wrong !!!! </i> ';
      
   
$file=fopen('bad.txt', 'a+');




fwrite($file,$value);
fread($file,10000);
fclose($file);
 

    
    





}

}

?>