<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    $tank1 = 0;
    $tank2 = 0;
    ?>
        <fieldset>
            <legend> Přidávání do nádrží </legend>
            <?php
            echo "V nádrži 1 je: $tank1"; ?> <br/> <?php
            echo "V nádrži 2 je: $tank2"; ?> <br/> <?php
            ?>
            <form action="index.php" method="get">
                <label for="tank1"> <h3> Nádrž 1 </h3> </label>
                <label for="tank1"> 5 litrů </label> <input type="radio" id="tank1" name="tank1" value="5" />
                <label for="tank1"> 10 litrů </label> <input type="radio" id="tank1" name="tank1" value="10" />
                <label for="tank1"> 15 litrů </label> <input type="radio" id="tank1" name="tank1" value="15" />
                
                <label for="tank1"> <h3> Nádrž 2 </h3> </label>
                <label for="tank1"> 5 litrů </label> <input type="radio" id="tank2" name="tank2" value="5" />
                <label for="tank1"> 10 litrů </label> <input type="radio" id="tank2" name="tank2" value="10" />
                <label for="tank1"> 15 litrů </label> <input type="radio" id="tank2" name="tank2" value="15" />
                <br/> <br/>
                <input type="submit" value="Přidat!"
            </form>
    </body>
</html> 
    