<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
else{
     echo "<h3>Pracownicy biblioteki:</h3>";

    
    $query = "SELECT UPPER(CONCAT(Imie, ' ', Nazwisko)) AS Pracownik 
              FROM pracownicy";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0)
    {
        echo "<ul>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<li>" . $row['Pracownik'] . "</li>";
        }

        echo "</ul>";
    }
    else
    {
        echo "brak danych";
    }

    mysqli_close($conn);
    


}
?>
</body>
</html>