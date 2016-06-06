<?php

	function getCityIDByName($name) {
		global $conn;
		$stmt = $conn->prepare("SELECT cityid
	                            FROM city
	                            WHERE name = ?");
	    $stmt->execute(array($name));
	    return $stmt->fetch();
	}

	function addCity($name) {
		global $conn;
		$stmt = $conn->prepare("INSERT INTO city(name) VALUES (?) RETURNING cityid");
	    $stmt->execute(array($name));
	    return $stmt->fetch();
	}

?>