{include file='common/header.tpl'}

<div class="container">
	<div class="page-header" style="margin-bottom: 25px;"><h2 class="shopping-cart-header">Search results</h2></div>
	<div class="row">
		{if $searchResults|@count eq 0}
		<div class="text-center">No results found.</div>
		{/if}
		{for $i=$fromResult to $toResult}
		<div class="col-lg-2 col-md-4 col-sm-4 shop-movie">
			<a href="/~lbaw1531/final/pages/product/?id={$searchResults[$i].movieid}"><img alt="{$searchResults[$i].name} cover" src="{$BASE_URL}{$searchResults[$i].imagepath}" width=154 height=223></a>
			<a href="/~lbaw1531/final/pages/product/?id={$searchResults[$i].movieid}"><h4 class="shop-movie-title">{$searchResults[$i].name}</h4></a>
			<small>{$searchResults[$i].format}</small>
			<h5 class="shop-price">{$searchResults[$i].price}€</h5>
		</div>
		{/for}
	</div>

	{if $searchResults|@count gt 24}
	<div class="text-center">
		<ul class="pagination">
			{if $currentPage neq 1}
			<li><a href="{$BASE_URL}pages/search/?page=1">&laquo; First</a></li>
			<li><a href="{$BASE_URL}pages/search/?page={$previousPage}"><</a></li>
			{else}
			<li class="disabled"><a href="{$BASE_URL}pages/search/?page=1">&laquo; First</a></li>
			<li class="disabled"><a href="{$BASE_URL}pages/search/?page={$previousPage}"><</a></li>
			{/if}
			{for $i=$fromPage to $toPage}
			{if $i eq $currentPage}
			<li class="active"><a href="#">{$i}</a></li>
			{else}
			<li><a href="{$BASE_URL}pages/search/?page={$i}">{$i}</a></li>
			{/if}
			{/for}
			{if $currentPage neq $lastPage}
			<li><a href="{$BASE_URL}pages/search/?page={$nextPage}">></a></li>
			<li><a href="{$BASE_URL}pages/search/?page={$lastPage}">Last &raquo;</a></li>
			{else}
			<li class="disabled"><a href="{$BASE_URL}pages/search/?page={$nextPage}">></a></li>
			<li class="disabled"><a href="{$BASE_URL}pages/search/?page={$lastPage}">Last &raquo;</a></li>
			{/if}
		</ul>
	</div>
	{/if}
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

{include file='common/footer.tpl'}