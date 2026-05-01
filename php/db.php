<?php
$servername = "localhost";
$username = "root";
$password = ""; // default in XAMPP
$database = "gameversex_db";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
