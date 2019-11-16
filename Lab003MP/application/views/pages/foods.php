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
				<td><?php echo $p['desc']; ?></td>
				<td><?php echo $p['price']; ?></td>
				<td><a href="<?php echo base_url('products/view/'.$p['name']);  ?>">View</a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>