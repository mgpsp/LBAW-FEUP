<?php
    function getBillingAddress($email) {
        global $conn;
        $stmt = $conn->prepare("SELECT billinginformation.billinginformationid, address, fullname, billinginformation.countryid, city.name AS city, country.name AS country, postcode
                                FROM member, billinginformation, city, country
                                WHERE email = ? AND billinginformation.billinginformationid = member.billinginformationid
                                                AND city.cityid = billinginformation.cityid
                                                AND country.countryid = billinginformation.countryid");
        $stmt->execute(array($email));
        return $stmt->fetch();
    }

    function editBillingAddress($id, $fullname, $address, $cityid, $postcode, $countryid) {
        global $conn;
        $stmt = $conn->prepare("UPDATE billinginformation
                                SET fullname = ?, address = ?, cityid = ?, postcode = ?, countryid = ?
                                WHERE billinginformationid = ?");
        $stmt->execute(array($fullname, $address, $cityid, $postcode, $countryid, $id));
    }

    function addBillingAddress($fullname, $address, $cityid, $postcode, $countryid) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO billinginformation(fullname, address, cityid, postcode, countryid) VALUES(?, ?, ?, ?, ?) RETURNING billinginformationid");
        $stmt->execute(array($fullname, $address, $cityid, $postcode, $countryid));
        return $stmt->fetch();
    }
?>