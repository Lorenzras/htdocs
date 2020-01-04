<?php

function asset_url(){
   return base_url().'assets/';
	
}

function view($content = ''){
	$CI = get_instance();
	$CI->load->view('overall/header');
	$CI->load->view('content/'.$content);
	$CI->load->view('overall/footer');
}

?>