

<?php
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;

    

}


?>



<?php

session_start();






// set timeout period in seconds (600 = 10 minutes)
$inactive = 300;
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
    $session_life = time() - $_SESSION['timeout'];
    if($session_life > $inactive)
        { session_destroy(); header("Location: destroy.php"); }
}
$_SESSION['timeout'] = time();



if(!isset($_SESSION['logindata']))
    {
        header('Location: destroy.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="map//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="map/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="map/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="map/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="map/css/forms.css" rel="stylesheet">
    

    
          <script>
              /*
            function send(){
                var user=document.getElementById('user').value;
                  var pass=document.getElementById('pass').value;
                
                 var fax2=document.getElementById('fax2').value;
                 var fax3=document.getElementById('fax3').value;
                var mobile1=document.getElementById('mobile1').value;
                var mobile2=document.getElementById('mobile2').value;
                var mobile3=document.getElementById('mobile3').value;
                var EMail1=document.getElementById('EMail1').value; 
                var EMail2=document.getElementById('EMail2').value; 
                var EMail3=document.getElementById('EMail3').value;
                var oldURL=document.getElementById('oldURL').value;
                var Url=document.getElementById('Url').value;
                var Address=document.getElementById('Address').value;
                var Phone1=document.getElementById('Phone1').value;
                var Phone2=document.getElementById('Phone2').value;
                var Phone3=document.getElementById('Phone3').value;
                var Type=document.getElementById('Type').value;
                 var Brand=document.getElementById('Brand').value;
                var Dep=document.getElementById('Dep').value; 
                 var Ar_Name=document.getElementById('Ar_Name').value;
                var En_Name=document.getElementById('En_Name').value; 
                var Field_of_Work=document.getElementById('Field_of_Work').value; 
                
$("#test").load("ajax1.php",{user:user,pass:pass,fax2:fax2,fax3:fax3,mobile1:mobile1,mobile2:mobile2,mobile3:mobile3,EMail1:EMail1,EMail2:EMail2,EMail3:EMail3,oldURL:oldURL,Url:Url,Address:Address,Phone1:Phone1,Phone2:Phone2,Phone3:Phone3,Type:Type,Brand:Brand,Dep:Dep,Ar_Name:Ar_Name,En_Name:En_Name,Field_of_Work:Field_of_Work});
               
                
            }
            
                
          <script>
              
              $(document).ready(function(){
    
       /*$("button").click(function(){
           
           $(".msg").load("AJAX1.php h1")
           
       });*/
                  
        
              $(document).ready(function(){
    
       /*$("button").click(function(){
           
           $(".msg").load("AJAX1.php h1")
           
       });*/
                  
$("form").submit(function(){
   /* var user = $("#user").val();*/
    $.ajax({
        url:"ajax1.php",
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
    
     	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                         <h1><a href="add.php">Edit company list</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	               
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo "user/".$seg= $_SESSION['logindata'];    ?>          <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">

	                          
	                       <li><a href="destroy.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
    
    
    
    <?php
    session_start();

 $seg=$_SESSION['logindata'];
    
    
    $id=$_GET['up'];
    
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
    
$sql2="SELECT * FROM users where user='$seg' " ;
$q2=mysql_query($sql2) ;
    
    while($row1=mysql_fetch_array($q2)){
         $Type1 = $row1['Type'];
         $Brand1 = $row1['Brand']; 
          $Dep1 = $row1['Dep'];
         $Ar_Name1 = $row1['Ar_Name'];
         $En_Name1 = $row1['En_Name'];
         $Field_of_Work1 = $row1['Field_of_Work']; 
         $fax11 = $row1['fax1'];
         $fax12 = $row1['fax2'];
         $fax13 = $row1['fax3'];
         $Phone11 = $row1['Phone1'];
         $Phone12 = $row1['Phone2'];
         $Phone13 = $row1['Phone3'];
         $mobile11 = $row1['mobile1'];
         $mobile12 = $row1['mobile2'];
         $mobile13 = $row1['mobile3'];
         $EMail11 = $row1['EMail1'];
         $EMail12 = $row1['EMail2'];
         $EMail13 = $row1['EMail3'];
         $oldURL1 = $row1['oldURL'];
         $Url1 = $row1['Url']; 
         $Address1 = $row1['Address']; 
        
        
    }
    
$sql="SELECT * FROM company where id='$id' " ;
$q=mysql_query($sql) ;
    
    while($row=mysql_fetch_array($q)){
    $fax1 = $row['fax1'];
         $fax2 = $row['fax2'];
         $fax3 = $row['fax3'];
        $mobile1= $row['mobile1'];
        $mobile2= $row['mobile2'];
        $mobile3= $row['mobile3'];
        $EMail1= $row['EMail1'];
        $EMail2= $row['EMail2'];
        $EMail3= $row['EMail3'];
        $oldURL = $row['oldURL']; 
        $Url = $row['Url'];
        $Address= $row['Address'];
        $Phone1 = $row['Phone1'];
        $Phone2 = $row['Phone2'];
        $Phone3 = $row['Phone3'];
        $Ar_Name = $row['Ar_Name'];
        $En_Name= $row['CompanyName'];
        $Field_of_Work = $row['Field_of_Work'];
        $Type = $row['Type'];
        $Brand = $row['Brand'];
        $Dep = $row['Dep'];
        $Field_of_Work = $row['Field_of_Work'];
       
       
    
    
    
   
   
   
    
}
    
      
    

    echo "<center>";
    echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>1.</strong>&nbsp;Type</label>";
    echo"<div class='col-xs-2'>";
     

  
echo "<select required id='Type'  name='Type'  class='form-control'   $Type1   >";
  
    
    
    
    

               echo"<option value='$Type'>$Type</option>";
 
      echo"<option value='office'>office</option>";
      echo "<option value='field'>field</option>";
     
    echo "</select>";
        echo"</div>";
echo"</div>";
echo"</div>";
   
    
       
    echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>2.</strong>&nbsp;Brand</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required   id='Brand' name='Brand' class='form-control' $Brand1 >";
       echo"<option value='$Brand'>$Brand</option>";
      echo "<option value='Maptec'>Maptec</option>";
      echo"<option value='Estasmer'>Estasmer</option>";
     
    
    echo"</select>";
echo"</div>";
echo"</div>";
echo"</div>";
    
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>3.</strong>&nbsp;Dep</label>";
    echo"<div class='col-xs-2'>";
    
       echo "<select required  name='Dep' id='Dep' class='form-control' $Dep1  >";
       echo"<option value='$Dep'>$Dep</option>"; 
      echo"<option>Survey</option>";
      echo"<option>Gis</option>";
        
      echo"<option>constraction</option>";
     
    echo"</select>";
    echo"</div>";
echo"</div>";
echo"</div>";
    
     
    /******************************************************************/
    echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>4.</strong>&nbsp;Ar_Name</label>";
    echo"<div class='col-xs-2'>";
    
    
    
    echo "<input  name='Ar_Name' placeholder='Ar_Name' value='$Ar_Name' id='Ar_Name' type='text'  class='form-control' $Ar_Name1 >";
     
    /*************************************************************************/
    echo"</div>";
echo"</div>";
echo"</div>";
    
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>5.</strong>&nbsp;En_Name</label>";
    echo"<div class='col-xs-2'>";
    

    echo"<input required name='En_Name' value='$En_Name'  type='text' id='En_Name' class='form-control' $En_Name1 >";
    
      echo"</div>";
echo"</div>";
echo"</div>";
    /**********************************************************************************************************************/
        echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>6.</strong>&nbsp;Field_of_Work</label>";
    echo"<div class='col-xs-2'>";
    
      echo"<select name='Field_of_Work' id='Field_of_Work' class='form-control' $Field_of_Work1 >";
      echo"<option value='$Field_of_Work'> $Field_of_Work </option>";
      echo "<option value='ادارة المشروعات' >  ادارة المشروعات   </option>";
        echo "<option value='الاستثمار العقاري ' > الاستثمار العقاري   </option>";
        echo"<option value='الاستشارات الهندسية ' >  الاستشارات الهندسية  </option>";
        echo"<option value='الاسكان والتعمير ' > الاسكان والتعمير  </option>";
        echo "<option value=' الانشاءات' >  الانشاءات  </option>";
       echo" <option value=' البناء والتشييد' >  البناء والتشييد  </option>";
        echo"<option value=' التصميمات الهندسية' >   التصميمات الهندسية </option>";
        echo"<option value='التكنولوجيا المتقدمة ' >  التكنولوجيا المتقدمة  </option>";
        echo"<option value='التطوير العمراني ' >  التطوير العمراني  </option>";
       echo" <option value='الخدمات العقارية' >  الخدمات العقارية  </option>";
        echo"<option value=' الخدمات والتقنيه' >  الخدمات والتقنيه  </option>";
       echo"<option value='المساحة ' >  المساحة  </option>";
        echo"<option value=' المشروعات الهندسية' >  المشروعات الهندسية  </option>";
          echo"<option value=' المقاولات العامة' > المقاولات العامة   </option>";
        
          echo"<option value='التجارة ' > التجارة   </option>";
        
          echo"<option value=' للاوصول العقارية والسياحيه' >  للاوصول العقارية والسياحيه  </option>";
        
          echo"<option value='للتوكيلات والاستشارات ' > للتوكيلات والاستشارات   </option>";
            echo"<option value=' مواد البناء' >  مواد البناء  </option>";
            
        
        
        
        

      
     
   echo" </select>";
          
    
    echo"</div>";
echo"</div>";
echo"</div>";
    /***************************************************************************************************/
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>7.</strong>&nbsp;fax1</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='user' name='fax1' type='number' value='$fax1' class='form-control' $fax11 >"; 
    
echo"</div>";
echo"</div>";
echo"</div>";
    
    /***************************************************************************************************/
         echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>8.</strong>&nbsp;fax2</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='fax2' name='fax2' type='number' value='$fax2' class='form-control' $fax12 >";   
    
echo"</div>";
echo"</div>";
echo"</div>";
    
    /********************************************************************************************************/
       echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>9.</strong>&nbsp;fax3</label>";
    echo"<div class='col-xs-2'>";
     echo"<input id='fax3' name='fax3' type='number' value='$fax3' class='form-control' $fax13>"; 
    
    echo"</div>";
echo"</div>";
echo"</div>";
     /**************************************************************************************************************/
       echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>10.</strong>&nbsp;phone1</label>";
    echo"<div class='col-xs-2'>";
    
    
     echo"<input id='Phone1' name='Phone1' type='number' value='$Phone1' class='form-control' $Phone11>"; 
    
        echo"</div>";
echo"</div>";
echo"</div>";
    /********************************************************************************************************/
    echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>11.</strong>&nbsp;phone2</label>";
    echo"<div class='col-xs-2'>";
    
     echo"<input id='Phone2' name='Phone2' type='number' value='$Phone2' class='form-control' $Phone12>"; 
    
         echo"</div>";
echo"</div>";
echo"</div>";
    /***********************************************************************************************************/
    echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>12.</strong>&nbsp;phone3</label>";
    echo"<div class='col-xs-2'>";
     echo"<input id='Phone3' name='Phone3' type='number' value='$Phone3' class='form-control' $Phone13>"; 
    
            echo"</div>";
echo"</div>";
echo"</div>";
    /**************************************************************************************************************/
       
    
       echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>12.</strong>&nbsp;mobile1</label>";
    echo"<div class='col-xs-2'>";
    
    
    echo"<input id='mobile1' name='mobile1' type='number' value='$mobile1' class='form-control' $mobile11>"; 
  
 echo"</div>";
echo"</div>";
echo"</div>";
    /******************************************************************************************************************/
    
    
        echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>13.</strong>&nbsp;mobile2</label>";
    echo"<div class='col-xs-2'>";
    
    
    echo"<input id='mobile2' name='mobile2' type='number' value='$mobile2' class='form-control' $mobile12>"; 
    ;
     echo"</div>";
echo"</div>";
echo"</div>";
    /*******************************************************************************************************************/
    
        echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>14.</strong>&nbsp;mobile3</label>";
    echo"<div class='col-xs-2'>";
    
    echo" <input id='mobile3' name='mobile3' type='number' value='$mobile3' class='form-control' $mobile13>"; 
   
    
      echo"</div>";
echo"</div>";
echo"</div>";
    /*********************************************************************************/
            echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>15.</strong>&nbsp;EMail1</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='EMail1' name='EMail1' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' type='text' value='$EMail1' class='form-control' $EMail11>"; 
    
       echo"</div>";
echo"</div>";
echo"</div>";
    /********************************************************************************************/
             echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>16.</strong>&nbsp;EMail2</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='EMail2' name='EMail2' type='text' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' value='$EMail2' class='form-control' $EMail12>"; 
   
         echo"</div>";
echo"</div>";
echo"</div>";
    /**********************************************************************************************/
     echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>17.</strong>&nbsp;EMail3</label>";
    echo"<div class='col-xs-2'>";
    echo"<input id='EMail3' name='EMail3' type='text' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' value='$EMail3' class='form-control' $EMail13>"; 
    
             echo"</div>";
echo"</div>";
echo"</div>";
    /*****************************************************************************************************/
    echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>18.</strong>&nbsp;oldURL</label>";
    echo"<div class='col-xs-2'>";
    
    echo" <input id='oldURL' name='oldURL' type='text' value='$oldURL' class='form-control' $oldURL1>"; 
    
    echo"</div>";
echo"</div>";
echo"</div>";
    /******************************************************************************************************/
    echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>19.</strong>&nbsp;Url</label>";
    echo"<div class='col-xs-2'>";
    echo"<input id='Url' name='Url' type='text' value='$Url' class='form-control' $Url1>"; 
   
      
     echo"</div>";
echo"</div>";
echo"</div>";
    /**********************************************************************************************/
    echo"<div class='well'>";
echo"<div class='form-group'>";
    echo"<label class='col-xs-5 control-label'><strong>19.</strong>&nbsp;Address</label>";
    echo"<div class='col-xs-2'>";
    
    echo"<input id='Address' name='Address' type='text' value='$Address' class='form-control' $Address1>"; 
    
    echo"</div>";
echo"</div>";
echo"</div>";
    /************************************************************************************************/
   
   
    
    
echo"<input type='text' hidden='hidden' id='pass' name='pass' placeholder='pass' value='$id'  >";
 
    ?>
    
    


    

<input onclick="send()" type="submit" name="send" value=" Update" class='btn btn-success'  >
<br>
<br>
        </form>
    </center>
    
    </body>
</html>