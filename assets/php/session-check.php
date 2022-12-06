<?php

    // Start the session
    session_start();

    // Check if session has been created already
    if (!isset($_SESSION['CREATED'])) {
        $_SESSION['CREATED'] = time();
    } 
    // If session is older than 30mins, redirect to login.
    // (Can be tested by setting smaller timeframe eg. 30 (seconds), logging in as admin and trying edit.php or delete.php functions)
    else if (time() - $_SESSION['CREATED'] > 1800) {
        // Display alert, redirect user
        echo 
        "<script> 
            alert('Session Expired'); 
            window.location.href='/login.html';
        </script>";

        // session started more than 30 minutes ago
        session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
        $_SESSION['CREATED'] = time();  // update creation time
        return true;
    }   
    
?>  