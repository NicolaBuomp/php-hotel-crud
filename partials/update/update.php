<?php

// Connection DB

include_once __DIR__ . '/../data/data.php';

if ( !empty($_GET['id']) ) {

    $id_room = $_GET['id'];

    // Q U E R Y
    $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
    $result = $conn->query($sql);

    if ( $result && $result->num_rows > 0 ) {

        $room = $result->fetch_assoc();

    }

} else {
    die ('Impossibile ottenere stanza da editare');
}



//Close Connection
$conn->close();