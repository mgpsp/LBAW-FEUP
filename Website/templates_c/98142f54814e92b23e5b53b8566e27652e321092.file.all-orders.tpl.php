<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 18:11:56
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/users/all-orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1944296997574503767b2f55-48033802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98142f54814e92b23e5b53b8566e27652e321092' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/users/all-orders.tpl',
      1 => 1465229515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1944296997574503767b2f55-48033802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574503768513f3_30518406',
  'variables' => 
  array (
    'SUCCESS_MESSAGES' => 0,
    'BASE_URL' => 0,
    'orders' => 0,
    'order' => 0,
    'movie' => 0,
    'director' => 0,
    'currentPage' => 0,
    'previousPage' => 0,
    'fromPage' => 0,
    'toPage' => 0,
    'i' => 0,
    'lastPage' => 0,
    'nextPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574503768513f3_30518406')) {function content_574503768513f3_30518406($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
	<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value;?>

	</div>
    <?php }?>
	<h2 class="shopping-cart-header"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/my-account/">My account</a> / Your orders</h2>

	<?php if (count($_smarty_tpl->tpl_vars['orders']->value)==0) {?>
	<div class="text-center">You haven't ordered anything yet.</div>
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
	<div class="panel panel-default details-container">
		<div class="panel-heading">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-4 col-xs-12" style="padding-top: 7px;">
					<h3 style="margin: 0px;">Order #<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
</h3>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-8" style="margin-left: 65px">
					<span class="pull-right"><small>STATUS</small><br>
					<?php if ($_smarty_tpl->tpl_vars['order']->value['status']=='Not yet dispatched') {?>
					<span style="color: #EC971F"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
					<?php } elseif ($_smarty_tpl->tpl_vars['order']->value['status']=='Dispatched') {?>
					<span style="color: #449D44"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
					<?php } else { ?>
					<span style="color: #C9302C"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
					<?php }?></span>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-xs-8" style="margin-left: -65px">
					<span class="pull-right"><small>ORDER PLACED</small><br>
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['dateofpurchase']);?>
</span>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-2 col-xs-4">
					<small>TOTAL</small><br>
					<?php echo $_smarty_tpl->tpl_vars['order']->value['price'];?>
€
				</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="media">
				<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['movies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
?>
				<div class="row" style="margin-top: 25px; margin-left: 0px;">
					<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
						<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['movie']->value['imagepath'];?>
" width=75 height=111 alt="<?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
 cover">
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<h4 class="media-heading"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><small><?php echo $_smarty_tpl->tpl_vars['movie']->value['quantity'];?>
x</small> <?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a></h4>
						<h5 class="media-heading"><?php  $_smarty_tpl->tpl_vars['director'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['director']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movie']->value['directors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['director']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['director']->key => $_smarty_tpl->tpl_vars['director']->value) {
$_smarty_tpl->tpl_vars['director']->_loop = true;
 $_smarty_tpl->tpl_vars['director']->index++;
?><?php if ($_smarty_tpl->tpl_vars['director']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['director']->value['name'];?>
<?php } ?></h5>
			            <h5 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['movie']->value['format'];?>
</h5>
			            <h5 class="shop-price"><?php echo $_smarty_tpl->tpl_vars['movie']->value['price'];?>
€</h5>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>

	<div class="text-center">
		<ul class="pagination">
			<?php if ($_smarty_tpl->tpl_vars['currentPage']->value!=1) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/orders/?page=1">&laquo; First</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/orders/?page=<?php echo $_smarty_tpl->tpl_vars['previousPage']->value;?>
">&lt;</a></li>
			<?php } else { ?>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/orders/?page=1">&laquo; First</a></li>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/orders/?page=<?php echo $_smarty_tpl->tpl_vars['previousPage']->value;?>
">&lt;</a></li>
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
pages/users/orders/?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
			<?php }?>
			<?php }} ?>
			<?php if ($_smarty_tpl->tpl_vars['currentPage']->value!=$_smarty_tpl->tpl_vars['lastPage']->value) {?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/orders/?page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
">&gt;</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/orders/?page=<?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
">Last &raquo;</a></li>
			<?php } else { ?>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/orders/?page=<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
">&gt;</a></li>
			<li class="disabled"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/orders/?page=<?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
">Last &raquo;</a></li>
			<?php }?>
		</ul>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
