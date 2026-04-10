<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>waluty</title>
</head>
<body>
    <form method="post" action="waluty.php">
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

    <button type="submit">Wybierz</button>
</form>
</body>
</html>