<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 05:25:43
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/shop/shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7775122625747502935b868-99626301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dafcfe944cc4c9c8d1afaae348a1dacb173fd2bb' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/shop/shop.tpl',
      1 => 1465183541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7775122625747502935b868-99626301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57475029377548_76587335',
  'variables' => 
  array (
    'genres' => 0,
    'genre' => 0,
    'formats' => 0,
    'format' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57475029377548_76587335')) {function content_57475029377548_76587335($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="page-header" style="margin-bottom: 25px;">
		<h2 class="shopping-cart-header" style="display: inline">Shop</h2>
		<div class="pull-right">
			<select class="form-control" id="sort">
				<option value="none" selected style="display:none;">Sort by</option>
				<option value="price-lh">Price: Low to High</option>
				<option value="price-hl">Price: High to Low</option>
				<option value="avg">Avg. Costumer Review</option>
				<option value="date">Release Date</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-7 col-lg-2 hidden-xs">
			<ul class="list-group">
				<li class="list-group-item"><b>Genre</b>
					<?php  $_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['genre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['genres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->key => $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->_loop = true;
?>
					<div class="checkbox"><label ><input class="genre" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genreid'];?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>
</label></div>
					<?php } ?>
				</li>
				<li class="list-group-item"><b>Format</b>
					<?php  $_smarty_tpl->tpl_vars['format'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['format']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['format']->key => $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->_loop = true;
?>
					<div class="checkbox"><label><input class="format" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['format']->value['formatid'];?>
"><?php echo $_smarty_tpl->tpl_vars['format']->value['name'];?>
</label></div>
					<?php } ?>
				</li>
				<li class="list-group-item"><b>Release Date</b>
					<div class="checkbox"><label><input class="date" type="checkbox" value="10">2010 and later</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="0009">2000 - 2009</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="9099">1990 - 1999</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="8089">1980 - 1989</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="7079">1970 - 1979</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="6069">1960 - 1969</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="5059">1950 - 1959</label></div>
					<div class="checkbox"><label><input class="date" type="checkbox" value="49">1949 and earlier</label></div>
				</li>
			</ul>
		</div>

		<div id="movies">
		</div>
	</div>
	<div class="text-center">
		<ul class="pagination">
		</ul>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/shop-pagination.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/filter-movies.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
