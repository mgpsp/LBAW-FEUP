$(document).ready(function() {
	$('#wishlist').click(function(e) {
		e.preventDefault();
		var movieid = $(this).attr("href");
		$.getJSON("/~lbaw1531/final/api/product/add-to-wishlist.php", {id: movieid}, function(data) {
			if (data == 'success') {
				$('#success-wishlist').fadeIn();
				$('.close').delay(4000).queue(function() {
					$(this).click().dequeue();
				});
			}
			else if (data =='login') {
				$('#login-wishlist').fadeIn();
				$('.close').delay(4000).queue(function() {
					$(this).click().dequeue();
				});
			}
			else {
				$('#failed-wishlist').fadeIn();
				$('.close').delay(4000).queue(function() {
					$(this).click().dequeue();
				});
			}
		});
	});
});