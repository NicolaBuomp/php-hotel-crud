<?php
include_once __DIR__ . '/../data/data.php';

function getAll($conn, $table ) {
    
    $sql = "SELECT * FROM `$table`";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $records = [];

        while ($row = $result->fetch_assoc()) {

            $records[] = $row;
        }

    } elseif ($result) {
        $records = [];
    } else {
        $records = false;
    }

    $conn->close();

    return $records;
}


function getById($conn, $table, $id){

    $sql = "SELECT *
            FROM `$table`
            WHERE `id` = $id";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $record = $result->fetch_assoc();
    } elseif ($result) {
        $record = [];
    } else {
        $record = false;
    }

    $conn->close();

    return $record;
}

function removeById($conn, $table, $id, $url) {
    //Query
    $sql = "DELETE FROM `$table` WHERE `id` = $id ";
    
    $result = $conn->query($sql);
    
    var_dump($conn->affected_rows);
    
    if ($result && $conn->affected_rows > 0) {
        header("Location: $url");
    
    } elseif ($result){
        echo 'Nessuna stanza trovata';
    
    } else {
        echo 'Si è verificato un errore';
    
    }
    
    //Close Connection
    $conn->close();
}