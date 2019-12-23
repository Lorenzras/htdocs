<?php $this->load->view('content_header'); ?>
<h1>Query Enrolled Students</h1>
<table>
	<tr>
		<th>Student ID</th>
		<th>Lastname</th>
		<th>Firstname</th>
	
	</tr>
<?php foreach($students as $student): extract($student); ?>
	<tr>
		<td><?php echo $stud_id; ?></td>
		<td><?php echo $this->report_lookup_model->r_value('students','stud_id',$stud_id,'stud_lname'); ?></td>
		<td><?php echo $this->report_lookup_model->r_value('students','stud_id',$stud_id,'stud_lname'); ?></td>
		<td><?php echo date('F d, Y',strtotime($enr_dateEnrolled)); ?></td>
	</tr>
<?php endforeach; ?>
</table>
<hr />
<em>Total Records: <strong><?php echo count($students); ?></strong> students(s)</em>
<?php $this->load->view('content_footer'); ?>

