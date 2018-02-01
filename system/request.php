<?php

date_default_timezone_set("Africa/Cairo");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>تسجيل طلب العقار</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<style>
       /* #img{
            width: 100%;
        }*/
       body{
           background:url('background.jpg') 0 0 no-repeat;
	overflow-x:hidden;
    background-size: cover;
	font-family:'Roboto',Open Sans;
        }
        #submit{
            position: relative;
            margin-left: 8%;
        }
        #h{
            position: relative;
            margin-right: 8%;
            font-style:italic;
            font-size: 20px;
        }
        #ahmed{
           
            position: relative;
            
            text-align: right;
            color: white;
        }
        .list{
            position: relative;
            text-align-last: right;
           
        }
       
    
    </style>
</head>
<body class="blurBg-false"  class="img-responsive" >

<!--<img src="background.jpg" class="img-responsive" id="img">

<!-- Start Formoid form-->
	
	
  



	<br> <br><br> <br>
<link rel="stylesheet" href="formoid_files/formoid1/formoid-flat-blue.css" type="text/css" />
<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
<form class="formoid-flat-blue" style="background-color:#1A2223;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:480px;min-width:150px" method="post">
	
	<div class="title">
	

		<center id='h'>           
		<h2>تسجيل طلب العقار</h2>
             </center>

	<?php
	

@$name=stripslashes($_POST['name']);
 @$name=strip_tags($_POST['name']);
 @$number=stripslashes($_POST['number']);
@$number=strip_tags($_POST['number']);
@$place=$_POST['place'];
 @$demand=$_POST['demand'];
@$h=$_POST['h'];
@$price=$_POST['price'];
@$email=strip_tags($_POST['email']);



	if (@$_POST['submit']) {

		if (@empty($name) ) {


	
	die();
}




if (filter_var(@$name,FILTER_VALIDATE_FLOAT) == true) {

	

	die();
}
		/*if (filter_var($name,FILTER_SANITIZE_SPECIAL_CHARS)==true) {
			
		die();

			
		}*/
		/*$firstname = mysqli_real_escape_string($con, $_POST['name']);*/


if (filter_var(@$number,FILTER_VALIDATE_FLOAT) == false)  {

	
	
	die();
}



if (@empty($number)) {
		
	

	die();
	}
	

$leanth=strlen(@$number);
if ($leanth !=11)
		if (filter_var($number,FILTER_VALIDATE_FLOAT) !== false) {
			
		
	
	die();
		}







if (empty($place)) {

		
	

	die();
	}
	if (empty($demand)) {
	

	die();
		
	}
	if (empty($h)) {
		
		
	
	die();
	}
	
	if (empty($price)) {
		echo"<div class='alert alert-danger'  alert-dismissable fade in'  >
<strong>Warning!</strong> Indicates a warning that might need attention.
</div>";

	
	die();
	}else{
echo"<div class='alert alert-success  alert-dismissable fade in'  >";


		echo '<strong>'.$_POST['name'].'</strong>'."/"."تم تسجيل طلبك بنجاح وسوف يتم لاتصال بك خلال 24 ساعه ";


echo"</div>";


	}
		
		

	

	
	}
	
  
//code data base

$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");


if ($connect) {

mysql_select_db($db) or die("db selction error ");

}else{
	
	mysql_error();
}
mysql_set_charset('utf8');
$sql="insert into maptic_rej (name,number,place,demand,h,price,email) values('$name','$number','$place','$demand','$h','$price','$email')";
if (@$_POST['submit']) {
  mysql_query($sql) or die(" query erro ");

	
	
	
$to ="request@estasmer.com";
$subject = $_POST['number'];
$txt = $_POST['name'];
$headers = "From: ESTASMER WEB SITE " . "\r\n" .
"CC: somebodyelse@example.com";
	if ($_POST['submit']) {
mysql_set_charset('utf8');
mail($to,$subject,$txt,$headers);
		
		
	}
 







if ($_POST['submit']) {
		
		
$subject =" تم تسجيل طللبك بنجاح وهده رساله منا لتاكيد وسوف يتم لاتصال بك خلال 48 ساعه 
";

$txt = 'استاز/'.$_POST['name'].  'نتشرف بيزيارتك لمتابعه كل جديد '.'https://www.facebook.com/estasmer/';/*$_POST['name'] ;*/
$headers = "From: request@estasmer.com " . "\r\n" .
"CC:request@estasmer.com";
	mail($email,$subject,$txt,$headers);
	
}

}	





?>

	
	</div>
	
		<form  action="request.php " method="post">
	<div class="element-input"><label class="title" id="ahmed">ادخل اسمك<span class="required">*</span></label>
		
	<!--name -->	<input class="large" type="text" name="name" required="required"/></div>
			
	<div class="element-input"><label class="title" id="ahmed">رقم التيلفون<span class="required">*</span></label>
		
	<!--number -->	<input class="large" type="text" name="number" required="required"/></div>
			
	<div class="element-select"><label class="title" id="ahmed">محافظه</label><div class="large"><span><select name="select" class="list" >

										 <option  value="alex">الاسكندرية </option>
		
		</select><i></i></span></div></div>
	<div class="element-select"><label class="title" id="ahmed">المنطقه<span class="required">*</span></label><div class="large"><span><select name="place" required="required"  class="list">

		 <option value="">  </option>
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
								 </select><i></i></span></div></div>
	<div class="element-select"><label class="title" id="ahmed">نوع الطلب<span class="required">*</span></label><div class="large"><span><select  name="demand" required="required"  class="list">

						<option value="">  </option>
                          <option  value="  بيع "> بيع</option>
                          <option value=" شراء">شراء</option>
                          <option value=" تاجير وحده "> تاجير وحده</option>
                          <option value=" حصول على وحده للايجار"> الحصول على وحده للايجار</option>
								  <option value=" مشاركه"> مشاركه</option>
								    <option value="اخرى">   اخرى </option>
					</select><i></i></span></div></div>
	<div class="element-select"><label class="title" id="ahmed">نوع العقار<span class="required">*</span></label><div class="large"><span><select  name="h" required="required"  class="list">
	<option  value="">  </option>
                          <option value="شقه"> شقه</option>
                          <option value="فيلا"> فيلا</option>
							 <option value="شاله"> شاليه</option>
                          <option value="روف"> روف</option>
							 <option value="ارض"> ارض</option>
                          <option value="محل">محل</option>
							                          <option value="مكتب">مكتب</option>
													    <option value="اخرى">   اخرى </option>
					
					</select><i></i></span></div></div>
	<div class="element-select"><label class="title" id="ahmed">نطاق السعر<span class="required">*</span></label><div class="large"><span><select name="price" required="required"  class="list">
								
								<option  value="">  </option>
                          <option value="اقل من 400 الف  "> اقل من 400 الف</option>
                          <option value="من 400 الف الى 700 الف"> من 400 الف الى 700 الف</option>
								 <option value="من 700 الف الى 1 مليون"> من 700 الف الى 1 مليون </option>
                          <option value="من 1 مليون الى 2 مليون  "> من 1 مليون الى 2 مليون</option>
						  <option value="من 2 مليون الى 3 مليون  ">  من 2 مليون الى3 مليون </option>
                          <option value="من 3 مليون الى4 مليون ">   من 3 مليون الى 4مليون </option>	
								  <option value=" من 4 مليون الى 5مليون ">   من 4 مليون الى 5مليون  </option>
                          <option value="من 5 مليون الى 7.5">   من 5مليون الى 7.5مليون </option>
								  <option value=" اكثر من 10 مليون  "> اكثر من 10 مليون  </option>
                        
								  <option value="ايجار اقل من الفين">   ايجار اقل من الفين </option>
								  <option value=" ايجار من 2 الى 3 لاف">      ايجار من2 ل 3 لاف </option>
                          <option value=" ايجار اقل من 3 لاف">    ايجار اقل من 3 الاف </option>
                          <option value=" ايجار من 3 ل 5لاف">  ايجار من 3 ل 5 لاف </option>
								  <option value=" ايجار من 5 ال 10 الاف ">    ايجار من 5 ل 10 لاف </option>
                          <option value="ايجار اكثر من 20 الف">   ايجار اكثر من 20 الف </option>
						      <option value="اخرى">   اخرى </option></select><i></i></span></div></div>
	<div class="element-input"><label class="title" id="ahmed"> البريد الالكتروني</label><input class="large" type="text" name="email" /></div>
 
            <div class="submit">
                <center id='submit'>
                <input type="submit" name="submit"  value="سجل طلبك"/></div>
                    </center>
                </form><p class="frmd"><a href="http://formoid.com/v29.php">contact form html</a> Formoid.com 2.9</p><script type="text/javascript" src="formoid_files/formoid1/formoid-flat-blue.js"></script>
            
<!-- Stop Formoid form-->


	</form>
</body>
</html>
