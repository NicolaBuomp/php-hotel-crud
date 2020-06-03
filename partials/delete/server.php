<?php

// Connection DB

include_once __DIR__ . '/../data/data.php';
include __DIR__ . '/../functions/functions.php';


if (empty($_POST['id'])) {
    die ( 'ID non corretto' );
}

$id_room = $_POST['id'];
$url = "$base_path?del=room";

//Query
$room = removeById($conn, 'stanze', $id_room, $url);
