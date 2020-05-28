<?php
include dirname(__DIR__) . '/data/data.php';

$sql = "SELECT `id`, `room_number` 
        FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $rooms = [];
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }
} elseif ($result) {
    echo 'No results.';
} else {
    echo 'Query error.';
}

$conn->close();