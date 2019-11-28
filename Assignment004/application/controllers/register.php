<?php
class register extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data["title"] = 'LTRAS Registration Form';
		$this->load->view('index_register',$data);
	}
	
	public function verify(){
		$this->form_validation->set_rules('fname','First Name','required|trim');
		$this->form_validation->set_rules('mname','Middle Name','required|trim');
		$this->form_validation->set_rules('lname','Last Name','required|trim');
		$this->form_validation->set_rules('genderOption','Gender','required');
		$this->form_validation->set_rules('bday','Birthday','required');
		$this->form_validation->set_rules('house_no','FLOOR / DEPT / BUILDING / HOUSE NO','required|trim');
		$this->form_validation->set_rules('street','Street','required|trim');
		$this->form_validation->set_rules('city_province','CITY / PROVINCE','required|trim');
		$this->form_validation->set_rules('postal_code','POSTAL CODE','required|trim');
		$this->form_validation->set_rules('phone','Phone','required|trim|regex_match[/^[0-9]+$/]');
		$this->form_validation->set_rules('email','E-Mail Address','required|trim|valid_email');
		$this->form_validation->set_rules('user','USERNAME','required|trim|is_unique[users.user_name]');
		$this->form_validation->set_rules('pass','PASSWORD','required');
		$this->form_validation->set_rules('repass','RE-TYPE PASSWORD','required|matches[pass]');
		
		
		
		if($this->form_validation->run() === TRUE){
			$_SESSION['data'] = array(
					'fname' =>  $this->input->post('fname'),
					'mname' => $this->input->post('mname'),
					'lname' => $this->input->post('lname'),
					'genderOption' => $this->input->post('genderOption'),
					'bday' => $this->input->post('bday'),
					'house_no' => $this->input->post('house_no'),
					'street' => $this->input->post('street'),
					'area' => $this->input->post('area'),
					'city_province' => $this->input->post('city_province'),
					'postal_code' => $this->input->post('postal_code'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'user' => $this->input->post('user'),
					'pass' => $this->input->post('pass'),
			);
			$this->session->mark_as_flash('data');
			
		
			$data['title'] = "Confirm Registration";
			$this->load->view('index_register_confirm.php', $data);
		}else{
			
			$this->index();
		}
		
	}
	
	public function action(){
		if(set_value('action')=='REGISTER'){
			echo $this->session->flashdata('data')['genderOption'].' success';
		}else{
			$data["title"] = 'LTRAS Registration Form';
//			echo $_SESSION['data']['fname'];
			$this->index();
		}
	}
	
	
}


?>