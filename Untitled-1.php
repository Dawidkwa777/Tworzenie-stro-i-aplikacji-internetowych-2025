<!DOCTYPE html>
<html lang="en">
<head>
 
<?php
$tekst = "Kon'nichiwa sekai";
$znaki = str_split($tekst);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Witaj Świecie</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 3px dotted red;
            padding: 15px;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <?php foreach ($znaki as $znak): ?>
            <td><?php echo htmlspecialchars($znak); ?></td>
        <?php endforeach; ?>
    </tr>
</table>

</body>
</html>


    
</body>
</html>