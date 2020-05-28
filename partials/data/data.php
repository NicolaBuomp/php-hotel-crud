<?php

include __DIR__ . '../../../env.php';

$conn = new mysqli($server_name, $username, $password, $db_name);
if ($conn && $conn->connect_error) {
    die('Connection error');
}