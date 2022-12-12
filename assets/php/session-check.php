<?php

    // Start the session
    session_start();

    // Check if session has been created already
    if (!isset($_SESSION['CREATED'])) {
        $_SESSION['CREATED'] = time();

        //--- SESSION HIJACKING ---//
        // Set a random session ID
        $session_id = bin2hex(random_bytes(16));

        // Set the session ID in the session cookie
        $params = session_get_cookie_params();
        setcookie(session_name(), $session_id, $params['lifetime'], $params['path'], $params['domain'], $params['secure'], $params['httponly']);

        // Set the session ID in the session data
        $_SESSION['session_id'] = $session_id;

        // Regenerate the session ID periodically to prevent session fixation attacks
        if (mt_rand(1, 100) <= 5) {
            session_regenerate_id(true);
        }

        // Check the session ID in the session data against the session ID in the session cookie
        if (isset($_SESSION['session_id']) && isset($_COOKIE[session_name()]) && $_SESSION['session_id'] !== $_COOKIE[session_name()]) {
            session_destroy();
            session_start();
        }

        //--- CROSS SITE REQUEST FORGERY ---//
        // Set the CSRF token in the session data
        $_SESSION['csrf_token'] = $csrf_token;

        // Check the CSRF token in the request against the CSRF token in the session data
        if (isset($_POST['csrf_token']) && isset($_SESSION['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
            // The CSRF token is valid, process the request
            // (Future Implementations, when authentication using php sessions or similar features will be used)
        } else {
        // The CSRF token is invalid, reject the request
        http_response_code(401);
        echo "Error: Invalid CSRF token";
        }
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