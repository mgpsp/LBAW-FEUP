$(document).ready(function() {
	var validNumber = true;
	var validExpiry = true;
	var validCVC = true;

	$("input[name='cardNumber']").on("change paste keyup", function() {
   		var cardNumber = $("input[name='cardNumber']").val();
	    var re = new RegExp("(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})");
	    validNumber = re.test(cardNumber);
	    if (!validNumber && cardNumber != "")
	    	$("input[name='cardNumber']").css('color', 'red');
	    else
	    	$("input[name='cardNumber']").css('color', '#888');
	});

	$("input[name='cardExpiry']").on("change paste keyup", function() {
   		var cardExpiry = $("input[name='cardExpiry']").val();
	    var re = new RegExp("^[0-9]{2}[\/][0-9]{2}$");
	    validExpiry = re.test(cardExpiry);
	    if (!validNumber && cardExpiry != "")
	    	$("input[name='cardExpiry']").css('color', 'red');
	    else
	    	$("input[name='cardExpiry']").css('color', '#888');
	});

	$("input[name='cardCVC']").on("change paste keyup", function() {
   		var cardCVC = $("input[name='cardCVC']").val();
	    var re = new RegExp("^[0-9]{3}$");
	    validCVC = re.test(cardCVC);
	    if (!validCVC && cardCVC != "")
	    	$("input[name='cardCVC']").css('color', 'red');
	    else
	    	$("input[name='cardCVC']").css('color', '#888');
	});

	$('#changeCC').on('submit', function(e) {
		if (!validNumber || !validExpiry || !validCVC)
			e.preventDefault();
	});
	
});