<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" href="{$BASE_URL}images/favicon.png" type="image/png" />
		<title>{$pageTitle}</title>

		<link href="{$BASE_URL}lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="{$BASE_URL}lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="{$BASE_URL}css/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			
			<a href="{$BASE_URL}"><img alt="moviebox logo" class="navbar-brand" src="{$BASE_URL}images/logomoviebox.png"></a>

			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-left">
					{if $pageTitle eq 'Shop'}
					<li class="active"><a href="{$BASE_URL}pages/shop/">Shop</a></li>
					{else}
					<li><a href="{$BASE_URL}pages/shop/">Shop</a></li>
					{/if}
					{if $EMAIL}
						{if $pageTitle eq 'My account'}
						<li class="active"><a href="{$BASE_URL}pages/users/my-account/">My account</a></li>
						{else}
						<li><a href="{$BASE_URL}pages/users/my-account/">My account</a></li>
						{/if}
					{elseif $ADMIN}
						{if $pageTitle eq 'Manage website'}
						<li class="active"><a href="{$BASE_URL}pages/administration/">Manage</a></li>
						{else}
						<li><a href="{$BASE_URL}pages/administration/">Manage</a></li>
						{/if}
					{/if}
				</ul>

				<form class="navbar-form navbar-right" role="search" style="min-width: 300px" method="post" action="{$BASE_URL}actions/search/search.php">
					<div class="input-group">
						<input name="searchText" type="search" class="form-control" placeholder="Search" style="width: 230px" autocomplete="off"/>
						<span class="input-group-btn pull-left">
							<button type="submit" class="btn btn-default">
	                        	<span class="glyphicon glyphicon-search"></span>
	                        </button>
	                    </span>
	                    <div class="fade in" id="search-results">
					  	
				 	 	</div>
				  	</div>
				  	
				</form>

			    <ul class="nav navbar-nav navbar-right">
			    	{if $EMAIL || $ADMIN}
					<li><a href="{$BASE_URL}actions/users/logout.php">Log out <span class="glyphicon glyphicon-log-out"></span></a></li>
					{else}
					{if $pageTitle eq 'Sign in'}
					<li class="active"><a href="{$BASE_URL}pages/sign/">Log in <span class="glyphicon glyphicon-log-in"></span></a></li>
					{else}
					<li><a href="{$BASE_URL}pages/sign/">Log in <span class="glyphicon glyphicon-log-in"></span></a></li>
					{/if}
					{/if}
					{if $EMAIL}
					{if $pageTitle eq 'Cart'}
					<li class="active"><a href="{$BASE_URL}pages/cart/">{if $cartItems gt 1 }{$cartItems} items{else}{$cartItems} item{/if} - {$cartCost|string_format:"%.2f"}€ <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					{else}
					<li><a href="{$BASE_URL}pages/cart/">{if $cartItems gt 1 }{$cartItems} items{else}{$cartItems} item{/if} - {$cartCost|string_format:"%.2f"}€ <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					{/if}
					{/if}
				</ul>
			</div>
		</div>
	</div>