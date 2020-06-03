<?php
    include __DIR__ . '/partials/templates/head_templates.php';
    include_once __DIR__ . '/partials/update/update.php';
?>

<?php //allert
    if ( !empty($_GET['del']) ) {?>

    <div class="alert alert-success">
        Stanza cancellata con successo!
    </div>

<?php } ?>

<header>
    <div class="container">
        <h1 class="text-center title">Edit Room</h1>
    </div>
</header>


<main class="container">
    
    <form action="partials/update/server-update.php" method="POST">

        <div class="form-group">
            <label for="room_number">Room Number</label>
            <input class="form-control" type="number" name="room_number" id="room_number" value="<?php echo $room['room_number'] ?>">
        </div>

        <div class="form-group">
            <label for="beds">Beds Number</label>
            <input class="form-control" type="number" name="beds" id="beds" value="<?php echo $room['beds'] ?>">
        </div>

        <div class="form-group">
            <label for="floor">Floor</label>
            <input class="form-control" type="number" name="floor" id="floor" value="<?php echo $room['floor'] ?>">
        </div>

        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
            <input class="btn btn-primary" type="submit" value="Save">
        </div>

    </form>

    <a class="btn btn-primary" href="<?php echo $base_path; ?>/show-page.php?id=<?php echo $room['id']; ?>">
        Room Details
    </a>

</main>

<?php
    include __DIR__ . '/partials/templates/footer_templates.php'
?>