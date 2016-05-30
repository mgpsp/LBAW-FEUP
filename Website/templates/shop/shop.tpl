{include file='common/header.tpl'}

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

<div class="container">
	<div class="page-header" style="margin-bottom: 25px;"><h2 class="shopping-cart-header">Shop</h2></div>
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-7 col-lg-2">
			<ul class="list-group">
				<li class="list-group-item"><b>Genre</b>
					{foreach $genres as $genre}
					<div class="checkbox"><label ><input class="genre" type="checkbox" value="{$genre.genreid}">{$genre.name}</label></div>
					{/foreach}
				</li>
				<li class="list-group-item"><b>Format</b>
					{foreach $formats as $format}
					<div class="checkbox"><label><input class="format" type="checkbox" value="{$format.formatid}">{$format.name}</label></div>
					{/foreach}
				</li>
				<li class="list-group-item"><b>Release Date</b>
					<div class="checkbox"><label><input class="date" type="checkbox" value="10">2010 and later</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="0009">2000 - 2009</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="9099">1990 - 1999</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="8089">1980 - 1989</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="7079">1970 - 1979</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="6069">1960 - 1969</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="5059">1950 - 1959</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="49">1949 and earlier</label></div>
				</li>
			</ul>
		</div>

		<div id="movies">
		</div>
	</div>
	<div class="text-center">
		<ul class="pagination">
		</ul>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}javascript/shop-pagination.js"></script>
<script src="{$BASE_URL}javascript/filter-movies.js"></script>

{include file='common/footer.tpl'}