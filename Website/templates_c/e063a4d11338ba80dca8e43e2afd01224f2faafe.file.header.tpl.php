<?php /* Smarty version Smarty-3.1.15, created on 2016-04-23 23:51:35
         compiled from "/opt/lbaw/lbaw1531/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13867640465716d68b9ce563-51222070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e063a4d11338ba80dca8e43e2afd01224f2faafe' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/proto/templates/common/header.tpl',
      1 => 1461448294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13867640465716d68b9ce563-51222070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5716d68b9e8e64_97540079',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ADMIN' => 0,
    'EMAIL' => 0,
    'BASE_RUL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5716d68b9e8e64_97540079')) {function content_5716d68b9e8e64_97540079($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/favicon.png" type="image/png" />
		<title>moviebox</title>

		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php"><img class="navbar-brand" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logomoviebox.png"></img></a>

			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-left">
					<?php if (!$_smarty_tpl->tpl_vars['ADMIN']->value) {?>
					<li><a href="#">Shop</a></li>
					<li><a href="#">My account</a></li>
					<?php }?>
				</ul>

				<?php if (!$_smarty_tpl->tpl_vars['ADMIN']->value) {?>
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
				<?php }?>

			    <ul class="nav navbar-nav navbar-right">
			    	<?php if ($_smarty_tpl->tpl_vars['EMAIL']->value||$_smarty_tpl->tpl_vars['ADMIN']->value) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Log out <span class="glyphicon glyphicon-log-out"></span></a></li>
					<?php } else { ?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_RUL']->value;?>
pages/users/sign.php">Log in <span class="glyphicon glyphicon-log-in"></span></a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['EMAIL']->value) {?>
					<li><a href="#">0 items - 0.00€ <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div><?php }} ?>
