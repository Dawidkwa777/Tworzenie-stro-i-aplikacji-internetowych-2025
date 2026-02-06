<?php
$liczba = rand(1, 30);

$dzielniki = [
    2 => "dwa",
    3 => "trzy",
    4 => "cztery",
    5 => "pięć",
    6 => "sześć",
    7 => "siedem",
    8 => "osiem",
    9 => "dziewięć"
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sprawdzanie podzielności</title>
    <style>
        body {
            font-size: 20px;
        }
    </style>
</head>
<body>

<p><strong>Liczba <?php echo $liczba; ?> jest podzielna przez:</strong></p>

<ul>
    <?php
    foreach ($dzielniki as $wartosc => $slownie) {
        if ($liczba % $wartosc === 0) {
            echo "<li>$slownie</li>";
        }
    }
    ?>
</ul>

</body>
</html>
