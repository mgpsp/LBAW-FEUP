<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 18:16:36
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/users/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2414574855739d902a71161-11992706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd33f568abcfc05af60f5f9ac9bebf361bd5d0770' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/users/account.tpl',
      1 => 1465229795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2414574855739d902a71161-11992706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5739d902b1dfc4_94571035',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
    'SUCCESS_MESSAGES' => 0,
    'name' => 0,
    'EMAIL' => 0,
    'creditCard' => 0,
    'billingInformation' => 0,
    'countries' => 0,
    'country' => 0,
    'deliveryAddress' => 0,
    'orders' => 0,
    'order' => 0,
    'movie' => 0,
    'wishlist' => 0,
    'wishmovie' => 0,
    'reviews' => 0,
    'review' => 0,
    'i' => 0,
    'movieinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5739d902b1dfc4_94571035')) {function content_5739d902b1dfc4_94571035($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/flickity/css/flickity-docs.css" rel="stylesheet" media="screen">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/krajee-star-rating/css/star-rating.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/krajee-star-rating/css/theme-krajee-fa.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/movie-form.css" rel="stylesheet">

<div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>

    </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value;?>

    </div>
    <?php }?>
	<h2 class="shopping-cart-header">Your account</h2>
	<div class="panel panel-default details-container">
		<div class="panel-body">
			<div class="page-header">
				<h4 style="margin-bottom: 2px;">Settings</h4>
			</div>

			<ul style="list-style-type:none; padding-left: 12px;">
				<li><a href="#changeEmail" data-toggle="collapse">Change Name, E-mail address or Password</a></li>
				<li><div id="changeEmail" class="collapse">
					<form id="changeSettings" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/edit-user-info.php" method="post" style="margin-top: 3px">
						<div class="form-group" style="display: inline">
                        	<input type="text" name="firstName" style="width: 140px;" placeholder="First name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value['firstname'];?>
">
                        </div>
                        <div class="form-group" style="display: inline">
                        	<input type="text" name="lastName" style="width: 140px;" placeholder="Last name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value['lastname'];?>
">
                        </div>
                    	<div class="form-group">
                        	<input type="text" name="email" placeholder="Email" style="margin-top: -12px" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
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
                        <div class="form-group">
                        	<label for="cardNumber" style="margin-left: 23px">CARD NUMBER</label>
                            <input 
                                type="text"
                                name="cardNumber"
                                id="cardNumber"
                                placeholder="Valid Card Number"
                                style="margin-top: -2px; margin-left: 13px;"
                                value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value['creditcardnumber'];?>
"
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
                                value='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['creditCard']->value['expirationdate'],"%m/%y");?>
'
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
                                value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value['cvc'];?>
"
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
					<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/edit-billing-information.php" method="POST" style="margin-top: 3px">
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
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: 5px; width: 250px; margin-bottom: 16px">Save</button>                       
                    </form>
				</div></li>
				<li><a href="#changeDelivery" data-toggle="collapse">Change or add delivery address</a></li>
				<li><div id="changeDelivery" class="collapse">
					<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/edit-delivery-address.php" method="POST" style="margin-top: 3px">
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
                            <select id="country" name="country" class="form-control">
	                            <?php if (isset($_smarty_tpl->tpl_vars['deliveryAddress']->value['country'])) {?>
	                            <option value="<?php echo $_smarty_tpl->tpl_vars['deliveryAddress']->value['countryid'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['deliveryAddress']->value['country'];?>
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

			<?php if (count($_smarty_tpl->tpl_vars['orders']->value)==0) {?>
			You haven't ordered anything yet.<br>
			<?php }?>

			<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['order']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['order']->iteration++;
?>
			<?php if ($_smarty_tpl->tpl_vars['order']->iteration>4) {?><?php break 1?><?php }?>
			<div class="order-small">
				<?php if (count($_smarty_tpl->tpl_vars['order']->value['movies'])==1) {?>
					<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['movies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['movie']->iteration=0;
 $_smarty_tpl->tpl_vars['movie']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['movie']->iteration++;
 $_smarty_tpl->tpl_vars['movie']->index++;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>.
                        <br>
					<?php } ?>
				<?php } elseif (count($_smarty_tpl->tpl_vars['order']->value['movies'])==2) {?>
					<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['movies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['movie']->iteration=0;
 $_smarty_tpl->tpl_vars['movie']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['movie']->iteration++;
 $_smarty_tpl->tpl_vars['movie']->index++;
?>
						<?php if ($_smarty_tpl->tpl_vars['movie']->index==0) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a> and
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>.<br>
						<?php }?>
					<?php } ?>
				<?php } elseif (count($_smarty_tpl->tpl_vars['order']->value['movies'])==3) {?>
					<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['movies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['movie']->iteration=0;
 $_smarty_tpl->tpl_vars['movie']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['movie']->iteration++;
 $_smarty_tpl->tpl_vars['movie']->index++;
?>
						<?php if ($_smarty_tpl->tpl_vars['movie']->index==0) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } elseif ($_smarty_tpl->tpl_vars['movie']->index==1) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a> and
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>.<br>
						<?php }?>
					<?php } ?>
				<?php } elseif (count($_smarty_tpl->tpl_vars['order']->value['movies'])==4) {?>
					<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['movies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['movie']->iteration=0;
 $_smarty_tpl->tpl_vars['movie']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['movie']->iteration++;
 $_smarty_tpl->tpl_vars['movie']->index++;
?>
						<?php if ($_smarty_tpl->tpl_vars['movie']->iteration>3) {?><?php break 1?><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['movie']->index==0) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } elseif ($_smarty_tpl->tpl_vars['movie']->index==1) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a> and 1 other item.<br>
						<?php }?>
					<?php } ?>
				<?php } else { ?>
					<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['movies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['movie']->iteration=0;
 $_smarty_tpl->tpl_vars['movie']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['movie']->iteration++;
 $_smarty_tpl->tpl_vars['movie']->index++;
?>
						<?php if ($_smarty_tpl->tpl_vars['movie']->iteration>3) {?><?php break 1?><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['movie']->index==0) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } elseif ($_smarty_tpl->tpl_vars['movie']->index==1) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a> and <?php echo smarty_function_math(array('equation'=>"total-3",'total'=>count($_smarty_tpl->tpl_vars['order']->value['movies'])),$_smarty_tpl);?>
 other items.<br>
						<?php }?>
					<?php } ?>
				<?php }?>
				<small>Order placed on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['dateofpurchase']);?>
</small><br>
                <?php if ($_smarty_tpl->tpl_vars['order']->value['status']=='Not yet dispatched') {?>
                <span style="color: #EC971F"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['order']->value['status']=='Dispatched') {?>
                <span style="color: #449D44"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
                <?php } else { ?>
                <span style="color: #C9302C"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
                <?php }?>
			</div>
			<?php } ?>

            <?php if (count($_smarty_tpl->tpl_vars['orders']->value)!=0) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/orders/">See detailed product orders<span class="glyphicon glyphicon-triangle-right"></span></a>
            <?php }?>
		</div>
	</div>

    <div class="panel panel-default details-container">
        <div class="panel-body">
            <div class="page-header">
                <h4 style="margin-bottom: 2px;">Wishlist</h4>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['wishlist']->value)==0) {?>
            You have no items on your wishlist.
            <?php } else { ?>
            <div class="carousel js-flickity" style="margin-bottom: 0" data-flickity-options='{ "cellAlign": "left", "contain": true, "freeScroll": true }'>
                <?php  $_smarty_tpl->tpl_vars['wishmovie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishmovie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wishmovie']->key => $_smarty_tpl->tpl_vars['wishmovie']->value) {
$_smarty_tpl->tpl_vars['wishmovie']->_loop = true;
?>
                <div class="text-center" style="width: 150px">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['wishmovie']->value['movieid'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['wishmovie']->value['name'];?>
 cover" class="carousel-image" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['wishmovie']->value['imagepath'];?>
" width=130 height=192></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['wishmovie']->value['movieid'];?>
"><h4 class="shop-movie-title"><?php echo $_smarty_tpl->tpl_vars['wishmovie']->value['name'];?>
</h4></a>
                </div>
                <?php } ?>
            </div>
            <?php }?>
        </div>
    </div>

    <div class="panel panel-default details-container">
        <div class="panel-body">
            <div class="page-header">
                <h4 style="margin-bottom: 2px;">Your reviews</h4>
            </div>

            <?php if (count($_smarty_tpl->tpl_vars['reviews']->value)==0) {?>
            You haven't made any reviews.<br><br>
            <?php }?>

            <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['review']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
 $_smarty_tpl->tpl_vars['review']->iteration++;
?>
            <?php if ($_smarty_tpl->tpl_vars['review']->iteration>4) {?><?php break 1?><?php }?>
            <div class="review-container">
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['review']->value['rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['review']->value['rating'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <i class="fa fa-star"></i>
                <?php }} ?>
                <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['i']->value) : $_smarty_tpl->tpl_vars['i']->value-(5)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
                <i class="fa fa-star-o"></i>
                <?php }} ?>
                <b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</b>&nbsp;
                <a href="#editReview<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['rating'];?>
, <?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
, <?php echo $_smarty_tpl->tpl_vars['review']->value['description'];?>
, <?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" title="Edit review" id="edit-review-button"><span class="glyphicon glyphicon-pencil edit-review"></span></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/product/delete-review.php?id=<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" title="Delete review"><span class="glyphicon glyphicon-remove remove-review"></span></a>
                <br>
                <small>For <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['review']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value['moviename'];?>
</a> on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['date']);?>
</small>
                <p style="margin-top: 8px;"><?php echo $_smarty_tpl->tpl_vars['review']->value['description'];?>
</p>
            </div>
            <?php } ?>
            
            <?php if (count($_smarty_tpl->tpl_vars['reviews']->value)>4) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/reviews/">See all your reviews<span class="glyphicon glyphicon-triangle-right"></span></a>
            <?php }?>

            <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['review']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
 $_smarty_tpl->tpl_vars['review']->iteration++;
?>
            <div class="modal fade" id="editReview<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit review for <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['moviename'];?>
</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/product/edit-review.php" method="post">
                        <input type="hidden" name="reviewid" id="reviewid" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
">
                        <div class="form-group add-review-stars" data-toggle="tooltip" data-placement="right">
                            <label class="sr-only" for="edit-rating<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
">Rating</label>
                            <input id="edit-rating<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" name="rating" type="number" class="rating kv-ltr-theme-fa-star" step=1 data-size="sm" data-show-clear="false" data-show-caption="false" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['rating'];?>
" required>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="edit-title<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
">Title</label>
                            <input id="edit-title<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" type="text" class="form-control" name="title" placeholder="Title" autocomplete="off" style="margin-top: -20px; margin-bottom: 25px;" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
" required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="edit-review<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
">Review</label>
                            <textarea style="margin-top: -25px;" id="edit-review<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" placeholder="Write your review here" class="form-control" id="writeReview" name="review" required><?php echo $_smarty_tpl->tpl_vars['review']->value['description'];?>
</textarea>
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
            <?php } ?>
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
                <div class="text-center"><img alt="Where to find the CV code in your card" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/cvcode.jpg"></div>
            </div>
        </div>
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/flickity/js/flickity-docs.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/validate-email.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/validate-credit-card.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/krajee-star-rating/js/star-rating.min.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
