<?php

    // Form input names
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $password = $_POST['Password-Final'];


    // Database Connection
    // (!) Database Name
    $conn = new mysqli('localhost', 'root', '', 'users'); 

    if($conn->connect_error){
        die('Connection Failed : '. $conn->connect_error);
    }
    else{
        // If Fields are empty
        if ( empty($email) || empty($username) || empty($password) ){
            exit("All the fields are required");
        }
        // If input username is admin (not allowed)
        else if($username == "admin"){
            exit("Invalid Username!");
        }
        // (!) Table Name
        $stmt = $conn->prepare("insert into user_table(email, username, password) values(?, ?, ?)");

        // types of params
        $stmt->bind_param("sss", $email, $username, $password);

        // execute db query
        $stmt->execute();
        
        $stmt->close();
        $conn->close();

        header("location: ../login.html");
        exit;
    }
?>

