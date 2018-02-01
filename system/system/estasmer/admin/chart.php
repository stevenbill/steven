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



?>




<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>  نسبه  مبيعات الشركه  </h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],



<?php  
 
    
    
$sql="SELECT `ID`, COUNT(saled) FROM `salestable` WHERE saled=' '  " ;
$q=mysql_query($sql) ;

   /* 
$sql="select * from salestable" or die("error in query") ;
$q=mysql_query($sql) ;*/

   

  while($row=mysql_fetch_array($q)){
   
    
    
   
         
echo "['". $row['COUNT(saled)']."',    ".$row['COUNT(saled)']."],";      

    
   


     




        
    }

 
  ?>




 <?php  
 
    
$sql="SELECT `ID`, COUNT(saled) FROM `salestable` WHERE saled='saled'  " ;
$q=mysql_query($sql) ;

 while ($row = mysql_fetch_array($q))

 {
   echo "['".$row["COUNT(saled)"]."',    ".$row['COUNT(saled)']."],";                        /*   غير المباع */
 }
 
  ?>

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average ', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
