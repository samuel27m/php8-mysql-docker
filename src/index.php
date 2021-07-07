<?php
    require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
        crossorigin="anonymous"
    >
    <title>PHP & MySQL Docker</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <!-- Empty -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">PHP & MySQL docker</h1>
                <p class="lead">Simple & easy to get started</p>
                <hr />
                <p>
                    <b>PHP <?= phpversion() ?></b>
                    <br />
                    <a target='_blank' href="/info.php">see info</a>
                    <br />
                    <span>Entensions enabled:</span>
                    <br />
                    <?php foreach (get_loaded_extensions() as $extension) : ?>
                        <span class="badge badge-success"><?= $extension ?></span>
                    <?php endforeach; ?>
                </p>
                <hr />
                <p>
                    <b>MySQL <?= $conn->query('select version()')->fetchColumn() ?></b>
                    <br />
                    <?php if ($dbConnected) : ?>
                        <span class="badge badge-success">Connected to Database succesfully</span>
                    <?php else: ?>
                        <span class="badge badge-danger">Error when connecting to Database</span>
                        <span class="badge badge-danger"><?= $dbConnectionError ?></span>
                    <?php endif; ?>
                </p>
                <hr />
            </div>
        </div>
    </div>
</body>
</html>
