<?php

	function getAllMovies() {
		global $conn;
	    $stmt = $conn->prepare("SELECT movieid, movie.name, movie.formatid, format.name AS formatname, releasedate, price, imagepath, genreid, averagescore
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
		$stmt = $conn->prepare("SELECT movie.movieid, movie.name AS moviename, format.name AS formatname, movie.formatid, description, price, studio.name AS studioname, movie.studioid,
										region, numberofdiscs, imagepath, runtime, releasedate, classification, averagescore, language.name AS language, movie.languageid, trailer, stock, movie.genreid, genre.name AS genre
	                            FROM movie, format, studio, language, genre
	                            WHERE movie.formatid = format.formatid AND movie.movieid = ? AND movie.studioid = studio.studioid AND movie.languageid = language.languageid AND movie.genreid = genre.genreid");
	    $stmt->execute(array($movieid));
	    return $stmt->fetch();
	}

	function getMovieDirectors($movieid) {
		global $conn;
		$stmt = $conn->prepare("SELECT person.name
								FROM moviedirector, person
								WHERE moviedirector.movieID = ? AND person.personID = moviedirector.personID");
		$stmt->execute(array($movieid));
	    return $stmt->fetchAll();
	}

	function getMovieActors($movieid) {
		global $conn;
		$stmt = $conn->prepare("SELECT person.name
								FROM movieactor, person
								WHERE movieactor.movieID = ? AND person.personID = movieactor.personID
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

	function searchMovie($text) {
		global $conn;
		$name = '%' . $text . '%';
		$stmt = $conn->prepare("SELECT movie.movieid, movie.imagepath, movie.name, movie.price, format.name AS format
								FROM movie, format
								WHERE (to_tsvector('english', movie.description) @@ to_tsquery('english', ?) OR movie.name ILIKE ?)
								    AND format.formatID = movie.formatID");
		$stmt->execute(array($text, $name));
	    return $stmt->fetchAll();
	}

	function addMovie($classification, $synopsis, $imagePath, $name, $discs, $price, $region, $date, $runtime, $stock, $format, $studio, $genre, $language, $trailer) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO movie(classification, description, imagepath, name, numberofdiscs, price, region, releasedate, runtime, stock, formatid, studioid, genreid, languageid, trailer)
	    						VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
	    						RETURNING movieid");
	    $stmt->execute(array($classification, $synopsis, $imagePath, $name, $discs, $price, $region, $date, $runtime, $stock, $format, $studio, $genre, $language, $trailer));
	    return $stmt->fetch();
	}

	function editMovie($classification, $synopsis, $imagePath, $name, $discs, $price, $region, $date, $runtime, $stock, $format, $studio, $genre, $language, $trailer, $movieid) {
		global $conn;
	    $stmt = $conn->prepare("UPDATE movie
	    						SET classification = ?, description = ?, imagepath = ?, name = ?, numberofdiscs = ?, price = ?, region = ?, releasedate = ?, runtime = ?, stock = ?, formatid = ?, studioid = ?, genreid = ?, languageid = ?, trailer = ?
	    						WHERE movieid = ?");
	    $stmt->execute(array($classification, $synopsis, $imagePath, $name, $discs, $price, $region, $date, $runtime, $stock, $format, $studio, $genre, $language, $trailer, $movieid));
	}

	function decreaseStock($movieid, $value) {
		global $conn;
	    $stmt = $conn->prepare("UPDATE movie
	    						SET stock = stock - ?
	    						WHERE movieid = ? AND stock > 0");
	    $stmt->execute(array($value, $movieid));
	}

	function getFeaturedMovies() {
		global $conn;
	    $stmt = $conn->prepare("SELECT movie.imagepath, movie.name, movie.movieid
								FROM (SELECT movieid, COUNT(*) AS purchases FROM purchasemovie GROUP BY movieid) subquery, movie
								WHERE subquery.movieid = movie.movieid
								ORDER BY subquery.purchases DESC
								LIMIT 4");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}

	function getNewReleases() {
		global $conn;
	    $stmt = $conn->prepare("SELECT name, imagepath, movieid
	                            FROM movie
	                            ORDER BY releasedate DESC
	                            LIMIT 4");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}
?>