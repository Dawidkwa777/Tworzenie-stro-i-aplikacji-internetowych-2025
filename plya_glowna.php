
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</body>
</html>
<?php
$text = "Płyta główna ATX";
$litera = mb_str_split($text);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Płyta główna ATX</title>
</head>
<body>

<h3>
<?php
foreach ($litera as $litera) {
    if ($litera === 'a' || $litera === 'A') {
        echo '<span style="color: magenta;">' . $litera. '</span>';
    } else {
        echo $litera;
    }
}
?>
</h3>

</body>
</html>