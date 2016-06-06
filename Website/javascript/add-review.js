$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip();

	$("#show-help").on('click', function() {
		$('body').chardinJs('start');
	});
	
	$('.add-review-form').on('submit', function(e) {
		var rating = document.getElementById("rating");
		$(".add-review-stars").tooltip('disable');
		if (rating.value == '0') {
			e.preventDefault();
			$(".add-review-stars").tooltip('enable').attr('title', "Please rate the movie").tooltip('fixTitle').tooltip('show');
		}
	});
});