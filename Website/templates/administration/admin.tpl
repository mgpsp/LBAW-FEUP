{include file='common/header.tpl'}

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
						{foreach $movies as $movie}
						<tr>
					        <td>{$movie.name}</td>
					        <td>{$movie.releasedate}</td>
					        <td>{$movie.formatname}</td>
					        <td><a href="#">Edit</a>&nbsp&nbsp&nbsp<a class="movie-delete" href="{$movie.movieid}">Delete</a></td>
					    </tr>
					    {/foreach}
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
					    {foreach $users as $user}
					    <tr>
					    	<td>{$user.firstname} {$user.lastname}</td>
					        <td>{$user.email}</td>
					        <td><a href="#">Edit</a>&nbsp&nbsp&nbsp<a class="user-delete" href="{$user.memberid}">Delete</a></td>
					    </tr>
					    {/foreach}
					</tbody>
			  	</table>
		  	</div>
		</div>
	</div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}javascript/admin.js"></script>

{include file='common/footer.tpl'}