<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 18:33:40
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/administration/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61794055573616b00a5f44-93730841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade22ac7fcf84d6ed2aa3a9bc6a5b97d5adeba20' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/administration/admin.tpl',
      1 => 1465230781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61794055573616b00a5f44-93730841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573616b01950e7_16600408',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SUCCESS_MESSAGES' => 0,
    'ERROR_MESSAGES' => 0,
    'movies' => 0,
    'orders' => 0,
    'order' => 0,
    'movie' => 0,
    'director' => 0,
    'errors' => 0,
    'error' => 0,
    'users' => 0,
    'user' => 0,
    'studios' => 0,
    'studio' => 0,
    'carousel' => 0,
    'formats' => 0,
    'format' => 0,
    'genres' => 0,
    'genre' => 0,
    'languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573616b01950e7_16600408')) {function content_573616b01950e7_16600408($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/movie-form.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/file-input/css/fileinput.min.css" rel="stylesheet">

<div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value;?>

    </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>

    </div>
    <?php }?>
	<div id="failed-delete-studio">
    </div>
	<div class="page-header" style="margin-bottom: 25px;"><h2 class="shopping-cart-header">Manage website</h2></div>

	<ul class="nav nav-tabs">
	  <li class="active"><a data-toggle="tab" href="#movies">Movies</a></li>
	  <li><a data-toggle="tab" href="#users">Users</a></li>
	  <li><a data-toggle="tab" href="#studios">Studios</a></li>
	  <li><a data-toggle="tab" href="#carousel">Carousel</a></li>
	  <li><a data-toggle="tab" href="#logs">Logs</a></li>
	  <li><a data-toggle="tab" href="#orders">Orders</a></li>
	</ul>


	<div class="tab-content">
		<div id="movies" class="tab-pane fade in active">
		  	<div class="text-center">
		  		<br>
		  		There are <b><?php echo count($_smarty_tpl->tpl_vars['movies']->value);?>
</b> movies in the database.<br>
		  		<button class="btn btn-default" type="button" style="margin-top: 15px; width:170px;" data-toggle="modal" data-target="#addMovie">Add movie</button>
		  	</div>
		</div>

		<div id="orders" class="tab-pane fade">
		    <div class="table-responsive" style="margin-top: 10px; border-collapse:collapse;">
		     	<table class="table table-hover table-condensed">
		     		<thead>
			     		<tr>
			     			<th>#</th>
						    <th>Date</th>
						    <th>Total</th>
						    <th>Member</th>
						</tr>
					</thead>
					<tbody>
					    <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
					   	<tr data-toggle="collapse" data-target="#order<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
" style="cursor:pointer;">
					    	<td><?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
</td>
					        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['dateofpurchase']);?>
</td>
					        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['price'];?>
€</td>
					        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['email'];?>
</td>
					    </tr>
					    <tr>
						    <td colspan="5" class="hiddenRow">
						        <div class="collapse" id="order<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
">
						        	<div class="panel panel-default details-container">
										<div class="panel-body">
											<div class="media">
												<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['movies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['movie']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['movie']->index++;
?>
												<div class="row" style="margin-top: 25px; margin-left: 0px;">
													<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
														<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['movie']->value['imagepath'];?>
" width=47 height=70 alt="<?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
 cover">
													</div>
													<div class="col-lg-4 col-md-3 col-sm-3 col-xs-4" style="margin-left: -30px;">
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
													<?php if ($_smarty_tpl->tpl_vars['movie']->index==0) {?>
													<div class="col-lg-2" id="order-status<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
">
														<b style="font-size: 20px">Status</b><br>
														<?php if ($_smarty_tpl->tpl_vars['order']->value['status']=='Not yet dispatched') {?>
														<span style="color: #EC971F"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
														<?php } elseif ($_smarty_tpl->tpl_vars['order']->value['status']=='Dispatched') {?>
														<span style="color: #449D44"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
														<?php } else { ?>
														<span style="color: #C9302C"><?php echo $_smarty_tpl->tpl_vars['order']->value['status'];?>
</span>
														<?php }?>
													</div>
													<div class="col-lg-3" id="dispatch-button<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
">
														<?php if ($_smarty_tpl->tpl_vars['order']->value['status']=='Not yet dispatched') {?>
														<button type="button" class="btn btn-success" onclick="markOrderAs(<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
, 'Dispatched')">Mark as dispatched</button><br>
														<button type="button" style="margin-top: 10px" class="btn btn-danger" onclick="markOrderAs(<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
, 'Canceled')">Cancel order</button>
														<?php } elseif ($_smarty_tpl->tpl_vars['order']->value['status']=='Dispatched') {?>
														<button type="button" class="btn btn-warning" onclick="markOrderAs(<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
, 'Not yet dispatched')">Mark as not yet dispatched</button><br>
														<button type="button" style="margin-top: 10px" class="btn btn-danger" onclick="markOrderAs(<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
, 'Canceled')">Cancel order</button>
														<?php } else { ?>
														<button type="button" class="btn btn-success" onclick="markOrderAs(<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
, 'Dispatched')">Mark as dispatched</button><br>
														<button type="button" style="margin-top: 10px" class="btn btn-warning" onclick="markOrderAs(<?php echo $_smarty_tpl->tpl_vars['order']->value['purchaseid'];?>
, 'Not yet dispatched')">Mark as not yet dispatched</button>
														<?php }?>
														
													</div>
													<?php }?>
												</div>
												<?php } ?>
											</div>
										</div>
									</div>
						        </div>
						    </td>
						</tr>
					    <?php } ?>
					</tbody>
			  	</table>
		  	</div>
		</div>

		<div id="logs" class="tab-pane fade">
			<div class="table-responsive" style="margin-top: 10px;">
		     	<table class="table table-hover">
		     		<thead>
			     		<tr>
			     			<th>Name</th>
			     			<th>Date</th>
						    <th>Error message</th>
						    <th>Solved</th>
						</tr>
					</thead>
					<tbody>
					    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
					    <tr>
					    	<td><?php echo $_smarty_tpl->tpl_vars['error']->value[0];?>
</td>
					        <td><?php echo $_smarty_tpl->tpl_vars['error']->value[1];?>
</td>
					        <td><?php echo $_smarty_tpl->tpl_vars['error']->value[2];?>
</td>
					        <td><a class="problem-solved" href="<?php echo $_smarty_tpl->tpl_vars['error']->value[3];?>
">Solved</a></td>
					    </tr>
					    <?php } ?>
					</tbody>
			  	</table>
		  	</div>
		</div>

		<div id="users" class="tab-pane fade">
		    <div class="table-responsive" style="margin-top: 10px;">
		     	<table class="table table-hover">
		     		<thead>
			     		<tr>
			     			<th>Name</th>
						    <th>Email</th>
						    <th>Banned</th>
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
					        <td><?php if ($_smarty_tpl->tpl_vars['user']->value['bannedmember']==1) {?>Yes<?php } else { ?>No<?php }?></td>
					        <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/administration/edit-user/?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['memberid'];?>
">Edit</a>&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['user']->value['bannedmember']==0) {?><a class="user-ban" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['memberid'];?>
">Ban</a><?php } else { ?><a class="user-unban" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['memberid'];?>
">Unban</a><?php }?>&nbsp;&nbsp;&nbsp;<a class="user-delete" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['memberid'];?>
">Delete</a></td>
					    </tr>
					    <?php } ?>
					</tbody>
			  	</table>
		  	</div>
		</div>

		<div id="studios" class="tab-pane fade">
			<div class="text-center" style="margin-top: 15px">
				<form role="form" class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/add-studio.php" method="get">
					<div class="form-group">
						<label class="sr-only" for="studioName">Studio name</label>
					    <input id="studioName" type="text" class="form-control" name="name" style="text-align: center; width: 200px; height: 33px; margin-top: -1px;" placeholder="Studio name" required>
					</div>
					<button class="btn btn-default btn-sm" type="submit">Add studio</button>
				</form>
		  	</div>
			<table class="table table-hover">
	     		<thead>
		     		<tr>
		     			<th>Name</th>
					    <th>Action</th>
					</tr>
				</thead>
				<tbody>
				    <?php  $_smarty_tpl->tpl_vars['studio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['studio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['studios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['studio']->key => $_smarty_tpl->tpl_vars['studio']->value) {
$_smarty_tpl->tpl_vars['studio']->_loop = true;
?>
				    <tr>
				    	<td><?php echo $_smarty_tpl->tpl_vars['studio']->value['name'];?>
</td>
				        <td><a class="studio-delete" href="<?php echo $_smarty_tpl->tpl_vars['studio']->value['studioid'];?>
">Delete</a></td>
				    </tr>
				    <?php } ?>
				</tbody>
		  	</table>
		</div>

		<div id="carousel" class="tab-pane fade">
			<div style="margin-top: 15px">
				<div class="col-lg-4"></div>
				<div class="col-lg-5">
				<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/add-carousel.php" method="post" enctype="multipart/form-data">
					<div class="form-group" style="width: 310px;">
						<label class="sr-only" for="movie-carousel">Choose movie</label>
                        <select id="movie-carousel" name="movieid" class="form-control">
                        	<option value="" style="display: none">Choose a movie</option>
                            <?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['movie']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['movie']->index++;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['movie']->value['movieid'];?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group margintop">
                    	<label class="sr-only" for="image-carousel">Choose image</label>
						<div style="width: 310px;" data-toggle="tooltip" title="Size: 1200x435" data-placement="right">
						  <input id="image-carousel" name="image" type="file" class="file" data-show-preview="false" data-allowed-file-extensions='["jpeg", "jpg", "png", "gif", "bmp", "svg"]' required>
						</div>
					</div>
					<button class="btn btn-default" type="submit" style="width: 310px;">Add to carousel</button>
				</form>
				</div>
				<div class="col-lg-3"></div>
		  	</div>
			<table class="table table-hover">
	     		<thead>
		     		<tr>
		     			<th>Name</th>
					    <th>Action</th>
					</tr>
				</thead>
				<tbody>
				    <?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carousel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['movie']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['movie']->index++;
?>
				    <tr>
				    	<td><?php echo $_smarty_tpl->tpl_vars['movie']->value['name'];?>
</td>
				        <td><a class="carousel-delete" href="<?php echo $_smarty_tpl->tpl_vars['movie']->value['carouselid'];?>
">Delete</a></td>
				    </tr>
				    <?php } ?>
				</tbody>
		  	</table>
		</div>
	</div>

	<div class="modal fade" id="addMovie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title" id="myModalLabel" style="display: inline">Add movie</h4>
			    <span style="color: red;display: inline">&nbsp;;*Required field</span>
		  	</div>
		  	<div class="modal-body">
		  		 <form class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/add-movie.php" enctype="multipart/form-data">
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-name">Name*</label>
					<div class="col-sm-9">
					  <input id="movie-name" type="text" class="form-control" name="name" placeholder="Enter movie name" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-date">Release date*</label>
					<div class="col-sm-9">
					  <input id="movie-date" type="text" class="form-control" name="date" placeholder="YYYY-MM-DD" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-synopsis">Synopsis*</label>
					<div class="col-sm-9">
					  <textarea id="movie-synopsis" placeholder="Write synopsis" class="form-control" name="synopsis" style="margin-top: 3px" required></textarea>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-discs">Number of discs*</label>
					<div class="col-sm-9">
						<input id="movie-discs" class="form-control quantity-counter" type="number" name="discs" min="1" value="1" style="width: 10%; margin-left: 20px" required>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-price">Price*</label>
					<div class="col-sm-9">
					  <input id="movie-price" type="text" class="form-control" name="price" placeholder="Enter price" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-region">Region*</label>
					<div class="col-sm-9">
					  <input id="movie-region" type="text" class="form-control" name="region" placeholder="Enter region" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-classification">Classification*</label>
					<div class="col-sm-9">
					  <input id="movie-classification" type="text" class="form-control" name="classification" placeholder="Enter classification" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-runtime">Runtime*</label>
					<div class="col-sm-9">
					  <input id="movie-runtime" type="text" class="form-control" name="runtime" placeholder="Enter runtime" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-stock">Stock*</label>
					<div class="col-sm-9">
					  <input id="movie-stock" class="form-control quantity-counter" type="number" name="stock" value="1" style="width: 20%; margin-left: 20px" required>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-trailer">Trailer* <sup data-toggle="tooltip" title="Example: gnRbXn4-Yis">?</sup></label>
					<div class="col-sm-9">
					  <input id="movie-trailer" type="text" class="form-control" name="trailer" placeholder="Enter YouTube link id" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-format">Format*</label>
					<div class="col-sm-9">
					<select id="movie-format" name="format" class="form-control" style="width: 50%; margin-left: 20px" required>
						<option value="" style="display: none">Choose format</option>
                        <?php  $_smarty_tpl->tpl_vars['format'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['format']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['format']->key => $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['format']->value['formatid'];?>
"><?php echo $_smarty_tpl->tpl_vars['format']->value['name'];?>
</option>
                        <?php } ?>
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-genre">Genre*</label>
					<div class="col-sm-9">
					<select id="movie-genre" name="genre" class="form-control" style="width: 50%; margin-left: 20px" required>
						<option value="" style="display: none">Choose genre</option>
                        <?php  $_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['genre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['genres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->key => $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genreid'];?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>
</option>
                        <?php } ?>
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-studio">Studio*</label>
					<div class="col-sm-9">
					<select id="movie-studio" name="studio" class="form-control" style="width: 50%; margin-left: 20px" required>
						<option value="" style="display: none">Choose studio</option>
                        <?php  $_smarty_tpl->tpl_vars['studio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['studio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['studios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['studio']->key => $_smarty_tpl->tpl_vars['studio']->value) {
$_smarty_tpl->tpl_vars['studio']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['studio']->value['studioid'];?>
"><?php echo $_smarty_tpl->tpl_vars['studio']->value['name'];?>
</option>
                        <?php } ?>
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-language">Language*</label>
					<div class="col-sm-9">
					<select id="movie-language" name="language" class="form-control" style="width: 50%; margin-left: 20px" required>
						<option value="" style="display: none">Choose language</option>
                        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['languageid'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
                        <?php } ?>
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-cover">Cover* <sup data-toggle="tooltip" title="Size: 375x546">?</sup></label>
					<div class="col-sm-9 cover-upload">
					  <input id="movie-cover" name="cover" type="file" class="file" data-show-preview="false" data-allowed-file-extensions='["jpeg", "jpg", "png", "gif", "bmp", "svg"]' required>
					</div>
					</div>
					<span class="col-sm-12 text-center info"><b>For the following fields, separate entries with ","</b></span>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-director">Director(s)*</label>
					<div class="col-sm-9">
					  <input id="movie-director" type="text" class="form-control" name="director" placeholder="Enter director(s) name" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-actor">Actor(s)</label>
					<div class="col-sm-9">
					  <input id="movie-actor" type="text" class="form-control" name="actor" placeholder="Enter actor(s) name">
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-subtitle">Subtitle(s)</label>
					<div class="col-sm-9">
					  <input id="movie-subtitle" type="text" class="form-control" name="sub" placeholder="Enter subtitle(s) name">
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-hisub">HI Subtitle(s)</label>
					<div class="col-sm-9">
					  <input id="movie-hisub" type="text" class="form-control" name="hisub" placeholder="Enter HI subtitle(s) name">
					</div>
					</div>
					<div class="modal-footer">
					    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    <button type="submit" class="btn btn-primary">Add movie</button>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/file-input/js/fileinput.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
