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
		echo form_open('slippers/verifyEdit/'.$this->uri->segment(3),'');
		extract($slipper);
	
		echo form_label('Slipper Name', 'slipper_name');
		echo form_input('slipper_name', $slipper_name, 'id="slipper_name"').'<br>';
	
		echo form_label('Price', 'price');
		echo form_input('price', $price, 'id="price"').'<br>';
		
		echo form_label('is Available?', 'isAvailable');
		echo form_checkbox('isAvailable', 1, $isAvailable==1 ? TRUE : FALSE).'<br>';
		
		echo form_submit('btnUpdate', 'Update');
		echo form_close();
	?>
</body>
</html>