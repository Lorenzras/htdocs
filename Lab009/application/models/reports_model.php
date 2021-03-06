<?php
class Reports_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		
	}
	
	public function query_enrolledStudents_dataBetween($start_date, $end_date){
		$this->load->model('report_lookup_model');
		$sem = $this->report_lookup_model->r_value('enrollment_setup','enr_setup_id',1,'sem');
		$schYr = $this->report_lookup_model->r_value('enrollment_setup','enr_setup_id',1,'schYr');
		
		$this->db->where("date(enr_dateEnrolled) BETWEEN '$start_date' and '$end_date' and isEnrolled=1");
		$rs = $this->db->get('enrollment_profile');
		return $rs->result_array();
	}
}

?>