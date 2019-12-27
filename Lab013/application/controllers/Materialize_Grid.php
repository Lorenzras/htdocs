<?php
class Materialize_Grid extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title'] = "lab013 Grid Exercise";
		$this->load->view('materializecss_header',$data);
		$this->load->view('materializecss_grid');
		$this->load->view('materializecss_footer');
	}
}

?>