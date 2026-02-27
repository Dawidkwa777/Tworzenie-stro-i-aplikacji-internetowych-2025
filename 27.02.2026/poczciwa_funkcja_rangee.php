<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $parzyste = range(0,12,2) ;
    $dziesiatki = range(-10,100,10) ;
    $polowki = range(-5.5,5.5,0.5) ;
    $litery_od_em = range("m","u") ;
    $litery_wstecz = range("X","E") ;
?>
<pre>
    <?php print_r($parzyste) ?>
</pre>
<p>
    <?php 
    foreach ($parzyste as $wartoscparzysta) {
        echo "$wartoscparzysta " ; }
    ?>
</p>
<p>
    <?php 
    foreach ($dziesiatki as $wartoscdziesiatki) {
        echo "$wartoscdziesiatki " ; }
    ?>
</p>
<p>
    <?php 
    foreach ($polowki as $wartoscpolowki) {
        echo "$wartoscpolowki " ; }
    ?>
</p>
<p>
    <?php 
    foreach ($litery_od_em as $wartoscliteryodem) {
        echo "$wartoscliteryodem " ; }
    ?>
</p>
<p>
    <?php 
    foreach ($litery_wstecz as $wartoscliterywstecz) {
        echo "$wartoscliterywstecz " ; }
    ?>
</p>
</body>
</html>