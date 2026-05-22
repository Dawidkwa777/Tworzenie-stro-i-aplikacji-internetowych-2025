<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        .right{
            text-align: right;
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
    echo "<th>Sygnatura</th>";
    echo "<th>Tytuł</th>";
    echo "<th>Autor</th>";
    echo "<th>Wydawnictwo</th>";
    echo "<th>Rok wydania</th>";
    echo "<th>Cena</th>";
    echo "</tr>";
    $query = "
    SELECT ksiazki.Sygnatura,
           ksiazki.Tytul,
           CONCAT(ksiazki.Imie, ' ',ksiazki.Nazwisko) AS autor,
           ksiazki.Wydawnictwo,
           ksiazki.Rok_wyd,
           ksiazki.Cena
    FROM ksiazki
    WHERE (ksiazki.wydawnictwo = 'PWN' OR ksiazki.wydawnictwo = 'Helion')
    AND ksiazki.Rok_wyd > 1990
    AND ksiazki.Rok_wyd< 2011
    ORDER BY ksiazki.Rok_wyd ASC
";
$result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";

            echo "<td>" . $row['Sygnatura'] . "</td>";

            echo "<td>" . $row['Tytul'] . "</td>";

            echo "<td>" . $row['autor'] . "</td>";

            echo "<td>" . $row['Wydawnictwo'] . "</td>";

            echo "<td>" . $row['Rok_wyd'] . "</td>";

            $zl = floor($row['Cena']);
            $gr = ($row['Cena'] - $zl) * 100;

            echo "<td class='right'>" . $zl . " zl " . sprintf("%02d", $gr) . " gr</td>";

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