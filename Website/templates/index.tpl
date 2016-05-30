{include file='common/header.tpl'}

<div class="container">
	{if isset($SUCESS_MESSAGES)}
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {$SUCESS_MESSAGES}
    </div>
    {/if}
	<div id="movie-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				{foreach $carouselmovies as $cmovie}
				{if $cmovie@index eq 0}
				<div class="item active">
					<a href="{$BASE_URL}pages/product/product.php?id={$cmovie.movieid}">
						<img src="{$BASE_URL}{$cmovie.imagepath}" alt="{$cmovie.name}" class="carousel-img">
					</a>
					<div class="carousel-caption">
					    <a class="carousel-movie-name" href="{$BASE_URL}pages/product/product.php?id={$cmovie.movieid}"><h3>{$cmovie.name}</h3></a>
					</div>
				</div>
				{else}
				<div class="item">
					<a href="{$BASE_URL}pages/product/product.php?id={$cmovie.movieid}">
						<img src="{$BASE_URL}{$cmovie.imagepath}" alt="{$cmovie.name}" class="carousel-img">
					</a>
					<div class="carousel-caption">
					    <a class="carousel-movie-name" href="{$BASE_URL}pages/product/product.php?id={$cmovie.movieid}"><h3>{$cmovie.name}</h3></a>
					</div>
				</div>
				{/if}
				{/foreach}
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
	<h1>Featured movies</h1>
	<hr class="home-page-separator">
	<div class="row">
		<div class="col-lg-3 col-sm-6 text-center">
			<img src="{$BASE_URL}images/deadpool.jpg" class="poster-thumbnail"></img>
			<h3>Deadpool</h3>
		</div>

		<div class="col-lg-3 col-sm-6 text-center">
			<img src="{$BASE_URL}images/witch.png" class="poster-thumbnail"></img>
			<h3>The VVitch</h3>
		</div>

		<div class="col-lg-3 col-sm-6 text-center">
			<img src="{$BASE_URL}images/triple9.png" class="poster-thumbnail"></img>
			<h3>Triple 9</h3>
		</div>

		<div class="col-lg-3 col-sm-6 text-center">
			<img src="{$BASE_URL}images/madmax.jpg" class="poster-thumbnail"></img>
			<h3>Mad Max: Fury Road</h3>
		</div>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

{include file='common/footer.tpl'}