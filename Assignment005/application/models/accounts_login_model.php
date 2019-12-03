<?php
class accounts_login_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		
	}
	
	public function login($username, $password){
		$condition_array = array(
			'acc_username' => $username,
			'acc_password' => $password
		);
		
		$rs = $this->db->get_where('accounts',$condition_array);

		if(!empty($rs->row_array())){
			return $rs->row_array();
		}else{
			return FALSE;
		}
		
	}
	
	public function isBlocked($username){
		$condition_array = array(
			'acc_username' => $username,
			'acc_isBlocked' => 1
		);
		
		$rs = $this->db->get_where('accounts',$condition_array);
		return !empty($rs->row_array());

	}
	
	public function block($username){
		
		$email = $this->account_lookup($username,'acc_email');
		if(!$email){
			return FALSE;
		}else{
			
			$config = array(
				"protocol" =>"smtp",
				"smtp_host" => "ssl://smtp.googlemail.com",
				"smtp_port"=>465,
				"mailtype" => "html",
				"smtp_user"=>"amaoedlenzras@gmail.com",
				"smtp_pass"=>"1988amaoed"		

			);

			$this->load->library("email", $config);
			$this->email->set_newline("\r\n");	//エラー回避のおまじない

			$this->email->from("amaoedlenzras@gmail.com", "Lorenz Ras");
			$this->email->to($email);
			$this->email->subject("Account Blocked");

			$message = $this->load->view('content_account_blocked',null,TRUE);

			$this->email->message($message);
			if(!$this->email->send()){
				show_error($this->email->print_debugger());
			}

			$this->db->where('acc_username',$username);
			return $this->db->update('accounts',array('acc_isBlocked' => 1));
		}
	}
	
	public function account_lookup($username, $return){
		$rs = $this->db->get_where('accounts',array('acc_username'=>$username));
		$row = $rs->row();
		if(empty($row)){
			return false;
		}else{
			return $row->$return;
		}
		
	}
}

?>