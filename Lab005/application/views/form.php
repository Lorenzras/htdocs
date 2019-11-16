<?php
echo form_fieldset('Register');

	echo validation_errors();
	echo form_open('guestbook/submit');

		echo form_label('First Name','fname');  
		echo form_input('fname',set_value('fname'),'id="fname"');

		echo form_label('Last Name', 'lname');
		echo form_input('lname',set_value('lname'),'id="lname"').'<br />';

		echo "<hr>";
		echo "<div>";
		echo "How would like to be contacted?<br />";
		echo form_label('E-mail', 'contact');
		echo form_radio('contactOption','E-mail',set_radio('contactOption','E-mail'));

		echo form_label('Phone', 'contact');
		echo form_radio('contactOption','Phone',set_radio('contactOption','Phone')).'<br />';

		echo form_input('contact','','id="contact"').'<br />';
		echo "</div>";

		echo form_label('Location', 'location');
		$options = array(
					  'manila'  => 'Manila',
					  'cebu'    => 'Cebu',
					  'davao'   => 'Davao',
					);

		echo form_dropdown('location', $options, set_value('location'));


		echo form_label('Comment', 'content');
		echo form_textarea('comment',set_value('comment'),'id="comment"').'<br />';

		echo form_submit('submit', 'Submit');

	echo form_close();	
	echo form_fieldset_close();

?>