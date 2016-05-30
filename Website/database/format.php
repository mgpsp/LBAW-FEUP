<?php

	function getFormats() {
		global $conn;
	    $stmt = $conn->prepare("SELECT formatid, name
	                            FROM format");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}

?>