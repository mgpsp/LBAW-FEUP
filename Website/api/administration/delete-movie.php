<?php
  include_once('../../config/init.php');
  include_once('../add-to-log.php');
  include_once($BASE_DIR .'database/movies.php');

  if(!isset($_SESSION['admin'])) {
    $_SESSION['error_messages'] = "Login to delete movie.";
    header("Location: $BASE_URL");
    exit;
  }

  try {
  	deleteMovie($_GET['id']);
  } catch (PDOException $e) {
    sendToLog("delete_movie", $e->getMessage());
    $_SESSION['error_messages'] = "Couldn't delete movie.";
    header("Location: $BASE_URL");
    exit;
  }

  $_SESSION['success_messages'] = "Movie deleted.";
  header("Location: $BASE_URL");
?>