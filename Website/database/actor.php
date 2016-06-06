<?php

	function getActorByName($name) {
		global $conn;
	    $stmt = $conn->prepare("SELECT personid
	    						FROM actor
	    						JOIN director ON actor.name = director.name
	    						WHERE name = ?");
	    $stmt->execute(array($name));
	    $personid = $stmt->fetch();

	    if ($personid == null)
	    	$personid = addActor($name);

	    return $personid;
	}

	function addActor($name) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO actor(name) VALUES (?) RETURNING personid");
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
?>