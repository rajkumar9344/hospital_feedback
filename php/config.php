<?php
$host = 'localhost';
$db   = 'patient_feedback'; // Your database name
$user = 'root';        // Your MySQL username
$pass = 'root';        // Your MySQL password

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
