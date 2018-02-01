 
<?php


            # code...
       /* 
          $arr = array($row['name'],$row['seg'], $row['number'],$row['address'],$row['address_houes'],$row['kind_houes'],$row['kind_of_pro'],$row['num_land']);


$arr = array($row['name'],"+", $row['number']);
echo implode(" ",$row)."<br>";

file_put_contents("data1.docx", $arr);


$file=fopen('data1.docx', 'r+');
$read=fread($file, filesize('data1.docxc'));
 $write= fwrite($file, $row['name']);
echo $read;*/

header("Content-type:application/txt");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename='a.txt");

// The PDF source is in original.pdf
readfile("a.txt");


  

  ?>