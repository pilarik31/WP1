<!DOCTYPE html>


<html>
    <head>
        <title> Favorites </title>
        <meta charset="UTF-8"> 
    </head>
    <body>
        <?php
        $favGames = @$_POST["favGames"];
        $favBooks = @$_POST["favBooks"];
        ?>
        <h2> Oblíbené herní žánry </h2>
        <?php
        for ($index = 0; $index < count($favGames); $index++) {
            echo "$favGames[$index]";
            ?><br/> <?php
        }
        ?>


        <h2> Oblíbené knižní žánry </h2>
        <?php
        for ($index1 = 0; $index1 < count($favBooks); $index1++) {
            echo "$favBooks[$index1]";
            ?><br/> <?php 
        }
        ?>



    </body>
</html>




