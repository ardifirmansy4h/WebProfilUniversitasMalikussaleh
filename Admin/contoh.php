<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/css/bootstrap.css"> 
	<title>Tutorial Membuat Carousel Dengan Bootstrap 4 - www.malasngoding.com</title> 
</head> 
<body> 

	<div class="container">

		<center>
			<h3>Tutorial Membuat Carousel Dengan Bootstrap 4</h3>
			<h4><a href="https://www.malasngoding.com/carousel-bootstrap-4/">www.malasngoding.com</a></h4>
		</center>

		<div class="bd-example">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="image1.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Gambar Slide Yang Pertama</h5>
							<p>Gambar pemandangan sungai.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="image2.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Gambar Slide Yang Kedua</h5>
							<p>Gambar pemandangan sawah di desa.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="image3.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Gambar Slide Yang Ketiga</h5>
							<p>Gambar pemandangan taman belakang rumah.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

	</div>

	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
</body> 
</html>