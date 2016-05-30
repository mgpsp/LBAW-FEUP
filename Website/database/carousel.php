<?php

	function getCarouselMovies() {
		global $conn;
	    $stmt = $conn->prepare("SELECT carousel.movieid, carousel.imagepath, movie.name
	                            FROM carousel, movie
	                            WHERE carousel.movieid = movie.movieid");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}

?>