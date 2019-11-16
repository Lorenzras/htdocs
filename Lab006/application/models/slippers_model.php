<?php
class Slippers_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function getSlippers($slipper_id=null){
		if($slipper_id==null){
			$rs = $this->db->get('slippers');
			return $rs->result_array();
		}else{
			$rs = $this->db->get_where('slippers', array('slipper_id' => $slipper_id));
			return $rs->row_array();
		}
	}
	
	public function update($slipper_id){
		$data = array(
			'slipper_name' => $this->input->post('slipper_name'),
			'price'=> $this->input->post('price'),
			'isAvailable' => $this->input->post('isAvailable')
		);
		
		$this->db->where('slipper_id', $slipper_id);
		return $this->db->update('slippers', $data);
	}
	
	public function delete($slipper_id){
		return $this->db->delete('slippers', array('slipper_id' => $slipper_id));
	}
}
?>