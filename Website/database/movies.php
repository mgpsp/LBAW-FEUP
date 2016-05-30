<?php

	function getAllMovies() {
		global $conn;
	    $stmt = $conn->prepare("SELECT movieid, movie.name, movie.formatid, format.name AS formatname, EXTRACT(YEAR FROM releasedate) AS releasedate, price, imagepath, genreid
	                            FROM movie, format
	                            WHERE movie.formatID = format.formatID");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}

	function deleteMovie($movieid) {
		global $conn;
	    $stmt = $conn->prepare("DELETE FROM movie
	                            WHERE movieid = ?");
	    $stmt->execute(array($movieid));
	    return 'success';
	}

	function getMovieInfo($movieid) {
		global $conn;
		$stmt = $conn->prepare("SELECT movie.movieid, movie.name AS moviename, format.name AS formatname, description, price, studio.name AS studioname,
										region, numberofdiscs, imagepath, runtime, releasedate, classification, averagescore, language.name AS language, trailer
	                            FROM movie, format, studio, language
	                            WHERE movie.formatID = format.formatID AND movie.movieID = ? AND movie.studioID = studio.studioID AND movie.languageid = language.languageid");
	    $stmt->execute(array($movieid));
	    return $stmt->fetch();
	}

	function getMovieDirectors($movieid) {
		global $conn;
		$stmt = $conn->prepare("SELECT director.name
								FROM moviedirector, director
								WHERE moviedirector.movieID = ? AND director.personID = moviedirector.personID");
		$stmt->execute(array($movieid));
	    return $stmt->fetchAll();
	}

	function getMovieActors($movieid) {
		global $conn;
		$stmt = $conn->prepare("SELECT actor.name
								FROM movieactor, actor
								WHERE movieactor.movieID = ? AND actor.personID = movieactor.personID
								LIMIT 6");
		$stmt->execute(array($movieid));
	    return $stmt->fetchAll();
	}

	function getMovieSubtitles($movieid) {
		global $conn;
		$stmt = $conn->prepare("SELECT language.name
								FROM subtitle, language
								WHERE subtitle.movieID = ? AND language.languageID = subtitle.languageID");
		$stmt->execute(array($movieid));
	    return $stmt->fetchAll();
	}

	function getMovieHISubtitles($movieid) {
		global $conn;
		$stmt = $conn->prepare("SELECT language.name
								FROM subtitlesforthehearingimpaired, language
								WHERE subtitlesforthehearingimpaired.movieID = ? AND language.languageID = subtitlesforthehearingimpaired.languageID");
		$stmt->execute(array($movieid));
	    return $stmt->fetchAll();
	}

	function getMovieName($movieid) {
		global $conn;
		$stmt = $conn->prepare("SELECT movie.name AS moviename
	                            FROM movie
	                            WHERE movie.movieID = ?");
	    $stmt->execute(array($movieid));
	    return $stmt->fetch();
	}
?>