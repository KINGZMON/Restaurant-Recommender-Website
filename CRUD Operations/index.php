<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Users Registration</title>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container my-5">
      <h2>List of Clients</h2>
      <a class="btn btn-primary" href="../register.html" role="button">New Client</a>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th> 
            <th>Name</th> 
            <th>Pass</th>  
            <th>Created At</th>
            <th>Action</th>  
          </tr>
        </thead>
        <tbody>
          <?php

          // Prevent direct access to this file (else poses security gap)
          if(!isset($_SERVER['HTTP_REFERER'])){
            // redirect them to your desired location
            header('location: ../index.html');
            exit;
          }

          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "users";

          //Creating connection with database
          $connection = new mysqli($servername, $username, $password, $database);

          //Checking connection established correct or not
          if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
          }

          

          //Reading all data from database
          $sql = "SELECT * FROM user_table";
          $result = $connection->query($sql);

          //Check if the query has been executed correct or not
          if (!$result) {
            die("Invalid query: " . $connection->error);
          }

          //Read data of each row
          while($row = $result->fetch_assoc()) {
            echo "
            <tr>
            <td>$row[id]</td>
            <td>$row[Username]</td>
            <td>$row[Password]</td>
            <td>$row[Time]</td>
            <td>
              <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
              <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
            </td>
          </tr>
            ";
          }
          ?>

        </tbody>
    </table>
  </div>

</body>
</html>