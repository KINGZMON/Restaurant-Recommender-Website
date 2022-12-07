<?php

// Check session for timeout
$is_expired = require '../assets/php/session-check.php';
if ($is_expired == "true"){
  exit;
}

// Prevent direct access to this file (else poses security gap)
if(!isset($_SERVER['HTTP_REFERER'])){
  // redirect them to your desired location
  header('location: ../index.php');
  exit;
}


if ( isset($_GET["id"]) ) {
  $id = $_GET["id"];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "users";

  $connection = new mysqli($servername, $username, $password, $database);

  $sql = "DELETE FROM user_table WHERE id=$id";
  $connection->query($sql);
}

header("location: admin_panel.php");
exit;
?>