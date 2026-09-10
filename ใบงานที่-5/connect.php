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

// แสดงข้อความเฉพาะตอนเปิด connect.php โดยตรง
if (basename($_SERVER['SCRIPT_FILENAME']) === 'connect.php') {
    echo "เชื่อมต่อสำเร็จ น.ส.นันทิชา มานํ้าเที่ยง";
}

?>