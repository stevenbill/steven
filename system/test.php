<!DOCTYPE html>
<meta property="og:image" content="background.jpg" />
<meta property="og:image:secure_url" content="https://secure.example.com/ogp.jpg" />
<meta property="og:image:type" content="background.jpg" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:image:alt" content="A shiny red apple with a bite taken out" />

<?php/*
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
}*/



?>
<html>
    <form action="test.php" enctype="multipart/form-data" method="post" name="formap">
        <table>
            <tr>
                <td>
                    Name:
                </td>
                <td>
                     <input type="text" name="name" > 
                </td> 
            </tr>

            <tr>
                <td>
                    Package:
                </td>
                <td>
                    <input type="text" name="package">

                </td>

            </tr>
            <tr>
                <td>
                    Manufacturer:
                </td>
                <td>
                    <input type="text" name="manufacturer">

                </td>

            </tr>
            <tr>

              <td>
                <input name="uploadedimage[]" type="file"><br/>
                <input name="uploadedimage[]" type="file"><br/>
                <input name="uploadedimage[]" type="file"><br/>
              </td>

            </tr>
            <tr>
                <td><button type="submit" value="submit" name="submit">Submit</button></td>             
            </tr>
        </table>
    </form>
 </html>

add.php

    <?php



if(isset($_POST['submit']))
    {
    $name=$_POST['name'];
    $uploadedimage=$_POST['uploadedimage'];
    $manufacturer=$_POST['manufacturer'];
    $package=$_POST['package'];


    }
    include 'config.inc';


    function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
     if (!empty($_FILES["uploadedimage"]["name"])) {

        foreach ( $_FILES['uploadedimage']['tmp_name'] as $key => $val ) 
    {

        $file_name=trim($_FILES["uploadedimage"]["name"][$key]);
        $temp_name=$_FILES["uploadedimage"]["tmp_name"][$key];
        $imgtype=$_FILES["uploadedimage"]["type"][$key];

        $ext= GetImageExtension($imgtype);

        $target_path = "img/".$file_name;

        if(move_uploaded_file($temp_name, $target_path)) 
        {

           $query= mysql_query("INSERT INTO ins 
           ( seg,name,number,adress) 
           VALUES('".$target_path."','".$name."',
           '".$package."','".$manufacturer."') ")or die(mysql_error());
            echo '<p>Adding product successful p>';
            echo '<li><a href="admin.php">Back</a></li>';
        }else{

           exit("Error While uploading image on the server");
    }

             }


    }?>