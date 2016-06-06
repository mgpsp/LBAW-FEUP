<?php

	function getWishlist($id) {
		global $conn;
	    $stmt = $conn->prepare("SELECT movie.movieid, imagepath, movie.name
	                            FROM movie, wishlist
	                            WHERE wishlist.memberid = ? AND wishlist.movieid = movie.movieid");
	    $stmt->execute(array($id));
	    return $stmt->fetchAll();
	}

	function addToWishlist($userid, $movieid) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO wishlist(memberid, movieid) VALUES (?, ?)");
		$stmt->execute(array($userid, $movieid));
		return 'success';
	}

	function deleteFromWishlist($userid, $movieid) {
		global $conn;
		$stmt = $conn->prepare("DELETE FROM wishlist
								WHERE memberid = ? AND movieid = ?");
		$stmt->execute(array($userid, $movieid));
		return 'success';
	}

	function isMovieInWishlist($userID, $movieid) {
		global $conn;
	    $stmt = $conn->prepare("SELECT *
	                            FROM wishlist
	                            WHERE memberid = ? AND movieid = ?");
	    $stmt->execute(array($userID, $movieid));
	    return ($stmt->fetch() == true);
	}

?>