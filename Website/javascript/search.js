$(document).ready(function() {
	$(document).click(function() {
	   $("#search-results").css({
	     'opacity' : '0',
	     'pointer-events' : 'none',
	     'z-index' : '1'
	   });
	 });

	$("input[type='search']").on("change paste keyup", function() {
	    var text = $("input[type='search']").val();
	    
	    if (text.length > 0) {
	    	$("#search-results").css({
		     'opacity' : '1',
		     'pointer-events' : 'auto',
		     'z-index' : '1'
		   });

	    	$.getJSON("/~lbaw1531/final/api/common/search.php", {text: text}, function(data) {
		    	if (data != "error") {
		    		$('.search-result').remove();
		    		$('#search-results').append('<ul class="list-group">');
		    		limit = data.length;
		    		if (limit > 10)
		    			limit = 8;
		    		for (var i = 0; i < limit; i++)
		    			$('#search-results').append('<li class="list-group-item search-result">\
		    											<a href="/~lbaw1531/final/pages/product/?id=' + data[i]['movieid'] + '">\
		    												<img style="margin-right: 7px" width=30 height=44 src="/~lbaw1531/final/' + data[i]['imagepath'] + '"></img>\
		    											</a>\
		    											<a href="/~lbaw1531/final/pages/product/?id=' + data[i]['movieid'] + '">'+ data[i]['name'] + '</a>\
		    										</li>');
		    		$('#search-results').append('</ul>');
		    	}
			});
	    }
	    else {
	    	$("#search-results").css({
		     'opacity' : '0',
		     'pointer-events' : 'none',
		     'z-index' : '1'
		   });
	    }
	    
	});
});