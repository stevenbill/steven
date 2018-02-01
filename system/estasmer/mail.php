



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Flat Responsive Form using CSS3 & HTML5 </title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>


  <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" action="mail.php" method="post">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" name="send" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>


  
</body>
</html>
 <?php


	
$to = $_POST['email'];
$subject = $_POST['name'];
$txt = $_POST['text'];
$headers = "From: ESTASMER WEB SITE " . "\r\n" .
"CC: somebodyelse@example.com";

			 if ($_POST['send']) {  
	mail($to,$subject,$txt,$headers);


}
	

?> 