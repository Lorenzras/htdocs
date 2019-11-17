<?php
class Home extends CI_Controller{
	public function __construct(){
		 parent::__construct();
		
		if(!$this->session->islogged){
			echo "not logged";
			//redirect('login');
		}else if($this->session->user_lvl==1){
			redirect('admin/home');
		}
	}
	
	public function index(){
		$data["title"] = "Welcome ".$this->session->account_name;
		$this->load->view('home', $data);
	}
	
}

?>