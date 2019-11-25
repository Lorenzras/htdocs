<?php
class Register extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title'] = 'Register';
		$this->load->view('register', $data);
	}
	
	public function verify(){
		$this->form_validation->set_rules('txtfname','FIRST NAME','required|trim');
		$this->form_validation->set_rules('txtlname','LAST NAME','required|trim');
		$this->form_validation->set_rules('txtmname','MIDDLE NAME','required|trim');
		$this->form_validation->set_rules('txtgender','GENDER','required');
		$this->form_validation->set_rules('txtbday','BIRTHDAY','required');
		$this->form_validation->set_rules('txtcountry','COUNTRY','required|trim');
		$this->form_validation->set_rules('txthouse_no','FLOOR / DEPT / BUILDING / HOUSE NO','required|trim');
		$this->form_validation->set_rules('txtstreet','STREET','required|trim');
		$this->form_validation->set_rules('txtcity_province','CITY / PROVINCE','required|trim');
		$this->form_validation->set_rules('txtpostal_code','POSTAL CODE','required|trim');
		$this->form_validation->set_rules('txtphone','PHONE','required|trim');
		$this->form_validation->set_rules('txtemail','E-MAIL ADDRESS','required|trim|valid_email');
		$this->form_validation->set_rules('txtuser','USERNAME','required|trim|is_unique[users.user_name]');
		$this->form_validation->set_rules('txtpass','PASSWORD','required');
		$this->form_validation->set_rules('txtrepass','RE-TYPE PASSWORD','required|matches[txtpass]');
		
		if($this->form_validation->run() === TRUE){
			$this->load->model('register_model');
			$isRegistered = $this->register_model->register();
			
			if($isRegistered){
				$data['title'] = 'Registration Successful';
				$data['message'] = 'Please check your email to activate your account.';
			}else{
				$data['title'] = 'Registration Failed';
				$data['message'] = 'Something went wrong. Please try again later.';
			}
			
			$this->load->view('registration_message', $data);
		}else{
			$this->index();
		}
		
	}
}


?>