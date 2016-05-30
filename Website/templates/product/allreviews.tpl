{include file='common/header.tpl'}

<div class="container">
	<div class="page-header"><h2 class="shopping-cart-header">All costumer reviews for {$moviename.moviename}</h2></div>
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
		<b>&nbsp{$review.title}</b>
		<br>
		<small>By {$review.firstname} {$review.lastname} on {$review.date|date_format}</small>
		<p style="margin-top: 8px;">{$review.description}</p>
	</div>
	{/foreach}

	<div class="text-center">
		<ul class="pagination">
			{if $currentPage neq 1}
			<li><a href="{$BASE_URL}pages/product/allreviews.php?id={$movieid}&page=1">&laquo; First</a></li>
			<li><a href="{$BASE_URL}pages/product/allreviews.php?id={$movieid}&page={$previousPage}"><</a></li>
			{else}
			<li class="disabled"><a href="{$BASE_URL}pages/product/allreviews.php?id={$movieid}&page=1">&laquo; First</a></li>
			<li class="disabled"><a href="{$BASE_URL}pages/product/allreviews.php?id={$movieid}&page={$previousPage}"><</a></li>
			{/if}
			{for $i=$fromPage to $toPage}
			{if $i eq $currentPage}
			<li class="active"><a href="#">{$i}</a></li>
			{else}
			<li><a href="{$BASE_URL}pages/product/allreviews.php?id={$movieid}&page={$i}">{$i}</a></li>
			{/if}
			{/for}
			{if $currentPage neq $lastPage}
			<li><a href="{$BASE_URL}pages/product/allreviews.php?id={$movieid}&page={$nextPage}">></a></li>
			<li><a href="{$BASE_URL}pages/product/allreviews.php?id={$movieid}&page={$lastPage}">Last &raquo;</a></li>
			{else}
			<li class="disabled"><a href="{$BASE_URL}pages/product/allreviews.php?id={$movieid}&page={$nextPage}">></a></li>
			<li class="disabled"><a href="{$BASE_URL}pages/product/allreviews.php?id={$movieid}&page={$lastPage}">Last &raquo;</a></li>
			{/if}
		</ul>
	</div>
	<a href="{$BASE_URL}pages/product/product.php?id={$movieid}"><span class="glyphicon glyphicon-triangle-left"></span>See all details for {$moviename.moviename}</a>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

{include file='common/footer.tpl'}