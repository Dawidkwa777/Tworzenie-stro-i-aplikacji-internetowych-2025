<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $parzyste= range(0,12,2);
    $dziesiatki= range(-10,100,10);
    $polowki= range(-5.5,5.5,0.5);
    $litery_od_em= range('m','u');
    $litery_wstecz= range('X','E');
    ?>

   <p>
     <pre>
        <?php print_r($parzyste); ?>
        </pre>
        <?php foreach($parzyste as $parzyste) {
            print_r($parzyste. " ");

        }
        ?>
   </p>
<p><?php foreach($dziesiatki as $dziesiatki) {
    print_r($dziesiatki. " "); } ?></p>
<p><?php foreach($polowki as $polowki) {
    print_r($polowki. " "); } ?></p> 
<p><?php foreach($litery_od_em as $litery_od_em) {
    print_r($litery_od_em. " "); } ?></p> 
<p><?php foreach($litery_wstecz as $litery_wstecz) {
    print_r($litery_wstecz. " "); } ?></p> 


        
    
</body>
</html>