<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Supplies</title>
    </head>
    <body>
        <?php include("includes/header.inc.php"); ?>

        <div class='header-image image-4'>
            <h3>Supplies Needed</h3>
        </div>
        <div class='content-body'>
            <div class='full-box adopt'>
                <div class='sub-box supplies'>
                    <h2 class='heading'> Supplies we are low on... </h2> 
                    <?php 
                        include("includes/supplies.inc.php"); 
                    ?>
                </div>
            </div>
        </div>
        
    </body>
</html>