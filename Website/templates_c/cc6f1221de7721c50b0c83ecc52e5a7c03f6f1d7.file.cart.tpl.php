<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 17:02:18
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/cart/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1465588236574f2e9e83c160-21941236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc6f1221de7721c50b0c83ecc52e5a7c03f6f1d7' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/cart/cart.tpl',
      1 => 1465138939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1465588236574f2e9e83c160-21941236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_574f2e9e8e4c51_31658003',
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'cart' => 0,
    'BASE_URL' => 0,
    'movie' => 0,
    'subtotal' => 0,
    'shipping' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f2e9e8e4c51_31658003')) {function content_574f2e9e8e4c51_31658003($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
	<div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>

	</div>
    <?php }?>
	<div class="page-header"><h2 class="shopping-cart-header">Shopping Cart</h2></div>
	<?php if (count($_smarty_tpl->tpl_vars['cart']->value)==0) {?>
	<div class="text-center" style="font-size: 25px">You have no items on your cart.</div>
	<?php } else { ?>
	<div class="row">
	    <div class="col-sm-12 col-md-10 col-md-offset-1">
	        <table class="table table-hover">
	            <thead>
	                <tr>
	                    <th>Product</th>
	                    <th>Quantity</th>
	                    <th class="text-center">Price</th>
	                    <th class="text-center">Total</th>
	                    <th> </th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
?>
	                <tr>
	                    <td class="col-sm-8 col-md-6">
	                    <div class="media">
	                        <a class="pull-left" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"> <img alt="<?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
 cover" class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['movie']->value['imagepath'];?>
" style="width: 72px;"> </a>
	                        <div class="media-body">
	                            <h4 class="media-heading"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/?id=<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</a></h4>
	                            <h5 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['movie']->value['format'];?>
</h5>
	                        </div>
	                    </div></td>
	                    <td class="col-sm-1 col-md-1" style="text-align: center">
	                    <?php echo $_smarty_tpl->tpl_vars['movie']->value['quantity'];?>

	                    </td>
	                    <td class="col-sm-1 col-md-1 text-center"><strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['movie']->value['price']);?>
€</strong></td>
	                    <td class="col-sm-1 col-md-1 text-center"><strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['movie']->value['total']);?>
€</strong></td>
	                    <td class="col-sm-1 col-md-1">
	                    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/delete-from-cart.php" method="get">
	                    <input type="hidden" name="movieid" value="<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"/>
	                    <button type="submit" class="btn btn-danger pull-right">
	                        <span class="glyphicon glyphicon-remove"></span>
	                    </button></form></td>
	                </tr>
	                <?php } ?>
	                <tr>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>   </td>
	                    <td><h5>Subtotal</h5></td>
	                    <td class="text-right"><h5><strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['subtotal']->value);?>
€</strong></h5></td>
	                </tr>
	                <tr>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>   </td>
	                    <td><h5>Estimated shipping</h5></td>
	                    <td class="text-right"><h5><strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['shipping']->value);?>
€</strong></h5></td>
	                </tr>
	                <tr>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>   </td>
	                    <td><h3>Total</h3></td>
	                    <td class="text-right"><h3><strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total']->value);?>
€</strong></h3></td>
	                </tr>
	                <tr>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>
	                    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/shop/">
	                    <button type="submit" class="btn btn-default">Continue Shopping</button></form></td>
	                    <td>
	                    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/checkout/">
	                    <button type="submit" class="btn btn-success">
	                        Checkout <span class="glyphicon glyphicon-play"></span>
	                    </button></form></td>
	                </tr>
	            </tbody>
	        </table>
	    </div>
	</div>
	<?php }?>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
