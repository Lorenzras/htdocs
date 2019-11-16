<!--
Name: Ras, Lorenz	Course: BSIT	Lab No. 3
-->

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
				<th>Description</th>
				<th>Price</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($products as $p): ?>
			<tr>
				<td><?php echo $p['product_id']; ?></td>
				<td><?php echo $p['name']; ?></td>
				<td><?php echo $p['description']; ?></td>
				<td><?php echo $p['price']; ?></td>
				<td><a href="<?php echo base_url('products/view/'.$p['name']);  ?>">View</a></td>
				<td><a href="<?php echo base_url('products/edit/'.$p['product_id']);  ?>">Edit</a></td>
				<td><a href="<?php echo base_url('products/delete/'.$p['product_id']);  ?>" onClick="return confirm('Are you sure?');">Delete</a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>