<?php

	function getCountries() {
		global $conn;
	    $stmt = $conn->prepare("SELECT * FROM country");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}

?>