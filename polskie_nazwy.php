<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        .no {
            color: burlywood;
            background-color: black;
        }

        td, tr {
            border-collapse: collapse;
            border: dashed 1px red;
            font-family: 'Courier New', Courier, monospace;
            font-size: 10px;
            padding: 5px;
        }

    </style>
</head>
<body>
 <table>
    <?php 
        
        for ($a = "a"; $a !== "aa"; $a++) {
            echo "<tr>";
            for ($b = "a"; $b !== "aa"; $b++) {
              
                $b_duza = strtoupper($b);
                
                if ($a == $b) {
                    echo "<td class='no'>$a~$b_duza</td>";
                } else {
                    echo "<td>$a~$b_duza</td>";
                }
            }
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>