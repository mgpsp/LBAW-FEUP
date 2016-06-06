<?php

	function getCartCost($id) {
		global $conn;
	    $stmt = $conn->prepare("SELECT totalcost
	                            FROM cart
	                            WHERE cart.cartid = ?");
	    $stmt->execute(array($id));
	    return $stmt->fetch();
	}

	function getUserCart($id) {
		global $conn;
	    $stmt = $conn->prepare("SELECT movie.movieid, movie.name, format.name AS format, movie.price, quantity, imagepath
	                            FROM moviecart, movie, format
	                            WHERE moviecart.cartid = ? AND format.formatid = movie.formatid AND moviecart.movieid = movie.movieid");
	    $stmt->execute(array($id));
	    return $stmt->fetchAll();
	}

	function deleteFromCart($movieid, $cartid) {
		global $conn;
	    $stmt = $conn->prepare("DELETE FROM moviecart
	                            WHERE cartid = ? AND movieid = ?");
	    $stmt->execute(array($cartid, $movieid));
	    return 'success';
	}

	function clearCart($id) {
		global $conn;
	    $stmt = $conn->prepare("DELETE FROM moviecart
	                            WHERE cartid = ?");
	    $stmt->execute(array($id));
	}

	function addToCart($cartid, $movieid, $quantity) {
		global $conn;
	    $stmt = $conn->prepare("INSERT INTO moviecart(cartid, movieid, quantity) VALUES (?, ?, ?)");
	    $stmt->execute(array($cartid, $movieid, $quantity));
	}

?>