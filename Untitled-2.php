<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Czytelnicy</title>

    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            background-color: antiquewhite;
        }

        th{
            background-color: salmon;
        }
    </style>
</head>
<body>

<?php

$servername = "localhost";
$username = "kwasniewski";
$password = "aha";
$database = "kwasniewski";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
}
else
{
    echo "<table>";

    echo "<tr>";
    echo "<th>Czytelnik</th>";
    echo "<th>Płeć</th>";
    echo "<th>Data urodzenia</th>";
    echo "<th>Adres</th>";
    echo "<th>Numer legitymacji</th>";
    echo "<th>Data zapisania</th>";
    echo "</tr>";

    $query = "
    SELECT 
        CONCAT(Imie, ' ', Nazwisko) AS czytelnik,

        CASE 
            WHEN Plec = 'K' THEN 'kobieta'
            WHEN Plec = 'M' THEN 'mężczyzna'
        END AS plec,

        Data_ur,

        CONCAT(Ulica, ' ', Kod_pocztowy, ' ', Miasto) AS adres,

        Numer_leg,

        Data_zap
    FROM czytelnicy
    WHERE Skreslony = 0
    ORDER BY Numer_leg ASC
    ";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";

            echo "<td>" . $row['czytelnik'] . "</td>";

            echo "<td>" . $row['plec'] . "</td>";

            echo "<td>" . $row['Data_ur'] . "</td>";

            echo "<td>" . $row['adres'] . "</td>";

            echo "<td>" . substr($row['Numer_leg'], 0, 2) . "-" . substr($row['Numer_leg'], 2, 3) . "</td>";

            echo "<td>" . $row['Data_zap'] . "</td>";

            echo "</tr>";
        }
    }
    else
    {
        echo "<tr><td colspan='6'>Brak danych</td></tr>";
    }

    echo "</table>";

    mysqli_close($conn);
}

?>

</body>
</html>