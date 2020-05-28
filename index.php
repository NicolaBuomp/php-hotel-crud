<?php
    include __DIR__ . '/partials/script-php/home.php';
    include __DIR__ . '/partials/templates/head_templates.php';
?>

<header>
    <div class="container">
        <h1 class="text-center title">Rooms Hotel DB</h1>
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
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php
    include __DIR__ . '/partials/templates/footer_templates.php'
?>