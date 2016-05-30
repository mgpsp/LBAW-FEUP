<?php /* Smarty version Smarty-3.1.15, created on 2016-04-20 04:10:10
         compiled from "/opt/lbaw/lbaw1531/public_html/proto/templates/common/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1572056115716d7e5df2d62-09774745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14949fd2ea50163c5f1eaf0a47c749f6974d59ec' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/proto/templates/common/navbar.tpl',
      1 => 1461118208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1572056115716d7e5df2d62-09774745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5716d7e5e0b4f9_41170140',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ADMIN' => 0,
    'EMAIL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5716d7e5e0b4f9_41170140')) {function content_5716d7e5e0b4f9_41170140($_smarty_tpl) {?><div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		
		<img href="#" class="navbar-brand" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logomoviebox.png"></img>

		<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="#">Shop</a></li>
				<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
				<li><a href="#">Manage</a></li>
				<?php } else { ?>
				<li><a href="#">My account</a></li>
				<?php }?>
			</ul>

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

		    <ul class="nav navbar-nav navbar-right">
		    	<?php if ($_smarty_tpl->tpl_vars['EMAIL']->value) {?>
				<li><a href="#">Log out <span class="glyphicon glyphicon-log-out"></span></a></li>
				<?php } else { ?>
				<li><a href="#">Log in <span class="glyphicon glyphicon-log-in"></span></a></li>
				<?php }?>
				<li><a href="#">0 items - 0.00€ <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
			</ul>
		</div>
	</div>
</div><?php }} ?>
