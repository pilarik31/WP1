<!DOCTYPE html>
<?php
$age = 18;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($age < 18) {
            echo "Alkohol ti neprodají.";
            ?> <img src="disney.jpg" width="50px" height="50px" /> <?php
        } else {
            echo "Alkohol ti prodají.";
            ?> <img src="blood.jpg" width="50px" height="50px" /> <?php }
        ?>



    </body>
</html>
