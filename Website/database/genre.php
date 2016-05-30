<?php

	function getGenres() {
		global $conn;
	    $stmt = $conn->prepare("SELECT genreid, name
	                            FROM genre");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}

?>