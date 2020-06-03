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
        <table class="table">
                <tr>
                    <th>#</th>
                    <th>Room number</th>
                    <th>floor</th>
                    <th>beeds</th>
                    <th>created at</th>
                    <th>updated at</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th><?php echo $room['id'] ?></th>
                <td><?php echo $room['room_number'] ?></td>
                <td><?php echo $room['floor'] ?></td>
                <td><?php echo $room['beds'] ?></td>
                <td><?php echo $room['created_at'] ?></td>
                <td><?php echo $room['updated_at'] ?></td>
            </tr>
        </table>

        <a class="text-primary" href="index.php"><- Go back!</a>

        <a class="btn btn-primary" href="<?php echo $base_path; ?>/edit.php?id=<?php echo $room['id']; ?>">
            Update
        </a>
    </div>
</main>


<?php
    include __DIR__ . '/partials/templates/footer_templates.php'
?>