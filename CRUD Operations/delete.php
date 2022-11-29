<?php

// Prevent direct access to this file (else poses security gap)
if(!isset($_SERVER['HTTP_REFERER'])){
  // redirect them to your desired location
  header('location: ../index.html');
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

header("location: index.php");
exit;
?>