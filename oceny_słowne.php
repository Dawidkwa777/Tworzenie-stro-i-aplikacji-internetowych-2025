<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oceny_slowne.php</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid deeppink;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    $oceny = array("niedostateczna","dopuszczająca","dostateczna","dobra","bardzo dobra","celująca") ;
    ?>


<table>
    <?php
    foreach ($oceny as $ocen)
    {
        $kolortla = $ocen == 'celująca' ? 'hotpink' : 'white';
        ?>
        <tr><td style="background-color: <?= $kolortla ?>;"><?= $ocen ?></td></tr>
    <?php
    }
    ?>
</table>  
    
</body>
</html>