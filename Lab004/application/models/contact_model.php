<?php
class contact_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function submitMessage(){
		$data = array(
			'msg_name' => $this->input->post('name'),
			'msg_email' => $this->input->post('email'),
			'msg_phone' => $this->input->post('phone'),
			'msg_title' => $this->input->post('title'),
			'msg_content' => $this->input->post('content'),
			'msg_dateReceived' => date('Y-m-d H:i:s')
			);
		return $this->db->insert('messages',$data);
	}
}


?>