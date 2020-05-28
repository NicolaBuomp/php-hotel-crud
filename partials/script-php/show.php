<?php
include dirname(__DIR__) . '/data/data.php';

$id_room = $_GET['id'];

$sql = "SELECT *
        FROM `stanze`
        WHERE `id` = $id_room";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
} elseif ($result) {
    echo 'No results.';
} else {
    echo 'Query error.';
}

$conn->close();