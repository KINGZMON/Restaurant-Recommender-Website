<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$connection = new mysqli($servername, $username, $password, $database);

if(isset($_POST['username'])){
  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from user_table where Username='".$uname."'AND Password='".$password."'limit 1";

  $result = $connection->query($sql);

  if(mysqli_num_rows($result)==1){
    if($uname == "admin"){
      header("location: index.php");
      exit;
    }
    else{
      header("location: ../index.html");
      exit;
    }
  
  }
  else{
    echo "The input username or password are incorrect";
    exit;
  }
}
?>


