{include file='common/header.tpl'}

<link href="{$BASE_URL}lib/flickity/css/flickity-docs.css" rel="stylesheet" media="screen">

<div class="container">
	{if isset($ERROR_MESSAGES)}
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {$ERROR_MESSAGES}
    </div>
    {elseif isset($SUCCESS_MESSAGES)}
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {$SUCCESS_MESSAGES}
    </div>
    {/if}
	<h2 class="shopping-cart-header">Your account</h2>
	<div class="panel panel-default details-container">
		<div class="panel-body">
			<div class="page-header">
				<h4 style="margin-bottom: 2px;">Settings</h4>
			</div>

			<ul style="list-style-type:none; padding-left: 12px;">
				<li><a href="#changeEmail" data-toggle="collapse">Change Name, E-mail address or Password</a></li>
				<div id="changeEmail" class="collapse">
					<form id="changeSettings" role="form" action="{$BASE_URL}actions/users/edit-user-info.php" method="post" style="margin-top: 3px">
						<div class="form-group" style="display: inline">
                        	<input type="text" name="firstName" style="width: 140px;" placeholder="First name" value="{$name.firstname}">
                        </div>
                        <div class="form-group" style="display: inline">
                        	<input type="text" name="lastName" style="width: 140px;" placeholder="Last name" value="{$name.lastname}">
                        </div>
                    	<div class="form-group">
                        	<input type="text" name="email" placeholder="Email" style="margin-top: -12px" value="{$EMAIL}">
                        </div>
                        <div class="form-group">
                        	<input type="password" name="password" placeholder="Password" style="margin-top: -25px">
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: -15px; width: 250px; margin-bottom: 16px">Save</button>
                    </form>
				</div>
				<li><a href="#changeCC" data-toggle="collapse">Change or add credit card details</a></li>
				<div id="changeCC" class="collapse">
					<form id="changeCC" role="form" action="{$BASE_URL}actions/users/edit-credit-card.php" method="POST" style="margin-top: 3px">
                        <div class="form-group">
                        	<label for="cardNumber" style="margin-left: 23px">CARD NUMBER</label>
                            <input 
                                type="text"
                                name="cardNumber"
                                placeholder="Valid Card Number"
                                autocomplete="cc-number"
                                style="margin-top: -2px; margin-left: 13px;"
                                value="{$creditCard.creditcardnumber}"
                                required autofocus 
                            />
                        </div>                            
                        <div class="form-group" style="margin-top: -22px">
                        	<label for="cardExpiry" style="margin-left: 23px"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                            <input 
                                type="text" 
                                name="cardExpiry"
                                placeholder="MM / YY"
                                autocomplete="cc-exp"
                                style="margin-top: -2px;"
                                value='{$creditCard.expirationdate|date_format:"%m/%y"}'
                                required 
                            />
                        </div>
                        <div class="form-group" style="margin-top: -22px">
                        	<label for="cardCVC" style="margin-left: 23px">CV CODE</label>
                            <input 
                                type="text" 
                                name="cardCVC"
                                placeholder="CVC"
                                autocomplete="cc-csc"
                                style="margin-top: -2px; margin-left: 59px;"
                                value="{$creditCard.cvc}"
                                required
                            />
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: -15px; width: 250px; margin-bottom: 16px">Save</button>
                    </form>
				</div>
				<li><a href="#changeBilling" data-toggle="collapse">Change or add billing address</a></li>
				<div id="changeBilling" class="collapse">
					<form role="form" action="{$BASE_URL}actions/users/edit-billing-information.php" method="POST" style="margin-top: 3px">
                        <div class="form-group">
                            <input 
                                type="text"
                                name="fullName"
                                placeholder="Full Name"
                                value="{$billingInformation.fullname}"
                                style="width: 500px;"
                                required autofocus 
                            />
                        </div>                            
                 
                        <div class="form-group">
                            <input 
                                type="text"
                                name="address"
                                placeholder="Address"
                                style="margin-top: -23px;"
                                value="{$billingInformation.address}"
                                required autofocus 
                            />
                        </div>                            
                  
                        <div class="form-group" style="display: inline">
                            <input 
                                type="text"  
                                name="city"
                                placeholder="City"
                                style="width: 170px; margin-top: -23px;"
                                value="{$billingInformation.city}"
                                required 
                            />
                        </div>

                        <div class="form-group" style="display: inline">
                            <input 
                                type="text" 
                                name="postcode"
                                placeholder="Postcode"
                                style="margin-top: -23px;"
                                value="{$billingInformation.postcode}"
                                required
                            />
                        </div>

                		<div class="form-group" style="width: 250px; margin-left: 23px; margin-top: 10px">
                            <select id="country" name="country" class="form-control">
                            	{if isset($billingInformation.country)}
	                            <option value="{$billingInformation.countryid}" selected="selected">{$billingInformation.country}</option>
	                            {else}
	                            <option value="" selected="selected">Country</option>
	                            {/if}
	                            {foreach $countries as $country}
	                            <option value="{$country.countryid}">{$country.name}</option>
	                            {/foreach}
	                        </select>
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: 5px; width: 250px; margin-bottom: 16px">Save</button>                       
                    </form>
				</div>
				<li><a href="#changeDelivery" data-toggle="collapse">Change or add delivery address</a></li>
				<div id="changeDelivery" class="collapse">
					<form role="form" action="{$BASE_URL}actions/users/edit-delivery-address.php" method="POST" style="margin-top: 3px">
                        <div class="form-group">
                            <input 
                                type="text"
                                name="fullName"
                                placeholder="Full Name"
                                value="{$deliveryAddress.fullname}"
                                style="width: 500px"
                                required autofocus 
                            />
                        </div>                            
                 
                        <div class="form-group">
                            <input 
                                type="text"
                                name="address"
                                placeholder="Address"
                                style="margin-top: -23px;"
                                value="{$deliveryAddress.address}"
                                required autofocus 
                            />
                        </div>                            
                  
                        <div class="form-group" style="display: inline">
                            <input 
                                type="text"  
                                name="city"
                                placeholder="City"
                                style="width: 170px; margin-top: -23px;"
                                value="{$deliveryAddress.city}"
                                required 
                            />
                        </div>

                        <div class="form-group" style="display: inline">
                            <input 
                                type="text" 
                                name="postcode"
                                placeholder="Postcode"
                                style="margin-top: -23px;"
                                value="{$deliveryAddress.postcode}"
                                required
                            />
                        </div>

                		<div class="form-group" style="width: 250px; margin-left: 23px; margin-top: 10px">
                            <select id="country" name="country" class="form-control">
	                            {if isset($deliveryAddress.country)}
	                            <option value="{$deliveryAddress.countryid}" selected="selected">{$deliveryAddress.country}</option>
	                            {else}
	                            <option value="" selected="selected">Country</option>
	                            {/if}
	                            {foreach $countries as $country}
	                            <option value="{$country.countryid}">{$country.name}</option>
	                            {/foreach}
	                        </select>
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: 5px; width: 250px; margin-bottom: 16px">Save</button>                       
                    </form>
				</div>
			</ul>
		</div>
	</div>
	<div class="panel panel-default details-container">
		<div class="panel-body">
			<div class="page-header">
				<h4 style="margin-bottom: 2px;">Orders</h4>
			</div>

			{if $orders|@count eq 0}
			You haven't ordered anything yet.<br>
			{/if}

			{foreach $orders as $order}
			{if $order@iteration > 4}{break}{/if}
			<div class="order-small">
				{if $order.movies|@count eq 1}
					{foreach $order.movies as $movie}
						<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a>.<br>
					{/foreach}
				{elseif $order.movies|@count eq 2}
					{foreach $order.movies as $movie}
						{if $movie@index eq 0}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a> and
						{else}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a>.<br>
						{/if}
					{/foreach}
				{elseif $order.movies|@count eq 3}
					{foreach $order.movies as $movie}
						{if $movie@index eq 0}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a>,
						{elseif $movie@index eq 1}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a> and
						{else}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a>.<br>
						{/if}
					{/foreach}
				{elseif $order.movies|@count eq 4}
					{foreach $order.movies as $movie}
						{if $movie@iteration > 3}{break}{/if}
						{if $movie@index eq 0}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a>,
						{elseif $movie@index eq 1}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a>,
						{else}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a> and 1 other item.<br>
						{/if}
					{/foreach}
				{else}
					{foreach $order.movies as $movie}
						{if $movie@iteration > 3}{break}{/if}
						{if $movie@index eq 0}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a>,
						{elseif $movie@index eq 1}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a>,
						{else}
							<a href="{$BASE_URL}pages/product/product.php?id={$movie.movieid}">{$movie.name}</a> and {math equation="total-3" total=$order.movies|@count} other items.<br>
						{/if}
					{/foreach}
				{/if}
				<small>Order placed on {$order.dateofpurchase|date_format}</small>
			</div>
			{/foreach}

            {if $orders|@count neq 0}
			<a href="{$BASE_URL}pages/users/all-orders.php">See detailed product orders<span class="glyphicon glyphicon-triangle-right"></span></a>
            {/if}
		</div>
	</div>

    <div class="panel panel-default details-container">
        <div class="panel-body">
            <div class="page-header">
                <h4 style="margin-bottom: 2px;">Wishlist</h4>
            </div>
            {if $wishlist|@count eq 0}
            You have no items on your wishlist.
            {else}
            <div class="carousel js-flickity" style="margin-bottom: 0" data-flickity-options='{ "cellAlign": "left", "contain": true, "freeScroll": true }'>
                {foreach $wishlist as $wishmovie}
                <div class="text-center" style="width: 150px">
                    <a href="{$BASE_URL}pages/product/product.php?id={$wishmovie.movieid}"><img class="carousel-image" src="{$BASE_URL}{$wishmovie.imagepath}" width=130 height=192></img></a>
                    <a href="{$BASE_URL}pages/product/product.php?id={$wishmovie.movieid}"><h4 class="shop-movie-title">{$wishmovie.name}</h4></a>
                </div>
                {/foreach}
            </div>
            {/if}
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}lib/flickity/js/flickity-docs.min.js"></script>
<script src="{$BASE_URL}javascript/validate-email.js"></script>
<script src="{$BASE_URL}javascript/validate-credit-card.js"></script>

{include file='common/footer.tpl'}