<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 17:01:04
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/administration/edit-user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4747961965750d6635398a6-83697240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db34dd3cd8b1ef78066acfabeb658a1061691585' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/administration/edit-user.tpl',
      1 => 1465138867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4747961965750d6635398a6-83697240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5750d6636c86c8_11995297',
  'variables' => 
  array (
    'SUCCESS_MESSAGES' => 0,
    'BASE_URL' => 0,
    'userEmail' => 0,
    'name' => 0,
    'creditCard' => 0,
    'billingInformation' => 0,
    'countries' => 0,
    'country' => 0,
    'deliveryAddress' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5750d6636c86c8_11995297')) {function content_5750d6636c86c8_11995297($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value;?>

    </div>
    <?php }?>
	<div class="page-header" style="margin-bottom: 25px;"><h2 class="shopping-cart-header"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/administration/">Manage</a> / Edit user settings</h2></div>
	<div class="panel panel-default">
        <div class="panel-body">
            <div class="page-header">
                <h4 style="margin-bottom: 2px;">Settings</h4>
            </div>
            <ul style="list-style-type:none; padding-left: 12px;">
        		<li><a href="#changeEmail" data-toggle="collapse">Change Name, E-mail address or Password</a></li>
        		<li><div id="changeEmail" class="collapse">
        			<form id="changeSettings" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/edit-user-info.php" method="post" style="margin-top: 3px">
        				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
" name="userEmail">
        				<div class="form-group" style="display: inline">
                        	<input type="text" name="firstName" style="width: 140px;" placeholder="First name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value['firstname'];?>
">
                        </div>
                        <div class="form-group" style="display: inline">
                        	<input type="text" name="lastName" style="width: 140px;" placeholder="Last name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value['lastname'];?>
">
                        </div>
                    	<div class="form-group">
                        	<input type="text" name="email" placeholder="Email" style="margin-top: -12px" value="<?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
">
                        </div>
                        <div class="form-group">
                        	<input type="password" name="password" placeholder="Password" style="margin-top: -25px">
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: -15px; width: 250px; margin-bottom: 16px">Save</button>
                    </form>
        		</div></li>
        		<li><a href="#changeCCard" data-toggle="collapse">Change or add credit card details</a></li>
        		<li><div id="changeCCard" class="collapse">
        			<form id="changeCC" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/edit-credit-card.php" method="POST" style="margin-top: 3px">
        				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
" name="userEmail">
                        <div class="form-group">
                        	<label for="cardNumber" style="margin-left: 23px">CARD NUMBER</label>
                            <input 
                                id="cardNumber"
                                type="text"
                                name="cardNumber"
                                placeholder="Valid Card Number"
                                style="margin-top: -2px; margin-left: 13px;"
                                value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value['creditcardnumber'];?>
"
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
                                value='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['creditCard']->value['expirationdate'],"%m/%y");?>
'
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
                                value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value['cvc'];?>
"
                                required
                            />
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: -15px; width: 250px; margin-bottom: 16px">Save</button>
                    </form>
        		</div></li>
        		<li><a href="#changeBilling" data-toggle="collapse">Change or add billing address</a></li>
        		<li><div id="changeBilling" class="collapse">
        			<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/edit-billing-information.php" method="POST" style="margin-top: 3px">
        				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
" name="userEmail">
                        <div class="form-group">
                            <input 
                                type="text"
                                name="fullName"
                                placeholder="Full Name"
                                value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['fullname'];?>
"
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
                                value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['address'];?>
"
                                required
                            />
                        </div>                            
                  
                        <div class="form-group" style="display: inline">
                            <input 
                                type="text"  
                                name="city"
                                placeholder="City"
                                style="width: 170px; margin-top: -23px;"
                                value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['city'];?>
"
                                required 
                            />
                        </div>

                        <div class="form-group" style="display: inline">
                            <input 
                                type="text" 
                                name="postcode"
                                placeholder="Postcode"
                                style="margin-top: -23px;"
                                value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['postcode'];?>
"
                                required
                            />
                        </div>

                		<div class="form-group" style="width: 250px; margin-left: 23px; margin-top: 10px">
                            <select id="country-billing" name="country" class="form-control">
                            	<?php if (isset($_smarty_tpl->tpl_vars['billingInformation']->value['country'])) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['countryid'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['billingInformation']->value['country'];?>
</option>
                                <?php } else { ?>
                                <option value="" selected="selected">Country</option>
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
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: 5px; width: 250px; margin-bottom: 16px">Save</button>                       
                    </form>
        		</div></li>
        		<li><a href="#changeDelivery" data-toggle="collapse">Change or add delivery address</a></li>
        		<li><div id="changeDelivery" class="collapse">
        			<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/edit-delivery-address.php" method="POST" style="margin-top: 3px">
        				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
" name="userEmail">
                        <div class="form-group">
                            <input 
                                type="text"
                                name="fullName"
                                placeholder="Full Name"
                                value="<?php echo $_smarty_tpl->tpl_vars['deliveryAddress']->value['fullname'];?>
"
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
                                value="<?php echo $_smarty_tpl->tpl_vars['deliveryAddress']->value['address'];?>
"
                                required
                            />
                        </div>                            
                  
                        <div class="form-group" style="display: inline">
                            <input 
                                type="text"  
                                name="city"
                                placeholder="City"
                                style="width: 170px; margin-top: -23px;"
                                value="<?php echo $_smarty_tpl->tpl_vars['deliveryAddress']->value['city'];?>
"
                                required 
                            />
                        </div>

                        <div class="form-group" style="display: inline">
                            <input 
                                type="text" 
                                name="postcode"
                                placeholder="Postcode"
                                style="margin-top: -23px;"
                                value="<?php echo $_smarty_tpl->tpl_vars['deliveryAddress']->value['postcode'];?>
"
                                required
                            />
                        </div>

                		<div class="form-group" style="width: 250px; margin-left: 23px; margin-top: 10px">
                            <select id="country-delivery" name="country" class="form-control">
                                <?php if (isset($_smarty_tpl->tpl_vars['deliveryAddress']->value['country'])) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['deliveryAddress']->value['countryid'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['deliveryAddress']->value['country'];?>
</option>
                                <?php } else { ?>
                                <option value="" selected="selected">Country</option>
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
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: 5px; width: 250px; margin-bottom: 16px">Save</button>                       
                    </form>
        		</div></li>
        	</ul>
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/validate-email.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/validate-credit-card.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
