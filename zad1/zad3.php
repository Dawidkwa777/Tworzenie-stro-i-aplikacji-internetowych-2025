<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pole trojakta</title>
    <style>
        p {
            text-align: center;
            border: 1px solid darkorange;
            margin: 25px;
            padding: 10px;
        }
    </style>    
</head>
<body>
    <?php
    $a=17;
    $pierwiastek3= sqrt(3);
    $pole=($a * $a * $pierwiastek3) /4;
    ?>
    <p>
        Pole trojkata rownobocznego o boku <?=$a; ?> wynosi
        <?=round($pole,2); ?> j<sup>2</sup>
    </p>
</body
</html>