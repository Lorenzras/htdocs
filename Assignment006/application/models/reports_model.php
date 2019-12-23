<?php
class Reports_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('report_lookup_model');
	}
	
	public function query_enrolledStudents_dataBetween($start_date, $end_date){

		$this->db->where("date(enr_dateEnrolled) BETWEEN '$start_date' and '$end_date' and isEnrolled=1");
		$rs = $this->db->get('enrollment_profile');
		return $rs->result_array();
	}
	
	
	public function list_courses(){
		
		$rs = $this->db->get('courses');
		return $rs->result_array();
	}
}

?>