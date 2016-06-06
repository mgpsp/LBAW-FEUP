<?php

	function getOrders($email, $offset) {
	    global $conn;
	    $stmt = $conn->prepare(sprintf("SELECT dateofpurchase, price, purchaseid, status
	                            FROM member, purchase
	                            WHERE email = ? AND purchase.memberid = member.memberid
	                            ORDER BY dateofpurchase DESC
	                            LIMIT 5 OFFSET %d", $offset));
	    $stmt->execute(array($email));
	    $orders = $stmt->fetchAll();

	    foreach($orders as $key => $order) {
	      $stmt = $conn->prepare("SELECT movie.movieid, movie.name, movie.imagepath, format.name as format, price, quantity
	                              FROM purchasemovie, movie, format
	                              WHERE purchasemovie.purchaseid = ? AND purchasemovie.movieid = movie.movieid AND movie.formatid = format.formatid");
	      $stmt->execute(array($order['purchaseid']));
	      $movies = $stmt->fetchAll();
	      $orders[$key]['movies'] = $movies;
	    }
	    return $orders;
	  }

	  function getAllOrders() {
	  	global $conn;
	    $stmt = $conn->prepare("SELECT dateofpurchase, price, purchaseid, member.email, status
	                            FROM purchase, member
	                            WHERE member.memberid = purchase.memberid
	                            ORDER BY dateofpurchase DESC");
	    $stmt->execute();
	    $orders = $stmt->fetchAll();

	    foreach($orders as $key => $order) {
	      $stmt = $conn->prepare("SELECT movie.movieid, movie.name, movie.imagepath, format.name as format, price, quantity
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

	  function addOrder($memberid, $price, $date, $movies) {
	  	global $conn;
	    $stmt = $conn->prepare("INSERT INTO purchase(dateofpurchase, price, memberid) VALUES(?, ?, ?) RETURNING purchaseid");
	    $stmt->execute(array($date, $price, $memberid));
	    $id = $stmt->fetch();

	    foreach($movies as $movie) {
	    	$stmt = $conn->prepare("INSERT INTO purchasemovie(purchaseid, movieid, quantity) VALUES(?, ?, ?)");
	   		$stmt->execute(array($id['purchaseid'], $movie['movieid'], $movie['quantity']));
	    }
	  }

	  function markOrderAs($purchaseid, $status) {
	  	global $conn;
	    $stmt = $conn->prepare("UPDATE purchase
	    						SET status = ?
	    						WHERE purchaseid = ?");
	    $stmt->execute(array($status, $purchaseid));
	    return 'success';
	  }
?>