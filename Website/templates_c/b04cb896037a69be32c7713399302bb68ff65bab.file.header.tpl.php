<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 03:44:25
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2961569495734e9029e13f4-46029846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b04cb896037a69be32c7713399302bb68ff65bab' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/common/header.tpl',
      1 => 1465091068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2961569495734e9029e13f4-46029846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5734e902a3ccc2_41637091',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'pageTitle' => 0,
    'EMAIL' => 0,
    'ADMIN' => 0,
    'cartItems' => 0,
    'cartCost' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5734e902a3ccc2_41637091')) {function content_5734e902a3ccc2_41637091($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/favicon.png" type="image/png" />
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><img alt="moviebox logo" class="navbar-brand" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logomoviebox.png"></a>

			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-left">
					<?php if ($_smarty_tpl->tpl_vars['pageTitle']->value=='Shop') {?>
					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/shop/">Shop</a></li>
					<?php } else { ?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/shop/">Shop</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['EMAIL']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['pageTitle']->value=='My account') {?>
						<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/my-account/">My account</a></li>
						<?php } else { ?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/my-account/">My account</a></li>
						<?php }?>
					<?php } elseif ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['pageTitle']->value=='Manage website') {?>
						<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/administration/">Manage</a></li>
						<?php } else { ?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/administration/">Manage</a></li>
						<?php }?>
					<?php }?>
				</ul>

				<form class="navbar-form navbar-right" role="search" style="min-width: 300px" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/search/search.php">
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
			    	<?php if ($_smarty_tpl->tpl_vars['EMAIL']->value||$_smarty_tpl->tpl_vars['ADMIN']->value) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Log out <span class="glyphicon glyphicon-log-out"></span></a></li>
					<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['pageTitle']->value=='Sign in') {?>
					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/sign/">Log in <span class="glyphicon glyphicon-log-in"></span></a></li>
					<?php } else { ?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/sign/">Log in <span class="glyphicon glyphicon-log-in"></span></a></li>
					<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['EMAIL']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['pageTitle']->value=='Cart') {?>
					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/"><?php if ($_smarty_tpl->tpl_vars['cartItems']->value>1) {?><?php echo $_smarty_tpl->tpl_vars['cartItems']->value;?>
 items<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['cartItems']->value;?>
 item<?php }?> - <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['cartCost']->value);?>
€ <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					<?php } else { ?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/cart/"><?php if ($_smarty_tpl->tpl_vars['cartItems']->value>1) {?><?php echo $_smarty_tpl->tpl_vars['cartItems']->value;?>
 items<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['cartItems']->value;?>
 item<?php }?> - <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['cartCost']->value);?>
€ <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					<?php }?>
					<?php }?>
				</ul>
			</div>
		</div>
	</div><?php }} ?>
