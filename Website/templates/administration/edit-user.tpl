{include file='common/header.tpl'}

<div class="container">
	{if isset($SUCCESS_MESSAGES)}
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {$SUCCESS_MESSAGES}
    </div>
    {/if}
	<div class="page-header" style="margin-bottom: 25px;"><h2 class="shopping-cart-header"><a href="{$BASE_URL}pages/administration/">Manage</a> / Edit user settings</h2></div>
	<div class="panel panel-default">
        <div class="panel-body">
            <div class="page-header">
                <h4 style="margin-bottom: 2px;">Settings</h4>
            </div>
            <ul style="list-style-type:none; padding-left: 12px;">
        		<li><a href="#changeEmail" data-toggle="collapse">Change Name, E-mail address or Password</a></li>
        		<li><div id="changeEmail" class="collapse">
        			<form id="changeSettings" role="form" action="{$BASE_URL}actions/users/edit-user-info.php" method="post" style="margin-top: 3px">
        				<input type="hidden" value="{$userEmail}" name="userEmail">
        				<div class="form-group" style="display: inline">
                        	<input type="text" name="firstName" style="width: 140px;" placeholder="First name" value="{$name.firstname}">
                        </div>
                        <div class="form-group" style="display: inline">
                        	<input type="text" name="lastName" style="width: 140px;" placeholder="Last name" value="{$name.lastname}">
                        </div>
                    	<div class="form-group">
                        	<input type="text" name="email" placeholder="Email" style="margin-top: -12px" value="{$userEmail}">
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
        				<input type="hidden" value="{$userEmail}" name="userEmail">
                        <div class="form-group">
                        	<label for="cardNumber" style="margin-left: 23px">CARD NUMBER</label>
                            <input 
                                id="cardNumber"
                                type="text"
                                name="cardNumber"
                                placeholder="Valid Card Number"
                                style="margin-top: -2px; margin-left: 13px;"
                                value="{$creditCard.creditcardnumber}"
                                required
                            />
                        </div>                            
                        <div class="form-group" style="margin-top: -22px">
                        	<label for="cardExpiry" style="margin-left: 23px"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                            <input
                                id="cardExpiry"
                                type="text" 
                                name="cardExpiry"
                                placeholder="MM / YY"
                                style="margin-top: -2px;"
                                value='{$creditCard.expirationdate|date_format:"%m/%y"}'
                                required 
                            />
                        </div>
                        <div class="form-group" style="margin-top: -22px">
                        	<label for="cardCVC" style="margin-left: 23px">CV CODE</label>
                            <input
                                id="cardCVC"
                                type="text" 
                                name="cardCVC"
                                placeholder="CVC"
                                style="margin-top: -2px; margin-left: 59px;"
                                value="{$creditCard.cvc}"
                                required
                            />
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: -15px; width: 250px; margin-bottom: 16px">Save</button>
                    </form>
        		</div></li>
        		<li><a href="#changeBilling" data-toggle="collapse">Change or add billing address</a></li>
        		<li><div id="changeBilling" class="collapse">
        			<form role="form" action="{$BASE_URL}actions/users/edit-billing-information.php" method="POST" style="margin-top: 3px">
        				<input type="hidden" value="{$userEmail}" name="userEmail">
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
                                <option value="" selected="selected">Country</option>
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
        				<input type="hidden" value="{$userEmail}" name="userEmail">
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
                            <select id="country-delivery" name="country" class="form-control">
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
        		</div></li>
        	</ul>
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}javascript/validate-email.js"></script>
<script src="{$BASE_URL}javascript/validate-credit-card.js"></script>

{include file='common/footer.tpl'}