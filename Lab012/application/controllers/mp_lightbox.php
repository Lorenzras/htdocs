<?php
class Mp_lightbox extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('mp_lightbox');
	}
}

?>