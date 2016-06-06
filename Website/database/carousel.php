<?php

	function getCarouselMovies() {
		global $conn;
	    $stmt = $conn->prepare("SELECT carouselid, carousel.movieid, carousel.imagepath, movie.name
	                            FROM carousel, movie
	                            WHERE carousel.movieid = movie.movieid");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}

	function addMovieToCarousel($movieid, $image) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO carousel(movieid, imagepath) VALUES (?, ?)");
	    $stmt->execute(array($movieid, $image));
	}

	function deleteFromCarousel($id) {
		global $conn;
	    $stmt = $conn->prepare("DELETE FROM carousel
	    						WHERE carouselid = ?");
	    $stmt->execute(array($id));
	    return 'success';
	}

?>