<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title>Lightbox Example</title>
	<link rel="stylesheet" href="<?= asset_url().'lightbox/css/lightbox.min.css'; ?>">
	<style type="text/css">

	img{
		width: 20%;
		height: auto;
	}
	</style>
</head>
<body>

  <section>
    

    <h3>Lab012 Machine Problem</h3>
    <div>
      <a class="example-image-link" href="<?= asset_url().'img/image1.jpg'; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?= asset_url().'img/image1.jpg'; ?>" alt=""/></a>
		<a class="example-image-link" href="<?= asset_url().'img/image2.jpg'; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?= asset_url().'img/image2.jpg'; ?>" alt=""/></a>
		<a class="example-image-link" href="<?= asset_url().'img/image3.jpg'; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?= asset_url().'img/image3.jpg'; ?>" alt=""/></a>
		<a class="example-image-link" href="<?= asset_url().'img/image4.jpg'; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?= asset_url().'img/image4.jpg'; ?>" alt=""/></a>
     
    </div>
  </section>

  <section>
    <p>
		<strong>Lorenz Ras </strong><br />
      
    </p>
  </section>

  <script src="<?= asset_url().'lightbox/js/lightbox-plus-jquery.min.js'  ?>"></script>

</body>
</html>
