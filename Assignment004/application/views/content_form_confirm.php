
<?php
	echo form_fieldset('CONFIRM REGISTRATION');

	echo form_open('register/action');
		extract($this->session->flashdata('data'));
		echo '<h4>NAME</h4><hr>';
			echo 	"{$fname} {$mname} {$lname}";
		
		
		echo "<h4>GENDER</h4><hr>";
			echo $genderOption;
		echo "<h4>BIRTHDAY</h4><hr>";
			echo $bday;
		
		echo "<h4>ADDRESS</h4><hr>";	
			echo  "{$house_no}, {$street}, {$area}, {$city_province}, {$postal_code}";
		
		echo "<h4>CONTACT DETAILS</h4><hr>";
			echo 	"Phone: {$phone}<br>
					Email: {$email}";
		
		echo "<h4>LOGIN DETAILS</h4><hr>";
			echo "Username: {$user} <br>";
			echo "Password: ".str_repeat("*",strlen($pass));
		
		echo form_submit('action','REGISTER').'<br>';

		echo form_submit('action','BACK','id="back"');

	echo form_close();	
	echo form_fieldset_close();


?>