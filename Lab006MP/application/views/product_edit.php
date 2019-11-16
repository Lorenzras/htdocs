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
		echo form_open('products/verifyEdit/'.$this->uri->segment(3),'');
	
		extract($product);
	
		echo form_label('Name', 'product_name');
		echo form_input('product_name', $name, 'id="product_name"').'<br>';
	
		echo form_label('Description', 'description');
		echo form_textarea('description', $description, 'id="description"').'<br>';
	
		echo form_label('Price', 'price');
		echo form_input('price', $price, 'id="price"').'<br>';

		
		echo form_submit('btnUpdate', 'Update');
		echo form_close();
	?>
</body>
</html>