{include file='common/header.tpl'}

<link href="{$BASE_URL}lib/krajee-star-rating/css/star-rating.min.css" rel="stylesheet">
<link href="{$BASE_URL}lib/krajee-star-rating/css/theme-krajee-fa.min.css" rel="stylesheet">

<div id="wrapper" style="overflow-x:hidden;"> <!-- for mobile-->
	<div class="container">
		<div id="failed-wishlist" class="alert alert-danger" style="display: none">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Error!</strong> Product is already in your wishlist.
    	</div>
    	<div id="login-wishlist" class="alert alert-danger" style="display: none">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Error!</strong> Login to add a product to your wishlist.
    	</div>
    	<div id="success-wishlist" class="alert alert-success" style="display: none">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Success!</strong> Product added to your wishlist.
    	</div>
		<div class="row">
			<div class="col-lg-4 movie-poster">
				<img src="{$BASE_URL}{$movieinfo.imagepath}" class="img-responsive center-block" height="546" with="345"></img>
			</div>

			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="page-header">
							<h3 class="movie-title">{$movieinfo.moviename}</h3>

							<div class="row" style="margin-bottom: -4px;">
								<div class="col-lg-2 col-xs-2 review-stars" title="{$averagescore} out of 5 stars">
									{for $i=1 to $moviescore}
									<i class="fa fa-star"></i>
									{/for}
									{if $fraction gt 0.4}
									<i class="fa fa-star-half-o"></i>
									{/if}
									{for $i=1 to $rest}
									<i class="fa fa-star-o"></i>
									{/for}
								</div>
								<div class="col-lg-2 col-sm-2">
									<a href="{$BASE_URL}pages/product/allreviews.php?id={$movieinfo.movieid}"><h6>{$totalReviews} reviews</h6></a>
								</div>
							</div>
						</div>

						<p>{$movieinfo.description}</p>

						<span class="glyphicon glyphicon-play-circle"></span> <a href="{$movieinfo.trailer}"><h5 style="display:inline;">Watch trailer</h5></a>
						<span class="glyphicon glyphicon-heart" style="color: #D42322; padding-left: 10px;"></span> <a id="wishlist" href="{$movieinfo.movieid}"><h5 style="display:inline;">Add to wishlist</h5></a>

						<hr style="margin-top: 12px; margin-bottom: 22px;">

						<div class="row">
							<div class="col-sm-12 text-center">
								<form role="form" class="form-horizontal pull-right buy-form">
									<div class="form-group">
										<label class="control-label col-xs-6"><h3 class="price">{$movieinfo.price}€</h3></label> 
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
					<li><b>Actors:</b> {foreach $movieactors as $actor}{if $actor@index neq 0},{/if} {$actor.name}{/foreach}</li>
					<li><b>Directors:</b> {foreach $moviedirectors as $director}{if $director@index neq 0},{/if} {$director.name}{/foreach}</li>
					<li><b>Format:</b> {$movieinfo.formatname}</li>
					<li><b>Language:</b> {$movieinfo.language}</li>
					<li><b>Subtitles:</b> {foreach $moviesubs as $sub}{if $sub@index neq 0},{/if} {$sub.name}{/foreach}</li>
					<li><b>Subtitles For The Hearing Impaired:</b> {foreach $moviehisubs as $hisub}{if $hisub@index neq 0},{/if} {$hisub.name}{/foreach}</li>
					<li><b>Region:</b> {$movieinfo.region}</li>
					<li><b>Number of discs:</b> {$movieinfo.numberofdiscs}</li>
					<li><b>Classification:</b> {$movieinfo.classification}</li>
					<li><b>Studio:</b> {$movieinfo.studioname}</li>
					<li><b>DVD Release Date:</b> {$movieinfo.releasedate|date_format}</li>
					<li><b>Run Time:</b> {$movieinfo.runtime}</li>
				</ul>
			</div>
		</div>

		<div class="panel panel-default details-container">
			<div class="panel-body">
				<div class="page-header">
					<h4 style="margin-bottom: 2px;">Costumer reviews</h4>
				</div>

				{if $reviews|@count eq 0}
				This product hasn't been been reviewed yet. Be the first one to review it!<br><br>
				{/if}

				{foreach $reviews as $review}
				{if $review@iteration > 4}{break}{/if}
				<div class="review-container">
					{for $i=1 to $review.rating}
					<i class="fa fa-star"></i>
					{/for}
					{for $j=$i to 5}
					<i class="fa fa-star-o"></i>
					{/for}
					<b>&nbsp{$review.title}</b>
					<br>
					<small>By {$review.firstname} {$review.lastname} on {$review.date|date_format}</small>
					<p style="margin-top: 8px;">{$review.description}</p>
				</div>
				{/foreach}
				
				{if $reviews|@count gt 4}
				<a href="{$BASE_URL}pages/product/allreviews.php?id={$movieinfo.movieid}">See all costumer reviews<span class="glyphicon glyphicon-triangle-right"></span></a>
				<br><br>
				{/if}
				<button class="btn btn-default" data-toggle="modal" data-target="#addReview">Write a review</button>

				<div class="modal fade" id="addReview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					    <h4 class="modal-title" id="myModalLabel">Review {$movieinfo.moviename}</h4>
					  </div>
					  <div class="modal-body">
					    <form role="form" action="{$BASE_URL}actions/product/add-review.php" method="post" class="add-review-form">
							<div class="form-group add-review-stars">
								<input id="rating" name="rating" type="number" class="rating kv-ltr-theme-fa-star" step=1 data-size="sm" data-show-clear="false" data-show-caption="false">
							</div>
							</div>
							<input type="hidden" value="{$movieinfo.movieid}" name="movieid">
							<div class="form-group">
							<input id="title" type="text" class="form-control" name="title" placeholder="Title" autocomplete="off">
							</div>
							<div class="form-group">
							<textarea id="review" placeholder="Write your review here" class="form-control" id="writeReview" name="review"></textarea>
							</div>
							<div class="modal-footer">
								<div id="fillFields" style="display: none; margin-top: 5px;" class="pull-left"><strong>Fill in all fields.</strong></div>
							    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    <button type="submit" class="btn btn-primary">Add review</button>
							</div>
						</form>
					  </div>
					  
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}lib/krajee-star-rating/js/star-rating.min.js"></script>
<script src="{$BASE_URL}javascript/add-review.js"></script>
<script src="{$BASE_URL}javascript/add-to-wishlist.js"></script>

{include file='common/footer.tpl'}