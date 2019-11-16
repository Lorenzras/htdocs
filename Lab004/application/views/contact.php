<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
</head>

<body>
	<h1><?php echo $title; ?></h1>
	
	
	<?php
		//$this->load->helper('form');
		echo form_fieldset('For Comments and Suggestions:');
		
		echo validation_errors();
		echo form_open('contact/submit');
			
			echo form_label('Name','name').'&emsp;&emsp;&emsp;';  
			echo form_input('name','','id="name"').'<br />';
			
			echo form_label('Email', 'email').'&emsp;&emsp;&emsp;&nbsp;';
			echo form_input('email','','id="email"').'<br />';
			
			echo form_label('Phone No.', 'phone').'&emsp;';
			echo form_input('phone','','id="phone"').'<br />';
	
			echo form_label('Title', 'title').'&emsp;&emsp;&emsp;&emsp;';
			echo form_input('title','','id="title"').'<br />';
	
			echo form_label('Message', 'content').'&emsp;&emsp;';
			echo form_textarea('content','','id="content"').'<br />';
	
			echo form_submit('submit', 'Submit');
	
	echo form_close();
	echo form_fieldset_close();
	?>
</body>
</html>