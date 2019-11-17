<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrator Panel</title>
</head>

<body>
	<h1><?php echo $title; ?></h1>
	Account No.: <?php echo $this->session->customer_id; ?> |
	<a href="<?php echo base_url('logout'); ?>">Log Out</a><br>
	<em>This page is restricted to unauthorized users. Only the administrator can see/access this page .</em>
</body>
</html>