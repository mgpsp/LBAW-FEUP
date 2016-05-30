<?php

	function getCreditCard($email) {
	    global $conn;
	    $stmt = $conn->prepare("SELECT paymentinformation.paymentinformationid, creditcardnumber, cvc, expirationdate
	                            FROM member, paymentinformation
	                            WHERE email = ? AND paymentinformation.paymentinformationid = member.paymentinformationid");
	    $stmt->execute(array($email));
	    return $stmt->fetch();
  	}

  	function editCreditCard($id, $cardNumber, $cardExpiry, $cardCVC) {
  		global $conn;
  		$stmt = $conn->prepare("UPDATE paymentinformation
                              SET creditcardnumber = ?, expirationdate = ?, cvc = ?
                              WHERE paymentinformationid = ?");
     	$stmt->execute(array($cardNumber, $cardExpiry, $cardCVC, $id));
  	}
?>