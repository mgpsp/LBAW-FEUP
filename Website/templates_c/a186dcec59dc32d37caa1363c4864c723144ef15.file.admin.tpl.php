<?php /* Smarty version Smarty-3.1.15, created on 2016-04-22 02:21:34
         compiled from "/opt/lbaw/lbaw1531/public_html/proto/templates/administration/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2338737625718037e07aa42-91323470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a186dcec59dc32d37caa1363c4864c723144ef15' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/proto/templates/administration/admin.tpl',
      1 => 1461284492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2338737625718037e07aa42-91323470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5718037e1140a2_52677015',
  'variables' => 
  array (
    'movies' => 0,
    'movie' => 0,
    'users' => 0,
    'user' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5718037e1140a2_52677015')) {function content_5718037e1140a2_52677015($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="page-header" style="margin-bottom: 25px;"><h2 class="shopping-cart-header">Manage website</h2></div>

	<ul class="nav nav-tabs">
	  <li class="active"><a data-toggle="tab" href="#movies">Movies</a></li>
	  <li><a data-toggle="tab" href="#users">Users</a></li>
	</ul>

	<div class="tab-content">
		<div id="movies" class="tab-pane fade in active">
		  	<div class="text-center"><button class="btn btn-default" type="button" style="margin-top: 15px; width:170px;">Add movie</button></div>
		    <div class="table-responsive" style="margin-top: 10px;">
		     	<table class="table table-hover">
		     		<thead>
			     		<tr>
			     			<th>Title</th>
						    <th>Year</th>
						    <th>Format</th>
						    <th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
?>
						<tr>
					        <td><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</td>
					        <td><?php echo $_smarty_tpl->tpl_vars['movie']->value['releasedate'];?>
</td>
					        <td><?php echo $_smarty_tpl->tpl_vars['movie']->value['formatname'];?>
</td>
					        <td><a href="#">Edit</a>&nbsp&nbsp&nbsp<a class="movie-delete" href="<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
">Delete</a></td>
					    </tr>
					    <?php } ?>
					</tbody>
			  	</table>
			</div> 
		</div>

		<div id="users" class="tab-pane fade">
		    <div class="text-center"><button class="btn btn-default" type="button" style="margin-top: 15px; width:170px;">Add user</button></div>
		    <div class="table-responsive" style="margin-top: 10px;">
		     	<table class="table table-hover">
		     		<thead>
			     		<tr>
			     			<th>Name</th>
						    <th>Email</th>
						    <th>Actions</th>
						</tr>
					</thead>
					<tbody>
					    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
					    <tr>
					    	<td><?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
</td>
					        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
					        <td><a href="#">Edit</a>&nbsp&nbsp&nbsp<a class="user-delete" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['memberid'];?>
">Delete</a></td>
					    </tr>
					    <?php } ?>
					</tbody>
			  	</table>
		  	</div>
		</div>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
