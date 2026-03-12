<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       td,th {
        border: 1px dotted black;
            padding: 3px;
       }
    </style>
</head>
<body>
<?php 
    $filmy = array("Skazani na Shawshank"=>"dramat","Nietykalni"=>"biograficzny","Władca Pierścieni: Powrót króla"=>"fantasy","Pulp Fiction"=>"gangsterski","Siedem"=>"kryminał","Podziemny krąg"=>"thriller","Django"=>"western","Król Lew"=>"animacja","Avengers: Wojna bez granic"=>"akcja","Dobry,zły i brzydki"=>"western") ;
?>

<table>
<caption>Sortowanie rosnąco według wartości [asort]</caption>
<tr>
    <th>Klucz</th>
    <th>Wartość</th>
</tr>
<?php 
    asort($filmy) ;
    foreach ($filmy as $tytul=>$gatunek)
    {
    echo "<tr><td>$tytul</td><td>$gatunek</td></tr>" ;
    }
?>
</table>
<table>
    <caption>Sortowanie malejąco według wartości [arsort]</caption>
<tr>
    <th>Klucz</th>
    <th>Wartość</th>
</tr>
    <?php 
    arsort($filmy) ;
    foreach ($filmy as $tytul=>$gatunek)
    {
    echo "<tr><td>$tytul</td><td>$gatunek</td></tr>" ;
    }
    ?>
    </table>
    <table>
        <caption> Sortowanie rosnąco według klucza [ksort]</caption>
   <tr>
      <th>klucz</th>
      <th>Wartość</th>
</tr>
    <?php
    ksort($filmy) ;
    foreach ($filmy as $tytul=>$gatunek)
    {
    echo "<tr><td>$tytul</td><td>$gatunek</td></tr>";    
        }      
        ?>
     </table>
    <table>
        <caption> Sortowanie malejąco według klucza [ksort]</caption>
    <tr>
        <th>klucz</th>
        <th>Wartość</th>
</tr>
    <?php
    ksort($filmy) ;
    foreach ($filmy as $tytul=>$gatunek)
    {
    echo "<tr><td>$tytul</td><td>$gatunek</td></tr>";   
    }    
    ?>
    

</table>
</body>
</html>