<?php /* Smarty version Smarty-3.1.15, created on 2016-04-22 04:24:27
         compiled from "/opt/lbaw/lbaw1531/public_html/proto/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17509312025719800ea39e87-31418687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2110789bcc76d23b82b7c42db64de4efa9a07549' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/proto/templates/index.tpl',
      1 => 1461291866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17509312025719800ea39e87-31418687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5719800eaf5ce9_88094326',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5719800eaf5ce9_88094326')) {function content_5719800eaf5ce9_88094326($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div id="movie-carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#movie-carousel" data-slide-to="0" class="active"></li>
			  <li data-target="#movie-carousel" data-slide-to="1"></li>
			  <li data-target="#movie-carousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active">
			    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/therevenant.jpg" alt="..." class="carousel-img">
			    <div class="carousel-caption">
			        <h3>The Revenant</h3>
			    </div>
			  </div>
			  <div class="item">
			    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/game.jpg" alt="..." class="carousel-img">
			    <div class="carousel-caption">
			        <h3>The Imitation Game</h3>
			    </div>
			  </div>
			  <div class="item">
			    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/hateful.jpg" alt="..." class="carousel-img">
			    <div class="carousel-caption">
			        <h3>The Hateful Eight</h3>
			    </div>
			  </div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#movie-carousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#movie-carousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			</a>
	</div>
</div>

<div class="container">
	<h1>Featured movies</h1>
	<hr class="home-page-separator">
	<div class="row">
		<div class="col-lg-3 col-sm-6 text-center">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/deadpool.jpg" class="poster-thumbnail"></img>
			<h3>Deadpool</h3>
		</div>

		<div class="col-lg-3 col-sm-6 text-center">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/witch.png" class="poster-thumbnail"></img>
			<h3>The VVitch</h3>
		</div>

		<div class="col-lg-3 col-sm-6 text-center">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/triple9.png" class="poster-thumbnail"></img>
			<h3>Triple 9</h3>
		</div>

		<div class="col-lg-3 col-sm-6 text-center">
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/madmax.jpg" class="poster-thumbnail"></img>
			<h3>Mad Max: Fury Road</h3>
		</div>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
