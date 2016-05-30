<?php /* Smarty version Smarty-3.1.15, created on 2016-05-13 23:58:15
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/product/allreviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15076905885735e7d5749ac6-57153080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '556387166a0e41ab9971c4f471e10619b8b2d3b3' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/product/allreviews.tpl',
      1 => 1463176693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15076905885735e7d5749ac6-57153080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5735e7d57ef672_64408160',
  'variables' => 
  array (
    'moviename' => 0,
    'reviews' => 0,
    'review' => 0,
    'i' => 0,
    'currentPage' => 0,
    'BASE_URL' => 0,
    'movieid' => 0,
    'previousPage' => 0,
    'fromPage' => 0,
    'toPage' => 0,
    'lastPage' => 0,
    'nextPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5735e7d57ef672_64408160')) {function content_5735e7d57ef672_64408160($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="page-header"><h2 class="shopping-cart-header">All costumer reviews for <?php echo $_smarty_tpl->tpl_vars['moviename']->value['moviename'];?>
</h2></div>
	<?php if (count($_smarty_tpl->tpl_vars['reviews']->value)==0) {?>
	This product hasn't been been reviewed yet. Be the first one to review it!<br><br>
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
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
		<b>&nbsp<?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</b>
		<br>
		<small>By <?php echo $_smarty_tpl->tpl_vars['review']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['review']->value['lastname'];?>
 on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['date']);?>
</small>
		<p style="margin-top: 8px;"><?php echo $_smarty_tpl->tpl_vars['review']->value['description'];?>
</p>
	</div>
	<?php } ?>

	<div class="text-center">
		<ul class="pagination">
			<?php if ($_smarty_tpl->tpl_vars['currentPage']->value!=1) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
&page=1">&laquo; First</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['previousPage']->value;?>
"><</a></li>
			<?php } else { ?>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
&page=1">&laquo; First</a></li>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['previousPage']->value;?>
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
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
			<?php }?>
			<?php }} ?>
			<?php if ($_smarty_tpl->tpl_vars['currentPage']->value!=$_smarty_tpl->tpl_vars['lastPage']->value) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
">></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
">Last &raquo;</a></li>
			<?php } else { ?>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
">></a></li>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
">Last &raquo;</a></li>
			<?php }?>
		</ul>
	</div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/product.php?id=<?php echo $_smarty_tpl->tpl_vars['movieid']->value;?>
"><span class="glyphicon glyphicon-triangle-left"></span>See all details for <?php echo $_smarty_tpl->tpl_vars['moviename']->value['moviename'];?>
</a>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
