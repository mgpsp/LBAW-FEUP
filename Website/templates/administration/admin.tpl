{include file='common/header.tpl'}

<link href="{$BASE_URL}css/movie-form.css" rel="stylesheet">
<link href="{$BASE_URL}lib/file-input/css/fileinput.min.css" rel="stylesheet">

<div class="container">
	{if isset($SUCCESS_MESSAGES)}
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {$SUCCESS_MESSAGES}
    </div>
    {/if}
    {if isset($ERROR_MESSAGES)}
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> {$ERROR_MESSAGES}
    </div>
    {/if}
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
		  		There are <b>{$movies|@count}</b> movies in the database.<br>
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
					    {foreach $orders as $order}
					   	<tr data-toggle="collapse" data-target="#order{$order.purchaseid}" style="cursor:pointer;">
					    	<td>{$order.purchaseid}</td>
					        <td>{$order.dateofpurchase|date_format}</td>
					        <td>{$order.price}€</td>
					        <td>{$order.email}</td>
					    </tr>
					    <tr>
						    <td colspan="5" class="hiddenRow">
						        <div class="collapse" id="order{$order.purchaseid}">
						        	<div class="panel panel-default details-container">
										<div class="panel-body">
											<div class="media">
												{foreach $order.movies as $movie}
												<div class="row" style="margin-top: 25px; margin-left: 0px;">
													<div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
														<img src="{$BASE_URL}{$movie.imagepath}" width=47 height=70 alt="{$movie.name} cover">
													</div>
													<div class="col-lg-4 col-md-3 col-sm-3 col-xs-4" style="margin-left: -30px;">
														<h4 class="media-heading"><a href="{$BASE_URL}pages/product/?id={$movie.movieid}"><small>{$movie.quantity}x</small> {$movie.name}</a></h4>
														<h5 class="media-heading">{foreach $movie.directors as $director}{if $director@index neq 0},{/if} {$director.name}{/foreach}</h5>
											            <h5 class="media-heading">{$movie.format}</h5>
											            <h5 class="shop-price">{$movie.price}€</h5>
													</div>
													{if $movie@index eq 0}
													<div class="col-lg-2" id="order-status{$order.purchaseid}">
														<b style="font-size: 20px">Status</b><br>
														{if $order.status eq 'Not yet dispatched'}
														<span style="color: #EC971F">{$order.status}</span>
														{elseif $order.status eq 'Dispatched'}
														<span style="color: #449D44">{$order.status}</span>
														{else}
														<span style="color: #C9302C">{$order.status}</span>
														{/if}
													</div>
													<div class="col-lg-3" id="dispatch-button{$order.purchaseid}">
														{if $order.status eq 'Not yet dispatched'}
														<button type="button" class="btn btn-success" onclick="markOrderAs({$order.purchaseid}, 'Dispatched')">Mark as dispatched</button><br>
														<button type="button" style="margin-top: 10px" class="btn btn-danger" onclick="markOrderAs({$order.purchaseid}, 'Canceled')">Cancel order</button>
														{elseif $order.status eq 'Dispatched'}
														<button type="button" class="btn btn-warning" onclick="markOrderAs({$order.purchaseid}, 'Not yet dispatched')">Mark as not yet dispatched</button><br>
														<button type="button" style="margin-top: 10px" class="btn btn-danger" onclick="markOrderAs({$order.purchaseid}, 'Canceled')">Cancel order</button>
														{else}
														<button type="button" class="btn btn-success" onclick="markOrderAs({$order.purchaseid}, 'Dispatched')">Mark as dispatched</button><br>
														<button type="button" style="margin-top: 10px" class="btn btn-warning" onclick="markOrderAs({$order.purchaseid}, 'Not yet dispatched')">Mark as not yet dispatched</button>
														{/if}
														
													</div>
													{/if}
												</div>
												{/foreach}
											</div>
										</div>
									</div>
						        </div>
						    </td>
						</tr>
					    {/foreach}
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
					    {foreach $errors as $error}
					    <tr>
					    	<td>{$error[0]}</td>
					        <td>{$error[1]}</td>
					        <td>{$error[2]}</td>
					        <td><a class="problem-solved" href="{$error[3]}">Solved</a></td>
					    </tr>
					    {/foreach}
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
					    {foreach $users as $user}
					    <tr>
					    	<td>{$user.firstname} {$user.lastname}</td>
					        <td>{$user.email}</td>
					        <td>{if $user.bannedmember eq 1}Yes{else}No{/if}</td>
					        <td><a href="{$BASE_URL}pages/administration/edit-user/?id={$user.memberid}">Edit</a>&nbsp;&nbsp;&nbsp;{if $user.bannedmember eq 0}<a class="user-ban" href="{$user.memberid}">Ban</a>{else}<a class="user-unban" href="{$user.memberid}">Unban</a>{/if}&nbsp;&nbsp;&nbsp;<a class="user-delete" href="{$user.memberid}">Delete</a></td>
					    </tr>
					    {/foreach}
					</tbody>
			  	</table>
		  	</div>
		</div>

		<div id="studios" class="tab-pane fade">
			<div class="text-center" style="margin-top: 15px">
				<form role="form" class="form-inline" action="{$BASE_URL}actions/admin/add-studio.php" method="get">
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
				    {foreach $studios as $studio}
				    <tr>
				    	<td>{$studio.name}</td>
				        <td><a class="studio-delete" href="{$studio.studioid}">Delete</a></td>
				    </tr>
				    {/foreach}
				</tbody>
		  	</table>
		</div>

		<div id="carousel" class="tab-pane fade">
			<div style="margin-top: 15px">
				<div class="col-lg-4"></div>
				<div class="col-lg-5">
				<form role="form" action="{$BASE_URL}actions/admin/add-carousel.php" method="post" enctype="multipart/form-data">
					<div class="form-group" style="width: 310px;">
						<label class="sr-only" for="movie-carousel">Choose movie</label>
                        <select id="movie-carousel" name="movieid" class="form-control">
                        	<option value="" style="display: none">Choose a movie</option>
                            {foreach $movies as $movie}
                            <option value="{$movie.movieid}">{$movie.name}</option>
                            {/foreach}
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
				    {foreach $carousel as $movie}
				    <tr>
				    	<td>{$movie.name}</td>
				        <td><a class="carousel-delete" href="{$movie.carouselid}">Delete</a></td>
				    </tr>
				    {/foreach}
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
		  		 <form class="form-horizontal" role="form" method="post" action="{$BASE_URL}actions/admin/add-movie.php" enctype="multipart/form-data">
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
                        {foreach $formats as $format}
                        <option value="{$format.formatid}">{$format.name}</option>
                        {/foreach}
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-genre">Genre*</label>
					<div class="col-sm-9">
					<select id="movie-genre" name="genre" class="form-control" style="width: 50%; margin-left: 20px" required>
						<option value="" style="display: none">Choose genre</option>
                        {foreach $genres as $genre}
                        <option value="{$genre.genreid}">{$genre.name}</option>
                        {/foreach}
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-studio">Studio*</label>
					<div class="col-sm-9">
					<select id="movie-studio" name="studio" class="form-control" style="width: 50%; margin-left: 20px" required>
						<option value="" style="display: none">Choose studio</option>
                        {foreach $studios as $studio}
                        <option value="{$studio.studioid}">{$studio.name}</option>
                        {/foreach}
                    </select>
					</div>
					</div>
					<div class="form-group margintop">
					<label class="control-label col-sm-3" for="movie-language">Language*</label>
					<div class="col-sm-9">
					<select id="movie-language" name="language" class="form-control" style="width: 50%; margin-left: 20px" required>
						<option value="" style="display: none">Choose language</option>
                        {foreach $languages as $language}
                        <option value="{$language.languageid}">{$language.name}</option>
                        {/foreach}
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
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}lib/file-input/js/fileinput.min.js"></script>
<script src="{$BASE_URL}javascript/admin.js"></script>

{include file='common/footer.tpl'}