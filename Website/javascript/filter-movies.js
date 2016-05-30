var movies, moviesToShow = [], filters = [];

function filterMovies() {
	var genres = filters['genre'];
	var formats = filters['format'];
	var dates1 = filters['date1'];
	var dates2 = filters['date2'];
	moviesToShow = [];

	if (genres.length != 0 && formats.length != 0 && dates1.length != 0) {
		for (i = 0; i < movies.length; i++) {
			if (genres.indexOf(movies[i]['genreid']) != -1 && formats.indexOf(movies[i]['formatid']) != -1) {
				for (j = 0; j < dates1.length; j++) {
					if (parseInt(movies[i]['releasedate']) >= dates1[j] && parseInt(movies[i]['releasedate']) <= dates2[j]) {
						moviesToShow.push(movies[i]);
						break;
					}
				}
			}	
		}
	}
	else if (genres.length != 0 && formats.length != 0 && dates1.length == 0) {
		for (i = 0; i < movies.length; i++) {
			if (genres.indexOf(movies[i]['genreid']) != -1 && formats.indexOf(movies[i]['formatid']) != -1) {
				moviesToShow.push(movies[i]);
			}	
		}
	}
	else if (genres.length != 0 && formats.length == 0 && dates1.length == 0) {
		for (i = 0; i < movies.length; i++) {
			if (genres.indexOf(movies[i]['genreid']) != -1) {
				moviesToShow.push(movies[i]);
			}	
		}
	}
	else if (genres.length == 0 && formats.length != 0 && dates1.length == 0) {
		for (i = 0; i < movies.length; i++) {
			if (formats.indexOf(movies[i]['formatid']) != -1) {
				moviesToShow.push(movies[i]);
			}	
		}
	}
	else if (genres.length == 0 && formats.length == 0 && dates1.length != 0) {
		for (i = 0; i < movies.length; i++) {
			for (j = 0; j < dates1.length; j++) {
				if (parseInt(movies[i]['releasedate']) >= dates1[j] && parseInt(movies[i]['releasedate']) <= dates2[j]) {
					moviesToShow.push(movies[i]);
					break;
				}
			}
		}
	}
	else if (genres.length != 0 && formats.length == 0 && dates1.length != 0) {
		for (i = 0; i < movies.length; i++) {
			if (genres.indexOf(movies[i]['genreid']) != -1) {
				for (j = 0; j < dates1.length; j++) {
					if (parseInt(movies[i]['releasedate']) >= dates1[j] && parseInt(movies[i]['releasedate']) <= dates2[j]) {
						moviesToShow.push(movies[i]);
						break;
					}
				}
			}	
		}
	}
	else if (genres.length == 0 && formats.length != 0 && dates1.length != 0) {
		for (i = 0; i < movies.length; i++) {
			if (formats.indexOf(movies[i]['formatid']) != -1) {
				for (j = 0; j < dates1.length; j++) {
					if (parseInt(movies[i]['releasedate']) >= dates1[j] && parseInt(movies[i]['releasedate']) <= dates2[j]) {
						moviesToShow.push(movies[i]);
						break;
					}
				}
			}	
		}
	}
	else if (genres.length == 0 && formats.length == 0 && dates1.length == 0)
		moviesToShow = movies;
	
	if (moviesToShow.length > 15)
		limit = 15;
	else
		limit = moviesToShow.length;

	n_pages = Math.ceil(moviesToShow.length/14);
}

$(document).ready(function() {
	$.getJSON("/~lbaw1531/final/api/shop/get-movies.php", function(data) {
		movies = data;
		filters['genre'] = [];
		filters['format'] = [];
		filters['date1'] = [];
		filters['date2'] = [];
		filterMovies();
		changePage(1);
	});

	$('.genre').click(function() {
		var genreid = $(this).val();
		if ($(this).is(':checked'))
			filters['genre'].push(parseInt(genreid));
		else {
			var index = filters['genre'].indexOf(parseInt(genreid));
			filters['genre'].splice(index, 1);
		}
		filterMovies();
		changePage(1);
	});

	$('.format').click(function() {
		var formatid = $(this).val();
		if ($(this).is(':checked'))
			filters['format'].push(parseInt(formatid));
		else {
			var index = filters['format'].indexOf(parseInt(formatid));
			filters['format'].splice(index, 1);
		}
		filterMovies();
		changePage(1);
	});

	$('.date').click(function() {
		var val = $(this).val();
		var rdate1, rdate2;
		switch(val) {
			case "10":
				rdate1 = 2010;
				rdate2 = new Date().getFullYear();
				break; 
			case "0009":
				rdate1 = 2000;
				rdate2 = 2009;
				break;
			case "9099":
				rdate1 = 1990;
				rdate2 = 1999;
				break;
			case "8089":
				rdate1 = 1980;
				rdate2 = 1989;
				break;
			case "7079":
				rdate1 = 1970;
				rdate2 = 1979;
				break;
			case "6069":
				rdate1 = 1960;
				rdate2 = 1969;
				break;
			case "5059":
				rdate1 = 1950;
				rdate2 = 1959;
				break;
			case "49":
				rdate1 = 1700;
				rdate2 = 1949;
				break;
		}
		if ($(this).is(':checked')) {
			filters['date1'].push(rdate1);
			filters['date2'].push(rdate2);
		}
		else {
			var index1 = filters['date1'].indexOf(rdate1);
			var index2 = filters['date2'].indexOf(rdate2);
			filters['date1'].splice(index1, 1);
			filters['date2'].splice(index2, 1);
		}
		filterMovies();
		changePage(1);
	});
});

