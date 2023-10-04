<?php
error_reporting(0);

include_once '../home/db/session.class.php';
session::start();

if (($_SESSION['countdown_time'] > 0 )) {
  sleep(1);
    
  $seconds =$_SESSION['countdown_time'] = $_SESSION['countdown_time'] -1;
// Change this to your desired number of seconds

// Calculate minutes and seconds
$minutes = floor($seconds / 60);
$remainingSeconds = $seconds % 60;

// Display the result

echo " $minutes:$remainingSeconds ";



}if ($_SESSION['countdown_time'] == 0 ){
  echo "))TIME OVER-XX";
  $_SESSION = array();

// Destroy the session
session::destroy();
setcookie("team_id", "", time() - 3600, "/");
setcookie("PHPSESSID", "", time() - 3600, "/");

// Redirect to a different page after logout
// Replace with your desired redirect URL
exit;

}
