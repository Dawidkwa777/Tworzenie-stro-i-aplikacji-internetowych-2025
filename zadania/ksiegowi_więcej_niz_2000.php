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

        .center{
            text-align: center;
        }
    </style>

</head>
<body>


 <?php

 $servername = "localhost";
 $username = "kwasniewski";
 $password = "kwasniewski";
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
    
}

</body>
</html>