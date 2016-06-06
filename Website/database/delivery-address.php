<?php

	function getDeliveryAddress($email) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT address, fullname, city.name AS city, country.name AS country, deliveryadress.countryid, postcode
	                            FROM member, deliveryadress, city, country
	                            WHERE email = ? AND deliveryadress.deliveryadressid = member.deliveryadressid
	                                            AND city.cityid = deliveryadress.cityid
	                                            AND country.countryid = deliveryadress.countryid");
	    $stmt->execute(array($email));
	    return $stmt->fetch();
  	}

  	function editDeliveryAddress($id, $fullname, $address, $cityid, $postcode, $countryid) {
        global $conn;
        $stmt = $conn->prepare("UPDATE deliveryadress
                                SET fullname = ?, address = ?, cityid = ?, postcode = ?, countryid = ?
                                WHERE deliveryadressid = ?");
        $stmt->execute(array($fullname, $address, $cityid, $postcode, $countryid, $id));
    }

    function addDeliveryAddress($fullname, $address, $cityid, $postcode, $countryid) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO deliveryadress(fullname, address, cityid, postcode, countryid) VALUES(?, ?, ?, ?, ?) RETURNING deliveryadressid");
        $stmt->execute(array($fullname, $address, $cityid, $postcode, $countryid));
        return $stmt->fetch();
    }
?>