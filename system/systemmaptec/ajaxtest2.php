

<?php



   
                       $root= $Faxroot;
     
 


$user=$_POST['user'];




if($_POST['user']){
    $ahmedfax= "<a href='imgdow/$user' target='_blank'>Fax download!</a>";   
   echo "<script> alert('<a href='imgdow/$user' target='_blank'>Fax download!</a>') </script>";
 echo "<center>".$ahmedfax."</center>";

 }
 
  




?>


