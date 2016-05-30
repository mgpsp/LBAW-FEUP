<?php /* Smarty version Smarty-3.1.15, created on 2016-05-27 19:25:03
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/users/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2414574855739d902a71161-11992706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd33f568abcfc05af60f5f9ac9bebf361bd5d0770' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/users/account.tpl',
      1 => 1464369902,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5739d902b1dfc4_94571035')) {function content_5739d902b1dfc4_94571035($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/flickity/css/flickity-docs.css" rel="stylesheet" media="screen">

<div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>

    </div>
    <?php } elseif (isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
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
				<div id="changeEmail" class="collapse">
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
				</div>
				<li><a href="#changeCC" data-toggle="collapse">Change or add credit card details</a></li>
				<div id="changeCC" class="collapse">
					<form id="changeCC" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/edit-credit-card.php" method="POST" style="margin-top: 3px">
                        <div class="form-group">
                        	<label for="cardNumber" style="margin-left: 23px">CARD NUMBER</label>
                            <input 
                                type="text"
                                name="cardNumber"
                                placeholder="Valid Card Number"
                                autocomplete="cc-number"
                                style="margin-top: -2px; margin-left: 13px;"
                                value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value['creditcardnumber'];?>
"
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
                                value='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['creditCard']->value['expirationdate'],"%m/%y");?>
'
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
                                value="<?php echo $_smarty_tpl->tpl_vars['creditCard']->value['cvc'];?>
"
                                required
                            />
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-left: 24px; margin-top: -15px; width: 250px; margin-bottom: 16px">Save</button>
                    </form>
				</div>
				<li><a href="#changeBilling" data-toggle="collapse">Change or add billing address</a></li>
				<div id="changeBilling" class="collapse">
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
                                required autofocus 
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
                                required autofocus 
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
                            <select id="country" name="country" class="form-control">
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
				</div>
				<li><a href="#changeDelivery" data-toggle="collapse">Change or add delivery address</a></li>
				<div id="changeDelivery" class="collapse">
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
                                required autofocus 
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
                                required autofocus 
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
				</div>
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
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>.<br>
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
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a> and
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
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
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } elseif ($_smarty_tpl->tpl_vars['movie']->index==1) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a> and
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
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
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } elseif ($_smarty_tpl->tpl_vars['movie']->index==1) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
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
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } elseif ($_smarty_tpl->tpl_vars['movie']->index==1) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a>,
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a> and <?php echo smarty_function_math(array('equation'=>"total-3",'total'=>count($_smarty_tpl->tpl_vars['order']->value['movies'])),$_smarty_tpl);?>
 other items.<br>
						<?php }?>
					<?php } ?>
				<?php }?>
				<small>Order placed on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['dateofpurchase']);?>
</small>
			</div>
			<?php } ?>

            <?php if (count($_smarty_tpl->tpl_vars['orders']->value)!=0) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/all-orders.php">See detailed product orders<span class="glyphicon glyphicon-triangle-right"></span></a>
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
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['wishmovie']->value['movieid'];?>
"><img class="carousel-image" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['wishmovie']->value['imagepath'];?>
" width=130 height=192></img></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['wishmovie']->value['movieid'];?>
"><h4 class="shop-movie-title"><?php echo $_smarty_tpl->tpl_vars['wishmovie']->value['name'];?>
</h4></a>
                </div>
                <?php } ?>
            </div>
            <?php }?>
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

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
