$(document).ready(function() {
	$('.add-review-form').on('submit', function(e) {
		var rating = document.getElementById("rating");
		var title = document.getElementById("title");
		var review = document.getElementById("review");
		var fill = document.getElementById("fillFields");

		if (rating.value == '0') {
			e.preventDefault();
			fill.style.display = 'block';
		}

		if (title.value == '') {
			e.preventDefault();
			fill.style.display = 'block';
		}

		if (review.value == '') {
			e.preventDefault();
			fill.style.display = 'block';
		}
	});
});