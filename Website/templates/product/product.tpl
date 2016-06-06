{include file='common/header.tpl'}

<link href="{$BASE_URL}lib/krajee-star-rating/css/star-rating.min.css" rel="stylesheet">
<link href="{$BASE_URL}lib/krajee-star-rating/css/theme-krajee-fa.min.css" rel="stylesheet">
<link href="{$BASE_URL}css/movie-form.css" rel="stylesheet">
<link href="{$BASE_URL}lib/file-input/css/fileinput.min.css" rel="stylesheet">
<link href="{$BASE_URL}lib/chardin/css/chardinjs.css" rel="stylesheet">

<div id="wrapper" style="overflow-x:hidden;"> <!-- for mobile-->
	<div class="container">
		<div class="wish-alerts">
    	</div>
    	{if isset($ERROR_MESSAGES)}
    	<div class="alert alert-danger">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Error!</strong> {$ERROR_MESSAGES}
    	</div>
    	{/if}
    	{if isset($SUCCESS_MESSAGES)}
    	<div class="alert alert-success">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Success!</strong> {$SUCCESS_MESSAGES}
    	</div>
    	{/if}
		<div class="row">
			<div class="col-lg-4 movie-poster">
				<img src="{$BASE_URL}{$movieinfo.imagepath}" class="img-responsive center-block" height=546 width=375 alt="{$movieinfo.moviename} cover">
			</div>

			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="page-header">
							<div class="row">
								<div class="col-lg-8">
									<h3 class="movie-title">{$movieinfo.moviename} ({$movieinfo.releasedate|date_format: "%Y"})</h3>
								</div>
								{if $ADMIN}
								<div class="col-lg-4">
				                    <button type="button" class="btn btn-warning pull-right manage-movies btn-sm" style="padding-top: 4px" title="Edit movie" data-toggle="modal" data-target="#editMovie">
				                        <span class="glyphicon glyphicon-pencil" style="vertical-align:top;"></span>
				                    </button>
				                    <form action="{$BASE_URL}actions/admin/delete-movie.php" method="get">
					                    <input type="hidden" name="id" value="{$movieinfo.movieid}"/>
					                    <button type="submit" class="btn btn-danger pull-right manage-movies btn-sm" style="margin-right: 10px" title="Delete movie">
					                        <span class="glyphicon glyphicon-remove remove-movie" style="vertical-align:top;"></span>
					                    </button>
				                   	</form>
								</div>
								{/if}
							</div>

							<div class="row" style="margin-bottom: -4px;">
								<div class="col-lg-2 col-xs-2 review-stars" title="{$averagescore|string_format:'%.2f'} out of 5 stars">
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
									<a href="{$BASE_URL}pages/product/reviews/?id={$movieinfo.movieid}"><h6>{$totalReviews} reviews</h6></a>
								</div>
							</div>
						</div>

						<p>{$movieinfo.description}</p>

						<span class="glyphicon glyphicon-play-circle"></span> <a data-toggle="modal" data-target="#watchTrailer" href="#"><h5 style="display:inline;" data-intro="Click here to watch the trailer" data-position="bottom">Watch trailer</h5></a>
						<div class="wishlist-option" style="display: inline">
						{if $inWishlist}
						<span id="gly-rem-wish" class="glyphicon glyphicon-remove" style="color: #D42322; padding-left: 10px;"></span> <a onclick="removeWishlist({$movieinfo.movieid})" href="javascript:void(0)"><h5 style="display:inline;" data-intro="Click here to remove the movie from your wishlist" data-position="bottom">Remove from wishlist</h5></a>
						{else}
						<span class="glyphicon glyphicon-heart" style="color: #D42322; padding-left: 10px;"></span> <a onclick="addWishlist({$movieinfo.movieid})" href="javascript:void(0)"><h5 style="display:inline;" data-intro="Click here to add the movie to your wishlist" data-position="bottom">Add to wishlist</h5></a>
						{/if}
						</div>
						<a href="#" id="show-help"><span style="font-size: 16px;" class="glyphicon glyphicon-info-sign pull-right"></span></a>

						<hr style="margin-top: 12px; margin-bottom: 22px;">

						<div class="row">
							<div class="col-sm-12 text-center">
								<form role="form" class="form-horizontal pull-right buy-form" method="post" action="{$BASE_URL}actions/cart/add-to-cart.php">
									<div class="form-group">
										<input type="hidden" name="movieid" value="{$movieinfo.movieid}">
										<div style="display: inline" class="control-label col-xs-6"><h3 class="price">{$movieinfo.price|string_format:"%.2f"}€</h3></div> 
										<div class="col-xs-3" style="margin:0;">
								 			<input data-intro="Click here to choose the number of items" data-position="right" class="form-control quantity-counter" type="number" name="quantity" min="1" value="1">
								 		</div>
								 	</div>
								 	<div class="form-group">
								 		<div class="col-xs-9">
								 			{if $movieinfo.stock gt 0}
								 			<button data-intro="Click here to add the movie to your cart" data-position="bottom" type="submit" class="btn btn-default add-button">Add to cart</button>
								 			{else}
								 			<strong style="color: #CC0000; font-size: 20px;">Out of stock.</strong>
								 			{/if}
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
					{if $movieactors|@count gt 0}
					<li><b>Actors:</b> {foreach $movieactors as $actor}{if $actor@index neq 0},{/if} {$actor.name}{/foreach}</li>
					{/if}
					<li><b>Directors:</b> {foreach $moviedirectors as $director}{if $director@index neq 0},{/if} {$director.name}{/foreach}</li>
					<li><b>Format:</b> {$movieinfo.formatname}</li>
					<li><b>Language:</b> {$movieinfo.language}</li>
					{if $moviesubs|@count gt 0}
					<li><b>Subtitles:</b> {foreach $moviesubs as $sub}{if $sub@index neq 0},{/if} {$sub.name}{/foreach}</li>
					{/if}
					{if $moviehisubs|@count gt 0}
					<li><b>Subtitles For The Hearing Impaired:</b> {foreach $moviehisubs as $hisub}{if $hisub@index neq 0},{/if} {$hisub.name}{/foreach}</li>
					{/if}
					<li><b>Region:</b> {$movieinfo.region}</li>
					<li><b>Number of discs:</b> {$movieinfo.numberofdiscs}</li>
					<li><b>Classification:</b> {$movieinfo.classification}</li>
					<li><b>Studio:</b> {$movieinfo.studioname}</li>
					<li><b>Release Date:</b> {$movieinfo.releasedate|date_format}</li>
					<li><b>Run Time:</b> {$movieinfo.runtime} minutes</li>
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
					<b>&nbsp;{$review.title}</b>&nbsp;
					{if $ADMIN || $userID eq $review.memberid}
					<a href="#editReview{$review.reviewid}" data-toggle="modal" data-id="{$review.rating}, {$review.title}, {$review.description}, {$review.reviewid}" title="Edit review" id="edit-review-button"><span class="glyphicon glyphicon-pencil edit-review"></span></a>
					<a href="{$BASE_URL}actions/product/delete-review.php?id={$review.reviewid}" title="Delete review"><span class="glyphicon glyphicon-remove remove-review"></span></a>
					{/if}
					<br>
					<small>By {$review.firstname} {$review.lastname} on {$review.date|date_format}</small>
					<p style="margin-top: 8px;">{$review.description}</p>
				</div>
				{/foreach}
				
				{if $reviews|@count gt 4}
				<a href="{$BASE_URL}pages/product/reviews/?id={$movieinfo.movieid}">See all costumer reviews<span class="glyphicon glyphicon-triangle-right"></span></a>
				<br><br>
				{/if}
				<button data-intro="Click here to add a review" data-position="left" class="btn btn-default" data-toggle="modal" data-target="#addReview">Write a review</button>

				<div class="modal fade" id="addReview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					    <h4 class="modal-title" style="display: inline">Review {$movieinfo.moviename}</h4>
					    <span style="color: red;display: inline">&nbsp;*Required field</span>
					  </div>
					  <div class="modal-body">
					    <form role="form" action="{$BASE_URL}actions/product/add-review.php" method="post" class="add-review-form">
							<div class="form-group add-review-stars" data-toggle="tooltip" data-placement="right">
								<label class="sr-only" for="rating">Rating</label>
								<input id="rating" name="rating" type="number" class="rating kv-ltr-theme-fa-star" step=1 data-size="sm" data-show-clear="false" data-show-caption="false" required>
							</div>
							<input type="hidden" value="{$movieinfo.movieid}" name="movieid">
							<div class="form-group">
								<label class="sr-only" for="title">Title</label>
								<input id="title" type="text" class="form-control" name="title" placeholder="Title*" autocomplete="off" style="margin-top: 0px; padding-left: 10px;" required>
							</div>
							<div class="form-group">
								<label class="sr-only" for="writeReview">Review</label>
								<textarea placeholder="Write your review here*" class="form-control" id="writeReview" name="review" style="margin-top: 0px; padding-left: 10px; height: 150px;" required></textarea>
							</div>
							<div class="modal-footer">
							    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    <button type="submit" class="btn btn-primary">Add review</button>
							</div>
						</form>
					  </div>
					</div>
					</div>
				</div>

				{foreach $reviews as $review}
				{if $review@iteration > 4}{break}{/if}
				{if $ADMIN || $userID eq $review.memberid}
				<div class="modal fade" id="editReview{$review.reviewid}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					    <h4 class="modal-title">Edit review for {$movieinfo.moviename}</h4>
					  </div>
					  <div class="modal-body">
					    <form role="form" action="{$BASE_URL}actions/product/edit-review.php" method="post">
					    	<input type="hidden" name="reviewid" id="reviewid" value="{$review.reviewid}">
							<div class="form-group add-review-stars" data-toggle="tooltip" data-placement="right">
								<label class="sr-only" for="edit-rating{$review.reviewid}">Rating</label>
								<input id="edit-rating{$review.reviewid}" name="rating" type="number" class="rating kv-ltr-theme-fa-star" step=1 data-size="sm" data-show-clear="false" data-show-caption="false" value="{$review.rating}" required>
							</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="edit-title{$review.reviewid}">Title</label>
								<input id="edit-title{$review.reviewid}" type="text" class="form-control" name="title" placeholder="Title" autocomplete="off" style="margin-top: -20px; margin-bottom: 25px;" value="{$review.title}" required>
							</div>
							<div class="form-group">
								<label class="sr-only" for="edit-review{$review.reviewid}">Review</label>
								<textarea style="margin-top: -25px;" id="edit-review{$review.reviewid}" placeholder="Write your review here" class="form-control" id="writeReview" name="review" required>{$review.description}</textarea>
							</div>
							<div class="modal-footer">
							    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    <button type="submit" class="btn btn-primary">Edit review</button>
							</div>
						</form>
					  </div>
					</div>
					</div>
				</div>
				{/if}
				{/foreach}

				<div class="modal fade" id="watchTrailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document" style="width: 820px">
					<div class="modal-content">
						<div class="modal-header">
						    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						    <h4 class="modal-title" id="myModalLabel">Watch {$movieinfo.moviename} trailer</h4>
					  	</div>
					  	<div class="modal-body">
					  		<div class="embed-responsive embed-responsive-16by9" >
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{$movieinfo.trailer}" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		{if $ADMIN}
		<div class="modal fade" id="editMovie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title" id="myModalLabel" style="display: inline">Edit movie</h4>
			    <span style="color: red;display: inline">&nbsp;*Required field</span>
		  	</div>
		  	<div class="modal-body">
		  		 <form class="form-horizontal" role="form" method="post" action="{$BASE_URL}actions/admin/edit-movie.php" enctype="multipart/form-data">
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-name">Name*</label>
					<div class="col-sm-9">
					  <input type="hidden" value="{$movieinfo.movieid}" name="movieid">
					  <input id="movie-name" type="text" class="form-control" name="name" placeholder="Enter movie name" value="{$movieinfo.moviename}"required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-date">Release date*</label>
					<div class="col-sm-9">
					  <input id="movie-date" type="text" class="form-control" name="date" placeholder="YYYY-MM-DD" value="{$movieinfo.releasedate}" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-synopsis">Synopsis*</label>
					<div class="col-sm-9">
					  <textarea id="movie-synopsis" placeholder="Write synopsis" class="form-control" name="synopsis" style="margin-top: 3px" required>{$movieinfo.description}</textarea>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-discs">Number of discs*</label>
					<div class="col-sm-9">
						<input id="movie-discs" class="form-control quantity-counter" type="number" name="discs" min="1" style="width: 10%; margin-left: 20px" value="{$movieinfo.numberofdiscs}"required>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-price">Price*</label>
					<div class="col-sm-9">
					  <input id="movie-price" type="text" class="form-control" name="price" placeholder="Enter price" value="{$movieinfo.price}" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-region">Region*</label>
					<div class="col-sm-9">
					  <input id="movie-region" type="text" class="form-control" name="region" placeholder="Enter region" value="{$movieinfo.region}" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-classification">Classification*</label>
					<div class="col-sm-9">
					  <input id="movie-classification" type="text" class="form-control" name="classification" placeholder="Enter classification" value="{$movieinfo.classification}" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-runtime">Runtime*</label>
					<div class="col-sm-9">
					  <input id="movie-runtime" type="text" class="form-control" name="runtime" placeholder="Enter runtime" value="{$movieinfo.runtime}" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-stock">Stock*</label>
					<div class="col-sm-9">
					  <input id="movie-stock" class="form-control quantity-counter" type="number" name="stock" style="width: 20%; margin-left: 20px" value="{$movieinfo.stock}"required>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-trailer">Trailer* <sup data-toggle="tooltip" title="Example: gnRbXn4-Yis">?</sup></label>
					<div class="col-sm-9">
					  <input id="movie-trailer" type="text" class="form-control" name="trailer" placeholder="Enter YouTube link id" value="{$movieinfo.trailer}" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-format">Format*</label>
					<div class="col-sm-9">
					<select id="movie-format" name="format" class="form-control" style="width: 50%; margin-left: 20px" required>
                        {foreach $formats as $format}
                        {if $format.formatid eq $movieinfo.formatid}
                        <option value="{$format.formatid}" selected="selected">{$format.name}</option>
                        {else}
                        <option value="{$format.formatid}">{$format.name}</option>
                        {/if}
                        {/foreach}
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-genre">Genre*</label>
					<div class="col-sm-9">
					<select id="movie-genre" name="genre" class="form-control" style="width: 50%; margin-left: 20px" required>
                        {foreach $genres as $genre}
                        {if $genre.genreid eq $movieinfo.genreid}
                        <option value="{$genre.genreid}" selected="selected">{$genre.name}</option>
                        {else}
                        <option value="{$genre.genreid}">{$genre.name}</option>
                        {/if}
                        {/foreach}
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-studio">Studio*</label>
					<div class="col-sm-9">
					<select id="movie-studio" name="studio" class="form-control" style="width: 50%; margin-left: 20px" required>
                        {foreach $studios as $studio}
                        {if $studio.studioid eq $movieinfo.studioid}
                        <option value="{$studio.studioid}" selected="selected">{$studio.name}</option>
                        {else}
                        <option value="{$studio.studioid}">{$studio.name}</option>
                        {/if}
                        {/foreach}
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-language">Language*</label>
					<div class="col-sm-9">
					<select id="movie-language" name="language" class="form-control" style="width: 50%; margin-left: 20px" required>
                        {foreach $languages as $language}
                        {if $language.languageid eq $movieinfo.languageid}
                        <option value="{$language.languageid}" selected="selected">{$language.name}</option>
                        {else}
                        <option value="{$language.languageid}">{$language.name}</option>
                        {/if}
                        {/foreach}
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-cover">Cover* <sup data-toggle="tooltip" title="375x546">?</sup></label>
					<div class="col-sm-9 cover-upload">
						<input type="hidden" value="{$movieinfo.imagepath}" name="prevCover">
					  <input id="movie-cover" name="cover" type="file" class="file" data-show-preview="false" data-allowed-file-extensions='["jpeg", "jpg", "png", "gif", "bmp", "svg"]'>
					</div>
					</div>
					<span class="col-sm-12 text-center info"><b>For the following fields, separate entries with ","</b></span>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-director">Director(s)*</label>
					<div class="col-sm-9">
					  <input id="movie-director" type="text" class="form-control" name="director" placeholder="Enter director(s) name" value="{foreach $moviedirectors as $director}{if $director@index neq 0},{/if} {$director.name}{/foreach}" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-actor">Actor(s)</label>
					<div class="col-sm-9">
					  <input id="movie-actor" type="text" class="form-control" name="actor" placeholder="Enter actor(s) name" value="{foreach $movieactors as $actor}{if $actor@index neq 0},{/if} {$actor.name}{/foreach}">
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-subtitle">Subtitle(s)</label>
					<div class="col-sm-9">
					  <input id="movie-subtitle" type="text" class="form-control" name="sub" placeholder="Enter subtitle(s) name" value="{foreach $moviesubs as $sub}{if $sub@index neq 0},{/if} {$sub.name}{/foreach}">
					</div>
					</div>
					<div class="form-group" for="movie-hisub">
					<label class="control-label col-sm-3">HI Subtitle(s)</label>
					<div class="col-sm-9">
					  <input id="movie-hisub" type="text" class="form-control" name="hisub" placeholder="Enter HI subtitle(s) name" value="{foreach $moviehisubs as $hisub}{if $hisub@index neq 0},{/if} {$hisub.name}{/foreach}">
					</div>
					</div>
					<div class="modal-footer">
					    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    <button type="submit" class="btn btn-primary">Edit movie</button>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
	{/if}
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}lib/krajee-star-rating/js/star-rating.min.js"></script>
<script src="{$BASE_URL}lib/file-input/js/fileinput.min.js"></script>
<script src="{$BASE_URL}lib/chardin/js/chardinjs.min.js"></script>
<script src="{$BASE_URL}javascript/add-review.js"></script>
<script src="{$BASE_URL}javascript/wishlist.js"></script>

{include file='common/footer.tpl'}