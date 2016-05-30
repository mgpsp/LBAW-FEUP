<?php /* Smarty version Smarty-3.1.15, created on 2016-05-26 05:04:11
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/product/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8218570235734eeed5fd748-84081425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9712975424df06fb8c2ea6c81282103fdd3d3ac' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/product/product.tpl',
      1 => 1464231848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8218570235734eeed5fd748-84081425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5734eeed6b01d5_88518404',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'movieinfo' => 0,
    'averagescore' => 0,
    'moviescore' => 0,
    'fraction' => 0,
    'rest' => 0,
    'totalReviews' => 0,
    'movieactors' => 0,
    'actor' => 0,
    'moviedirectors' => 0,
    'director' => 0,
    'moviesubs' => 0,
    'sub' => 0,
    'moviehisubs' => 0,
    'hisub' => 0,
    'reviews' => 0,
    'review' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5734eeed6b01d5_88518404')) {function content_5734eeed6b01d5_88518404($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/krajee-star-rating/css/star-rating.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/krajee-star-rating/css/theme-krajee-fa.min.css" rel="stylesheet">

<div id="wrapper" style="overflow-x:hidden;"> <!-- for mobile-->
	<div class="container">
		<div id="failed-wishlist" class="alert alert-danger" style="display: none">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Error!</strong> Product is already in your wishlist.
    	</div>
    	<div id="login-wishlist" class="alert alert-danger" style="display: none">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Error!</strong> Login to add a product to your wishlist.
    	</div>
    	<div id="success-wishlist" class="alert alert-success" style="display: none">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Success!</strong> Product added to your wishlist.
    	</div>
		<div class="row">
			<div class="col-lg-4 movie-poster">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['imagepath'];?>
" class="img-responsive center-block" height="546" with="345"></img>
			</div>

			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="page-header">
							<h3 class="movie-title"><?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['moviename'];?>
</h3>

							<div class="row" style="margin-bottom: -4px;">
								<div class="col-lg-2 col-xs-2 review-stars" title="<?php echo $_smarty_tpl->tpl_vars['averagescore']->value;?>
 out of 5 stars">
									<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['moviescore']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['moviescore']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
									<i class="fa fa-star"></i>
									<?php }} ?>
									<?php if ($_smarty_tpl->tpl_vars['fraction']->value>0.4) {?>
									<i class="fa fa-star-half-o"></i>
									<?php }?>
									<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['rest']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['rest']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
									<i class="fa fa-star-o"></i>
									<?php }} ?>
								</div>
								<div class="col-lg-2 col-sm-2">
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
"><h6><?php echo $_smarty_tpl->tpl_vars['totalReviews']->value;?>
 reviews</h6></a>
								</div>
							</div>
						</div>

						<p><?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['description'];?>
</p>

						<span class="glyphicon glyphicon-play-circle"></span> <a href="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['trailer'];?>
"><h5 style="display:inline;">Watch trailer</h5></a>
						<span class="glyphicon glyphicon-heart" style="color: #D42322; padding-left: 10px;"></span> <a id="wishlist" href="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
"><h5 style="display:inline;">Add to wishlist</h5></a>

						<hr style="margin-top: 12px; margin-bottom: 22px;">

						<div class="row">
							<div class="col-sm-12 text-center">
								<form role="form" class="form-horizontal pull-right buy-form">
									<div class="form-group">
										<label class="control-label col-xs-6"><h3 class="price"><?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['price'];?>
€</h3></label> 
										<div class="col-xs-3" style="margin:0;">
								 			<input class="form-control quantity-counter" type="number" name="quantity" min="1" value="1">
								 		</div>
								 	</div>
								 	<div class="form-group">
								 		<div class="col-xs-9">
								 			<button type="submit" class="btn btn-default add-button">Add to cart</button>
								 		</div>
								 	</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-default details-container">
			<div class="panel-body">
				<div class="page-header">
					<h4 style="margin-bottom: 2px;">Product details</h4>
				</div>

				<ul style="list-style-type:none; padding-left: 15px;">
					<li><b>Actors:</b> <?php  $_smarty_tpl->tpl_vars['actor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movieactors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['actor']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['actor']->key => $_smarty_tpl->tpl_vars['actor']->value) {
$_smarty_tpl->tpl_vars['actor']->_loop = true;
 $_smarty_tpl->tpl_vars['actor']->index++;
?><?php if ($_smarty_tpl->tpl_vars['actor']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['actor']->value['name'];?>
<?php } ?></li>
					<li><b>Directors:</b> <?php  $_smarty_tpl->tpl_vars['director'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['director']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moviedirectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['director']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['director']->key => $_smarty_tpl->tpl_vars['director']->value) {
$_smarty_tpl->tpl_vars['director']->_loop = true;
 $_smarty_tpl->tpl_vars['director']->index++;
?><?php if ($_smarty_tpl->tpl_vars['director']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['director']->value['name'];?>
<?php } ?></li>
					<li><b>Format:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['formatname'];?>
</li>
					<li><b>Language:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['language'];?>
</li>
					<li><b>Subtitles:</b> <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moviesubs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sub']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
 $_smarty_tpl->tpl_vars['sub']->index++;
?><?php if ($_smarty_tpl->tpl_vars['sub']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
<?php } ?></li>
					<li><b>Subtitles For The Hearing Impaired:</b> <?php  $_smarty_tpl->tpl_vars['hisub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hisub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moviehisubs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['hisub']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['hisub']->key => $_smarty_tpl->tpl_vars['hisub']->value) {
$_smarty_tpl->tpl_vars['hisub']->_loop = true;
 $_smarty_tpl->tpl_vars['hisub']->index++;
?><?php if ($_smarty_tpl->tpl_vars['hisub']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['hisub']->value['name'];?>
<?php } ?></li>
					<li><b>Region:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['region'];?>
</li>
					<li><b>Number of discs:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['numberofdiscs'];?>
</li>
					<li><b>Classification:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['classification'];?>
</li>
					<li><b>Studio:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['studioname'];?>
</li>
					<li><b>DVD Release Date:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['movieinfo']->value['releasedate']);?>
</li>
					<li><b>Run Time:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['runtime'];?>
</li>
				</ul>
			</div>
		</div>

		<div class="panel panel-default details-container">
			<div class="panel-body">
				<div class="page-header">
					<h4 style="margin-bottom: 2px;">Costumer reviews</h4>
				</div>

				<?php if (count($_smarty_tpl->tpl_vars['reviews']->value)==0) {?>
				This product hasn't been been reviewed yet. Be the first one to review it!<br><br>
				<?php }?>

				<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['review']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
 $_smarty_tpl->tpl_vars['review']->iteration++;
?>
				<?php if ($_smarty_tpl->tpl_vars['review']->iteration>4) {?><?php break 1?><?php }?>
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
				
				<?php if (count($_smarty_tpl->tpl_vars['reviews']->value)>4) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/product/allreviews.php?id=<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
">See all costumer reviews<span class="glyphicon glyphicon-triangle-right"></span></a>
				<br><br>
				<?php }?>
				<button class="btn btn-default" data-toggle="modal" data-target="#addReview">Write a review</button>

				<div class="modal fade" id="addReview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					    <h4 class="modal-title" id="myModalLabel">Review <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['moviename'];?>
</h4>
					  </div>
					  <div class="modal-body">
					    <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/product/add-review.php" method="post" class="add-review-form">
							<div class="form-group add-review-stars">
								<input id="rating" name="rating" type="number" class="rating kv-ltr-theme-fa-star" step=1 data-size="sm" data-show-clear="false" data-show-caption="false">
							</div>
							</div>
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
" name="movieid">
							<div class="form-group">
							<input id="title" type="text" class="form-control" name="title" placeholder="Title" autocomplete="off">
							</div>
							<div class="form-group">
							<textarea id="review" placeholder="Write your review here" class="form-control" id="writeReview" name="review"></textarea>
							</div>
							<div class="modal-footer">
								<div id="fillFields" style="display: none; margin-top: 5px;" class="pull-left"><strong>Fill in all fields.</strong></div>
							    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    <button type="submit" class="btn btn-primary">Add review</button>
							</div>
						</form>
					  </div>
					  
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/krajee-star-rating/js/star-rating.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/add-review.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/add-to-wishlist.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
