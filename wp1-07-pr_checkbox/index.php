<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend> Oblíbené herní žánry </legend>
            <form action="submit.php" method="post" >
                <label for="check"> MMORPG </label> <input type="checkbox" id="check" name="favGames[]" value="MMORPG" /> <br/>
                <label for="check"> First person shooter </label> <input type="checkbox" id="check2" name="favGames[]" value="First person shooter" /> <br/>
                <label for="check"> Adventure </label> <input type="checkbox" id="check" name="favGames[]" value="Adventure" /> <br/>
                <label for="check"> Horror </label> <input type="checkbox" id="check" name="favGames[]" value="Horror" /> <br/>
                <label for="check"> Real-time strategy </label> <input type="checkbox" id="check" name="favGames[]" value="Real-time strategy" /> <br/> 
                <label for="check"> MOBA </label> <input type="checkbox" id="check" name="favGames[]" value="MOBA" /> <br/>
                <label for="check"> Turn-based strategy </label> <input type="checkbox" id="check7" name="favGames[]" value="Turn-based strategy" /> <br/>
                <label for="check"> Racing </label> <input type="checkbox" id="check" name="favGames[]" value="Racing" /> <br/>
                <label for="check"> Sport games </label> <input type="checkbox" id="check" name="favGames[]" value="Sport games" /> <br/>
                <label for="check"> Indie games </label> <input type="checkbox" id="check" name="favGames[]" value="Indie games" /> <br/>
        </fieldset>
        <fieldset>
            <legend> Oblíbené knižní žánry </legend> 
            <label for="check"> Akční </label> <input type="checkbox" id="check" name="favBooks[]" value="Akční" /> <br/>
            <label for="check"> Romány </label> <input type="checkbox" id="check" name="favBooks[]" value="Romány" /> <br/>
            <label for="check"> Detektivky </label> <input type="checkbox" id="check" name="favBooks[]" value="Detektivky" /> <br/>
            <label for="check"> Fantasy </label> <input type="checkbox" id="check" name="favBooks[]" value="Fantasy" /> <br/>
            <label for="check"> Horor </label> <input type="checkbox" id="check" name="favBooks[]" value="Horor" /> <br/>
            <label for="check"> Životopisy </label> <input type="checkbox" id="check" name="favBooks[]" value="Životopisy" /> <br/>
        </fieldset>
        <input type="submit" value="Odeslat!" />

    </form>
</body>
</html>
