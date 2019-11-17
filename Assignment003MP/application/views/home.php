<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home | Welcome <?php echo $this->session->customer_id; ?></title>
</head>

<body>
	<h1>Welcome</h1>
	Account No.: <?php echo $this->session->customer_id; ?> |
	<a href="<?php echo base_url('logout'); ?>">Log Out</a><br>
	<em>This page is restricted to unauthorized users. Only logged in users can see/access this page.</em>
</body>
</html>