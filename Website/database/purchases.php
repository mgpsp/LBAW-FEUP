<?php

	function getOrders($email, $offset) {
	    global $conn;
	    $stmt = $conn->prepare(sprintf("SELECT dateofpurchase, price, purchaseid
	                            FROM member, purchase
	                            WHERE email = ? AND purchase.memberid = member.memberid
	                            ORDER BY dateofpurchase DESC
	                            LIMIT 5 OFFSET %d", $offset));
	    $stmt->execute(array($email));
	    $orders = $stmt->fetchAll();

	    foreach($orders as $key => $order) {
	      $stmt = $conn->prepare("SELECT movie.movieid, movie.name, movie.imagepath, format.name as format, price
	                              FROM purchasemovie, movie, format
	                              WHERE purchasemovie.purchaseid = ? AND purchasemovie.movieid = movie.movieid AND movie.formatid = format.formatid");
	      $stmt->execute(array($order['purchaseid']));
	      $movies = $stmt->fetchAll();
	      $orders[$key]['movies'] = $movies;
	    }
	    return $orders;
	  }

	  function getTotalOrders($email) {
	  	global $conn;
	    $stmt = $conn->prepare("SELECT COUNT(*) AS count
	                            FROM member, purchase
	                            WHERE email = ? AND purchase.memberid = member.memberid");
	    $stmt->execute(array($email));
	    return $stmt->fetch();
	  }
?>