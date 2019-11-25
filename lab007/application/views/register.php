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
	echo form_open('register/verify');
	echo '<p><em>PERSONAL DETAILS</em></p><hr>';
	
	echo form_label('LAST NAME: ','txtlname');
	echo form_input('txtlname',set_value('txtlname'),'id="txtlname"').'<br>';
	
	echo form_label('FIRST NAME: ','txtlname');
	echo form_input('txtfname',set_value('txtfname'),'id="txtfname"').'<br>';
	
	echo form_label('MIDDLE NAME: ','txtmname');
	echo form_input('txtmname',set_value('txtmname'),'id="txtmname"').'<br>';
	
	echo form_label('GENDER: ').'<br>';
	echo form_radio('txtgender','Male', TRUE, 'id="txtgendermale"');
	echo form_label('Male: ','txtgendermale');
	echo form_radio('txtgender','Female',FALSE,'id="txtgenderfemale"');
	echo form_label('Female','txtgenderfemale').'<br>';
	
	echo form_label('BIRTHDAY: ', 'txtbday');
	echo '<input type="date" id="txtbday" name="txtbday" value='.set_value('txtbday').'><br>';
	
	echo '<p><em>BILLING ADDRESS</em><p><hr>';
	
	echo form_label('COUNTRY: ', 'txtcountry');
	$options = array('us'=> 'United States','ph' => 'Philippines', 'jp' => 'Japan');
	echo form_dropdown('txtcountry',$options,'ph','id="txtcountry"').'<br>';
	
	echo form_label('FLOOR / DEPT / BUILDING / HOUSE NO: ', 'txthouse_no');
	echo form_input('txthouse_no',set_value('txthouse_no'),'txthouse_no').'<br>';
	
	echo form_label('STREET: ', 'txtstreet');
	echo form_input('txtstreet',set_value('txtstreet'),'txtstreet').'<br>';
	
	echo form_label('AREA / SUBDIVISION / BARANGAY / DISTRICT: ', 'txtarea');
	echo form_input('txtarea',set_value('txtarea'),'txtarea').'<br>';
	
	echo form_label('CITY/PROVINCE: ', 'txtcity_province');
	echo form_input('txtcity_province',set_value('txtcity_province'),'txtcity_province').'<br>';
	
	echo form_label('POSTAL CODE: ', 'txtpostal_code');
	echo form_input('txtpostal_code',set_value('txtpostal_code'),'txtpostal_code').'<br>';
	
	echo form_label('PHONE: ', 'txtphone');
	echo form_input('txtphone',set_value('txtphone'),'txtphone').'<br>';
	
	echo form_label('E-MAIL ADDRESS: ', 'txtemail');
	echo form_input('txtemail',set_value('txtemail'),'txtemail').'<br>';
	
	echo '<p><em>LOGIN DETAILS</em><p><hr>';
	
	echo form_label('USERNAME: ', 'txtuser');
	echo form_input('txtuser',set_value('txtuser'),'txtuser').'<br>';
	
	echo form_label('PASSWORD: ', 'txtpass');
	echo form_password('txtpass','','txtpass').'<br>';
	
	echo form_label('RE-TYPEPASSWORD: ', 'txtrepass');
	echo form_password('txtrepass','','txtrepass').'<br>';
	echo form_submit('btnregister','REGISTER').'<br>';
	
	echo form_close();
?>
	
</body>
</html>