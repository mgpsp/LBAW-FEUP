<?php /* Smarty version Smarty-3.1.15, created on 2016-06-06 06:09:08
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/product/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8218570235734eeed5fd748-84081425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9712975424df06fb8c2ea6c81282103fdd3d3ac' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/product/product.tpl',
      1 => 1465186146,
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
    'ERROR_MESSAGES' => 0,
    'SUCCESS_MESSAGES' => 0,
    'movieinfo' => 0,
    'ADMIN' => 0,
    'averagescore' => 0,
    'moviescore' => 0,
    'fraction' => 0,
    'rest' => 0,
    'totalReviews' => 0,
    'inWishlist' => 0,
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
    'userID' => 0,
    'formats' => 0,
    'format' => 0,
    'genres' => 0,
    'genre' => 0,
    'studios' => 0,
    'studio' => 0,
    'languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5734eeed6b01d5_88518404')) {function content_5734eeed6b01d5_88518404($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1531/public_html/final/lib/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/krajee-star-rating/css/star-rating.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/krajee-star-rating/css/theme-krajee-fa.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/movie-form.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/file-input/css/fileinput.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/chardin/css/chardinjs.css" rel="stylesheet">

<div id="wrapper" style="overflow-x:hidden;"> <!-- for mobile-->
	<div class="container">
		<div class="wish-alerts">
    	</div>
    	<?php if (isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
    	<div class="alert alert-danger">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Error!</strong> <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>

    	</div>
    	<?php }?>
    	<?php if (isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
    	<div class="alert alert-success">
	        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value;?>

    	</div>
    	<?php }?>
		<div class="row">
			<div class="col-lg-4 movie-poster">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['imagepath'];?>
" class="img-responsive center-block" height=546 width=375 alt="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['moviename'];?>
 cover">
			</div>

			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="page-header">
							<div class="row">
								<div class="col-lg-8">
									<h3 class="movie-title"><?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['moviename'];?>
 (<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['movieinfo']->value['releasedate'],"%Y");?>
)</h3>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
								<div class="col-lg-4">
				                    <button type="button" class="btn btn-warning pull-right manage-movies btn-sm" style="padding-top: 4px" title="Edit movie" data-toggle="modal" data-target="#editMovie">
				                        <span class="glyphicon glyphicon-pencil" style="vertical-align:top;"></span>
				                    </button>
				                    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/delete-movie.php" method="get">
					                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
"/>
					                    <button type="submit" class="btn btn-danger pull-right manage-movies btn-sm" style="margin-right: 10px" title="Delete movie">
					                        <span class="glyphicon glyphicon-remove remove-movie" style="vertical-align:top;"></span>
					                    </button>
				                   	</form>
								</div>
								<?php }?>
							</div>

							<div class="row" style="margin-bottom: -4px;">
								<div class="col-lg-2 col-xs-2 review-stars" title="<?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['averagescore']->value);?>
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
pages/product/reviews/?id=<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
"><h6><?php echo $_smarty_tpl->tpl_vars['totalReviews']->value;?>
 reviews</h6></a>
								</div>
							</div>
						</div>

						<p><?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['description'];?>
</p>

						<span class="glyphicon glyphicon-play-circle"></span> <a data-toggle="modal" data-target="#watchTrailer" href="#"><h5 style="display:inline;" data-intro="Click here to watch the trailer" data-position="bottom">Watch trailer</h5></a>
						<div class="wishlist-option" style="display: inline">
						<?php if ($_smarty_tpl->tpl_vars['inWishlist']->value) {?>
						<span id="gly-rem-wish" class="glyphicon glyphicon-remove" style="color: #D42322; padding-left: 10px;"></span> <a onclick="removeWishlist(<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
)" href="javascript:void(0)"><h5 style="display:inline;" data-intro="Click here to remove the movie from your wishlist" data-position="bottom">Remove from wishlist</h5></a>
						<?php } else { ?>
						<span class="glyphicon glyphicon-heart" style="color: #D42322; padding-left: 10px;"></span> <a onclick="addWishlist(<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
)" href="javascript:void(0)"><h5 style="display:inline;" data-intro="Click here to add the movie to your wishlist" data-position="bottom">Add to wishlist</h5></a>
						<?php }?>
						</div>
						<a href="#" id="show-help"><span style="font-size: 16px;" class="glyphicon glyphicon-info-sign pull-right"></span></a>

						<hr style="margin-top: 12px; margin-bottom: 22px;">

						<div class="row">
							<div class="col-sm-12 text-center">
								<form role="form" class="form-horizontal pull-right buy-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/cart/add-to-cart.php">
									<div class="form-group">
										<input type="hidden" name="movieid" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
">
										<div style="display: inline" class="control-label col-xs-6"><h3 class="price"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['movieinfo']->value['price']);?>
€</h3></div> 
										<div class="col-xs-3" style="margin:0;">
								 			<input data-intro="Click here to choose the number of items" data-position="right" class="form-control quantity-counter" type="number" name="quantity" min="1" value="1">
								 		</div>
								 	</div>
								 	<div class="form-group">
								 		<div class="col-xs-9">
								 			<?php if ($_smarty_tpl->tpl_vars['movieinfo']->value['stock']>0) {?>
								 			<button data-intro="Click here to add the movie to your cart" data-position="bottom" type="submit" class="btn btn-default add-button">Add to cart</button>
								 			<?php } else { ?>
								 			<strong style="color: #CC0000; font-size: 20px;">Out of stock.</strong>
								 			<?php }?>
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
					<?php if (count($_smarty_tpl->tpl_vars['movieactors']->value)>0) {?>
					<li><b>Actors:</b> <?php  $_smarty_tpl->tpl_vars['actor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movieactors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['actor']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['actor']->key => $_smarty_tpl->tpl_vars['actor']->value) {
$_smarty_tpl->tpl_vars['actor']->_loop = true;
 $_smarty_tpl->tpl_vars['actor']->index++;
?><?php if ($_smarty_tpl->tpl_vars['actor']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['actor']->value['name'];?>
<?php } ?></li>
					<?php }?>
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
					<?php if (count($_smarty_tpl->tpl_vars['moviesubs']->value)>0) {?>
					<li><b>Subtitles:</b> <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moviesubs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sub']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
 $_smarty_tpl->tpl_vars['sub']->index++;
?><?php if ($_smarty_tpl->tpl_vars['sub']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
<?php } ?></li>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['moviehisubs']->value)>0) {?>
					<li><b>Subtitles For The Hearing Impaired:</b> <?php  $_smarty_tpl->tpl_vars['hisub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hisub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moviehisubs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['hisub']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['hisub']->key => $_smarty_tpl->tpl_vars['hisub']->value) {
$_smarty_tpl->tpl_vars['hisub']->_loop = true;
 $_smarty_tpl->tpl_vars['hisub']->index++;
?><?php if ($_smarty_tpl->tpl_vars['hisub']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['hisub']->value['name'];?>
<?php } ?></li>
					<?php }?>
					<li><b>Region:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['region'];?>
</li>
					<li><b>Number of discs:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['numberofdiscs'];?>
</li>
					<li><b>Classification:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['classification'];?>
</li>
					<li><b>Studio:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['studioname'];?>
</li>
					<li><b>Release Date:</b> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['movieinfo']->value['releasedate']);?>
</li>
					<li><b>Run Time:</b> <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['runtime'];?>
 minutes</li>
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
					<b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
</b>&nbsp;
					<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value||$_smarty_tpl->tpl_vars['userID']->value==$_smarty_tpl->tpl_vars['review']->value['memberid']) {?>
					<a href="#editReview<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['rating'];?>
, <?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
, <?php echo $_smarty_tpl->tpl_vars['review']->value['description'];?>
, <?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" title="Edit review" id="edit-review-button"><span class="glyphicon glyphicon-pencil edit-review"></span></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/product/delete-review.php?id=<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" title="Delete review"><span class="glyphicon glyphicon-remove remove-review"></span></a>
					<?php }?>
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
pages/product/reviews/?id=<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
">See all costumer reviews<span class="glyphicon glyphicon-triangle-right"></span></a>
				<br><br>
				<?php }?>
				<button data-intro="Click here to add a review" data-position="left" class="btn btn-default" data-toggle="modal" data-target="#addReview">Write a review</button>

				<div class="modal fade" id="addReview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					    <h4 class="modal-title" style="display: inline">Review <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['moviename'];?>
</h4>
					    <span style="color: red;display: inline">&nbsp;*Required field</span>
					  </div>
					  <div class="modal-body">
					    <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/product/add-review.php" method="post" class="add-review-form">
							<div class="form-group add-review-stars" data-toggle="tooltip" data-placement="right">
								<label class="sr-only" for="rating">Rating</label>
								<input id="rating" name="rating" type="number" class="rating kv-ltr-theme-fa-star" step=1 data-size="sm" data-show-clear="false" data-show-caption="false" required>
							</div>
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
" name="movieid">
							<div class="form-group">
								<label class="sr-only" for="title">Title</label>
								<input id="title" type="text" class="form-control" name="title" placeholder="Title*" autocomplete="off" style="margin-top: 0px; padding-left: 10px;" required>
							</div>
							<div class="form-group">
								<label class="sr-only" for="writeReview">Review</label>
								<textarea placeholder="Write your review here*" class="form-control" id="writeReview" name="review" style="margin-top: 0px; padding-left: 10px; height: 150px;" required></textarea>
							</div>
							<div class="modal-footer">
							    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    <button type="submit" class="btn btn-primary">Add review</button>
							</div>
						</form>
					  </div>
					</div>
					</div>
				</div>

				<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['review']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
 $_smarty_tpl->tpl_vars['review']->iteration++;
?>
				<?php if ($_smarty_tpl->tpl_vars['review']->iteration>4) {?><?php break 1?><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value||$_smarty_tpl->tpl_vars['userID']->value==$_smarty_tpl->tpl_vars['review']->value['memberid']) {?>
				<div class="modal fade" id="editReview<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					    <h4 class="modal-title">Edit review for <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['moviename'];?>
</h4>
					  </div>
					  <div class="modal-body">
					    <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/product/edit-review.php" method="post">
					    	<input type="hidden" name="reviewid" id="reviewid" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
">
							<div class="form-group add-review-stars" data-toggle="tooltip" data-placement="right">
								<label class="sr-only" for="edit-rating<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
">Rating</label>
								<input id="edit-rating<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" name="rating" type="number" class="rating kv-ltr-theme-fa-star" step=1 data-size="sm" data-show-clear="false" data-show-caption="false" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['rating'];?>
" required>
							</div>
							</div>
							<div class="form-group">
								<label class="sr-only" for="edit-title<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
">Title</label>
								<input id="edit-title<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" type="text" class="form-control" name="title" placeholder="Title" autocomplete="off" style="margin-top: -20px; margin-bottom: 25px;" value="<?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
" required>
							</div>
							<div class="form-group">
								<label class="sr-only" for="edit-review<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
">Review</label>
								<textarea style="margin-top: -25px;" id="edit-review<?php echo $_smarty_tpl->tpl_vars['review']->value['reviewid'];?>
" placeholder="Write your review here" class="form-control" id="writeReview" name="review" required><?php echo $_smarty_tpl->tpl_vars['review']->value['description'];?>
</textarea>
							</div>
							<div class="modal-footer">
							    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    <button type="submit" class="btn btn-primary">Edit review</button>
							</div>
						</form>
					  </div>
					</div>
					</div>
				</div>
				<?php }?>
				<?php } ?>

				<div class="modal fade" id="watchTrailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document" style="width: 820px">
					<div class="modal-content">
						<div class="modal-header">
						    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						    <h4 class="modal-title" id="myModalLabel">Watch <?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['moviename'];?>
 trailer</h4>
					  	</div>
					  	<div class="modal-body">
					  		<div class="embed-responsive embed-responsive-16by9" >
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['trailer'];?>
" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
		<div class="modal fade" id="editMovie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title" id="myModalLabel" style="display: inline">Edit movie</h4>
			    <span style="color: red;display: inline">&nbsp;*Required field</span>
		  	</div>
		  	<div class="modal-body">
		  		 <form class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/edit-movie.php" enctype="multipart/form-data">
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-name">Name*</label>
					<div class="col-sm-9">
					  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['movieid'];?>
" name="movieid">
					  <input id="movie-name" type="text" class="form-control" name="name" placeholder="Enter movie name" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['moviename'];?>
"required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-date">Release date*</label>
					<div class="col-sm-9">
					  <input id="movie-date" type="text" class="form-control" name="date" placeholder="YYYY-MM-DD" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['releasedate'];?>
" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-synopsis">Synopsis*</label>
					<div class="col-sm-9">
					  <textarea id="movie-synopsis" placeholder="Write synopsis" class="form-control" name="synopsis" style="margin-top: 3px" required><?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['description'];?>
</textarea>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-discs">Number of discs*</label>
					<div class="col-sm-9">
						<input id="movie-discs" class="form-control quantity-counter" type="number" name="discs" min="1" style="width: 10%; margin-left: 20px" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['numberofdiscs'];?>
"required>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-price">Price*</label>
					<div class="col-sm-9">
					  <input id="movie-price" type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['price'];?>
" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-region">Region*</label>
					<div class="col-sm-9">
					  <input id="movie-region" type="text" class="form-control" name="region" placeholder="Enter region" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['region'];?>
" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-classification">Classification*</label>
					<div class="col-sm-9">
					  <input id="movie-classification" type="text" class="form-control" name="classification" placeholder="Enter classification" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['classification'];?>
" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-runtime">Runtime*</label>
					<div class="col-sm-9">
					  <input id="movie-runtime" type="text" class="form-control" name="runtime" placeholder="Enter runtime" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['runtime'];?>
" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-stock">Stock*</label>
					<div class="col-sm-9">
					  <input id="movie-stock" class="form-control quantity-counter" type="number" name="stock" style="width: 20%; margin-left: 20px" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['stock'];?>
"required>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-trailer">Trailer* <sup data-toggle="tooltip" title="Example: gnRbXn4-Yis">?</sup></label>
					<div class="col-sm-9">
					  <input id="movie-trailer" type="text" class="form-control" name="trailer" placeholder="Enter YouTube link id" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['trailer'];?>
" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-format">Format*</label>
					<div class="col-sm-9">
					<select id="movie-format" name="format" class="form-control" style="width: 50%; margin-left: 20px" required>
                        <?php  $_smarty_tpl->tpl_vars['format'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['format']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['format']->key => $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['format']->value['formatid']==$_smarty_tpl->tpl_vars['movieinfo']->value['formatid']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['format']->value['formatid'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['format']->value['name'];?>
</option>
                        <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['format']->value['formatid'];?>
"><?php echo $_smarty_tpl->tpl_vars['format']->value['name'];?>
</option>
                        <?php }?>
                        <?php } ?>
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-genre">Genre*</label>
					<div class="col-sm-9">
					<select id="movie-genre" name="genre" class="form-control" style="width: 50%; margin-left: 20px" required>
                        <?php  $_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['genre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['genres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->key => $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['genre']->value['genreid']==$_smarty_tpl->tpl_vars['movieinfo']->value['genreid']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genreid'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>
</option>
                        <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genreid'];?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>
</option>
                        <?php }?>
                        <?php } ?>
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-studio">Studio*</label>
					<div class="col-sm-9">
					<select id="movie-studio" name="studio" class="form-control" style="width: 50%; margin-left: 20px" required>
                        <?php  $_smarty_tpl->tpl_vars['studio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['studio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['studios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['studio']->key => $_smarty_tpl->tpl_vars['studio']->value) {
$_smarty_tpl->tpl_vars['studio']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['studio']->value['studioid']==$_smarty_tpl->tpl_vars['movieinfo']->value['studioid']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['studio']->value['studioid'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['studio']->value['name'];?>
</option>
                        <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['studio']->value['studioid'];?>
"><?php echo $_smarty_tpl->tpl_vars['studio']->value['name'];?>
</option>
                        <?php }?>
                        <?php } ?>
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-language">Language*</label>
					<div class="col-sm-9">
					<select id="movie-language" name="language" class="form-control" style="width: 50%; margin-left: 20px" required>
                        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['language']->value['languageid']==$_smarty_tpl->tpl_vars['movieinfo']->value['languageid']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['languageid'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
                        <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['languageid'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
                        <?php }?>
                        <?php } ?>
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-cover">Cover* <sup data-toggle="tooltip" title="375x546">?</sup></label>
					<div class="col-sm-9 cover-upload">
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['movieinfo']->value['imagepath'];?>
" name="prevCover">
					  <input id="movie-cover" name="cover" type="file" class="file" data-show-preview="false" data-allowed-file-extensions='["jpeg", "jpg", "png", "gif", "bmp", "svg"]'>
					</div>
					</div>
					<span class="col-sm-12 text-center info"><b>For the following fields, separate entries with ","</b></span>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-director">Director(s)*</label>
					<div class="col-sm-9">
					  <input id="movie-director" type="text" class="form-control" name="director" placeholder="Enter director(s) name" value="<?php  $_smarty_tpl->tpl_vars['director'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['director']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moviedirectors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['director']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['director']->key => $_smarty_tpl->tpl_vars['director']->value) {
$_smarty_tpl->tpl_vars['director']->_loop = true;
 $_smarty_tpl->tpl_vars['director']->index++;
?><?php if ($_smarty_tpl->tpl_vars['director']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['director']->value['name'];?>
<?php } ?>" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-actor">Actor(s)</label>
					<div class="col-sm-9">
					  <input id="movie-actor" type="text" class="form-control" name="actor" placeholder="Enter actor(s) name" value="<?php  $_smarty_tpl->tpl_vars['actor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movieactors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['actor']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['actor']->key => $_smarty_tpl->tpl_vars['actor']->value) {
$_smarty_tpl->tpl_vars['actor']->_loop = true;
 $_smarty_tpl->tpl_vars['actor']->index++;
?><?php if ($_smarty_tpl->tpl_vars['actor']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['actor']->value['name'];?>
<?php } ?>">
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-3" for="movie-subtitle">Subtitle(s)</label>
					<div class="col-sm-9">
					  <input id="movie-subtitle" type="text" class="form-control" name="sub" placeholder="Enter subtitle(s) name" value="<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moviesubs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sub']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
 $_smarty_tpl->tpl_vars['sub']->index++;
?><?php if ($_smarty_tpl->tpl_vars['sub']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
<?php } ?>">
					</div>
					</div>
					<div class="form-group" for="movie-hisub">
					<label class="control-label col-sm-3">HI Subtitle(s)</label>
					<div class="col-sm-9">
					  <input id="movie-hisub" type="text" class="form-control" name="hisub" placeholder="Enter HI subtitle(s) name" value="<?php  $_smarty_tpl->tpl_vars['hisub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hisub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moviehisubs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['hisub']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['hisub']->key => $_smarty_tpl->tpl_vars['hisub']->value) {
$_smarty_tpl->tpl_vars['hisub']->_loop = true;
 $_smarty_tpl->tpl_vars['hisub']->index++;
?><?php if ($_smarty_tpl->tpl_vars['hisub']->index!=0) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['hisub']->value['name'];?>
<?php } ?>">
					</div>
					</div>
					<div class="modal-footer">
					    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    <button type="submit" class="btn btn-primary">Edit movie</button>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
	<?php }?>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/krajee-star-rating/js/star-rating.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/file-input/js/fileinput.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/chardin/js/chardinjs.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/add-review.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/wishlist.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
