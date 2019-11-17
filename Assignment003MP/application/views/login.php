<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
</head>

<body>
<h1><?php echo $title; ?></h1>
	
<?php
	echo validation_errors();
	echo form_open('login/verify');
	
	echo form_input('txtuser','','id="txtuser" placeholder="Enter Username"').'<br>';
	
	echo form_password('txtpass', '', 'id="txtpass" placeholder="Enter Password"').'<br>';
	
	echo form_submit('btnlogin','Log in');
	
	echo form_close();
?>
	
</body>
</html>