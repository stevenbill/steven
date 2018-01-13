<?php




$c=mysql_connect("localhost","estasm5_yousry","4562008");
mysql_select_db("estasm5_sales",$c);
extract($_REQUEST); 

$results_oer_page = 10;

                        











$result=mysql_query("SELECT * FROM CustomerCalls ORDER BY ID DESC ");


$number_of_results = mysql_num_rows($result);


























echo $number_f_pages = ceil($number_of_results/$results_oer_page);



if(!isset($_GET['page'])){
    $page = 1;
}else{
    $page= $_GET['page'];
}

echo $this_page_first_result = ($page-1)*$results_oer_page;

$SQL2="SELECT * FROM CustomerCalls LIMIT ".$this_page_first_result.','.$results_oer_page;

$result = mysql_query($SQL2);


  while($row=mysql_fetch_array($result)){
        echo $row['ID'].'   '.$row['PhoneNumber'].'<br>';
  }
  

for ($page=1;$page<=$number_f_pages;$page++){
    echo '<a href="test.php?page=' .$page.'">' . $page . '</a>';
}






















?>






