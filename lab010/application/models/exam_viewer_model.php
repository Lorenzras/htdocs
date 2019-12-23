<?php
class exam_viewer_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function getExam($sem, $sch_yr){
		
		$rs = $this->db->get_where('exam_results',array('sem'=>$sem, 'sch_yr'=>$sch_yr));
		
		
		return $rs->result_array();
	}
	
	
}

?>