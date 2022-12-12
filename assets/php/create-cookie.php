<?php

// Creating session Cookie for root directory.
// Stores username, obtained from login.php
setcookie("User_Cookie", $uname, 0, '/');





// $arr_cookie_options = array (
//     'expires' => 0,
//     'path' => '/',
//     'domain' => '', 
//     'secure' => true, 
//     'httponly' => true, 
//     'samesite' => 'None' 
//     );
// setcookie('User_Cookie', $uname, $arr_cookie_options); 


?>