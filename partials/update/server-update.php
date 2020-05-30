<?php

// Connection DB
include_once __DIR__ . '/../data/data.php';

// check id
if ( empty($_POST['id']) ) {
    die('ID non esistente');
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

$sql = "UPDATE `stanze`
SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor
WHERE `id` = $id_room";


$result = $conn->query($sql);

if ( $result && $conn->affected_rows > 0 ) {
    header("Location: $base_path/show-page.php?id=$id_room");

} elseif ( $result ) {
    die('Nessuna room trovata');

} else {
    die('Si è verificato un errore');

}



//Close Connection
$conn->close();

