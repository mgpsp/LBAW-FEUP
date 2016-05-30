<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" href="{$BASE_URL}images/favicon.png" type="image/png" />
		<title>moviebox</title>

		<link href="{$BASE_URL}lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="{$BASE_URL}lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="{$BASE_URL}css/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			
			<a href="{$BASE_URL}index.php"><img class="navbar-brand" src="{$BASE_URL}images/logomoviebox.png"></img></a>

			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-left">
					{if not $ADMIN}
					<li><a href="{$BASE_URL}pages/shop/shop.php">Shop</a></li>
					{if $EMAIL}
					<li><a href="{$BASE_URL}pages/users/account.php">My account</a></li>
					{/if}
					{/if}
				</ul>

				{if not $ADMIN}
				<form class="navbar-form navbar-right" role="search">
					<div class="input-group">
						<input type="search" class="form-control" placeholder="Search" />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default">
	                        	<span class="glyphicon glyphicon-search"></span>
	                        </button>
	                    </span>
				  	</div>
				</form>
				{/if}

			    <ul class="nav navbar-nav navbar-right">
			    	{if $EMAIL || $ADMIN}
					<li><a href="{$BASE_URL}actions/users/logout.php">Log out <span class="glyphicon glyphicon-log-out"></span></a></li>
					{else}
					<li><a href="{$BASE_URL}pages/users/sign.php">Log in <span class="glyphicon glyphicon-log-in"></span></a></li>
					{/if}
					{if $EMAIL}
					<li><a href="#">0 items - 0.00€ <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					{/if}
				</ul>
			</div>
		</div>
	</div>