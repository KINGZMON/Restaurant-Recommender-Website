<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "userregistration";

$connection = new mysqli($servername, $username, $password, $database);


$name = "";
$pass = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST["name"];
  $pass = $_POST["pass"];

  do {
    if ( empty($name) || empty($pass) ) {
      $errorMessage = "All the fields are required";
      break;
    }
    
    $sql = "INSERT INTO clients (name, pass) " . 
           "VALUES ('$name', '$pass')";
    $result = $connection->query($sql);
    
    if(!$result) {
      $errorMessage = "Invalid query: " . $connection->error;
      break;
    }

    $name = "";
    $pass = "";

    $successMessage = "Client added correctly";

    header("location: /userregistration/index.php");
    exit;

  } while (false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Users Registration</title>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container my-5">
      <h2>New Client</h2>

      <?php
      if ( !empty($errorMessage) ) {
        echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
          <strong>$errorMessage</strong>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
      }
      ?>

      <form method="post">
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Name</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Pass</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="pass" value="<?php echo $pass; ?>">
          </div>
        </div>

        <?php
        if ( !empty($successMessage) ) {
          echo"
          <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismissible='alert' aria-label='Close'></button>
              </div>
            </div>
          </div>
          ";
        }
        ?>

        <div class="row mb-3">
          <div class="offset-sm-3 col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="/userregistration/index.php" role="button">Cancel</a>
          </div>
        </div>
      </form>
  </div>
</body>
</html>