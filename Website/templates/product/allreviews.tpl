{include file='common/header.tpl'}

<link href="{$BASE_URL}lib/krajee-star-rating/css/star-rating.min.css" rel="stylesheet">
<link href="{$BASE_URL}lib/krajee-star-rating/css/theme-krajee-fa.min.css" rel="stylesheet">
<link href="{$BASE_URL}css/movie-form.css" rel="stylesheet">

<div class="container">
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
	<div class="page-header"><h2 class="shopping-cart-header"><a href="{$BASE_URL}pages/product/?id={$movieid}">{$moviename.moviename}</a> / Reviews</h2></div>
	{if $reviews|@count eq 0}
	This product hasn't been been reviewed yet. Be the first one to review it!<br><br>
	{/if}

	{foreach $reviews as $review}
	<div class="review-container">
		{for $i=1 to $review.rating}
		<i class="fa fa-star"></i>
		{/for}
		{for $j=$i to 5}
		<i class="fa fa-star-o"></i>
		{/for}
		<b>&nbsp;{$review.title}</b>&nbsp;
		{if $ADMIN || $userID eq $review.memberid}
		<a href="#editReview{$review.reviewid}" data-toggle="modal" title="Edit review" id="edit-review-button"><span class="glyphicon glyphicon-pencil edit-review"></span></a>
		<a href="{$BASE_URL}actions/product/delete-review.php?id={$review.reviewid}" title="Delete review"><span class="glyphicon glyphicon-remove remove-review"></span></a>
		{/if}
		<br>
		<small>By {$review.firstname} {$review.lastname} on {$review.date|date_format}</small>
		<p style="margin-top: 8px;">{$review.description}</p>
	</div>
	{/foreach}

	{if $totalReviews gt 10}
	<div class="text-center">
		<ul class="pagination">
			{if $currentPage neq 1}
			<li><a href="{$BASE_URL}pages/product/reviews/?id={$movieid}&page=1">&laquo; First</a></li>
			<li><a href="{$BASE_URL}pages/product/reviews/?id={$movieid}&page={$previousPage}">&lt;</a></li>
			{else}
			<li class="disabled"><a href="{$BASE_URL}pages/product/reviews/?id={$movieid}&page=1">&laquo; First</a></li>
			<li class="disabled"><a href="{$BASE_URL}pages/product/reviews/?id={$movieid}&page={$previousPage}">&lt;</a></li>
			{/if}
			{for $i=$fromPage to $toPage}
			{if $i eq $currentPage}
			<li class="active"><a href="#">{$i}</a></li>
			{else}
			<li><a href="{$BASE_URL}pages/product/reviews/?id={$movieid}&page={$i}">{$i}</a></li>
			{/if}
			{/for}
			{if $currentPage neq $lastPage}
			<li><a href="{$BASE_URL}pages/product/reviews/?id={$movieid}&page={$nextPage}">&gt;</a></li>
			<li><a href="{$BASE_URL}pages/product/reviews/?id={$movieid}&page={$lastPage}">Last &raquo;</a></li>
			{else}
			<li class="disabled"><a href="{$BASE_URL}pages/product/reviews/?id={$movieid}&page={$nextPage}">&gt;</a></li>
			<li class="disabled"><a href="{$BASE_URL}pages/product/reviews/?id={$movieid}&page={$lastPage}">Last &raquo;</a></li>
			{/if}
		</ul>
	</div>
	{/if}

	{foreach $reviews as $review}
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
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}lib/krajee-star-rating/js/star-rating.min.js"></script>

{include file='common/footer.tpl'}