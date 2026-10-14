<?php

$host = "db01.dbhost.dev";
$user = "user_455s2dhfy";
$password = "p455s2dhfy";
$database = "db_455s2dhfy";
$port = 5051;

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>