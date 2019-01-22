<!DOCTYPE html>
<?php
define("PI", 3.14);
$r = 5;
$perimeter = 2 * PI * $r;
$area = PI * $r * $r;
$d = 2 * $r;
?>

<?php // Obvod a obsah kruhu ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p> Poloměr kruhu: <?php echo $r; ?> </p>
        <p> Obsah kruhu: <?php echo $area; ?> </p>
        <p> Obvod kruhu: <?php echo $perimeter; ?> </p>
        <div style="width: <?php echo $d; ?>px; height: <?php echo $d; ?>px; background: red; border-radius: <?php echo $d; ?>px"> </div>

    </body>
</html>
