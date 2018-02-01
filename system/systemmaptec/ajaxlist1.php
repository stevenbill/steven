<?php
session_start();

 $seg=$_SESSION['logindata'];
if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }



if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;


}
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

 /* $companylist1 = $_POST['companylist1'];*/
         $Phone01 = $_POST['Phone01']; 
         $Phone02 = $_POST['Phone02']; 
          $Name = $_POST['Name'];
         $Mobile01 = $_POST['Mobile01'];
         $Mobile02 = $_POST['Mobile02']; 
         $Email1 = $_POST['Email1'];
          $Email2 = $_POST['Email2']; 
            $Email3 = $_POST['Email3']; 

/*******************************************************************************************************/

/*

if(empty($Type) ){
   echo "<script> alert('sorry i cant continue with you Type  ') </script>";
    die();
    
}
/**********************************************************************************************/

/*
if(empty($Brand) ){
   echo "<script> alert('sorry i cant continue with you Brand  ') </script>";
    die();
    
}
/**********************************************************************************************//*
if(empty($Dep) ){
   echo "<script> alert('sorry i cant continue with you Dep  ') </script>";
    die();
    
}
/**********************************************************************************************//*
if(empty($Field_of_Work) ){
   echo "<script> alert('sorry i cant continue with you Field_of_Work  ') </script>";
    die();
    
}
/**********************************************************************************************/







/*****************************************************************************************************/
/*
$vuser=strlen($user);
echo $vuser ;

if($vuser > 8 or $vuser < 7 or  !filter_var($vuser, FILTER_VALIDATE_INT) or empty($vuser) ){
   echo "<script> alert('sorry i cant continue with you fax1 must be 7 or 8 ') </script>";
    die();
    
}
/************************************************************************/
/*
$vfax2=strlen($fax2);

if($vfax2 > 8 or $vfax2 < 7 or  !filter_var($vuser, FILTER_VALIDATE_INT) or empty($vfax2) ){
   echo "<script> alert('sorry i cant continue with you fax2 must be  7 or 8  ') </script>";
    die();
    
}

/****************************************************************************************/

/*
$vfax3=strlen($fax3);

if($vfax3 > 8 or $vfax3 < 7 or  !filter_var($vuser, FILTER_VALIDATE_INT) or empty($vfax3) ){
   echo "<script> alert('sorry i cant continue with you fax3 must be  7 or 8  ') </script>";
    die();
    
}

/****************************************************************************************/

/*

$vmobile1=strlen($mobile1);

$count = strstr($vmobile1,"012");
echo "<h1>".$count."</h1>";

if($vmobile1 > 11 or $vmobile1 < 11 or  !filter_var($vuser, FILTER_VALIDATE_INT) or empty($vmobile1) ){
   echo "<script> alert('sorry i cant continue with you mobile1 must be 11 ') </script>";
    die();
    
}
/**********************************************************************************************/

/*
$vmobile2=strlen($mobile2);

if($vmobile2 > 11 or $vmobile2 < 11 or  !filter_var($vuser, FILTER_VALIDATE_INT) or empty($vmobile2) ){
   echo "<script> alert('sorry i cant continue with you mobile2 must be 11 ') </script>";
    die();
    
}
/**********************************************************************************************//*
$vmobile3=strlen($mobile3);

if($vmobile3 > 11 or $vmobile3 < 11 or  !filter_var($vuser, FILTER_VALIDATE_INT) or empty($vmobile3) ){
   echo "<script> alert('sorry i cant continue with you mobile3 must be 11 ') </script>";
    die();
    
}
/**********************************************************************************************//*
$vPhone1=strlen($Phone1);

if($vPhone1 > 8 or $vPhone1 < 7 or  !filter_var($vuser, FILTER_VALIDATE_INT) or empty($vPhone1) ){
   echo "<script> alert('sorry i cant continue with you Phone1 must be 7 or 8 ') </script>";
    die();
    
}
/**********************************************************************************************//*
$vPhone2=strlen($Phone2);

if($vPhone2 > 8 or $vPhone2 < 7 or  !filter_var($vuser, FILTER_VALIDATE_INT) or empty($vPhone2) ){
   echo "<script> alert('sorry i cant continue with you Phone2 must be 7 or 8  ') </script>";
    die();
    
}
/**********************************************************************************************//*
$vPhone3=strlen($Phone3);

if($vPhone3 > 8 or $vPhone3 < 7 or  !filter_var($vuser, FILTER_VALIDATE_INT) or empty($vPhone3) ){
   echo "<script> alert('sorry i cant continue with you Phone3 must be 7 or 8 ') </script>";
    die();
    
}
/**********************************************************************************************/
/*

if(!filter_var($EMail1, FILTER_VALIDATE_EMAIL)or empty($EMail1) ){
   echo "<script> alert('sorry i cant continue with you EMail1  ') </script>";
    die();
    
}
/**********************************************************************************************//*
if(!filter_var($EMail2, FILTER_VALIDATE_EMAIL)or empty($EMail2) ){
   echo "<script> alert('sorry i cant continue with you EMail2  ') </script>";
    die();
    
}
/**********************************************************************************************//*
if(!filter_var($EMail3, FILTER_VALIDATE_EMAIL)or empty($EMail3) ){
   echo "<script> alert('sorry i cant continue with you EMail3  ') </script>";
    die();
    
}
/**********************************************************************************************//*
if(!filter_var($oldURL, FILTER_VALIDATE_URL)or empty($oldURL) ){
   echo "<script> alert('sorry i cant continue with you oldURL  ') </script>";
    die();
    
}
/**********************************************************************************************//*
if(!filter_var($Url, FILTER_VALIDATE_URL)or empty($Url) ){
   echo "<script> alert('sorry i cant continue with you Url  ') </script>";
    die();
    
}
/**********************************************************************************************/
 $date=@date("Y/m/d h:i:sa") ;   
 

     $sql2=" UPDATE `list` SET `Name`='$Name',`Mobile1`='$Mobile01',`Phone2`='$Phone02',`Phone1`='$Phone01',`Mobile2`='$Mobile02',`Email1`='$Email1',`Email2`='$Email3',`Email3`='$Email3'  WHERE id= '15' ";
     mysql_query($sql2) ;
echo "<script> alert('  ***Thank you for your updated ***  ') </script>";

/*
echo $user;
echo  $fax2;     
echo  $fax3;
echo $mobile1;
echo $mobile2;

echo $Field_of_Work;

*/




