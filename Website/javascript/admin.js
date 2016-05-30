$(document).ready(function() {
	deleteUserAndMovie();
});

function deleteUserAndMovie() {
	$('.movie-delete').click(function(e) {
		e.preventDefault();
		var movieid = $(this).attr("href");
		var obj = $(this);
		$.getJSON("/~lbaw1531/final/api/administration/delete-movie.php", {id: movieid}, function(data) {
			if (data == 'success') {
				obj.parent().parent().fadeTo(400, 0, function () { 
        			$(this).remove();
    			});
			}
		});
	});

	$('.user-delete').click(function(e) {
		e.preventDefault();
		var userid = $(this).attr("href");
		var obj = $(this);
		$.getJSON("/~lbaw1531/final/api/administration/delete-user.php", {id: userid}, function(data) {
			if (data == 'success') {
				obj.parent().parent().fadeTo(400, 0, function () { 
        			$(this).remove();
    			});
			}
		});
	});
}