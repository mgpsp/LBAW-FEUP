function changePage(page) {
	$(".shop-movie").remove();
	$(".no-movies").remove();
	$(".loading").remove();
	$("#movies").append('<div class="text-center loading"><img src="/~lbaw1531/final/images/spinner.gif" width=400 height=300></img>');

	var code = "";
	for (var i = 0; i < limit; i++) {
		var product = moviesToShow[(page-1)*limit+i];
		if (product == undefined)
			break;
		code += '<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 shop-movie">\
			<a href="/~lbaw1531/final/pages/product/?id=' + product['movieid'] + '"><img alt="' + product['name'] + ' cover" src="/~lbaw1531/final/' + product['imagepath'] + '" width=154 height=223></img></a>\
			<a href="/~lbaw1531/final/pages/product/?id=' + product['movieid'] + '" title="' + product['name'] + '"><h4 class="shop-movie-title">' + product['name'] + '</h4></a>\
			<small>' + product['formatname'] + '</small>\
			<h5 class="shop-price">' + product['price'] + '€</h5>\
		</div>';
	}
	$(".loading").remove();
	$("#movies").append(code);
	if (moviesToShow.length == 0)
		$("#movies").append('<div class="text-center no-movies" style="font-size: 22px">No movies in the selected category.</div>');

	var startpage = Math.max(1,page-2);
	var endpage = Math.min(n_pages,page+2);
	var dif = endpage - startpage;
	if (dif < 4) {
		if (startpage > 1)
			startpage -= Math.min(startpage-1,4-dif);
		else if (endpage < n_pages)
			endpage += Math.min(n_pages-endpage,4-dif);
	}

	$(".pagination").empty();
	if (page != startpage)
		$(".pagination").append(' \
		<li><a href="javascript:void(0)" onclick="changePage(1);">&laquo; First</a></li> \
		<li><a href="javascript:void(0)" onclick="changePage('+(page-1)+');"><</a></li>');
	else
		$(".pagination").append(' \
		<li class="hidden-xs disabled"><a>&laquo; First</a></li> \
		<li class="hidden-xs disabled"><a><</a></li>');
	
	for (var p=startpage; p <= endpage; p++) {
		if (p == page)
			$(".pagination").append('<li class="active"><a href="javascript:void(0)" onclick="changePage('+p+');">'+p+'</a></li>');
		else
			$(".pagination").append('<li><a href="javascript:void(0)" onclick="changePage('+p+');">'+p+'</a></li>');
	}
	
	if (page != endpage)
		$(".pagination").append(' \
		<li><a href="javascript:void(0)" onclick="changePage('+(page+1)+');">></a></li> \
		<li><a href="javascript:void(0)" onclick="changePage('+n_pages+');">Last &raquo;</a></li>');
	else
		$(".pagination").append(' \
		<li class="hidden-xs disabled"><a>></a></li> \
		<li class="hidden-xs disabled"><a>Last &raquo;</a></li>');
	
}