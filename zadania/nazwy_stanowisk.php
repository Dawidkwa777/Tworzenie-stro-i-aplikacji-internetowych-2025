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
$password = "kwasniewski";
$database = "kwasniewski";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
  echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
}
else
{
    echo "<table>";
    echo "<tr>";
    echo "<th>Nazwa stanowiska</th>";
    echo "<th>Liczba liter</th>";
    echo "</tr>";


    $query = "SELECT nazwa FROM stanowiska";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $liczba_liter = mb_strlen($row['nazwa']);


         echo "<tr>";
         echo "<td>" . $row['nazwa'] . "</td>";
         echo "<td  class='right'>" . $liczba_liter  . " liter</td>";
         echo "</tr>";
        }   

    }
    else
    {
       echo "<tr><td colspan='2'>Brak danych</td></tr>";
    }

    echo "</table>";
     
    mysqli_close($conn);
}
?>
    


    
</body>
</html>