<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiegowi wiecej niz 2000</title>

    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        .right{
            text-align: right;
        }

        .center{
            text-align: center;
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
    echo "<th>Pracownik</th>";
    echo "<th>Miasto</th>";
    echo "<th>Data zatrudnienia</th>";
    echo "<th>Wynagrodzenie</th>";
    echo "</tr>";

    $query = <<<EOD
        SELECT imie, 
            nazwisko, 
            miasto,
            data_zatrudnienia,
            wynagrodzenie
        FROM pracownicy
    EOD;

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";

            echo "<td>" . $row['imie'] . " " . $row['nazwisko'] . "</td>";

            echo "<td class='center'>" . $row['miasto'] . "</td>";

            echo "<td class='right'>" . $row['data_zatrudnienia'] . "</td>";

            echo "<td class='right'>" . number_format($row['wynagrodzenie'], 2) . "</td>";

            echo "</tr>";
        }
    }
    else
    {
        echo "<tr><td colspan='4'>Brak danych</td></tr>";
    }

    echo "</table>";

    mysqli_close($conn);
}

?>

</body>
</html>