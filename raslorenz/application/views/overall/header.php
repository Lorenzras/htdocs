<!doctype html>
<html>
<head>

<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?= asset_url().'css/materialize.min.css'; ?>" media="screen,projection"/>
	
<link rel="stylesheet" type="text/css" href="<?= asset_url().'css/main.css'; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?= $title ?></title>
</head>

<body>

<ul id="slide-out" class="center sidenav sidenav-fixed">
	
		<div class="grey-text">
			<img id="profile" src="<?= asset_url().'img/profile.jpg' ?>" alt="" class="circle responsive-img"><br />
			<h4>Lorenz Ras</h4>
		</div>
	<li><a href="<?= base_url('main'); ?>">About Me</a></li>
	<li><a href="http://raslorenz.000webhostapp.com#services">My Services</a></li>
	<li><a href="#!">Blog</a></li>
	<li><a href="<?= base_url('contact'); ?>">Contact</a></li>
	
</ul>
	
<header>
	<div class="menu hide-on-large-only"><a href="#" data-target="slide-out" class="sidenav-trigger"><i class="medium material-icons white-text">menu</i></a>
	</div>
</header>


