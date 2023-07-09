<?php
$servername = "localhost";
$dbname = "siakad";

// Create connection
$conn = mysqli_connect($localhost, '', '', $siakad);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>