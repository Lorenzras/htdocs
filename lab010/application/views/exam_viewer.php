<?php $this->load->view('content_header'); ?>
<div class='frame'>
<h1>Exam Results</h1>
<strong>Semester: <?= CUR_SEM; ?></strong> <br />
<strong>School Year: <?= CUR_SCH_YR; ?></strong> <br />
<table>
	<thead>
		<tr>
			<th>Exam Result ID</th>
			<th>Student Number</th>
			<th>Score</th>
			<th>Rating</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($results as $result): ?>
		<tr>
			<td><?= $result['exam_result_id']; ?></td>
			<td><?= student_number($result['stud_no']); ?></td>
			<td><?= $result['score']; ?></td>
			<td><?= rating($result['score'],$result['total_items']); ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>

</table>
</div>
<?php $this->load->view('content_footer'); ?>