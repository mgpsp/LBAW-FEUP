<?php

	function getMovieReviews($movieid, $offset) {
		global $conn;
		$stmt = $conn->prepare(sprintf("SELECT title, description, rating, review.date, member.firstname, member.lastname
								FROM review, member
								WHERE review.movieID = ? AND member.memberID = review.memberID
								ORDER BY review.date DESC
								LIMIT 10 OFFSET %d", $offset));
		$stmt->execute(array($movieid));
	    return $stmt->fetchAll();
	}

	function getTotalReviews($movieid) {
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM review
								WHERE review.movieID = ?");
		$stmt->execute(array($movieid));
	    $rev = $stmt->fetchAll();
	    return count($rev);
	}

	function addReview($userid, $rating, $title, $review, $movieid) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO review(title, description, rating, movieid, memberid) VALUES (?, ?, ?, ?, ?)");
		$stmt->execute(array($title, $review, $rating, $movieid, $userid));
	}

?>