<header>
	<nav>
		<div class="nav-wrapper light-blue darken-3">
			<a href="#" class="brand-logo">Logo</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</nav>
</header>


<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div id="front-end-carousel" class="carousel carousel-slider">
						<a class="carousel-item" href="#"><img src="<?php echo asset_url().'img/image1.jpg'; ?>"></a>
						<a class="carousel-item" href="#"><img src="<?= asset_url().'img/image2.jpg'; ?>"></a>
						<a class="carousel-item" href="#"><img src="<?= asset_url().'img/image3.jpg'; ?>"></a>
						<a class="carousel-item" href="#"><img src="<?= asset_url().'img/image4.jpg'; ?>"></a>
						<a class="carousel-item" href="#"><img src="<?= asset_url().'img/image5.jpg'; ?>">ghg</a>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col s12">
					<h3>Japan</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in magna id leo tempus interdum non eget turpis. Vestibulum sollicitudin eros eget lobortis malesuada. Aliquam fringilla at felis ac viverra. Praesent eleifend, purus eget euismod fringilla, est ipsum mollis enim, vel vehicula diam est eu enim. Vestibulum quis risus quis enim congue pulvinar. Duis malesuada leo vel sodales varius. Morbi cursus nunc at varius ullamcorper. Fusce consequat, dolor ac sodales faucibus, risus libero posuere lorem, nec gravida lectus ante et lorem. Proin viverra luctus nisi, id iaculis velit posuere ut. Nulla ac tellus vitae enim congue dictum. Quisque accumsan, lacus id dapibus rutrum, sem nisl vestibulum justo, in consectetur mi erat vitae massa. Donec et pellentesque velit.</p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="parallax-container">
			<div class="parallax"><img src="<?= asset_url().'img/japan2.jpg'; ?>"></div>
		</div>
		<div class="section white">
			<div class="row container">
				<h3 class="header">Land of the rising sun</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in magna id leo tempus interdum non eget turpis. Vestibulum sollicitudin eros eget lobortis malesuada. Aliquam fringilla at felis ac viverra. Praesent eleifend, purus eget euismod fringilla, est ipsum mollis enim, vel vehicula diam est eu enim. Vestibulum quis risus quis enim congue pulvinar. Duis malesuada leo vel sodales varius. Morbi cursus nunc at varius ullamcorper. Fusce consequat, dolor ac sodales faucibus, risus libero posuere lorem, nec gravida lectus ante et lorem. Proin viverra luctus nisi, id iaculis velit posuere ut. Nulla ac tellus vitae enim congue dictum. Quisque accumsan, lacus id dapibus rutrum, sem nisl vestibulum justo, in consectetur mi erat vitae massa. Donec et pellentesque velit.</p>
			</div>
		</div>
		<div class="parallax-container">
			<div class="parallax"><img src="<?= asset_url().'img/japan1.jpg'; ?>"></div>
		</div>
	</section>
	<section>
		<div class="testimonials container">
			<div class="row">
				<div class="col s4 center-align">
					<img src="<?= asset_url().'img/testimonials.jpg'; ?>" class="responsive-img circle"/> <br>
					<h4>Some Name</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in magna id leo tempus interdum non eget turpis. Vestibulum sollicitudin eros eget lobortis malesuada.</p>
				</div>
				<div class="col s4 center-align">
					<img src="<?= asset_url().'img/testimonials.jpg'; ?>" class="responsive-img circle"/> <br>
					<h4>Some Name</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in magna id leo tempus interdum non eget turpis. Vestibulum sollicitudin eros eget lobortis malesuada.</p>
				</div>
				<div class="col s4 center-align">
					<img src="<?= asset_url().'img/testimonials.jpg'; ?>" class="responsive-img circle"/> <br>
					<h4>Some Name</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in magna id leo tempus interdum non eget turpis. Vestibulum sollicitudin eros eget lobortis malesuada.</p>
				</div>
				
			</div>
		</div>
	</section>
</main>


<footer id="front-end-footer" class="light-blue darken-3">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Footer Content</h5>
				<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content</p>
			</div>
		
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">Links</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Blog</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Contact Us</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">About Us</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="footer-copyright blue darken-3">
		<div class="container">
			@ 2019 Copyright Text
			<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
		</div>
	</div>
</footer>