function addWishlist(movieid) {
	$.getJSON("/~lbaw1531/final/api/product/add-to-wishlist.php", {id: movieid}, function(data) {
		if (data == 'success') {
			$(".wish-alerts").html('<div class="alert alert-success">\
								        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
								        <strong>Success!</strong> <div class="alert-wishlist" style="display: inline"></div>\
							    	</div>');
			$(".alert-wishlist-text").remove();
			$(".alert-wishlist").append('<span class="alert-wishlist-text">Product added to your wishlist.</span>');
			$(".wishlist-option").html('<span id="gly-rem-wish" class="glyphicon glyphicon-remove" style="color: #D42322; padding-left: 10px;"></span> <a onclick="removeWishlist(' + movieid + ')" href="javascript:void(0)"><h5 style="display:inline;">Remove from wishlist</h5></a>');
			$('.close').delay(4000).queue(function() {
				$(this).click().dequeue();
			});
		}
		else if (data =='login') {
			$(".wish-alerts").html('<div id="failed-wishlist" class="alert alert-danger">\
								        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
								        <strong>Error!</strong> <div class="alert-wishlist" style="display: inline"></div>\
							    	</div>');
			$(".alert-wishlist-text").remove();
			$(".alert-wishlist").append('<span class="alert-wishlist-text">Login to add a product to your wishlist.</span>');
			$('#failed-wishlist').fadeIn();
			$('.close').delay(4000).queue(function() {
				$(this).click().dequeue();
			});
		}
		else {
			$(".wish-alerts").html('<div id="failed-wishlist" class="alert alert-danger">\
								        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
								        <strong>Error!</strong> <div class="alert-wishlist" style="display: inline"></div>\
							    	</div>');
			$(".alert-wishlist-text").remove();
			$(".alert-wishlist").append('<span class="alert-wishlist-text">Product is already in your wishlist.</span>');
			$('#failed-wishlist').fadeIn();
			$('.close').delay(4000).queue(function() {
				$(this).click().dequeue();
			});
		}
	});
}

function removeWishlist(movieid) {
	$.getJSON("/~lbaw1531/final/api/product/remove-from-wishlist.php", {id: movieid}, function(data) {
		if (data == 'success') {
			$(".wish-alerts").html('<div class="alert alert-success">\
								        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
								        <strong>Success!</strong> <div class="alert-wishlist" style="display: inline"></div>\
							    	</div>');
			$(".alert-wishlist-text").remove();
			$(".alert-wishlist").append('<span class="alert-wishlist-text">Product removed from your wishlist.</span>');
			$(".wishlist-option").html('<span class="glyphicon glyphicon-heart" style="color: #D42322; padding-left: 10px;"></span> <a onclick="addWishlist(' + movieid + ')" href="javascript:void(0)"><h5 style="display:inline;">Add to wishlist</h5></a>');
			$('.close').delay(4000).queue(function() {
				$(this).click().dequeue();
			});
		}
		else if (data =='login') {
			$(".wish-alerts").html('<div id="failed-wishlist" class="alert alert-danger">\
								        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
								        <strong>Error!</strong> <div class="alert-wishlist" style="display: inline"></div>\
							    	</div>');
			$(".alert-wishlist-text").remove();
			$(".alert-wishlist").append('<span class="alert-wishlist-text">Login to remove a product from your wishlist.</span>');
			$('#failed-wishlist').fadeIn();
			$('.close').delay(4000).queue(function() {
				$(this).click().dequeue();
			});
		}
		else {
			$(".wish-alerts").html('<div id="failed-wishlist" class="alert alert-danger">\
								        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
								        <strong>Error!</strong> <div class="alert-wishlist" style="display: inline"></div>\
							    	</div>');
			$(".alert-wishlist-text").remove();
			$(".alert-wishlist").append('<span class="alert-wishlist-text">Product is not in your wishlist.</span>');
			$('#failed-wishlist').fadeIn();
			$('.close').delay(4000).queue(function() {
				$(this).click().dequeue();
			});
		}
	});
}