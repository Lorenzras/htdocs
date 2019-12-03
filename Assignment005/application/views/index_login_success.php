<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('content_header'); ?>
<?php 
	if(empty($name)){
		redirect('login');
	}

?>
<h1>Welcome back <?php echo $name; ?>.</h1>
<img src="<?php echo asset_url().'img/checkmark.gif'; ?>" class="responsive" >
<div id="message">Login Successful.</div>
<div id="message"><a href="<?php echo base_url('logout'); ?>"> Log Out </a></div>
<?php	$this->load->view('content_footer'); ?>
