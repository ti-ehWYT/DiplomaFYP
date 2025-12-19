<?php
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "wfw";

// Ask MYSQLI to throw an exception every time it gets an error to avoid manually checking mysqli functions for error
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
}
?>