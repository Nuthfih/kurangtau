<?php
$servername = "localhost";
$username = "root"; // Default username for Laragon
$password = ""; // Default password for Laragon
$dbname = "pronlen_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>