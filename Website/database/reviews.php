<?php

	function getMovieReviews($movieid, $offset) {
		global $conn;
		$stmt = $conn->prepare(sprintf("SELECT title, description, rating, review.date, member.firstname, member.lastname, review.memberid, reviewid
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

	function deleteReview($reviewid) {
		global $conn;
		$stmt = $conn->prepare("DELETE FROM review
								WHERE reviewid = ?");
		$stmt->execute(array($reviewid));
	}

	function editReview($rating, $title, $review, $reviewid) {
		global $conn;
		$stmt = $conn->prepare("UPDATE review
								SET title = ?, description = ?, rating = ?
								WHERE reviewid = ?");
		$stmt->execute(array($title, $review, $rating, $reviewid));
	}

	function getUserReviews($memberid, $offset) {
		global $conn;
		$stmt = $conn->prepare(sprintf("SELECT title, review.description, rating, review.date, movie.name AS moviename, movie.movieid, reviewid
								FROM review, movie
								WHERE review.memberid = ? AND movie.movieid = review.movieid
								ORDER BY review.date DESC
								LIMIT 10 OFFSET %d", $offset));
		$stmt->execute(array($memberid));
	    return $stmt->fetchAll();
	}

	function getTotalUserReviews($memberid) {
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM review
								WHERE review.memberid = ?");
		$stmt->execute(array($memberid));
	    $rev = $stmt->fetchAll();
	    return count($rev);
	}

?>