{include file='common/header.tpl'}

<div class="container">
	{if isset($SUCCESS_MESSAGES)}
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {$SUCCESS_MESSAGES}
    </div>
    {/if}
    {if isset($ERROR_MESSAGES)}
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> {$ERROR_MESSAGES}
    </div>
    {/if}
	<div id="movie-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				{foreach $carouselmovies as $cmovie}
				{if $cmovie@index eq 0}
				<div class="item active">
					<a href="{$BASE_URL}pages/product/?id={$cmovie.movieid}">
						<img alt="{$cmovie.name} still" src="{$BASE_URL}{$cmovie.imagepath}" class="carousel-img">
					</a>
					<div class="carousel-caption">
					    <a class="carousel-movie-name" href="{$BASE_URL}pages/product/?id={$cmovie.movieid}"><h3>{$cmovie.name}</h3></a>
					</div>
				</div>
				{else}
				<div class="item">
					<a href="{$BASE_URL}pages/product/?id={$cmovie.movieid}">
						<img alt="{$cmovie.name} still" src="{$BASE_URL}{$cmovie.imagepath}" class="carousel-img">
					</a>
					<div class="carousel-caption">
					    <a class="carousel-movie-name" href="{$BASE_URL}pages/product/?id={$cmovie.movieid}"><h3>{$cmovie.name}</h3></a>
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

	<h1>Featured movies</h1>
	<hr class="home-page-separator">
	<div class="row" style="margin-bottom: 20px">
		{foreach $featuredMovies as $movie}
		<div class="col-lg-3 col-sm-6 text-center">
			<a href="{$BASE_URL}pages/product/?id={$movie.movieid}"><img alt="{$movie.name} cover" src="{$BASE_URL}{$movie.imagepath}" class="poster-thumbnail" width=206 height=300></a>
			<a href="{$BASE_URL}pages/product/?id={$movie.movieid}"><h3>{$movie.name}</h3></a>
		</div>
		{/foreach}
	</div>

	<h1>New releases</h1>
	<hr class="home-page-separator">
	<div class="row" style="margin-bottom: 30px">
		{foreach $newReleases as $movie}
		<div class="col-lg-3 col-sm-6 text-center">
			<a href="{$BASE_URL}pages/product/?id={$movie.movieid}"><img alt="{$movie.name} cover" src="{$BASE_URL}{$movie.imagepath}" class="poster-thumbnail" width=206 height=300></a>
			<a href="{$BASE_URL}pages/product/?id={$movie.movieid}"><h3>{$movie.name}</h3></a>
		</div>
		{/foreach}
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

{include file='common/footer.tpl'}