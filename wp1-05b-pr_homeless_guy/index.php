<!DOCTYPE html>
<?php
$currency = "CZK";
$homelessMoney = 25;
$gipsyPower = 31;
$richMan = 40;
$richStudentGirl = 17;
$richBusinessman = 100;
$vodkaPrice = 119;
$cigarettePrice = 90;
$comboPrice = $vodkaPrice + $cigarettePrice
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo "Franta Bezdomovec začíná s $homelessMoney $currency"; ?> <br />
        <?php
        $homelessMoney = $homelessMoney + $richStudentGirl;
        echo "Franta dostal peníze od milé studentky, teď už má $homelessMoney $currency!";
        ?> <br />
        <?php
        $homelessMoney = $homelessMoney + $richMan;
        echo "Franta dostal peníze od muže, který skončil s pracovním rozhovorem, teď už má $homelessMoney $currency!";
        ?> <br />
        <?php
        $homelessMoney = $homelessMoney + $richBusinessman;
        echo "Franta dostal peníze od bohatého podnikatele, v klobouku má celkem $homelessMoney $currency!";
        ?> <br />
        <?php
        $homelessMoney = $homelessMoney - $gipsyPower;
        echo "Romové sebrali Frantovi $gipsyPower $currency, aniž by jsi toho všiml.";
        ?> <br />

        <?php echo "Franta si myslí, že už má dost peněz, tak běží přímo do večerky."; ?> <br />
        <?php echo "Cena vodky $vodkaPrice $currency."; ?> <br />
        <?php echo "Cena cigaret $cigarettePrice $currency."; ?> <br />
        <?php echo "Před koupením vodky má $homelessMoney $currency."; ?> <br />
        
        <?php
        if ($homelessMoney >= $comboPrice) {
            $homelessMoney = $homelessMoney - $comboPrice;
            echo "Franta si koupil vodku i cigarety!"
            ?> <br /> <?php
        } elseif ($homelessMoney >= $vodkaPrice) {
            $homelessMoney = $homelessMoney - $vodkaPrice;
            echo "Franta neměl na obojí, tak si koupil pouze vodku!"
            ?> <br /> <?php
        } elseif ($homelessMoney >= $cigarettePrice) {
            $homelessMoney = $homelessMoney - $cigarettePrice;
            echo "Franta neměl ani na vodku, tak si koupil jenom cigarety!"
            ?> <br /> <?php
        } else {
            echo "Franta nemá na nic.";
        }
        echo "Po návštěvě večerky má $homelessMoney $currency."; 
        ?>



    </body>
</html>