<?php $this->load->view('content_header'); ?>

<div class="frame">
	<h1><?= $title; ?></h1>
	<span></span>
	<table>
		<tr>
			<td>&nbsp;</td>
			<td><strong>Student Count</strong></td>
		</tr>
		<tr>
			<td>Enrolled Students: </td>
			<td><?= $count_enrolledStudents; ?></td>
		</tr>
		<tr>
			<td>Not Enrolled Students: </td>
			<td><?= $count_notEnrolledStudents; ?></td>
		</tr>
		<tr>
			<td>Total Students: </td>
			<td><?= $count_totalStudents; ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><?= round($count_enrolledStudents / $count_totalStudents * 100, 2); ?>% enrolled</td>
		</tr>
		
		
		<tr>
			<td>&nbsp;</td>
			<td><strong>No. of Students per Course</strong></td>
			<td><strong>Percentage</strong></td>
		</tr>
		<?php foreach($courses as $course): extract($course); ?>
		<tr>
			<td><?= $course_code; ?></td>
			<td><?= $num = $this->report_lookup_model->r_count('students','course_code',$course_code); ?> </td>
			<td><?= round($num / $count_totalStudents * 100, 2); ?>%</td>
		</tr>
		<?php endforeach; ?>
		
	</table>
</div>

<?php $this->load->view('content_footer'); ?>

