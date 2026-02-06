<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<head>
     <?php
$haslo1 = "mbank.pl";
$haslo2 = "rnbank.pl";
if ($haslo1 == $haslo2) {
    $wynik = "hasla sa takie same";
} else{
    $wynik = "hasla sa rozne";
}
?>
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
   <table>
      <tr>
        <th><?php echo $haslo1; ?></th>
        <th><?php echo $haslo2; ?></th>
    </tr>
    <tr>
        <td colspan="2"><?php echo $wynik; ?></td>
    </tr>
</table>
    
</body>
</html>