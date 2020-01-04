<?php
class Jquery_sample extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		echo "hello";
	}
	public function example($example_no = 1) {
		$this->load->view('overall/header');
		$this->load->view('example'.$example_no);
		$this->load->view('overall/footer');
		
	}
}

?>
