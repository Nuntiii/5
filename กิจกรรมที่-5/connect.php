<?php

$host = "sql312.infinityfree.com";
$username = "if0_42882101";
$password = "Jj2PmfFZjv";
$dbname = "if0_42882101_db";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>