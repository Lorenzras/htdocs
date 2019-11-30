<?php
class register_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		
	}
	
	public function register(){
		if(!empty($this->session->flashdata('data'))){
			extract($this->session->flashdata('data'));

			$info = array(
				'user_fname' => $fname,
				'user_mname' => $mname,
				'user_lname' => $lname,
				'user_gender' => $genderOption,
				'user_bday' => $bday,
				'user_address' => $house_no.' '.$street.' '.$area.' '.$city_province.' '.$postal_code,
				'user_phone' => $phone,
				'user_email' => $email,
				'user_name' => $user,
				'user_password' => sha1($pass),
				'user_dateRegistered' => date('Y-m-d H:i:s')
			);
			
			$isInserted = $this->db->insert('users',$info);
			
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
}

?>