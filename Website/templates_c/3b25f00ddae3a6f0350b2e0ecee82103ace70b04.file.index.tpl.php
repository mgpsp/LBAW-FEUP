<?php /* Smarty version Smarty-3.1.15, created on 2016-05-24 21:19:58
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8194347885734e9028fd944-42163634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b25f00ddae3a6f0350b2e0ecee82103ace70b04' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/index.tpl',
      1 => 1464117595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8194347885734e9028fd944-42163634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5734e9029da847_24876403',
  'variables' => 
  array (
    'SUCESS_MESSAGES' => 0,
    'carouselmovies' => 0,
    'BASE_URL' => 0,
    'cmovie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5734e9029da847_24876403')) {function content_5734e9029da847_24876403($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['SUCESS_MESSAGES']->value)) {?>
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['SUCESS_MESSAGES']->value;?>

    </div>
    <?php }?>
	<div id="movie-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php  $_smarty_tpl->tpl_vars['cmovie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmovie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carouselmovies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cmovie']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cmovie']->key => $_smarty_tpl->tpl_vars['cmovie']->value) {
$_smarty_tpl->tpl_vars['cmovie']->_loop = true;
 $_smarty_tpl->tpl_vars['cmovie']->index++;
?>
				<?php if ($_smarty_tpl->tpl_vars['cmovie']->index==0) {?>
				<div class="item active">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['cmovie']->value['movieid'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cmovie']->value['imagepath'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cmovie']->value['name'];?>
" class="carousel-img">
					</a>
					<div class="carousel-caption">
					    <a class="carousel-movie-name" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['cmovie']->value['movieid'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['cmovie']->value['name'];?>
</h3></a>
					</div>
				</div>
				<?php } else { ?>
				<div class="item">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['cmovie']->value['movieid'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cmovie']->value['imagepath'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cmovie']->value['name'];?>
" class="carousel-img">
					</a>
					<div class="carousel-caption">
					    <a class="carousel-movie-name" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['cmovie']->value['movieid'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['cmovie']->value['name'];?>
</h3></a>
					</div>
				</div>
				<?php }?>
				<?php } ?>
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
