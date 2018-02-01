
<?php
date_default_timezone_set("Africa/Cairo");
?>















<html lang="en">
<head>
       
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script>
        



</script>

<script type="text/javascript">
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

window.onload = timedRefresh(15000);
    




  
     

   



    
    
    </script>
    
    
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>

<script type="text/javascript"> 
    $(document).ready(function(){ 
document.getElementById("modal").onclick();
   });
</script> 
<!--
<input name="printbuttoncustomer" id="" type="submit" onclick="window.open('http://www.yahoo.com','_blank','resizable=yes')" /><div id="iframeplaceholdercustomer">
  -->
</div>
        
    
  <title>Company data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     

   
   



    
    
     
    
    
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script>
    

              
$(document).ready(function(){
              
$("form").submit(function(){
   /* var user = $("#user").val();*/
    $.ajax({
        url:"mail.php",
        type:"POST",
        data:$("form").serialize(),
        success:function(r){
            $(".msg").html(r);
            
            
        }
        
    });
    
    return false;
    
});
   
       
 
});
              
              
        
        </script>
  

</head>
<body>
    <form> 
          <div id="test" class="msg">

    
        </div>
        
        <?php
        $time=@date("h:i") ;
        if ($time=="09:00" or $time=="10:00" or $time=="11:00" or $time=="12:00" or $time=="01:00" or $time=="02:00" or $time=="03:30" or $time=="04:00" or $time=="05:00" ){
echo"<input type='text' name='user' value='$time' >";






        }else{
            echo $time; 
        }
?>
   

    <center>  
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
   <body onload="document.getElementById('modal').click();">
<input  class='btn btn-success'onclick="send()" type="submit" id="modal" data-modal="modal" name="send" value="Start server">
    </form>
    </center>
