<?php
class logout extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}
	
	public function index(){
		$this->session->unset_userdata('name');
		redirect('login');
	}
	
}

?>