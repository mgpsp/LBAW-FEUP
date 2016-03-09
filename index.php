<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" href="favicon.png" type="image/png" />
		<title>moviebox</title>

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="styles.css" rel="stylesheet">
	</head>
	<body>
		
		<?php include('navbar.php') ?>

		<div class="container">
			<div id="movie-carousel" class="carousel slide" data-ride="carousel">
 				<!-- Indicators -->
 				<ol class="carousel-indicators">
 				  <li data-target="#movie-carousel" data-slide-to="0" class="active"></li>
 				  <li data-target="#movie-carousel" data-slide-to="1"></li>
 				  <li data-target="#movie-carousel" data-slide-to="2"></li>
 				</ol>
 
 				<!-- Wrapper for slides -->
 				<div class="carousel-inner">
 				  <div class="item active">
 				    <img src="therevenant.jpg" alt="..." class="carousel-img">
 				    <div class="carousel-caption">
 				        <h3>The Revenant</h3>
 				    </div>
 				  </div>
 				  <div class="item">
 				    <img src="game.jpg" alt="..." class="carousel-img">
 				    <div class="carousel-caption">
 				        <h3>The Imitation Game</h3>
 				    </div>
 				  </div>
 				  <div class="item">
 				    <img src="hateful.jpg" alt="..." class="carousel-img">
 				    <div class="carousel-caption">
 				        <h3>The Hateful Eight</h3>
 				    </div>
 				  </div>
 				</div>
 
 				<!-- Controls -->
 				<a class="left carousel-control" href="#movie-carousel" role="button" data-slide="prev">
 				  <span class="glyphicon glyphicon-chevron-left"></span>
 				</a>
 				<a class="right carousel-control" href="#movie-carousel" role="button" data-slide="next">
 				  <span class="glyphicon glyphicon-chevron-right"></span>
 				</a>
			</div>
		</div>

		<div class="container">
			<h1>What's new</h1>
			<hr class="home-page-separator">
			<div class="row">
				<div class="col-lg-3 col-sm-6 text-center">
					<img src="deadpool.jpg" class="poster-thumbnail"></img>
					<h3>Deadpool</h3>
				</div>

				<div class="col-lg-3 col-sm-6 text-center">
					<img src="witch.png" class="poster-thumbnail"></img>
					<h3>The VVitch</h3>
				</div>

				<div class="col-lg-3 col-sm-6 text-center">
					<img src="triple9.png" class="poster-thumbnail"></img>
					<h3>Triple 9</h3>
				</div>

				<div class="col-lg-3 col-sm-6 text-center">
					<img src="madmax.jpg" class="poster-thumbnail"></img>
					<h3>Mad Max: Fury Road</h3>
				</div>
			</div>
		</div>

		<?php include('footer.php') ?>

		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</body>
</html>