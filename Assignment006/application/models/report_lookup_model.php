<?php
class report_lookup_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function r_value($table, $field, $key, $return){
		$rs = $this->db->get_where($table, array($field => $key));
		$row = $rs->row();
		return $row->$return;
	}
	
	public function r_count($table, $field = NULL, $key = NULL){
		
		$this->db->from($table);
		if( $key !== NULL ) {
			$this->db->where($field, $key);
		}
		return $this->db->count_all_results();
	}
}

?>