<?php
echo form_fieldset('LOGIN');
	if(validation_errors()){
		echo '<div id="errors">'.validation_errors().'</div>';
	}else if($this->session->flashdata('message')){
		echo '<div id="message">'.$this->session->flashdata('message').'</div>';
	}
	
	echo form_open('login/verify');
		echo form_label('Username','txtUsername');  
		echo form_input('txtUsername',set_value('txtUsername'),"placeholder='Enter Username'");

		echo form_label('Password','txtPassword');  
		echo form_password('txtPassword','',"placeholder='Enter Password'");
		echo form_submit('btnLogin','LOGIN').'<br>';
	echo form_close();	
	echo form_fieldset_close();

?>