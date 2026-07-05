<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "joshapp_db";

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>