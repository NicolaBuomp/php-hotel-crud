<?php
    include __DIR__ . '/partials/script-php/show.php';
    include __DIR__ . '/partials/templates/head_templates.php';
?>

<header>
    <div class="container">
        <h1 class="text-center title">Room - details</h1>
    </div>
</header>

<main>
    <div class="container text-center">
        <table class="table mb-5 col-md-4 offset-md-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Room number</th>
                    <th>floor</th>
                    <th>beeds</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th><?php echo $room['id'] ?></th>
                <td><?php echo $room['room_number'] ?></td>
                <td><?php echo $room['floor'] ?></td>
                <td><?php echo $room['beds'] ?></td>
            </tr>
        </table>

        <a class="text-primary" href="index.php"><- Go back!</a>
    </div>
</main>


<?php
    include __DIR__ . '/partials/templates/footer_templates.php'
?>