<?php

	function getPersonByName($name) {
		global $conn;
	    $stmt = $conn->prepare("SELECT personid
	    						FROM person
	    						WHERE name = ?");
	    $stmt->execute(array($name));
	    $personid = $stmt->fetch();

	    if ($personid == null)
	    	$personid = addPerson($name);

	    return $personid;
	}

	function addPerson($name) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO person(name) VALUES (?) RETURNING personid");
	    $stmt->execute(array($name));
	    return $stmt->fetch();
	}

	function addActorToMovie($movieid, $personid) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO movieactor(movieid, personid) VALUES (?, ?)");
	    $stmt->execute(array($movieid, $personid));
	}

	function clearActors($movieid) {
		global $conn;
	    $stmt = $conn->prepare("DELETE FROM movieactor WHERE movieid = ?");
	    $stmt->execute(array($movieid));
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