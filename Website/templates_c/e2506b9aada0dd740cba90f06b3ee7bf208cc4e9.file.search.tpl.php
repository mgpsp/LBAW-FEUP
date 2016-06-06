<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 17:15:20
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/search/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1718705949574f1dd0775d91-93407824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2506b9aada0dd740cba90f06b3ee7bf208cc4e9' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/search/search.tpl',
      1 => 1465139720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1718705949574f1dd0775d91-93407824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f1dd0825bd2_45310488',
  'variables' => 
  array (
    'searchResults' => 0,
    'fromResult' => 0,
    'toResult' => 0,
    'i' => 0,
    'BASE_URL' => 0,
    'currentPage' => 0,
    'previousPage' => 0,
    'fromPage' => 0,
    'toPage' => 0,
    'lastPage' => 0,
    'nextPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f1dd0825bd2_45310488')) {function content_574f1dd0825bd2_45310488($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="page-header" style="margin-bottom: 25px;"><h2 class="shopping-cart-header">Search results</h2></div>
	<div class="row">
		<?php if (count($_smarty_tpl->tpl_vars['searchResults']->value)==0) {?>
		<div class="text-center">No results found.</div>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['toResult']->value+1 - ($_smarty_tpl->tpl_vars['fromResult']->value) : $_smarty_tpl->tpl_vars['fromResult']->value-($_smarty_tpl->tpl_vars['toResult']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['fromResult']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<div class="col-lg-2 col-md-4 col-sm-4 shop-movie">
			<a href="/~lbaw1531/final/pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['searchResults']->value[$_smarty_tpl->tpl_vars['i']->value]['movieid'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['searchResults']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
 cover" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['searchResults']->value[$_smarty_tpl->tpl_vars['i']->value]['imagepath'];?>
" width=154 height=223></a>
			<a href="/~lbaw1531/final/pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['searchResults']->value[$_smarty_tpl->tpl_vars['i']->value]['movieid'];?>
"><h4 class="shop-movie-title"><?php echo $_smarty_tpl->tpl_vars['searchResults']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
</h4></a>
			<small><?php echo $_smarty_tpl->tpl_vars['searchResults']->value[$_smarty_tpl->tpl_vars['i']->value]['format'];?>
</small>
			<h5 class="shop-price"><?php echo $_smarty_tpl->tpl_vars['searchResults']->value[$_smarty_tpl->tpl_vars['i']->value]['price'];?>
€</h5>
		</div>
		<?php }} ?>
	</div>

	<?php if (count($_smarty_tpl->tpl_vars['searchResults']->value)>24) {?>
	<div class="text-center">
		<ul class="pagination">
			<?php if ($_smarty_tpl->tpl_vars['currentPage']->value!=1) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/?page=1">&laquo; First</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/?page=<?php echo $_smarty_tpl->tpl_vars['previousPage']->value;?>
"><</a></li>
			<?php } else { ?>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/?page=1">&laquo; First</a></li>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/?page=<?php echo $_smarty_tpl->tpl_vars['previousPage']->value;?>
"><</a></li>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['toPage']->value+1 - ($_smarty_tpl->tpl_vars['fromPage']->value) : $_smarty_tpl->tpl_vars['fromPage']->value-($_smarty_tpl->tpl_vars['toPage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['fromPage']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['currentPage']->value) {?>
			<li class="active"><a href="#"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
			<?php } else { ?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
			<?php }?>
			<?php }} ?>
			<?php if ($_smarty_tpl->tpl_vars['currentPage']->value!=$_smarty_tpl->tpl_vars['lastPage']->value) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/?page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
">></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/?page=<?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
">Last &raquo;</a></li>
			<?php } else { ?>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/?page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
">></a></li>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/?page=<?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
">Last &raquo;</a></li>
			<?php }?>
		</ul>
	</div>
	<?php }?>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
