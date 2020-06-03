<?php
include dirname(__DIR__) . '/data/data.php';
include __DIR__ . '/../functions/functions.php';

$rooms = getAll($conn, 'stanze');