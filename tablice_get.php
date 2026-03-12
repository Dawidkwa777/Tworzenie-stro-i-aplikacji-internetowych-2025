<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formularz logowania</h2>
    <form action="tablica_get.php" method="get">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login"><br><br>

        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo"><br><br>

        <input type="submit" value="Wyślij">
    </form>

    <?php
    
    if (!empty($_GET)) {
        echo "<h3>Otrzymane dane w tablicy:</h3>";

        
        foreach ($_GET as $klucz => $wartosc) {
            $klucz_s = htmlspecialchars($klucz);   
            $wartosc_s = htmlspecialchars($wartosc);
            echo $klucz_s . " => " . $wartosc_s . "<br>";
        }
    }
    ?>
</body>
</html>