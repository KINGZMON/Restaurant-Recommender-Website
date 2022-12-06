<?php

    // Database Connection
    // (!) Database Name
    $conn = new mysqli('localhost', 'root', '', 'users');

    // Form input names
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $username = htmlspecialchars($username);

    $checkpassword = mysqli_real_escape_string($conn, $_POST['Password']);
    $password = mysqli_real_escape_string($conn, $_POST['Password-Final']);

    if($conn->connect_error){
        die('Connection Failed : '. $conn->connect_error);
    }
    else{
        // If Fields are empty
        if ( empty($email) || empty($username) || empty($checkpassword) || empty($password) ){
            exit("All the fields are required");
        }
        // If input username is admin (not allowed)
        else if($username == "admin"){
            exit("Invalid Username!");
        }
        // If password and confirm password do not match
        else if($checkpassword != $password){
            exit("Passwords do not match!");
        }

        // Checking if username taken
        $query = "select * from user_table where Username='".$username."'";
        $result = $conn->query($query);

        $numrows = mysqli_num_rows($result);
        if($numrows == 0){
            $encrypted_pass = md5($password); // get hash of password
        
            // (!) Table Name
            $stmt = $conn->prepare("insert into user_table(email, username, password) values(?, ?, ?)");

            // types of params
            $stmt->bind_param("sss", $email, $username, $encrypted_pass);

            // execute db query
            $stmt->execute();
    
            $stmt->close();
            $conn->close();

            header("location: ../login.html");
            exit;

        }
        else{
            exit("Username taken!");
        }
        
    }
?>

