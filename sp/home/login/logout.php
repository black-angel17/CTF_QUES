<?php 
include_once '../db/session.class.php';
session::start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session::destroy();
setcookie("team_id", "", time() - 3600, "/");
setcookie("PHPSESSID", "", time() - 3600, "/");

// Redirect to a different page after logout
header("Location: login.html"); // Replace with your desired redirect URL
exit;



?>