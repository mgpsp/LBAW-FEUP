<?php

	function getStudios() {
		global $conn;
	    $stmt = $conn->prepare("SELECT studioid, name
	                            FROM studio");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}

	function deleteStudio($id) {
		global $conn;
	    $stmt = $conn->prepare("DELETE FROM studio
	    						WHERE studioid = ?");
	    $stmt->execute(array($id));
	    return 'success';
	}

	function addStudio($name) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO studio(name) VALUES (?)");
	    $stmt->execute(array($name));
	}

?>