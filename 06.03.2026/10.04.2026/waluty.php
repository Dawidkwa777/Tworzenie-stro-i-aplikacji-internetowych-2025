
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>waluty.php</title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kwota = $_POST["kwota"];
    $waluta = $_POST["waluta"];

    echo "<p>Oto twój wybór: $kwota $waluta.</p>";
} ?>
else{ <form method="post" action="waluty.php">
    <div>
        <label>Podaj kwotę:</label>
        <input type="number" name="kwota">
    </div>
    <div>
        <label>Wybierz walutę:</label>
        <select name="waluta">
            <option>Dolar USA</option>
            <option>Euro</option>
            <option>Frank szwajcarski</option>
            <option>Funt szterling</option>
        </select>
    </div>

    <button type="submit">Wybierz</button>}
    

</form>
</body>
</html>