<?php
class Materialize_Basic extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title'] = "lab013 Basic";
		$this->load->view('materializecss_header');
		$this->load->view('materializecss_basic');
		$this->load->view('materializecss_footer');
	}
}

?>