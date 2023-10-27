<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Pets</title>
    </head>
    <body>
        <?php include("includes/header.inc.php"); ?>

        <div class='header-image image-3'>
            <h3>Pets</h3>
        </div>
        <div class='content-body pets-page'>
            <div class='pets-wrap'>
                <?php include("includes/pets.inc.php") ?>
            </div>
        </div>
    </body>
</html>