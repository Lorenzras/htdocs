<?php $this->load->view('content_header'); ?>
<h1><?php echo $title?></h1>

<?php echo form_open('query/enrolled_students/view'); ?>
	<label>Select Start Date</label>
	<input type="date" name="txtdatestart" /><br />
	<label>Select End Date</label>
	<input type="date" name="txtdateend" /><br />
<?php echo form_submit('btnsubmit', 'Submit'); ?>
<?php echo form_close(); ?>

<?php $this->load->view('content_footer'); ?>

