<!DOCTYPE html>
<?php
$currency = "CZK";
$homelessMoney = 25;
$gipsyPower = 50;
$richMan = 40;
$richStudentGirl = 17;
$richBusinessman = 100;
$vodkaPrice = 119;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo "Franta Bezdomovec začíná s $homelessMoney $currency"; ?> <br />
        <?php $homelessMoney = $homelessMoney + $richStudentGirl;
        echo "Franta dostal peníze od milé studentky, teď už má $homelessMoney $currency!";
        ?> <br />
        <?php $homelessMoney = $homelessMoney + $richMan;
        echo "Franta dostal peníze od muže, který skončil s pracovním rozhovorem, teď už má $homelessMoney $currency!";
        ?> <br />
        <?php $homelessMoney = $homelessMoney + $richBusinessman;
        echo "Franta dostal peníze od bohatého podnikatele, v klobouku má celkem $homelessMoney $currency!";
        ?> <br />
        <?php $homelessMoney = $homelessMoney - $gipsyPower;
        echo "Romové sebrali Frantovi $gipsyPower $currency, aniž by jsi toho všiml.";
        ?> <br />

        <?php echo "Franta si myslí, že už má dost peněz, tak běží přímo do večerky."; ?> <br />
        <?php echo "Cena vodky $vodkaPrice."; ?> <br />
        <?php echo "Před koupením vodky má $homelessMoney $currency."; ?> <br />

<?php if ($homelessMoney >= $vodkaPrice) {
    $homelessMoney = $homelessMoney - $vodkaPrice;
    echo "Vodka byla zakoupena!"; ?> <br /> <?php
} else
{ echo "Nedostatek peněz!"; ?> <br /> <?php }
echo "Peníze Franty po návštěvě večerky $homelessMoney.";
?>


    </body>
</html>
