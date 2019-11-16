<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
</head>

<body>
<h1><?php echo $title; ?></h1>
	<p style="color:<?php echo $this->session->flashdata('statusColor'); ?>">
		<?php echo $this->session->flashdata('statusMessage'); ?>
		
	</p>
	
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($slippers as $slipper): ?>
			<tr>
				<td><?php echo $slipper["slipper_id"]; ?></td>
				<td><?php echo $slipper["slipper_name"]; ?></td>
				<td><?php echo $slipper["price"]; ?></td>
				<td><?php echo $slipper["isAvailable"] == 1 ? 'Available' : 'Not Available'; ?></td>
				<td>
					<a href="<?php echo base_url('slippers/edit/'.$slipper["slipper_id"]); ?>">Edit</a>
					<a href="<?php echo base_url('slippers/delete/'.$slipper["slipper_id"]); ?>" onClick="return confirm('Are you sure?');">Delete</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>