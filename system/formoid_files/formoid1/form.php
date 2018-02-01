<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-flat-blue" style="background-color:#1A2223;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>تسجيل طلب العقار</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title">ادخل اسمك<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title">رقم التيلفون<span class="required">*</span></label><input class="large" type="text" name="input1" required="required"/></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title">محافظه</label><div class="large"><span><select name="select" >

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>"><label class="title">المنطقه<span class="required">*</span></label><div class="large"><span><select name="select1" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select2"); ?>"><label class="title">نوع الطلب<span class="required">*</span></label><div class="large"><span><select name="select2" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select3"); ?>"><label class="title">نوع العقار<span class="required">*</span></label><div class="large"><span><select name="select3" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select4"); ?>"><label class="title">نطاق السعر<span class="required">*</span></label><div class="large"><span><select name="select4" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i></span></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"> البريد الالكتروني</label><input class="large" type="text" name="input2" /></div>
<div class="submit"><input type="submit" value="سجل طلبك"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-flat-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>