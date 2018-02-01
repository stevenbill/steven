<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#p").toggle();
    });
});
</script>
    
    
</head>
<body>

<button> share home </button>
<form action="share.php" method="post" id="p" hidden="hidden">
     <input name="id" type="text" placeholder="id">
    <br> <br>
    <input name="user" type="text" placeholder="user">
    <br> <br>
    <input name="send" type="submit" value="send">
    <br><br>
    </form>
    <?php
    
   
$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="sales";

$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");

}else{
	
	mysql_error();
}
    $id = $_POST['id'];
    $user = $_POST['user'];
  
    
 $sql  ="insert into share (id_share,user) values('$id','$user')";

if (@$_POST['send']) {
     mysql_query($sql);
}


?>

</body>
</html>
