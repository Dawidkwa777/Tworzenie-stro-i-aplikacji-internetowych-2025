<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jest_podzielna</title>
</head>
 <?php
$random = rand(1,30);
?>
<p>
liczba <?php echo "$random"?> jest podzielona przez:
<ul>
<li><?php
    if ($random % 2 === 0) {
        echo "dwa";
    }
    ?></li>
    <li><?php
    if ($random % 3 === 0) {
        echo "trzy";
    }
    ?></li>
    <li><?php
    if ($random % 4 === 0) {
        echo "cztery";
    } 
    ?></li>
    <li><?php
    if ($random % 5 === 0) {
        echo "pięć";
    }
    ?></li>
    <li><?php
    if ($random % 6 === 0) {
        echo "sześć";
    }
    
<body>
    
</body>
</html>