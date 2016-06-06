{include file='common/header.tpl'}

<div class="container">
	<div class="page-header" style="margin-bottom: 25px;"><h2 class="shopping-cart-header"><a href="{$BASE_URL}pages/cart/">Shopping cart</a> / Checkout</h2></div>
    <div class="row">
        <form action="{$BASE_URL}actions/cart/checkout.php" method="get" id="checkout">
    	<div class="col-xs-12 col-md-4 col-md-offset-2">
    		<div class="panel panel-default credit-card-box">
	        	<div class="panel-heading display-table">
	        		<div class="row display-tr" >
	        			<h3 class="panel-title display-td" >Billing Information</h3>
	        			<div class="display-td" ><img  class="img-responsive pull-right"></div>
	        		</div>
	        	</div>
	        	<div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="fullName" style="margin-top: 8px">FULL NAME</label>
                                <input
                                    id="fullName"
                                    type="tel"
                                    class="form-control"
                                    name="fullName"
                                    value="{$billingInformation.fullname}"
                                    required
                                />
                            </div>                            
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="address">ADDRESS</label>
                                <input
                                    id="address"
                                    type="tel"
                                    class="form-control"
                                    name="address"
                                    value="{$billingInformation.address}"
                                    required
                                />
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="city"><span class="hidden-xs">CITY</span></label>
                                <input
                                    type="tel" 
                                    class="form-control" 
                                    name="city"
                                    id="city"
                                    value="{$billingInformation.city}"
                                    required 
                                />

                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="postcode">POSTCODE</label>
                                <input 
                                    type="tel" 
                                    class="form-control"
                                    name="postcode"
                                    id="postcode"
                                    value="{$billingInformation.postcode}"
                                    required
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-xs-12">
                    		<div class="form-group">
                                <label for="country">COUNTRY</label>
                                <select id="country" name="country" class="form-control">
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
                    	</div>
                    </div>
	        	  </div>
	        </div>
        </div>

        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="{$BASE_URL}images/cards.png" alt="Valid Credit Cards: Visa, MasterCard, Discover, American Express">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="cardNumber" style="margin-top: 8px">CARD NUMBER</label>
                                <div class="input-group card-number">
                                    <input 
                                        type="tel"
                                        class="form-control"
                                        name="cardNumber"
                                        id="cardNumber"
                                        placeholder="Valid Card Number"
                                        value="{$creditCard.creditcardnumber}"
                                        required
                                    />
                                    <span class="input-group-addon" data-toggle="tooltip" data-placement="right"><i class="fa fa-credit-card"></i></span>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                <input 
                                    type="tel" 
                                    class="form-control" 
                                    name="cardExpiry"
                                    id="cardExpiry"
                                    placeholder="MM / YY"
                                    value='{$creditCard.expirationdate|date_format:"%m/%y"}'
                                    data-toggle="tooltip"
                                    data-placement="bottom"
                                    required 
                                />
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cardCVC">CV CODE <a href="#help" data-toggle="modal" id="cv-help"><sup>?</sup></a></label>
                                <input 
                                    type="tel" 
                                    class="form-control"
                                    name="cardCVC"
                                    id="cardCVC"
                                    placeholder="CVC"
                                    value="{$creditCard.cvc}"
                                    data-toggle="tooltip"
                                    data-placement="bottom"
                                    required
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row" style="display:none;">
                        <div class="col-xs-12">
                            <p class="payment-errors"></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="margin: 0; margin-bottom: 12px">
            <h4 style="margin: 0;">Total <span class="pull-right">{$total|string_format:"%.2f"}€</span></h4>
            <hr style="margin: 0; margin-top: 12px; margin-bottom: 18px;">
            <div class="row"> 
            	<div class="col-xs-6"><a class="btn btn-danger btn-block" href="{$BASE_URL}pages/cart/">Cancel</a></div>
	            <div class="col-xs-6">
                    <button class="btn btn-success btn-block" type="submit">Confirm</button>
                    <input type="hidden" name="cost" value="{$total}"/>
	            </div>
           	</div>
        </div>
    </form>
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
                <div class="text-center"><img src="{$BASE_URL}images/cvcode.jpg" alt="Where to find CV codes"></div>
            </div>
        </div>
        </div>
    </div>

</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}javascript/validate-credit-card.js"></script>
<script src="{$BASE_URL}javascript/validate-checkout.js"></script>

{include file='common/footer.tpl'}