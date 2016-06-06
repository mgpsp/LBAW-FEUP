<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 17:10:20
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/checkout/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5418983085751bce44fe9c4-76124829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50e111861a21e1f3a2c296cc4ccd03cac0a696a3' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/checkout/checkout.tpl',
      1 => 1465139424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5418983085751bce44fe9c4-76124829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5751bce4645460_08413798',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'billingInformation' => 0,
    'countries' => 0,
    'country' => 0,
    'creditCard' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751bce4645460_08413798')) {function content_5751bce4645460_08413798($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="page-header" style="margin-bottom: 25px;"><h2 class="shopping-cart-header"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/">Shopping cart</a> / Checkout</h2></div>
    <div class="row">
        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/checkout.php" method="get" id="checkout">
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
                                    value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['fullname'];?>
"
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
                                    value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['address'];?>
"
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
                                    value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['city'];?>
"
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
                                    value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['postcode'];?>
"
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
		                            <?php if (isset($_smarty_tpl->tpl_vars['billingInformation']->value['country'])) {?>
		                            <option value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['countryid'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['country'];?>
</option>
		                            <?php } else { ?>
		                            <option value="" selected="selected" style="display: none">Country</option>
		                            <?php }?>
		                            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
		                            <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['countryid'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
		                            <?php } ?>
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
                            <img class="img-responsive pull-right" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/cards.png" alt="Valid Credit Cards: Visa, MasterCard, Discover, American Express">
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
                                        value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value['creditcardnumber'];?>
"
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
                                    value='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['creditCard']->value['expirationdate'],"%m/%y");?>
'
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
                                    value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value['cvc'];?>
"
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
            <h4 style="margin: 0;">Total <span class="pull-right"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total']->value);?>
€</span></h4>
            <hr style="margin: 0; margin-top: 12px; margin-bottom: 18px;">
            <div class="row"> 
            	<div class="col-xs-6"><a class="btn btn-danger btn-block" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/">Cancel</a></div>
	            <div class="col-xs-6">
                    <button class="btn btn-success btn-block" type="submit">Confirm</button>
                    <input type="hidden" name="cost" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
"/>
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
                <div class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/cvcode.jpg" alt="Where to find CV codes"></div>
            </div>
        </div>
        </div>
    </div>

</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/validate-credit-card.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/validate-checkout.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
