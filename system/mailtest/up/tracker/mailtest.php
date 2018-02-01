<?php
;
session_start();

$seg=$_SESSION['logindata'];
date_default_timezone_set("Africa/Cairo");
  $file="myfile.txt";
unlink($file);

 $file2="order.txt";
unlink($file2);
 $file3="id.txt";
unlink($file3);



   
        
        
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_mapcompany";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    
    
     
   $sql20="SELECT unid FROM email2 GROUP BY unid HAVING COUNT(unid) >1 ";
 
  
  $q30=mysql_query($sql20) ;
  
  
  while($row=mysql_fetch_array($q30)){
  

    $unid=$row['unid'];

 
         
        /* echo  $unid.'<br>';*/
    


   
$id=fopen('id.txt', 'a+');


if (!empty($unid)){

fwrite($id,$unid);
fread($id,10000);
fwrite($id,';');
fclose($unid);
  
  $to=file_get_contents('id.txt');
$ahmedsend=explode(";",$to);  
     

  }

}
foreach ($ahmedsend as $ahmed) {
          if (!empty($ahmed)){
              echo "this is ".$ahmed."<br>";
              $q50="SELECT COUNT( *) as 'Rows' FROM email2 WHERE unid='$ahmed' ";
              
               $q60=mysql_query($q50) ;
  
  
  while($row=mysql_fetch_array($q60)){
  

    $count=$row['Rows'];
   
    echo 'count'.$count;
   
    
  }
  
  
  
    $q500="SELECT Date,attach5,boos,COUNT( *) as 'Rowss' FROM email1 WHERE unid='$ahmed'
GROUP BY unid;

";
              
               $q600=mysql_query($q500) ;
  
  
  while($row=mysql_fetch_array($q600)){
  

    $right  =$row['Rowss'];
    $Date=$row['Date'];
    $attach5=$row['attach5'];
    $boos=$row['boos'];
    echo 'its date'.$Date;
   
    
  }
  
  $total2=$count+$right;
  
  
    echo 'right '.$right   ;
  
   $sqlbad2="insert into  report (unid,wrong,right2,total,Date2,attach,back) values('$ahmed','$count','$right','$total2','$Date','$attach5','$boos')";

 mysql_query($sqlbad2);
          }


    
    
    
    
    
    
  }
  
    
session_start();
$seg= $_SESSION['logindata'];
 

       echo  "******".$seg."*****";
$datesend =@date("Y-m-d") ;
$times =@date("h:i") ;
echo "<h1>time***"." .$times.</h1>";

echo "its date:".$datesend;
 $sql3="SELECT * FROM `proemail` where Date='$datesend' AND time ='$times' " ;
/*$sql3="SELECT * FROM `proemail` where Date='$datesend'  " ;*/
$q3=mysql_query($sql3) ;
  while($row=mysql_fetch_array($q3)){
  

    $em=$row['email'];
    echo  $em;
   




    
 
   
$file=fopen('myfile.txt', 'a+');


if (!empty($em)){

fwrite($file,$em);
fread($file,10000);
fwrite($file,';');
fclose($file);

 



    
    
    
    
    
    
    
    
      
  }




 $to=file_get_contents('myfile.txt');
$ahmedsend=explode(";",$to);


}






}else{
  
  mysql_error();
}
  ?>  
<html>
<head>
    
    
    
    
    
    
   

    
    
    
    
    
    
    
    
    
    
    
    
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


</head>
<body>


  

<?php

?>
<div>
    <center>   
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
<input class="formbtn" type="submit" name="send" id='send'  value="Send Message" />
<br><br>
  <input type="file" name="uploaded_file"></input><br />
 <br><br>
 <input class="formbtn" type="submit" name="test" value="insert file in database" />
 <br><br>
<input class="formbtn" type="submit" name="send1" value="make orders" />
<br><br>

 <br><br>
</center>
</form>


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








if($_POST['test']){
    
      if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded"."<br> <br>";
        $up = $_FILES['uploaded_file']['name'];
      echo $up;
    
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }

$x="uploads/".$up;
    $ba=file_get_contents($x);
 
$fileba=explode(",",$ba);


      foreach ($fileba as $ahmed) {
          if (!empty($ahmed)){
   $sqlbad="insert into  test (email,attach) values('$ahmed','$up')";

 mysql_query($sqlbad);
 $sql="UPDATE test SET email = CONCAT(email,',') WHERE email IS NOT Null AND email NOT LIKE '%,'";
  mysql_query($sql);
 
          }
          
     
 
      }
      
      
      
      
      
      
         foreach ($fileba as $ahmed) {
          if (!empty($ahmed)){
              
              
$result=mysql_query("select * from ext where email LIKE '$ahmed%' ");

if(mysql_num_rows($result))
{

	  
	 
	 echo"mail found!"."<br>"."$ahmed";

    
}
else
{

 echo "mail not found"."<br>"."$ahmed";
	    $sqlbad="insert into  ext (email,attach) values('$ahmed','$up')";

 mysql_query($sqlbad);
            
            
              
 $sql="UPDATE ext SET email = CONCAT(email,',') WHERE email IS NOT Null AND email NOT LIKE '%,'";
  mysql_query($sql);
 
}





          


              
              
              
              
              
   
              
              
              
              
              

  
     
 
      } 
      
      
      
      
      
           $result4=mysql_query("SELECT count(email) as total from test");
$mails4=mysql_fetch_assoc($result4);
echo "Number of emails is ".$mails4['total'];



 
 
}
  $file=$x;
unlink($file);
     $sql5="DELETE FROM `test` WHERE NOT email='5'";
  mysql_query($sql5);
          
}



if($_POST['send1']){
    

    
    
    
    
$result2=mysql_query("SELECT count(email) as total from test");
$mails2=mysql_fetch_assoc($result2);






$prodate1 =$_POST['date'] ;
$file="date.txt";
unlink($file);

echo $mails2['total'];/*52*/

$number = $_POST['number'] ;
$loop = $mails2['total']/$number;
echo $loop;
echo $loop = ceil($loop);
echo "<h1>".$loop."</h1>";
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


$sqlm="SELECT * FROM `test` WHERE email NOT LIKE ',%'" ;/*test*/

$qm=mysql_query($sqlm) ;

  while($row=mysql_fetch_array($qm)){
  

    $em=$row['email']/*.$row['EMail2']*/;
    /*$em.=$row['EMail2'];
  /* $em2.=$row['EMail2'];
     $em3.=$row['EMail3'];
     /*EMail1*/
   

   
    $order=fopen('order.txt', 'a+');


    fwrite($order,$em);
       fwrite($order,z);
     
    fread($order,10000);
    fclose($order);
 
    
      
  }


/*************************************************************************************************/
$toos=file_get_contents('order.txt');
$too=explode(",",$toos);
  $unid= hexdec(uniqid());
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
    if (!empty($array_mail[$coc])){
        
    $sql2="insert into  `proemail` (email,back,Message,Date,time,attach,unid) values('$array_mail[$coc]','$back','$message','$array_date[$x]','$current_time','$attach','$unid')";
    mysql_query($sql2); 
    }
        
        $coc++;
    }
    
    
}


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
   
   
  $sqlbad6="DELETE FROM `test` WHERE NOT email='ahmed'; ";

 mysql_query($sqlbad6); 


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
$time = array('09:06','10:00','11:00','12:00','01:00','02:00','03:00','04:00','05:00');

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
       
       
 



}




$to=explode(';',$to);
if (!empty($to)){
date_default_timezone_set("Africa/Cairo");

function domain_exists($email,$record = 'MX')
{
  list($user,$domain) = split('@',$email);
  return checkdnsrr($domain,$record);
}
}


/**********************************************************************************************************************/


if (@ $_POST['send']) {


 



if ($_SERVER['REQUEST_METHOD']=="POST"){

    

    $message = "<html><head></head><body>";

 
     $localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_mapcompany";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

echo "its date:".$datesend;
$times =@date("h:i") ;
$sql3="SELECT * FROM `proemail` where Date='$datesend' AND time = '$times' " ;

$q3=mysql_query($sql3) ;
  while($row=mysql_fetch_array($q3)){
  

    $boos=$row['back'];
    echo  $boos;
    
     $attach5=$row['attach'];
    echo  $attach5;
 
      
  }
}  
    echo "<h1>". "its image".$boos. "</h1>";
        echo "<h1>". "its image".$attach5. "</h1>";
    
  

  //Subject of the mail
   $subject="Maptec Surveying Services";

  

  


    
    $from = "info@maptecgroup.com";

    $headers = "From: $from  <".$from.">\r\n";
    $headers.= "Return-Path: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";





$headers = "From: Maptec \r$from\n ";

$headers .= "\r\n"
  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
  
$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"
  ."--1a2a3a\r\n";
 
$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
  ."Content-Transfer-Encoding: 7bit\r\n\r\n"
  /*."hey my <b>good</b> welcom haaaaaaaaaaaaaaaaaaaaaaaaaaaaa"*/
  /*."<p>Your password is : <span style='color:red'><b>User@1$#!</b></span></p> \r\n"*/
  
  ." <center > <img src='http://estasmer.com/mailtest/up/tracker/$boos' alt='image not found' style=' max-width: 70%; max-hight: 80%;'  /> </center>\r\n" 

  
  
  
  
  ."--1a2a3a\r\n";
  
  
 /****************************************attach********************************************************************/
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$file = file_get_contents("$attach5");
 
$message .= "Content-Type: image/jpg; name=\"$attach5\"\r\n"
  ."Content-Transfer-Encoding: base64\r\n"
  ."Content-disposition: attachment; file=\"$attach5\"\r\n"
  
   
  

  
  ."\r\n"
  .chunk_split(base64_encode($file))
  ."--1a2a3a--";
    
    
    
foreach ($ahmedsend as $key){
    




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





foreach ($to as $value) {

$mailbody="$value\n\n";

/*mail("$value", "testing 123", "$mailbody", "From: Myself<me@myself.com>");*/
echo "<p>$value</p>";











if(domain_exists($value))
{
    echo '<i style="color:green;font-size:30px;font-family:calibri ;">
     ***I will accept this email*** </i> ';
   
    

$CompanyName=$_POST['CompanyName'];
     $date=@date("Y/m/d h:i") ;

$message606=$_POST['message'];

$send = "System(Auto)";
                
    
    
    $sql30="SELECT * FROM `proemail` where Date='$datesend' AND time = '$times' " ;

$q30=mysql_query($sql30) ;
  while($row=mysql_fetch_array($q30)){
  

    $unid=$row['unid'];
    echo  $unid;
    
    
      
  }
    
    
    
    
    
    
        
        
    

$sql="insert into  email1 (CompanyName,Message,seg,email,Date,send,attach5,boos,times,unid) values('$CompanyName','$message606','$seg','$value','$date','$send','$attach5','$boos','$times','$unid')";

 mysql_query($sql); 

    
   $sk= "SELECT  `CompanyName` FROM `company` WHERE EMail1 LIKE '$value%' OR EMail2 LIKE '$value%' OR EMail3 LIKE '$value%' ";
  

$qp=mysql_query($sk) ;

  while($row=mysql_fetch_array($qp)){
  
    
    $CompanyName=$row['CompanyName'];
    echo  "its company name"."<h1>".$CompanyName."</h1>"."------";
   
}

$sqlo = "UPDATE `email1` SET `CompanyName`='$CompanyName'  WHERE email='$value';";

mysql_query($sqlo) ;

   
   $sqlo = "UPDATE `email1` SET `CompanyName`='$CompanyName'  WHERE email='$value';";

mysql_query($sqlo) ;
   


     $datedel=@date("Y/m/d") ;
   $timesdel =@date("h:i") ;
   $sqldel = "DELETE FROM `proemail` WHERE Date = '$datedel' AND time='$timesdel';";
   mysql_query($sqldel) ;



   
    echo $file_name;
    















   
      
}
else
{
    echo '<i style="color:red;font-size:30px;font-family:calibri ;">
      No MX, this email is wrong !!!! </i> ';
      
   
$badfile=fopen('bad.txt', 'a+');

echo "its value*****".$value;

if (!empty($value)){


fwrite($badfile,$value);
fwrite($badfile,";");
fread($badfile,10000);


fclose($badfile);





$ba=file_get_contents('bad.txt');
 
$fileba=explode(";",$ba);


      foreach ($fileba as $ahmed) {
          if (!empty($ahmed)){
              $sql30="SELECT * FROM `proemail` where email='$ahmed' " ;

$q30=mysql_query($sql30) ;
  while($row=mysql_fetch_array($q30)){
  

    $unid=$row['unid'];
    $Date=$row['Date'];
   /* $time=$row['time'];
    $attach=$row['attach']; 
    $back=$row['back'];  */
    echo  $unid;
    
    
      
  }
   $sqlbad="insert into  email2 (email,unid,Date) values('$ahmed','$unid','$Date')";

 mysql_query($sqlbad);
 
 
 
 
          }
 
      }





}

}
 $file3="bad.txt";
unlink($file3);
}








/***end send*****/
}

 










?>