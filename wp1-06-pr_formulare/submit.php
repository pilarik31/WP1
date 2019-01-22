<?php
$name = filter_input(INPUT_POST, "name");
$pwd = filter_input(INPUT_POST, "pwd");
$mail = filter_input(INPUT_POST, "mail");
$date = filter_input(INPUT_POST, "date");
$check = filter_input(INPUT_POST, "check");
$submit = filter_input(INPUT_POST, "Submit");
?>


<?php


if ($pwd == "gandalf"  ) {
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
} else 
    {
    echo "Nemáš přístup!";
    }
?>
