<?php
$servername = "127.0.0.1:4400";
$username = "kali";
$passwor = "kali";
$dbname = "test";

$conn = new mysqli($servername, $username, $passwor, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the team ID from the AJAX request
$teamId = $_GET['teamId'];

// Perform a database query to check if the team ID is in use
$sql = "SELECT * FROM `register` WHERE `team_id` = '$teamId'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
   
   echo  'use';
    
} else {
    // Team ID is not in use
   
    echo 'not';
}   

$conn->close();
?>
