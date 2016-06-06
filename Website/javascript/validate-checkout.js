$(document).ready(function() {
	$('#checkout').on('submit', function(e) {
		if (!validNumber) {
			e.preventDefault();
			$(".input-group-addon").tooltip('enable').attr('title', "Enter a valid credit card number").tooltip('fixTitle').tooltip('show');
		}

		if (!validExpiry) {
			e.preventDefault();
			$("input[name='cardExpiry']").tooltip('enable').attr('title', "Enter a valid expiration date").tooltip('fixTitle').tooltip('show');
		}

		if (!validCVC) {
			e.preventDefault();
			$("input[name='cardCVC']").tooltip('enable').attr('title', "Enter a valid CV Code").tooltip('fixTitle').tooltip('show');
		}
	});
});