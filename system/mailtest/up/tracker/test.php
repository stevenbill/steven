<?php
/*$to = array("ayousry943@gmail.com", "AHMED.YOUSRY@maptecgroup.com","eslam.turki@maptecgroup.com","eslam.turki@gmail.com");*/
 $to=file_get_contents('myfile.txt');
$sendtoo=explode(",",$to);

 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 

foreach ($sendtoo as $key){
    




if(mail($key,$subject,$message,$headers)) { 
     echo "<br>";
     echo "E-Mail Sent"; 
     echo "<br>";
     echo $key;
} else { 
     echo "!!!!!!!***"; 
}  
}


?>

<?php /*
$to = "eslam.turki@maptecgroup.com";
$subject = "welcom mr eslam";
$from = "ahmed7yousry@gmail.com";
$headers = "From: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n"
  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
  
$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"
  ."--1a2a3a\r\n";
 
$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
  ."Content-Transfer-Encoding: 7bit\r\n\r\n"
  ."hey my <b>good</b> welcom haaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
  /*."<p>Your password is : <span style='color:red'><b>User@1$#!</b></span></p> \r\n"*/
  
  
  /*
  ."<img src='http://estasmer.com/mailtest/up/tracker/lazar.jpg' alt='image not found' />\r\n"
  
  
  
  
  ."--1a2a3a\r\n";
  
  
 
$file = file_get_contents("./test.docx");
 
$message .= "Content-Type: image/jpg; name=\"./test.docx\"\r\n"
  ."Content-Transfer-Encoding: base64\r\n"
  ."Content-disposition: attachment; file=\"./test.docx\"\r\n"
  ."\r\n"
  .chunk_split(base64_encode($file))
  ."--1a2a3a--";
    
    
// Send email
 
$success = mail($to,$subject,$message,$headers);
   if (!$success) {
  echo "Mail to " . $to . " failed .";
   }else {
  echo "Success : Mail was send to " . $to ;
   }
 */

?>
