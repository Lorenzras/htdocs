<?php
class Materialize_FrontEnd extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title'] = "lab014 Tutorial";
		$this->load->view('materializecss_header',$data);
		$this->load->view('materializecss_frontend');
		$this->load->view('materializecss_footer');
	}
}

?>