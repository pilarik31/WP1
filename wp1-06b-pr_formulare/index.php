<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h1> Vyplňte přihlašení </h1>
        <form action="submit.php" method="post">
            <label for="name"> Jméno uživatele: </label> <input type="text" placeholder="Jméno uživatele" id="name" name="name" /> <br/>
            <label for="pwd"> Heslo: </label> <input type="password" placeholder="Heslo" id="pwd" name="pwd" /> <br/>
            <label for="mail"> E-mail: </label> <input type="email" placeholder="E-mail" id="mail" name="mail" /> <br/>
            <label for="date"> Rok narození: </label> <input type="number" placeholder="Rok narození" id="date" name="date" /> <br/>
            
            <label for="gender"> Vyberte: </label> 
            <label for="gender"> Muž </label> <input type="radio"  id="gender" name="gender" value="male"> 
            <label for="gender"> Žena </label> <input type="radio"  id="gender" name="gender" value="female">
            <label for="gender"> Jiné </label> <input type="radio"  id="gender" name="gender" value="other"> <br/>
            
            <label for="crime"> Máte trestní rejsřík?: </label> 
            <label for="crime"> Ano </label> <input type="radio"  id="crime" name="crime" value="Yes"> 
            <label for="crime"> Ne </label> <input type="radio"  id="crime" name="crime" value="No"> <br/>
            
            <label for="check"> Zaškrtnutíkm souhlasíte se zpracováním osobních údajů. </label> <input type="checkbox" id="check" name="check" /> <br/>
            
            
                   
                   
            <input type="submit" value="Potvrdit" />
        </form>
                                                      
        
        
    </body>
</html>
