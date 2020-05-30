<?php
    include __DIR__ . '/partials/script-php/home.php';
    include __DIR__ . '/partials/templates/head_templates.php';
?>
<?php //allert
    if ( !empty($_GET['del']) ) {?>

    <div class="alert alert-success">
        Stanza cancellata con successo!
    </div>

<?php } ?>

<header>
    <div class="container">
        <h1 class="text-center title">Hotel Rooms DB</h1>
    </div>
</header>


<main>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th class="text-center">Room number</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($rooms as $room) { ?>
                    <tr>
                        <th>
                            <?php echo $room['id']; ?>
                        </th>
                        <td class="text-center">
                            <?php echo $room['room_number']; ?>
                        </td>
                        <td class="text-info">
                            <a href="show-page.php?id=<?php echo $room['id'];?>">View</a>
                        </td>
                        <td class="text-info">
                            <a href="edit.php?id=<?php echo $room['id'];?>" class="text-success">
                                Update
                            </a>
                        </td>
                        <td class="text-danger">
                            <form action="./partials/delete/server.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $room['id'];?>">
                                <input class="btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php
    include __DIR__ . '/partials/templates/footer_templates.php'
?>