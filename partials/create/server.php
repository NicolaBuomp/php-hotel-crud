<?php

// Connection DB

include_once __DIR__ . '/../data/data.php';

if (empty($_POST['room_number']) || empty($_POST['beds']) || empty($_POST['floor'])) {
    die ( 'ID non corretto' );
}

$id_room = $_POST['id'];

$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

//Query
$sql = "INSERT INTO `stanze` (`room_number`, `beds`, `floor`, `created_at`, `updated_at`)
VALUES (?,?,?, NOW(), NOW());";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iii', $room_number, $beds, $floor);
$stmt->execute();

if ( $stmt && $stmt->insert_id ) {
    $id_number = $stmt->inser_id;
    header("Location: $base_path" . "show-page.php?id=$id_number");
} else {
    die('Room creation error');
}

//Close Connection
$conn->close();
