{include file='common/header.tpl'}

<div class="container">
	{if isset($ERROR_MESSAGES)}
	<div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> {$ERROR_MESSAGES}
	</div>
    {/if}
	<div class="page-header"><h2 class="shopping-cart-header">Shopping Cart</h2></div>
	{if $cart|@count eq 0}
	<div class="text-center" style="font-size: 25px">You have no items on your cart.</div>
	{else}
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
	            	{foreach $cart as $movie}
	                <tr>
	                    <td class="col-sm-8 col-md-6">
	                    <div class="media">
	                        <a class="pull-left" href="{$BASE_URL}pages/product/?id={$movie.movieid}"> <img alt="{$movie.name} cover" class="media-object" src="{$BASE_URL}{$movie.imagepath}" style="width: 72px;"> </a>
	                        <div class="media-body">
	                            <h4 class="media-heading"><a href="{$BASE_URL}pages/product/?id={$movie.movieid}">{$movie.name}</a></h4>
	                            <h5 class="media-heading">{$movie.format}</h5>
	                        </div>
	                    </div></td>
	                    <td class="col-sm-1 col-md-1" style="text-align: center">
	                    {$movie.quantity}
	                    </td>
	                    <td class="col-sm-1 col-md-1 text-center"><strong>{$movie.price|string_format:"%.2f"}€</strong></td>
	                    <td class="col-sm-1 col-md-1 text-center"><strong>{$movie.total|string_format:"%.2f"}€</strong></td>
	                    <td class="col-sm-1 col-md-1">
	                    <form action="{$BASE_URL}actions/cart/delete-from-cart.php" method="get">
	                    <input type="hidden" name="movieid" value="{$movie.movieid}"/>
	                    <button type="submit" class="btn btn-danger pull-right">
	                        <span class="glyphicon glyphicon-remove"></span>
	                    </button></form></td>
	                </tr>
	                {/foreach}
	                <tr>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>   </td>
	                    <td><h5>Subtotal</h5></td>
	                    <td class="text-right"><h5><strong>{$subtotal|string_format:"%.2f"}€</strong></h5></td>
	                </tr>
	                <tr>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>   </td>
	                    <td><h5>Estimated shipping</h5></td>
	                    <td class="text-right"><h5><strong>{$shipping|string_format:"%.2f"}€</strong></h5></td>
	                </tr>
	                <tr>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>   </td>
	                    <td><h3>Total</h3></td>
	                    <td class="text-right"><h3><strong>{$total|string_format:"%.2f"}€</strong></h3></td>
	                </tr>
	                <tr>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>   </td>
	                    <td>
	                    <form action="{$BASE_URL}pages/shop/">
	                    <button type="submit" class="btn btn-default">Continue Shopping</button></form></td>
	                    <td>
	                    <form action="{$BASE_URL}pages/checkout/">
	                    <button type="submit" class="btn btn-success">
	                        Checkout <span class="glyphicon glyphicon-play"></span>
	                    </button></form></td>
	                </tr>
	            </tbody>
	        </table>
	    </div>
	</div>
	{/if}
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>

{include file='common/footer.tpl'}