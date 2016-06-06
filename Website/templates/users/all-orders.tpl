{include file='common/header.tpl'}

<div class="container">
	{if isset($SUCCESS_MESSAGES)}
	<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {$SUCCESS_MESSAGES}
	</div>
    {/if}
	<h2 class="shopping-cart-header"><a href="{$BASE_URL}pages/users/my-account/">My account</a> / Your orders</h2>

	{if $orders|@count eq 0}
	<div class="text-center">You haven't ordered anything yet.</div>
	{/if}

	{foreach $orders as $order}
	<div class="panel panel-default details-container">
		<div class="panel-heading">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-4 col-xs-12" style="padding-top: 7px;">
					<h3 style="margin: 0px;">Order #{$order.purchaseid}</h3>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-8" style="margin-left: 65px">
					<span class="pull-right"><small>STATUS</small><br>
					{if $order.status eq 'Not yet dispatched'}
					<span style="color: #EC971F">{$order.status}</span>
					{elseif $order.status eq 'Dispatched'}
					<span style="color: #449D44">{$order.status}</span>
					{else}
					<span style="color: #C9302C">{$order.status}</span>
					{/if}</span>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-8" style="margin-left: -65px">
					<span class="pull-right"><small>ORDER PLACED</small><br>
					{$order.dateofpurchase|date_format}</span>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2 col-xs-4">
					<small>TOTAL</small><br>
					{$order.price}€
				</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="media">
				{foreach $order.movies as $movie}
				<div class="row" style="margin-top: 25px; margin-left: 0px;">
					<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<img src="{$BASE_URL}{$movie.imagepath}" width=75 height=111 alt="{$movie.name} cover">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<h4 class="media-heading"><a href="{$BASE_URL}pages/product/?id={$movie.movieid}"><small>{$movie.quantity}x</small> {$movie.name}</a></h4>
						<h5 class="media-heading">{foreach $movie.directors as $director}{if $director@index neq 0},{/if} {$director.name}{/foreach}</h5>
			            <h5 class="media-heading">{$movie.format}</h5>
			            <h5 class="shop-price">{$movie.price}€</h5>
					</div>
				</div>
				{/foreach}
			</div>
		</div>
	</div>
	{/foreach}

	<div class="text-center">
		<ul class="pagination">
			{if $currentPage neq 1}
			<li><a href="{$BASE_URL}pages/users/orders/?page=1">&laquo; First</a></li>
			<li><a href="{$BASE_URL}pages/users/orders/?page={$previousPage}">&lt;</a></li>
			{else}
			<li class="disabled"><a href="{$BASE_URL}pages/users/orders/?page=1">&laquo; First</a></li>
			<li class="disabled"><a href="{$BASE_URL}pages/users/orders/?page={$previousPage}">&lt;</a></li>
			{/if}
			{for $i=$fromPage to $toPage}
			{if $i eq $currentPage}
			<li class="active"><a href="#">{$i}</a></li>
			{else}
			<li><a href="{$BASE_URL}pages/users/orders/?page={$i}">{$i}</a></li>
			{/if}
			{/for}
			{if $currentPage neq $lastPage}
			<li><a href="{$BASE_URL}pages/users/orders/?page={$nextPage}">&gt;</a></li>
			<li><a href="{$BASE_URL}pages/users/orders/?page={$lastPage}">Last &raquo;</a></li>
			{else}
			<li class="disabled"><a href="{$BASE_URL}pages/users/orders/?page={$nextPage}">&gt;</a></li>
			<li class="disabled"><a href="{$BASE_URL}pages/users/orders/?page={$lastPage}">Last &raquo;</a></li>
			{/if}
		</ul>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

{include file='common/footer.tpl'}