<?php

$host = "sql206.infinityfree.com";
$username = "if0_42361719";
$password = "te5ZSck6ES8O";
$dbname = "if0_42361719_db";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>