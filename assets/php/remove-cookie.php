<?php

// Remove Cookie
if (isset($_COOKIE['User_Cookie'])) {
    unset($_COOKIE['User_Cookie']); 
    setcookie('User_Cookie', null, -1, '/'); 
    
}

// Redirect back to main page
header("location: /index.php");

?>