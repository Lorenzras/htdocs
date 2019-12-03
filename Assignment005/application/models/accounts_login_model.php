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
		$id =  $this->account_lookup($username,'acc_id');
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
			
			$code = $this->set_unlock_code($username); 
			$message = $this->generate_message($username, $code);
			
			$this->email->message($message);
			if(!$this->email->send()){
				show_error($this->email->print_debugger());
			}

			$this->db->where('acc_username',$username);
			return $this->db->update('accounts',array('acc_isBlocked' => 1));
		}
	}
	
	public function unblock($username, $code){
		//if unblock link code code matches the code in db.
		if($this->account_lookup($username,'acc_unblock_code') == $code){
			if($this->db->update('accounts',
									array('acc_isBlocked' => 0),
									array('acc_username' => $username))){
				$_SESSION['error_count'][$username] = 0;
				$this->session->set_flashdata('message', 'Account unblocked successfully.');
			}else{
				$this->session->set_flashdata('message', 'Something went wrong in unblocking your account.');
			}
		}else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}
	}
	
	function set_unlock_code($username){
		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);
		
		
		$this->db->update('accounts', 
						  array('acc_unblock_code' => $code), 
						  array('acc_username' => $username));
		return $code;
	}
	
	function generate_message($username, $code){

		return 	"
						<html>
						<head>
							<title>Account Locked.</title>
							<img src=".asset_url().'img/logo.jpg'." width='300' >
						</head>
						<body>
							<h2>Account Blocked.</h2>
							
							<p>Someone is trying to access your account. To unblock your account please click the link below.</p>
							<h4><a href='".base_url()."login/unblock/".$username."/".$code."'>Unblock My Account</a></h4>
							
							<p>LTRAS</p>
						</body>
						</html>
						";

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