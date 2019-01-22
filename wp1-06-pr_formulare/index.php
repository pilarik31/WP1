<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Vyplňte přihlašení </h1>
        <form action="submit.php" method="post">
            <label for="name"> Jméno uživatele: </label> <input type="text" placeholder="Jméno uživatele" id="name" name="name" /> <br/>
            <label for="pwd"> Heslo: </label> <input type="password" placeholder="Heslo" id="pwd" name="pwd" /> <br/>
            <label for="mail"> E-mail: </label> <input type="email" placeholder="E-mail" id="mail" name="mail" /> <br/>
            <label for="date"> Datum narození: </label> <input type="date" placeholder="Datum narození" id="date" name="date" /> <br/>
            <label for="check"> Zaškrtnutíkm souhlasíte se zpracováním osobních údajů. </label> <input type="checkbox" id="check" name="check" /> <br/>
            <input type="submit" value="Potvrdit" />
        </form>
                                                      
        
        
    </body>
</html>
