{include file='common/header.tpl'}

<link href="{$BASE_URL}lib/flickity/css/flickity-docs.css" rel="stylesheet" media="screen">
<link href="{$BASE_URL}lib/krajee-star-rating/css/star-rating.min.css" rel="stylesheet">
<link href="{$BASE_URL}lib/krajee-star-rating/css/theme-krajee-fa.min.css" rel="stylesheet">
<link href="{$BASE_URL}css/movie-form.css" rel="stylesheet">

<div class="container">
	{if isset($ERROR_MESSAGES)}
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {$ERROR_MESSAGES}
    </div>
    {/if}
    {if isset($SUCCESS_MESSAGES)}
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
				<li><div id="changeEmail" class="collapse">
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
				</div></li>
				<li><a href="#changeCCard" data-toggle="collapse">Change or add credit card details</a></li>
				<li><div id="changeCCard" class="collapse">
					<form id="changeCC" role="form" action="{$BASE_URL}actions/users/edit-credit-card.php" method="POST" style="margin-top: 3px">
                        <div class="form-group">
                        	<label for="cardNumber" style="margin-left: 23px">CARD NUMBER</label>
                            <input 
                                type="text"
                                name="cardNumber"
                                id="cardNumber"
                                placeholder="Valid Card Number"
                                style="margin-top: -2px; margin-left: 13px;"
                                value="{$creditCard.creditcardnumber}"
                                data-toggle="tooltip"
                                data-placement="right"
                                required autofocus 
                            />
                        </div>                            
                        <div class="form-group" style="margin-top: -22px">
                        	<label for="cardExpiry" style="margin-left: 23px"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                            <input 
                                type="text" 
                                name="cardExpiry"
                                id="cardExpiry"
                                placeholder="MM / YY"
                                style="margin-top: -2px;"
                                value='{$creditCard.expirationdate|date_format:"%m/%y"}'
                                data-toggle="tooltip"
                                data-placement="right"
                                required 
                            />
                        </div>
                        <div class="form-group" style="margin-top: -22px">
                        	<label for="cardCVC" style="margin-left: 23px">CV CODE <a href="#help" data-toggle="modal" id="cv-help"><sup>?</sup></a></label>
                            <input 
                                type="text" 
                                name="cardCVC"
                                id="cardCVC"
                                placeholder="CVC"
                                style="margin-top: -2px; margin-left: 59px;"
                                value="{$creditCard.cvc}"
                                data-toggle="tooltip"
                                data-placement="right"
                                required
                            />
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: -15px; width: 250px; margin-bottom: 16px">Save</button>
                    </form>
				</div></li>
				<li><a href="#changeBilling" data-toggle="collapse">Change or add billing address</a></li>
				<li><div id="changeBilling" class="collapse">
					<form role="form" action="{$BASE_URL}actions/users/edit-billing-information.php" method="POST" style="margin-top: 3px">
                        <div class="form-group">
                            <input 
                                type="text"
                                name="fullName"
                                placeholder="Full Name"
                                value="{$billingInformation.fullname}"
                                style="width: 500px;"
                                required
                            />
                        </div>                            
                 
                        <div class="form-group">
                            <input 
                                type="text"
                                name="address"
                                placeholder="Address"
                                style="margin-top: -23px;"
                                value="{$billingInformation.address}"
                                required
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
                            <select id="country-billing" name="country" class="form-control">
                            	{if isset($billingInformation.country)}
	                            <option value="{$billingInformation.countryid}" selected="selected">{$billingInformation.country}</option>
	                            {else}
	                            <option value="" selected="selected" style="display: none">Country</option>
	                            {/if}
	                            {foreach $countries as $country}
	                            <option value="{$country.countryid}">{$country.name}</option>
	                            {/foreach}
	                        </select>
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: 5px; width: 250px; margin-bottom: 16px">Save</button>                       
                    </form>
				</div></li>
				<li><a href="#changeDelivery" data-toggle="collapse">Change or add delivery address</a></li>
				<li><div id="changeDelivery" class="collapse">
					<form role="form" action="{$BASE_URL}actions/users/edit-delivery-address.php" method="POST" style="margin-top: 3px">
                        <div class="form-group">
                            <input 
                                type="text"
                                name="fullName"
                                placeholder="Full Name"
                                value="{$deliveryAddress.fullname}"
                                style="width: 500px"
                                required
                            />
                        </div>                            
                 
                        <div class="form-group">
                            <input 
                                type="text"
                                name="address"
                                placeholder="Address"
                                style="margin-top: -23px;"
                                value="{$deliveryAddress.address}"
                                required
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
	                            <option value="" selected="selected" style="display: none">Country</option>
	                            {/if}
	                            {foreach $countries as $country}
	                            <option value="{$country.countryid}">{$country.name}</option>
	                            {/foreach}
	                        </select>
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: 5px; width: 250px; margin-bottom: 16px">Save</button>                       
                    </form>
				</div></li>
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
						<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a>.
                        <br>
					{/foreach}
				{elseif $order.movies|@count eq 2}
					{foreach $order.movies as $movie}
						{if $movie@index eq 0}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a> and
						{else}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a>.<br>
						{/if}
					{/foreach}
				{elseif $order.movies|@count eq 3}
					{foreach $order.movies as $movie}
						{if $movie@index eq 0}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a>,
						{elseif $movie@index eq 1}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a> and
						{else}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a>.<br>
						{/if}
					{/foreach}
				{elseif $order.movies|@count eq 4}
					{foreach $order.movies as $movie}
						{if $movie@iteration > 3}{break}{/if}
						{if $movie@index eq 0}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a>,
						{elseif $movie@index eq 1}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a>,
						{else}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a> and 1 other item.<br>
						{/if}
					{/foreach}
				{else}
					{foreach $order.movies as $movie}
						{if $movie@iteration > 3}{break}{/if}
						{if $movie@index eq 0}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a>,
						{elseif $movie@index eq 1}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a>,
						{else}
							<a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a> and {math equation="total-3" total=$order.movies|@count} other items.<br>
						{/if}
					{/foreach}
				{/if}
				<small>Order placed on {$order.dateofpurchase|date_format}</small><br>
                {if $order.status eq 'Not yet dispatched'}
                <span style="color: #EC971F">{$order.status}</span>
                {elseif $order.status eq 'Dispatched'}
                <span style="color: #449D44">{$order.status}</span>
                {else}
                <span style="color: #C9302C">{$order.status}</span>
                {/if}
			</div>
			{/foreach}

            {if $orders|@count neq 0}
			<a href="{$BASE_URL}pages/users/orders/">See detailed product orders<span class="glyphicon glyphicon-triangle-right"></span></a>
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
                    <a href="{$BASE_URL}pages/product/?id={$wishmovie.movieid}"><img alt="{$wishmovie.name} cover" class="carousel-image" src="{$BASE_URL}{$wishmovie.imagepath}" width=130 height=192></a>
                    <a href="{$BASE_URL}pages/product/?id={$wishmovie.movieid}"><h4 class="shop-movie-title">{$wishmovie.name}</h4></a>
                </div>
                {/foreach}
            </div>
            {/if}
        </div>
    </div>

    <div class="panel panel-default details-container">
        <div class="panel-body">
            <div class="page-header">
                <h4 style="margin-bottom: 2px;">Your reviews</h4>
            </div>

            {if $reviews|@count eq 0}
            You haven't made any reviews.<br><br>
            {/if}

            {foreach $reviews as $review}
            {if $review@iteration > 4}{break}{/if}
            <div class="review-container">
                {for $i=1 to $review.rating}
                <i class="fa fa-star"></i>
                {/for}
                {for $j=$i to 5}
                <i class="fa fa-star-o"></i>
                {/for}
                <b>&nbsp;{$review.title}</b>&nbsp;
                <a href="#editReview{$review.reviewid}" data-toggle="modal" data-id="{$review.rating}, {$review.title}, {$review.description}, {$review.reviewid}" title="Edit review" id="edit-review-button"><span class="glyphicon glyphicon-pencil edit-review"></span></a>
                <a href="{$BASE_URL}actions/product/delete-review.php?id={$review.reviewid}" title="Delete review"><span class="glyphicon glyphicon-remove remove-review"></span></a>
                <br>
                <small>For <a href="{$BASE_URL}pages/product/?id={$review.movieid}">{$review.moviename}</a> on {$review.date|date_format}</small>
                <p style="margin-top: 8px;">{$review.description}</p>
            </div>
            {/foreach}
            
            {if $reviews|@count gt 4}
            <a href="{$BASE_URL}pages/users/reviews/">See all your reviews<span class="glyphicon glyphicon-triangle-right"></span></a>
            {/if}

            {foreach $reviews as $review}
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
            {/foreach}
        </div>
    </div>

    <div class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Where to find the CV Code?</h4>
            </div>
            <div class="modal-body">
                <b>Visa®, Mastercard®, and Discover® cardholders:</b><br>
                Turn your card over and look at the signature box. You should see either the entire 16-digit credit card number or just the last four digits followed by a special 3-digit code. This 3-digit code is your CVV number / Card Security Code.
                <br><br>
                <b>American Express® cardholders:</b><br>
                Look for the 4-digit code printed on the front of your card just above and to the right of your main credit card number. This 4-digit code is your Card Identification Number (CID). The CID is the four-digit code printed just above the Account Number.<br><br>
                <div class="text-center"><img alt="Where to find the CV code in your card" src="{$BASE_URL}images/cvcode.jpg"></div>
            </div>
        </div>
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}lib/flickity/js/flickity-docs.min.js"></script>
<script src="{$BASE_URL}javascript/validate-email.js"></script>
<script src="{$BASE_URL}javascript/validate-credit-card.js"></script>
<script src="{$BASE_URL}lib/krajee-star-rating/js/star-rating.min.js"></script>

{include file='common/footer.tpl'}