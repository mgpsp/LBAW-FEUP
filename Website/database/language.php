<?php

	function getLanguages() {
		global $conn;
	    $stmt = $conn->prepare("SELECT * FROM language");
	    $stmt->execute();
	    return $stmt->fetchAll();
	}

	function getLanguageByName($name) {
		global $conn;
	    $stmt = $conn->prepare("SELECT languageid
	    						FROM language
	    						WHERE name = ?");
	    $stmt->execute(array($name));
	    $languageid = $stmt->fetch();

	    if ($languageid == null)
	    	$languageid = addLanguage($name);

	    return $languageid;
	}

	function addLanguage($name) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO language(name) VALUES (?) RETURNING languageid");
	    $stmt->execute(array($name));
	    return $stmt->fetch();
	}

	function addSubtitleToMovie($movieid, $languageid) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO subtitle(languageid, movieid) VALUES (?, ?)");
	    $stmt->execute(array($languageid, $movieid));
	}

	function addHISubtitleToMovie($movieid, $languageid) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO subtitlesforthehearingimpaired(languageid, movieid) VALUES (?, ?)");
	    $stmt->execute(array($languageid, $movieid));
	}

	function clearSubtitles($movieid) {
		global $conn;
	    $stmt = $conn->prepare("DELETE FROM subtitle WHERE movieid = ?");
	    $stmt->execute(array($movieid));
	}

	function clearHISubtitles($movieid) {
		global $conn;
	    $stmt = $conn->prepare("DELETE FROM subtitlesforthehearingimpaired WHERE movieid = ?");
	    $stmt->execute(array($movieid));
	}
?>