<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titlePage; ?></title>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div class="container">
            <header>
                <h1><?= $titlePage; ?></h1>

                <?php
            // Menu de navigation
            include"includes/navbar.php"
            ?>
            </header>
