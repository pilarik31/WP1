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
$comboPrice = $vodkaPrice + $cigarettePrice;
$gipsyChance = rand(0, 10);
$game = rand(0, 6);
$gameMoney = 30;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
            echo "Franta Bezdomovec začíná s $homelessMoney $currency"; 
        ?> <br />
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
            if ($gipsyChance > 5) {
                $homelessMoney = $homelessMoney - $gipsyPower;
                echo "Romové sebrali Frantovi $gipsyPower $currency, aniž by si toho všiml.";
            } else {
                echo "Franta utekl romům.";
            };
        ?> <br />
        <?php 
            echo "Druhý bezdomovec David si chce s Frantou zahrát o $gameMoney $currency.";
        ?> <br />
        <?php 
            echo "David vytáhl z kapsy kostku, pokud padne číslo 1, 2 nebo 3, vyhrává David, pokud padne 4, 5 nebo 6, vyhrává Franta.";
        ?> <br />
        <?php 
            if ($game <= 3) {
                $homelessMoney = $homelessMoney - $gameMoney;
                echo "David vyhrál od Franty $gameMoney $currency!";
            } 
            else {
                $homelessMoney = $homelessMoney + $gameMoney;
                echo "Franta vyhrál od Davida $gameMoney $currency!";
            } 
        ?>


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
