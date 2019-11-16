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
				<th>Slug</th>
				<th>Title</th>
				<th>Album</th>
				<th>Year</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($songs as $song): ?>
			<tr>
				<td><?php echo $song['song_id']; ?></td>
				<td><?php echo $song['song_slug']; ?></td>
				<td><?php echo $song['song_title']; ?></td>
				<td><?php echo $song['song_album']; ?></td>
				<td><?php echo $song['song_year']; ?></td>
				<td><a href="<?php echo base_url('band/view/'.$song['song_slug']); ?>">View</a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>