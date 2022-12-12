<?php

// Remove Cookie
if (isset($_COOKIE['User_Cookie'])) {
    unset($_COOKIE['User_Cookie']); 
    setcookie('User_Cookie', null, -1, '/'); 
    
}


// Destroy Session Data, Renew ID
session_start();
session_regenerate_id();
session_destroy();

// Redirect back to main page
header("location: /index.php");

?>