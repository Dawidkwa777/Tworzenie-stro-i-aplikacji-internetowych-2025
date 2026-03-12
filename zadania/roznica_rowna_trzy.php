<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table {
        border: 1px solid green;
        border-collapse: collapse;
        font-family: 12px Verdana;
        font-size: large; 
    

      }
    th,td {
        border: 1px dashed black;
        padding: 5px;
        text-align: center;
    }
    th {
        background-color: yellow;
    }
    td {
        background-color: green;
    }
    .diag {
        background-color: yellow;
        text-shadow: red;

    }
    </style>
</head>
<body>
    <h2>Pary cyfr</h2>

    <table>

    <?php
    $cyfry = range(0|0 , 9|9);
       echo "<tr><th>0|0</th>";
    foreach ($cyfry as $pokolei) {
       echo  "<th>$pokolei</th>";
    }
    echo "</tr>";
    ?>
    
     
    
    
</body>
</html>