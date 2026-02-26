<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            background-color: aliceblue;
            border: 1px solid dodgerblue;
            padding: 10px 0;
            text-align: center;
            color: blue;
            width: 9%;
        }
    </style>
<body>    
<?php $liczby = range(0, 10);
shuffle($liczby);
echo "<table><tr>";
foreach ($liczby as $liczba) {
    echo "<td>$liczba</td>";
}
echo "</tr></table>" ?>
</body>
</html>