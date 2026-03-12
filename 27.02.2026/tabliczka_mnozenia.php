<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <style>
        table {
           border: 1px solid black;
        border-collapse: collapse;
        font-family: Verdana;
        font-size: large; 
        }
    th ,td {
        border: 1px dashed black;
        padding: 5px;
        text-align: center;
    }
    th {
        background-color: burlywood;
    }
    td {
        background-color: beige;
    }
    .diag {
        background-color: bisque;
    }
    </style>
 </head>
 <body>
    <h2>Tabliczka mnożenia</h2>

<table>

<?php
$liczby = range(1, 10);
echo "<tr><th>x</th>";
foreach ($liczby as $n) {
    echo "<th>$n</th>";
}
echo "</tr>";

foreach ($liczby as $i) {
    echo "<tr>";
    echo "<th>$i</th>";

    foreach ($liczby as $j) {
        $wynik = $i * $j;

        if ($i == $j) {
            echo "<td class='diag'>$wynik</td>";
        } else {
            echo "<td>$wynik</td>";
        }
    }echo "</tr>";
}
?>

    

</body>
</html>