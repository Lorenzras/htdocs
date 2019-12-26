<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="<?= asset_url().'slick/slick.css'; ?>">;
	<link rel="stylesheet" type="text/css" href="<?= asset_url().'slick/slick-theme.css'; ?>">;
</head>
	<script type="text/javascript" src="<?= asset_url().'js/jquery-3.4.1.min.js'; ?>"></script>
	<script type="text/javascript" src="<?= asset_url().'slick/slick.min.js'; ?>"></script>
	<script type="application/javascript">
		$(document).ready(function(){
			$('.my-carousel-example').slick({
				arrows:true,
				autoplay:true,
				autoplaySpeed:1000
			});
		});
	</script>
	<style type="text/css">
		.my-carousel-example{
			margin: auto;
			width: 50%;
			height: auto;
		}
		body {
			background-color: #888;
		}
		img{
			width: 100%;
			height: auto;
		}
	</style>
<body>
	<div class="my-carousel-example">
		<div><img src="<?= asset_url().'img/image1.jpg'; ?>"></div>
		<div><img src="<?= asset_url().'img/image2.jpg'; ?>"></div>
		<div><h2>This is an example of a carousel</h2></div>
	</div>
</body>
</html>