<?php
echo form_fieldset('REGISTRATION');
	
	echo '<div id="errors">'.validation_errors().'</div>';

	echo form_open('register/verify');
		echo '<h4>NAME</h4><hr>';
		echo form_label('First Name','fname');  
		echo form_input('fname',reload_value('fname'));

		echo form_label('Middle Name', 'mname');
		echo form_input('mname',reload_value('mname')).'<br />';

		echo form_label('Last Name', 'lname');
		echo form_input('lname',reload_value('lname')).'<br />';
		
		echo "<h4>GENDER</h4><hr>";
		echo form_label('Male', 'genderOption');
		echo form_radio('genderOption','Male',(reload_value('genderOption') == 'Male' ? TRUE : FALSE));
		echo form_label('Female', 'genderOption');
		echo form_radio('genderOption','Female',(reload_value('genderOption') == 'Female' ? TRUE : FALSE)).'<br />';
		
		echo "<h4>BIRTHDAY</h4><hr>";
		
		echo '<input type="date" name="bday" value='.reload_value('bday').'><br>';
		
		
		echo '<h4>ADDRESS</h4><hr>';	
	
		echo form_label('Floor / Dept / Building / House No.: ', 'house_no');
		echo form_input('house_no',reload_value('house_no')).'<br>';

		echo form_label('Street: ', 'street');
		echo form_input('street',reload_value('street')).'<br>';

		echo form_label('Area / Subdivision / Barangay / District: ', 'area');
		echo form_input('area',reload_value('area')).'<br>';

		echo form_label('City / Province: ', 'city_province');
		echo form_input('city_province',reload_value('city_province')).'<br>';

		echo form_label('Postal Code: ', 'postal_code');
		echo form_input('postal_code',reload_value('postal_code')).'<br>';
		
		echo '<h4>CONTACT DETAILS</h4><hr>';
		
		echo form_label('Phone: ', 'phone');
		echo form_input('phone',reload_value('phone')).'<br>';

		echo form_label('E-Mail Address: ', 'txtemail');
		echo form_input('email',reload_value('email')).'<br>';

		echo '<h4>LOGIN DETAILS</h4><hr>';

		echo form_label('Username: ', 'user');
		echo form_input('user',reload_value('user')).'<br>';

		echo form_label('Password: ', 'pass');
		echo form_password('pass','').'<br>';

		echo form_label('Re-type Password: ', 'repass');
		echo form_password('repass','').'<br>';
		echo form_submit('btnConfirm','CONFIRM').'<br>';

	echo form_close();	
	echo form_fieldset_close();

	function reload_value($item){
		if(isset($_SESSION['data'][$item])){
			return $_SESSION['data'][$item];
		}else{
			return set_value($item);
		}
	}
?>