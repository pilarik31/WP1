<!DOCTYPE html>
<?php
$age = 15;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($age < 15) {
            echo "Alkohol ti neprodají."
            ?> <img src="disney.jpg" width="50px" height="50px" alt="15" /> <?php
        } elseif ($age < 18) {
            echo "Občanku sice máš, ale alkohol ti neprodají."
            ?> <img src="cross.jpg" width="50px" height="50px" alt="18" /> <?php
        } else {
            echo "Alkohol ti prodají!"
            ?> <img src="blood.jpg" width="50px" height="50px" alt="18+" /><?php }
        ?>

    </body>
</html>
