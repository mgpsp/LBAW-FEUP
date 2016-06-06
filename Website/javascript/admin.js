function markOrderAs(purchaseid, status) {
	$.getJSON("/~lbaw1531/final/api/administration/mark-order.php", {purchaseid: purchaseid, status: status}, function(data) {
		if (data == 'success') {
			switch(status) {
				case "Dispatched":
					$('#order-status' + purchaseid).html('<b style="font-size: 20px">Status</b><br><span style="color: #449D44">Dispatched</span>');
					$('#dispatch-button' + purchaseid).html('<button type="button" class="btn btn-warning" onclick="markOrderAs(' + purchaseid + ', \'Not yet dispatched\')">Mark as not yet dispatched</button><br>\
												<button type="button" style="margin-top: 10px" class="btn btn-danger" onclick="markOrderAs(' + purchaseid + ', \'Canceled\')">Cancel order</button>');
					break;
				case "Not yet dispatched":
					$('#order-status' + purchaseid).html('<b style="font-size: 20px">Status</b><br><span style="color: #EC971F">Not yet dispatched</span>');
					$('#dispatch-button' + purchaseid).html('<button type="button" class="btn btn-success" onclick="markOrderAs(' + purchaseid + ', \'Dispatched\')">Mark as dispatched</button><br>\
												<button type="button" style="margin-top: 10px" class="btn btn-danger" onclick="markOrderAs(' + purchaseid + ', \'Canceled\')">Cancel order</button>');
					break;
				case "Canceled":
					$('#order-status' + purchaseid).html('<b style="font-size: 20px">Status</b><br><span style="color: #C9302C">Canceled</span>');
					$('#dispatch-button' + purchaseid).html('<button type="button" class="btn btn-success" onclick="markOrderAs(' + purchaseid + ', \'Dispatched\')">Mark as dispatched</button><br>\
												<button type="button" style="margin-top: 10px" class="btn btn-warning" onclick="markOrderAs(' + purchaseid +', \'Not yet dispatched\')">Mark as not yet dispatched</button>');
					break;
			}
		}
	});
}

$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip();

	$('.problem-solved').click(function(e) {
		e.preventDefault();
		var filename = $(this).attr("href");
		var obj = $(this);
		$.getJSON("/~lbaw1531/final/api/administration/delete-file.php", {file: filename}, function(data) {
			if (data == 'success') {
				obj.parent().parent().fadeTo(400, 0, function () { 
        			$(this).remove();
    			});
			}
		});
	});
	
	$('.user-delete').click(function(e) {
		e.preventDefault();
		var file = $(this).attr("href");
		var obj = $(this);
		$.getJSON("/~lbaw1531/final/api/administration/delete-user.php", {id: file}, function(data) {
			if (data == 'success') {
				obj.parent().parent().fadeTo(400, 0, function () { 
        			$(this).remove();
    			});
			}
		});
	});

	$('.studio-delete').click(function(e) {
		e.preventDefault();
		var studioid = $(this).attr("href");
		var obj = $(this);
		$.getJSON("/~lbaw1531/final/api/administration/delete-studio.php", {id: studioid}, function(data) {
			console.log(data);
			if (data == 'success') {
				obj.parent().parent().fadeTo(400, 0, function () { 
        			$(this).remove();
    			});
			}
			else {
				$('.alert').remove();
				$('#failed-delete-studio').append('<div class="alert alert-danger">\
	        										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
	        										<strong>Error!</strong> Studio is being referenced in at least one movie.\
    											</div>');
			}
		});
	});

	$('.carousel-delete').click(function(e) {
		e.preventDefault();
		var carouselid = $(this).attr("href");
		var obj = $(this);
		$.getJSON("/~lbaw1531/final/api/administration/delete-carousel.php", {id: carouselid}, function(data) {
			if (data == 'success') {
				obj.parent().parent().fadeTo(400, 0, function () { 
        			$(this).remove();
    			});
			}
		});
	});

	$('.user-ban').click(function(e) {
		e.preventDefault();
		var userid = $(this).attr("href");
		var obj = $(this);
		$.getJSON("/~lbaw1531/final/api/administration/ban-user.php", {id: userid}, function(data) {
			if (data == 'success') {
				$('.alert').remove();
				$('#failed-delete-studio').append('<div class="alert alert-success">\
	        										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
	        										<strong>Success!</strong> User banned.\
    											</div>');
			}
		});
	});

	$('.user-unban').click(function(e) {
		e.preventDefault();
		var userid = $(this).attr("href");
		var obj = $(this);
		$.getJSON("/~lbaw1531/final/api/administration/unban-user.php", {id: userid}, function(data) {
			if (data == 'success') {
				$('.alert').remove();
				$('#failed-delete-studio').append('<div class="alert alert-success">\
	        										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>\
	        										<strong>Success!</strong> User unbanned.\
    											</div>');
			}
		});
	});
});