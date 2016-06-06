<?php

	function getDirectorByName($name) {
		global $conn;
	    $stmt = $conn->prepare("SELECT personid
	    						FROM director
	    						JOIN actor ON actor.name = director.name
	    						WHERE name = ?");
	    $stmt->execute(array($name));
	    $personid = $stmt->fetch();

	    if ($personid == null)
	    	$personid = addDirector($name);

	    return $personid;
	}

	function addDirector($name) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO director(name) VALUES (?) RETURNING personid");
	    $stmt->execute(array($name));
	    return $stmt->fetch();
	}

	function addDirectorToMovie($movieid, $personid) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO moviedirector(movieid, personid) VALUES (?, ?)");
	    $stmt->execute(array($movieid, $personid));
	}

	function clearDirectors($movieid) {
		global $conn;
	    $stmt = $conn->prepare("DELETE FROM moviedirector WHERE movieid = ?");
	    $stmt->execute(array($movieid));
	}
?>