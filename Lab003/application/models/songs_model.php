<?php
class Songs_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		
		$this->load->database();
	}
	
	public function get_songs($slug=null){

		if($slug==null){
			$rs=$this->db->get('songs');
			return $rs->result_array();
		}else{
			$rs=$this->db->get_where('songs', array('song_slug' => $slug));
			return $rs->row_array();
		}
		
	}
}


?>