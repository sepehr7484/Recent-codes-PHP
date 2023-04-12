<?php
// Define Seesion

// session_start();

// $_SESSION[$name]

$session_name = "user";
$session_value = "Ali Sheikh";

session_start();


// if( isset($_SESSION[$session_name]) ) {
//     echo "Session '" . $session_name . "' is set!<br>";
//     echo "Value is: " . $_SESSION[$session_name];
// } else {
//     $_SESSION[$session_name] = $session_value;
//     echo "Session Started";
// }



// Delete Session

// remove all session variables
session_unset();

// destroy the session
session_destroy(); 

if( isset($_SESSION[$session_name]) ) {
    echo "Session '" . $session_name . "' is set!<br>";
    echo "Value is: " . $_SESSION[$session_name];
} else {
    echo "Session Destroy";
}