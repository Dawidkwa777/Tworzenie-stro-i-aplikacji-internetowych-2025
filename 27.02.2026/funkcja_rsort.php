<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $numbers = array(rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99)) ;
    rsort($numbers) ;
?>
<ol style="list-style-type: upper-roman;">
    
     <?php foreach ($numbers as $liczby) {
        echo "<li>$liczby<br></li>"  ;
     } ?>
    
</ol>
</table>
</body>
</html>