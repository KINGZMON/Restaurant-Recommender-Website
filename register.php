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
        // (!) Table Name
        $stmt = $conn->prepare("insert into user_table(email, username, password) values(?, ?, ?)");

        // types of params
        $stmt->bind_param("sss", $email, $username, $password);

        // execute db query
        $stmt->execute();
        
        $stmt->close();
        $conn->close();

        header("location: login.html");
        exit;
    }


?>

