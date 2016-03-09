<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" href="favicon.png" type="image/png" />
		<title>moviebox</title>

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link href="styles.css" rel="stylesheet">
	</head>
	<body>
		
		<?php include('navbar.php') ?>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 movie-poster">
					<img src="madmaxhighres.jpg" class="img-responsive center-block"></img>
				</div>

				<div class="col-lg-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="page-header movie-header">
								<h3 class="movie-title">Mad Max: Fury Road</h3>

								<div class="row" style="margin-bottom: -4px;">
									<div class="col-lg-2 col-xs-2 review-stars">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<div class="col-lg-2 col-sm-2">
										<a href="#"><h6>3 reviews</h6></a>
									</div>
								</div>
							</div>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non feugiat metus. Nunc hendrerit accumsan mauris, vitae hendrerit risus tincidunt sit amet. Quisque aliquam purus ut metus faucibus convallis. Vivamus lacinia vehicula volutpat. Donec eu vestibulum enim. Pellentesque facilisis vitae urna sed porta. Nullam convallis a turpis at lacinia. Aliquam semper lectus nunc, tempor ultrices elit fermentum nec. Donec ac tortor vestibulum orci porttitor sagittis. Integer porttitor lorem vitae leo vehicula euismod. Maecenas bibendum porta ultricies. Nullam euismod massa sed felis iaculis, sit amet molestie nulla accumsa
							</p>

							<span class="glyphicon glyphicon-play-circle"></span> <a href="#"><h5 style="display:inline;">Watch trailer</h5></a>

							<hr style="margin-top: 12px; margin-bottom: 22px;">

							<div class="row">
								<div class="col-xs-3 text-center" style="margin-bottom: 24px;">
									<a href="#"><span class="glyphicon glyphicon-info-sign info-sign"></span></a>
								</div>
								<div class="col-sm-9 text-center">
									<form role="form" class="form-horizontal pull-right buy-form">
										<div class="form-group">
											<label class="control-label col-xs-6"><h3 class="price">12.00€</h3></label> 
											<div class="col-xs-3" style="margin:0;">
									 			<input class="form-control quantity-counter" type="number" name="quantity" min="1" value="1">
									 		</div>
									 	</div>
									 	<div class="form-group">
									 		<div class="col-xs-9">
									 			<button type="submit" class="btn btn-default add-button">Add to cart</button>
									 		</div>
									 	</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include('footer.php') ?>

		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</body>
</html>