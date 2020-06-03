<?php
    include __DIR__ . '/partials/templates/head_templates.php';
?>

<header>
    <div class="container">
        <h1 class="text-center title">Create new room</h1>
    </div>
</header>


<main class="container">
    
    <form action="partials/create/server.php" method="POST">

        <div class="form-group">
            <label for="room_number">Room Number</label>
            <input class="form-control" type="number" name="room_number" id="room_number">
        </div>

        <div class="form-group">
            <label for="beds">Beds Number</label>
            <input class="form-control" type="number" name="beds" id="beds">
        </div>

        <div class="form-group">
            <label for="floor">Floor</label>
            <input class="form-control" type="number" name="floor" id="floor">
        </div>

        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
            <input class="btn btn-primary" type="submit" value="Create">
        </div>
 
    </form>

</main>

<?php
    include __DIR__ . '/partials/templates/footer_templates.php'
?>