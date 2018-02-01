

<?php

$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    
   session_start();
   
  $seg= $_SESSION['logindata'];
    echo var_dump($seg);

}else{
  
  mysql_error();
}

/*
$dir=dirname(__FILE__)."/";
$path=$_FILES['up']['tmp_name'][$i];
$name=$_FILES['up']['name'][$i];
$size=$_FILES['UP']['size'][$i];
$type=$_FILES['UP']['type'][$i];*/


if ($_POST['send1']) {
  $move=move_uploaded_file($path,$dir.$name);
  echo var_dump($name);
 
for($i=0; $i<count($_FILES['up']['name']); $i++)
{


$dir=dirname(__FILE__)."/";
$path=$_FILES['up']['tmp_name'][$i];
$name=$_FILES['up']['name'][$i];
$size=$_FILES['UP']['size'][$i];
$type=$_FILES['UP']['type'][$i];
if ($_POST['send1']) {
  $move=move_uploaded_file($path,$dir.$name);
  echo var_dump($name);




}




    
 
$sql="SELECT * FROM salestable WHERE id  " ;
$q=mysql_query($sql) ;

  while($row=mysql_fetch_array($q)){
   
    
    
     echo$row['id'];

$id=$row['id'];

}


$sql2="INSERT INTO `imagtable`(`sales_id`, `image`) VALUES ('$id','$name')";


$q2= mysql_query($sql2);


/*
echo var_dump($row);


$sql2="INSERT INTO `imagtable`(`sales_id`, `image`) VALUES ('$row','$name')";


 $q2= mysql_query($sql2);
*/


}


          

/***show data*****/







$sql="SELECT * FROM `imagtable` image"  ;
$q=mysql_query($sql) ;

   
    

  while($row=mysql_fetch_array($q)){
 
      echo "<td>";?> <img src="<?php echo $row['image'];?>" height="100" width="500"> <?php echo"</td>";
}



}


?>
<!--
      <form action="index.php" method="post" enctype="multipart/form-data">

   <input type="file" name="up" id="fileToUpload">
    <input type="submit" value="Upload Image" name="send1">-->
 
</form>
</body>
</html>
























<?php


$fsite=$_POST['fsite'];
$lsite=$_POST['lsite'];
$date=$_POST['date'];
$name=$_POST['name'];
$number=$_POST['number'];
$num_land=$_POST['num_land'];
$address=$_POST['address'];
$adwar=$_POST['adwar'];
$msaha=$_POST['msaha'];
$wagha=$_POST['wagha'];
$address2=$_POST['address2'];
$kind_houes=$_POST['kind_houes'];
$address_houes=$_POST['address_houes'] ;
$misaha2=$_POST['misaha2'];
$room=$_POST['room'];
$bath=$_POST['bath'];
$resh=$_POST['resh'];
$matalat=$_POST['matalat'];
$mabany=$_POST['mabany'];
$garash=$_POST['garash'];
$tashteb=$_POST['tashteb'];
 	$kindofpro=$_POST['kind_of_pro']; 	 
 	$dor=$_POST['dor']; 	 
$price=$_POST['price'];
$numdor=$_POST['num_dor'];
$numofhoues=$_POST['num_of_houes'];
$cash=$_POST['cash'];
$enter=$_POST['enter'];

$wstreet=$_POST['w_street'];
$mola=$_POST['3mola'];
$message=$_POST['message'];
$asanser=$_POST['asanser'];
$onstreet=$_POST['onstreet'];

$adad=$_POST['adad'];
$aset=$_POST['aset'];
$sadad=$_POST['sadad'];
$gas =$_POST['gas'];
$kahrba=$_POST['kahrba'];
$water=$_POST['water'];
$date=date("Y/m/d h:i:sa") ;
   









$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {

mysql_select_db($db) or die("db selction error ");
    
	 session_start();
	$seg= $_SESSION['logindata'];
    echo var_dump($seg);

}else{
	
	mysql_error();
}

$sql="insert into salestable (fsite,lsite,name,number,num_land,address,adwar,msaha,wagha,address2,kind_houes,address_houes,misaha2,room,bath,resh,matalat,mabany,garash,tashteb,price,date,kind_of_pro,dor,num_dor,num_of_houes,cash,enter,w_street,3mola,message,asanser,adad,aset,sadad,gas,kahrba,water,onstreet,seg ) values('$fsite','$lsite','$name','$number','$num_land','$address','$adwar','$msaha','$wagha','$address2','$kind_houes','$address_houes','$misaha2','$room','$bath','$resh','$matalat','$mabany','$garash','$tashteb','$price','$date','$kindofpro','$dor','$numdor','$numofhoues','$cash','$enter','$wstreet','$mola','$message','$asanser','$adad','$aset','$sadad','$gas','$kahrba','$water','$onstreet','$seg')";
if (@$_POST['send']) {
  mysql_query($sql)  ;
}
/************show datda************************/

?>




<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>استماره بينات العقار</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>



<p>اضغط على زر لمعرفه موقعك</p>

<button onclick="getLocation()">اعرف موقعك</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " +       position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>







<div id="contact-form">
	<div>
		<h1>ESTASMER</h1> 
		<h4>WELCOM TO ESTASMER MY FRIEND SALES.</h4> 
	</div>
		<p id="failure">Oopsie...message not sent.</p>  
		<p id="success">Your message was sent successfully. Thank you!</p>

      <form method="post" action="index.php">
			
          
<div>
		      <label for="name">
		     


		      	<span class="required">  اول رقم من موقعك: *</span> 
		      	<input type="text" id="name"      name="fsite"id="email" placeholder="  اول رقم "     tabindex="1" autofocus="autofocus"/>
		      </label> 
			</div>


<div>
		      <label for="name">
		      	<span class="required"> ثانى رقم من موقعك: *</span> 
		      	<input type="text" id="name"      name="lsite"id="email" placeholder="  ثانى رقم"     tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>















			<div>
		      <label for="name">
		      	<span class="required">  اسم المالك - وسيط: *</span> 
		      	<input type="text" id="name"      name="name"id="email" placeholder="  اسم الوسيط"     tabindex="1" autofocus="autofocus"   />
		      </label> 
			</div>
            
			<div>
		      <label for="name">
		      	<span class="required">رقم الموبيل: *</span> 
		      	<input type="text" id="name"      name="number" placeholder="رقم الموبيل"     tabindex="1" autofocus="autofocus"  />
		      </label> 
			</div>
              
			  

			<div>		          
		      <label for="subject">
		      <span> منطقه: </span>
			      <select id="subject"  name="address" placeholder=" المنطقه "  tabindex="4"  > 
					 
 <option value="">  </option>
<option value="الساعه">  الساعه</option>
<option value="شدس">  شدس</option>
<option value="لاقبال">  لاقبال</option>
<option value="بولكلى">  بولكلى</option>
                          <option value="بحرى">  بحري        </option>
                          <option value="منشيه"> منشيه                </option>
                           <option value="محطه الرمل">محطة الرمل           </option>
                          <option value=" محرم بيك ">محرم بك               </option>
								 <option value=" لازاريطه">الأزاريطة       </option>
                          <option value=" كامب شيزار">   كامب شيزار   </option>
								 <option value="الابراهيميه">  الإبراهيمية       </option>
                          <option value="سبورتنج">  سبورتنج                  </option>
								 <option value="كليوباترا">  كليوباترا              </option>
                          <option value="سيدى جابر">سيدى جابر               </option>
								 <option value="مصطفى كامل">مصطفي كامل          </option>
                          <option value="رشدى"> رشدى                           </option>
								 <option value="كفر عبدو">  كفر عبده              </option>
                          <option value="سموحه"> سموحة</option>
								 <option value="فلمنج">  فلمنج                         </option>
                          <option value="ونجت"> ونجت                                        </option>
								 <option value="باكوس">  باكوس</option>
                          <option value="سابا باشا"> سابا باشا                    </option>
								
								  <option value="جليم"> جليم</option>
								 <option value="زيزينيا">  زيزينيا </option>
                          <option value="جناكليس"> جناكليس</option>
								 <option value="سان ستيفانو">         سان ستيفانو                                      </option>
                          <option value="ثروت"> ثروت</option>
								
								
								  <option value="لوران"> لوران</option>
								 <option value="السرايا">  السرايا </option>
                          <option value="سيدى بشر"> سيدى بشر</option>
								 <option value="ميامى">  ميامى</option>
                          <option value="عصافره"> عصافره</option>
						    <option value="اخرى">   اخرى </option>
			      </select>
		      </label>
			</div>
			<div>	
                


		      </label> 
			</div>

	<div>
		      <label for="name">
		      	<span class="required"> عنوان : *</span> 
		      	<input type="text" id="name"    name="address_houes" placeholder=" عنوان "  tabindex="1" autofocus="autofocus"   />
		      </label> 
			</div>
                
    
			<div>		          
		      <label for="subject">
		      <span>نوع الوحده: </span>
			      <select id="subject" name="kind_houes" tabindex="4"  > 
					  <option value=""></option>  
			         <option value="شقه">شقه</option>
			         <option value="فيلا">فيلا</option>  
			         <option value="ارض"> ارض</option>
                      			         <option value="محل"> محل </option>
										     <option value="مشروع"> مشروع</option>
											   <option value="ميزان"> ميزان</option>
			      </select>
		      </label>
			</div>
			<div>	
                

			<div>		          
		      <label for="subject">
		      <span>نوع العمليه: </span>
			      <select id="subject" name=" kind_of_pro" tabindex="4"  > 
					  <option value=""></option>  
			         <option value="ايجار">ايجار</option>
			         <option value="تمليك">تمليك</option>  
			        
			      </select>
		      </label>
			</div>
			<div>	
                
				

                
                
                <!-- <label for="subject">
		      <span> عدد ادوار العقار: </span>
			      <select id="subject"   name="adwar"   name="subject" tabindex="4" required >   
					 <option value=""></option>  
  <option value=" 1"> 1</option>
                          <option value="2"> 2</option>
                           <option value="3"> 3</option>
                            <option value="4"> 4</option>
                             <option value="5"> 5</option>
                              <option value="6"> 6</option>
                               <option value="7"> 7</option>
                                <option value="8"> 8</option>
                                 <option value="9"> 9</option>
                                  <option value="10"> 10</option>
                                   <option value="11"> 11</option>
                                    <option value="12"> 12</option>
                                     <option value="13"> 13</option>
                                      <option value="14"> 14</option>
                                       <option value="15"> 15</option>
                                        <option value="16"> 16</option>
                                         <option value="17"> 17</option>
                                          <option value="18"> 18</option>
                                           <option value="19"> 19</option>
                      			  
			      </select>
		      </label>
			</div>
			<div>	-->
                

               
                  <label for="subject">
		      <span> الرخصه : </span>
			      <select id="subject"   name="num_land" placeholder=" الرخصه "   tabindex="4"  >
					 <option value=""></option>  
  <option value=" 1"> 1</option>
                          <option value="2"> 2</option>
                           <option value="3"> 3</option>
                            <option value="4"> 4</option>
                             <option value="5"> 5</option>
                              <option value="6"> 6</option>
                               <option value="7"> 7</option>
                                <option value="8"> 8</option>
                                 <option value="9"> 9</option>
                                  <option value="10"> 10</option>
                                   <option value="11"> 11</option>
                                    <option value="12"> 12</option>
                                     <option value="13"> 13</option>
                                      <option value="14"> 14</option>
                                       <option value="15"> 15</option>
                                        <option value="16"> 16</option>
                                         <option value="17"> 17</option>
                                          <option value="18"> 18</option>
                                           <option value="19"> 19</option>
                      			  
			      </select>
		      </label>
			</div>
			<div>	
		
              
               	<div>		          
		      <label for="subject">
		      <span> الواجهه: </span>
			      <select id="subject" name="wagha" placeholder="واجه" name="subject" tabindex="4"  >   
					 <option value=""></option>  
			         <option value="بحرى">بحرى</option>
			         <option value="قبلى">قبلى</option>  
			         
                      			  
			      </select>
		      </label>
			</div>
			<div>	

            <label for="subject">
		      <span> وصف الوحده: </span>    
           
                
                	<div>
		      <label for="name">
		      	<span class="required">المساحه: *</span> 
		      	<input type="text" id="name"     name="msaha" placeholder="مساحه"     tabindex="1" autofocus="autofocus"   />
		      </label> 
			</div>
                
                 
                
                  <label for="subject">
		      <span> دور : </span>
			      <select id="subject"    name="dor" tabindex="4"   >
					 <option value=""></option>  
  <option value=" 1"> 1</option>
                          <option value="2"> 2</option>
                           <option value="3"> 3</option>
                            <option value="4"> 4</option>
                             <option value="5"> 5</option>
                              <option value="6"> 6</option>
                               <option value="7"> 7</option>
                                <option value="8"> 8</option>
                                 <option value="9"> 9</option>
                                  <option value="10"> 10</option>
                                   <option value="11"> 11</option>
                                    <option value="12"> 12</option>
                                     <option value="13"> 13</option>
                                      <option value="14"> 14</option>
                                       <option value="15"> 15</option>
                                        <option value="16"> 16</option>
                                         <option value="17"> 17</option>
                                          <option value="18"> 18</option>
                                           <option value="19"> 19</option>
                      			  
			      </select>
		      </label>
			</div>
			<div>	
		
                
                  <label for="subject">
		      <span> عدد الغرف: </span>
			      <select id="subject"   name="room" placeholder=" عدد الحجرات "  name="subject" tabindex="4"   >   
					 <option value=""></option>  
  <option value=" 1"> 1</option>
                          <option value="2"> 2</option>
                           <option value="3"> 3</option>
                            <option value="4"> 4</option>
                             <option value="5"> 5</option>
                              <option value="6"> 6</option>
                               <option value="7"> 7</option>
                                <option value="8"> 8</option>
                                
			      </select>
		      </label>
			</div>
			<div>	
                
                
                  <label for="subject">
		      <span> عدد الحمامات: </span>
			      <select id="subject"   name="bath" placeholder=" عدد الحمامات "  name="subject" tabindex="4"   >   
					 <option value=""></option>  
  <option value=" 1"> 1</option>
                          <option value="2"> 2</option>
                           <option value="3"> 3</option>
                            <option value="4"> 4</option>
                             <option value="5"> 5</option>
                              
                                
			      </select>
		      </label>
			</div>
			<div>	

                
                
                  <label for="subject">
		      <span> عدد الريسبشن: </span>
			      <select id="subject"    name="resh" placeholder="الريسبيشن "  name="subject" tabindex="4"   >   
					 <option value=""></option>  
  <option value=" 1"> 1</option>
                          <option value="2"> 2</option>
                           <option value="3"> 3</option>
                            <option value="4"> 4</option>
                             <option value="5"> 5</option>
                              
                                
			      </select>
		      </label>
			</div>
			<div>	


                
   
                

                  <label for="subject">
		      <span> مطلات الغرف  على شارع: </span>
			      <select id="subject"    name="matalat" placeholder="مطلات "   name="subject" tabindex="4"   >   
					 <option value=""></option>  
  <option value=" 1"> 1</option>
                          <option value="2"> 2</option>
                           <option value="3"> 3</option>
                            <option value="4"> 4</option>
                             <option value="5"> 5</option>
                              
                                
			      </select>
		      </label>
			</div>
			<div>	
                


                  <label for="subject">
		      <span>    غرف على الشارع : </span>
			      <select id="subject"    name="onstreet" placeholder="مطلات "   name="subject" tabindex="4"   >   
					 <option value=""></option>  
  <option value=" نعم"> نعم</option>
                          <option value="لا"> لا</option>
                           
                              
                                
			      </select>
		      </label>
			</div>
			<div>	





                  <label for="subject">
		      <span> عدد ادوار العقار : </span>
			      <select id="subject"    name="num_dor" tabindex="4"   >   
					 <option value=""></option>  
  <option value=" 1"> 1</option>
                          <option value="2"> 2</option>
                           <option value="3"> 3</option>
                            <option value="4"> 4</option>
                             <option value="5"> 5</option>
                              <option value="6"> 6</option>
                               <option value="7"> 7</option>
                                <option value="8"> 8</option>
                                 <option value="9"> 9</option>
                                  <option value="10"> 10</option>
                                   <option value="11"> 11</option>
                                    <option value="12"> 12</option>
                                     <option value="13"> 13</option>
                                      <option value="14"> 14</option>
                                       <option value="15"> 15</option>
                                        <option value="16"> 16</option>
                                         <option value="17"> 17</option>
                                          <option value="18"> 18</option>
                                           <option value="19"> 19</option>
                      			  
			      </select>
		      </label>
			</div>
			<div>	


                
                  <label for="subject">
		      <span> باكيه الجراج: </span>
			      <select id="subject"    name="garash"  placeholder="باكيه الجراج "  name="subject" tabindex="4"   >   
					 <option value=""></option>  
 
                          <option value="يوجد"> يوجد</option>
                           <option value="لايوجد"> لايوجد</option>
                          
                              
                                
			      </select>
		      </label>
			</div>
			<div>	

           
     
                  <label for="subject">
		      <span>  مبانى: </span>
			      <select id="subject"     name="mabany" placeholder="مبانى "   name="subject" tabindex="4"   >   
					  <?php
					  	  echo '<option value=""> </option>';
  for($i = 1900; $i < date("Y")+1; $i++){
	  echo '<option value="'.$i.'">'.$i.'</option>';
  }
  ?>
                                
			      </select>
		      </label>
			</div>
			<div>	


                  <label for="subject">
		      <span>  نوع التشطيب : </span>
			      <select id="subject"     name="tashteb" placeholder="نوع التشطيب "name="subject" tabindex="4"   >   
					 <option value=""></option>
					  <option value=" على الطوب">  على الطوب</option>  
   <option value="نصف التشطيب"> نصف تشطيب</option>
                          <option value="لوكس"> لوكس</option>
                           <option value="سوبر لوكس"> سوبر لوكس</option>
                            <option value="التر لوكس"> التر لوكس</option>
                          
                              
                                
			      </select>
		      </label>
     

                         <label for="subject">
		      <span> اسانسير : </span><!--متكريتلهمش حاجه فى داتا بيز -->
			      <select id="subject"   name="asanser"   placeholder=" اسانسير "name="subject" tabindex="4"   >   
					 <option value=""></option>  
 
                          <option value="1"> 1</option>
                           <option value=" 2"> 2</option>
                            <option value=" 3">  3</option>
							 <option value=" 4">  4</option>
                          
                              
                                
			      </select>
		      </label>
     
<!-- <div>
		      <label for="name">
		      	<span class="required"> عدادات: *</span>  <!--متكريتلهمش حاجه فى داتا بيز -->
		      	<input type="text" id="name" name="adad" placeholder="عدادات "     tabindex="1" autofocus="autofocus"    />
		      </label> 
			</div>-->

 <label for="subject">
		      <span> عداد الكهرباء : </span><!--متكريتلهمش حاجه فى داتا بيز -->
			      <select id="subject"   name="kahrba"   placeholder=" اسانسير "name="subject" tabindex="4"   >   
					 <option value=""></option>  
 
                          <option value="يوجد"> يوجد</option>
                           <option value=" لايوجد"> لايوجد</option>
                           
                          
                              
                                
			      </select>
		      </label>

                         <div>


 <label for="subject">
		      <span> عداد مياه : </span><!--متكريتلهمش حاجه فى داتا بيز -->
			      <select id="subject"   name="water"   placeholder=" اسانسير "name="subject" tabindex="4"   >   
					 <option value=""></option>
 
                          <option value="يوجد"> يوجد</option>
                           <option value=" لايوجد"> لايوجد</option>
                           
                          
                              
                                
			      </select>
		      </label>

                         <div>



 <label for="subject">
		      <span> عداد الغاز : </span><!--متكريتلهمش حاجه فى داتا بيز -->
			      <select id="subject"   name="gas"   placeholder=" اسانسير "name="subject" tabindex="4"   >   
					 <option value=""></option>  
 
                          <option value="يوجد"> يوجد</option>
                           <option value=" لايوجد"> لايوجد</option>
                           
                          
                              
                                
			      </select>
		      </label>

                         <div>


                  <label for="subject">
		      <span> عدد شقق فى دور: </span>
			      <select id="subject"  name="num_of_houes" tabindex="4"   >    
					 <option value=""></option>  
  <option value=" 1"> 1</option>
                          <option value="2"> 2</option>
                           <option value="3"> 3</option>
                            <option value="4"> 4</option>
                             <option value="5"> 5</option>
                              <option value="6"> 6</option>
                               <option value="7"> 7</option>
                                <option value="8"> 8</option>
                                
			      </select>
		      </label>
			</div>
			<div>	
                
               
                

                
                   <div>
		      <label for="name">
		      	<span class="required"> سعر الوحده: *</span> 
		      	<input type="text" id="name" name="price" placeholder=" سعر الوحده "   tabindex="1" autofocus="autofocus"    />
		      </label> 
			</div>


	<span class="required">  نظام الدفع: *</span> 

	  <div><!--متكريتلهمش حاجه فى داتا بيز -->
   <div>
		      <label for="name">
		      	<span class="required">  مقدم: *</span> 
		      	<input type="text" id="name" name="aset" placeholder="  قسط "    tabindex="1" autofocus="autofocus"    />
		      </label>
			</div>


	  <div>
   <div><!--متكريتلهمش حاجه فى داتا بيز -->
		      <label for="name">
		      	<span class="required">  فتره سداد: *</span> 
		      	<input type="text" id="name" name="sadad" placeholder="  فتره سداد "   tabindex="1" autofocus="autofocus"    />
		      </label> 
			</div>


 <label for="subject">
		      <span>  فتره السداد : </span><!--متكريتلهمش حاجه فى داتا بيز -->
			      <select id="subject"    name="sadad" placeholder="  فتره سداد " name="subject" tabindex="4"   >   
					 <option value=""></option>  
 
                          <option value="6اشهر"> 6 اشهر </option>
                           <option value=" 12شهر"> 12شهر</option>
                       <option value=" 12شهر"> 18شهر</option>
					    <option value=" 24شهر"> 24شهر</option>


                          
                              
                                
			      </select>
		      </label>

                         <div>

			   <div>
		      <label for="name">
		      	<span class="required">  كاش: *</span> 
		      	<input type="text" id="name" name="cash" placeholder=" سعر الوحده "   tabindex="1" autofocus="autofocus"    />
		      </label> 
			</div>

<!-- نظام الدفع كاش او اقسط انا نسيه هنا  -->




                
                
                  <label for="subject">
		      <span>   مدخل العماره: </span>
			      <select id="subject"   name="enter"   name="subject" tabindex="4"   > 
					 <option value=""></option>  
  
                          <option value="فاخر"> فاخر</option>
                           <option value="عادى"> عادى</option>
                        
                      			  
			      </select>
		      </label>
			</div>
			<div>	
<div>
		      <label for="name">
		      	<span class="required">  عرض الشارع : *</span> 
		      	<input type="text" id="name"  name="w_street"    id="email" placeholder=" عرض الشارع   "    tabindex="1" autofocus="autofocus"    />
		      </label> 
			</div>
                
                
                  <label for="subject">
		      <span>    العموله: </span>
			      <select id="subject"  name="3mola"   name="subject" tabindex="4"   > 
					 <option value=""></option>  
  
                          <option value="0.5"> 0.5</option>
                           <option value="1"> 1</option> 
						   <option value="1.5"> 1.5</option>
						    <option value="2"> 2</option>
							 <option value="2.5"> 2.5</option>
							  <option value="3"> 3</option>
                        
                      			  
			      </select>
		      </label>
			</div>
			<div>	
<div>
               


                
		      <label for="message">
		      	<span class="required">ملاحظات: *</span> <!--متكريتلهمش حاجه فى داتا بيز -->
		      	<textarea id="message" name="message" placeholder="من فضللك ادخل اى ملاحظات." tabindex="5"></textarea> 
		      </label>  
			</div>
			<div>		           
		      <!--<button name="submit" type="submit" id="submit" >SEND</button>--> 
                
                        <input type="submit" id="submit"  name="send"  value="ارسل بينات العقار"></input>

       


			</div>
		   </form>

	</div>

   <form action="index.php" method="post" enctype="multipart/form-data">


    <input type="file" name="up[]" id="fileToUpload" multiple="multiple">
    <input type="submit" value="Upload Image" name="send1" >
 
</form>

