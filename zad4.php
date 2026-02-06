<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instrukcja warunkowe php </title>
</head>
<body>
    <?php
    $losowa = rand(1,30);
    echo  "<h2 style='text-align:center; color:darkoorchid;'>Wylosowana liczba: $losowa</h2>";
    if ($losowa >= 20) {
    echo "<h4 style='text-align:center; color:magenta;'>Wylosowana liczba jest większa lub równa 20</h4>";
    }
    if ($losowa % 2 == 0) {
        echo "<h4 style='text-align:center; color:navy;'>Liczba jest parzysta</h4>";
    } 
     else {
        echo"<h4 style='text-align:center; color:navy;'>Liczba jest nieparzysta</h4>";
     }
     if ($losowa >= 1 && $losowa <= 9) {
        echo "<h4 style='text-align:center; color:deeppink;'>pierwsze dziesiatka</h4>";
     }
      elseif ($losowa >=10 && $losowa <= 19) {
        echo "<h4 style='text-align:center; color:deepink;'>druga dziesiatka</h4>";
      }
      else {
        echo "<h4 style='text-align:center; color:deepink;'>trzecia dziesiatka</h4>";
      }
      ?>
      
        
      

    


    




</body>
</html>