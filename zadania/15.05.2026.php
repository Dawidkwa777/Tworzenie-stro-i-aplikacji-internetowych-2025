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
     $conn = mysqli_connect($servername, $username , $password , $database);
     if (!$conn)
     {
        echo 'Próba połączenia z bazą danych zakończyłą się niepowodzeniem.Błąd:'. mysqli_connect();

     }
     else
    {
        echo 'Wynik zapytania w liście nieuporządkowanej';
     }
    
     $query = "SELECT Imie, Nazwisko, Nr_czytelnika FROM czytelnicy";

     $result = mysqli_query($conn , $query);
     if (mysqli_num_rows($result) > 0) {
        echo '<ol style="list-style-type: circle;">';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>Numer: '  . $row['Nr_czytelnika']
                . ' . Imię i nazwisko:'  . $row['Imie'] . ' ' . $row['Nazwisko'] . '</li>';

        }
        echo '</ol>';
     } else {
        echo 'brak danych';
     }
    mysqli_close($conn);
    
    ?> 
</body>
</html>