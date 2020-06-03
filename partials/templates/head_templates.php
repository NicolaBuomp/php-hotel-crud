<?php
include_once __DIR__ . '/../../env.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel DB</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_path; ?>dist/css/app.css">
</head>
<body>

<header class="main-header">
    <nav class="navbar navbar-expand navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo $base_path; ?>">Boolean Hotel</a>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path; ?>">Tutte le stanze</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path?>create.php">Nuova stanza</a>
            </li>

        </ul>
    </nav>
</header>