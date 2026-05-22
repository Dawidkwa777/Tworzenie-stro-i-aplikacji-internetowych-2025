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
        CONCAT(
        
        
        "


}
         
    
</body>
</html>