<?php


echo "<img src='image.jpg' alt='image not found' />";

$message = "<html><head></head><body>";
$message .= "<img src='http://estasmer.com/mailtest/image.jpg' alt='image not found' target='_blank' /></body></html>";
/*$message .="<img src='http://estasmer.com/mailtest/ahmedtest.php?user=123' target='_blank'>";*/


$subject = "ahmed mail subject";
$to = "ayousry943@gmail.com";
$headers = "From: 'ahmed yousry'";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

echo"<form method='post'>";
  echo"<input type='submit' value='Submit' name='send'>";
echo"</form>";








if($_POST['send']) {
    mail($to, $subject, $message, $headers);
    echo "The email was sent.";
}
else {
    echo "There was an error sending the mail.";
}
?>