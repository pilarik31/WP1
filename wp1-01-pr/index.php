<?php
$firstname = "Jan";
$surname = "Pilař";
$age = 16;
$gender = "Muž";
$class = "1.C";
$status = "Svobodný";
$nationality = "Česká republika";
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h1>Osobní informace</h1>
        <p> Jméno: <?php echo $firstname; ?></p>
        <p>Přijmení: <?php echo $surname; ?></p>
        <p> Věk: <?php echo $age; ?> </p>
        <p> Pohlaví: <?php echo $gender; ?></p>
        <p> Třída: <?php echo $class; ?></p>
        <p> Stav: <?php echo $status; ?></p>
        <p> Státní příslušnost: <?php echo $nationality; ?></p> 
    </body>
</html>
