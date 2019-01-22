<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Main page</title>
    </head>
    <body>

<?php
$name = filter_input(INPUT_POST, "name");
$pwd = filter_input(INPUT_POST, "pwd");
$mail = filter_input(INPUT_POST, "mail");
$date = filter_input(INPUT_POST, "date");
$check = filter_input(INPUT_POST, "check");
$submit = filter_input(INPUT_POST, "Submit");
$gender = filter_input (INPUT_POST, "gender");
$crime = filter_input (INPUT_POST, "crime");
?>


<?php


if (($pwd == "gandalf") && ($gender == "male") && ($date <= 2000) && ($crime == "No"))
    {
    echo "Vítej v privátní sekci, $name.";
    ?>
    <br/>
    <?php
    echo "Zadané jméno: $name";
    ?>
    <br/>
    <?php
    echo "Zadané heslo: $pwd";
    ?>
    <br/>
    <?php
    echo "Zadaný mail: $mail";
    ?>
    <br/>
    <?php
    echo "Zadané datum: $date";
    ?>
    <br/>
    <?php
    echo "Zadané pohlaví: $gender";
    ?>
    <br/>
    <?php
    echo "Trestní rejstřík? $crime";
    ?>
    </br>
    <?php
     
} else 
    {
    echo "Nemáš přístup!";
    }
    ?>
    
    
    </body>
</html>