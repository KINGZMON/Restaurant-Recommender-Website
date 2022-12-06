<?php

// Database Connection
// (!) Database Name
$connection = new mysqli('localhost', 'root', '', 'users'); 

if(isset($_POST['username'])){

  // Form input names
  $uname=$_POST['username'];
  $uname = stripcslashes($uname); // sqli protection
  $uname = mysqli_real_escape_string($connection, $uname); // sqli protection

  $password=$_POST['password'];
  $password = stripcslashes($password); // sqli protection
  $password = mysqli_real_escape_string($connection, $password); // sqli protection
  $encrypted_pass = substr(md5($password), 0, 20); // hash of user password (note: 20 is no. of characters cuz our database stores max 20 characters & hash is 32 characters long)

  // Find matching entry in DB
  $sql="select * from user_table where Username='".$uname."'AND Password='".$encrypted_pass."' limit 1";

  $result = $connection->query($sql);

  // IF Found
  if(mysqli_num_rows($result)==1){
    // Create session
    include '../assets/php/session-check.php';
    
    // If admin, redirect to editing page
    if($uname == "admin"){
      header("location: index.php");
      exit;
    }
    // If simple user, create cookie, redirect to main page.
    else{
      include '../assets/php/create-cookie.php';
      header("location: ../index.html");
      exit;
    }
  
  }
  // If not found
  else{
    echo "The input username or password are incorrect";
    exit;
  }
}
?>


