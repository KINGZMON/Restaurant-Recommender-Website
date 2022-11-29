<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "userregistration";

$connection = new mysqli($servername, $username, $password, $database);

if(isset($_POST['username'])){
  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from clients where name='".$uname."'AND pass='".$password."'limit 1";

  $result = $connection->query($sql);

  if(mysqli_num_rows($result)==1){
    if($uname == "admin"){
      header("location: /userregistration/index.php");
      exit;
    }
    else{
      header("location: ../index.html");
      exit;
    }
  
  }
  else{
    echo "You are not allowed to enter";
    exit;
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form in Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
  <div class="container">
    <form method="POST" action="#">
      <div class="form_input">
        <input type="text" name="username" placeholder="Enter Your User Name"/>
      </div>
      <div class="form_input">
        <input type="password" name="password" placeholder="Enter Your Password"/>
      </div>
      <input type="submit" name="submit" value="Login" class="btn-login"/>
    </form>
  </div>    
</body>
</html>

