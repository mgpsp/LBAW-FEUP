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
		<div id="wrapper" style="overflow-x:hidden;"> <!-- for mobile-->
		<?php include('navbar.php') ?>

		<div class="container">
			<div class="row">
				<div class="col-lg-4 movie-poster">
					<img src="madmaxhighres.jpg" class="img-responsive center-block"></img>
				</div>

				<div class="col-lg-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="page-header">
								<h3 class="movie-title">Mad Max: Fury Road</h3>

								<div class="row" style="margin-bottom: -4px;">
									<div class="col-lg-2 col-xs-2 review-stars" title="3.6 out of 5 stars">
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
								<!--<div class="col-xs-3 text-center" style="margin-bottom: 24px;">
									<a href="#"><span class="glyphicon glyphicon-info-sign info-sign" title="Product details"></span></a>
								</div>-->
								<div class="col-sm-12 text-center">
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

			<div class="panel panel-default details-container">
				<div class="panel-body">
					<div class="page-header">
						<h4 style="margin-bottom: 2px;">Product details</h4>
					</div>

					<ul style="list-style-type:none; padding-left: 15px;">
						<li><b>Actors:</b> Tom Hardy, Charlize Theron, Nicholas Hoult</li>
						<li><b>Directors:</b> George Miller</li>
						<li><b>Format:</b> Blu-ray</li>
						<li><b>Language:</b> English</li>
						<li><b>Subtitles:</b> English, Spanish, Danish, Finnish, Greek, Icelandic, Italian, Norwegian, Swedish</li>
						<li><b>Subtitles For The Hearing Impaired:</b> English, Italian</li>
						<li><b>Region:</b> All Regions</li>
						<li><b>Number of discs:</b> 1</li>
						<li><b>Classification:</b> 15</li>
						<li><b>Studio:</b> Warner Home Video</li>
						<li><b>DVD Release Date:</b> 5 Oct. 2015</li>
						<li><b>Run Time:</b> 120 minutes</li>
					</ul>
				</div>
			</div>

			<div class="panel panel-default details-container">
				<div class="panel-body">
					<div class="page-header">
						<h4 style="margin-bottom: 2px;">Costumer reviews</h4>
					</div>

					<div class="review-container">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<b>&nbspFurious Action+</b>
						<br>
						<small>By C. Bulman on 12 Feb. 2016</small>
						<p style="margin-top: 8px;">
							If you like action which is different from the usual blockbusters, this is for you. And rather surprisingly there is a feminist element and some interesting ideas in the story. Also a bit surprising is that the main female character is really more important in the story than Max. The desert landscapes are beautiful and the action is more amazing than any of the previous Max films.
						</p>
					</div>

					<div class="review-container">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<b>&nbspwe chose this film almost reluctantly, but WOW! ...</b>
						<br>
						<small>By Elle on 24 Feb. 2016</small>
						<p style="margin-top: 8px;">
							 we chose this film almost reluctantly, but WOW! it turned out to be incredible. I do wish there was more dialogue but i guess the main thrill of this story comes from the chase 
						</p>
					</div>

					<div class="review-container">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<b>&nbspSpectacular action sequences</b>
						<br>
						<small>By Catweazle on 28 Jan. 2016</small>
						<p style="margin-top: 8px;">
							 A visually spectacular film, very well paced and enjoyable to watch - the cinematography is excellent, with some wonderful action sequences.The only criticism I'd make is that I didn't find any of the characters that engaging, so I didn't really care much whether they lived or died - this contrasts with the original film where I enjoyed the characterisation more. And that's why I liked this latest film (4 star) rather than loved it (5 star). 
						</p>
					</div>

					<div class="review-container">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<b>&nbspfantastic film one of the best ive seen in a ...</b>
						<br>
						<small> By B PEERS on 27 Feb. 2016</small>
						<p style="margin-top: 8px;">
							 fantastic film one of the best ive seen in a long time superb picture & sound was a bit unsure as i like the old ones but did not dissapoint loads of action 
						</p>
					</div>

					<a href="#">See all costumer reviews<span class="glyphicon glyphicon-triangle-right"></span></a>
					<br><br>
					<button class="btn btn-default">Write a review</button>
				</div>
			</div>
		</div>

		<?php include('footer.php') ?>
		</div>

		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</body>
</html>