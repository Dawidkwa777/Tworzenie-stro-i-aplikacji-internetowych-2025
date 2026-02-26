<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
        table {
            border-collapse: collapse;
        }
    td { border: 3px dotted red;
        padding: 15px;
        text-align: center;
        font-size: 18px;
   } 
   </style>

</head>
<body>
<?php 
    $tekst = "kon ' nichiwa sekai";
    $znaki = str_split($tekst);
    ?>
    <table>
       <tr>
        <?php foreach ($znaki as $znak) {?>
            <td><?php  echo $znaki($tekst); ?></td>
        <?php foreach;}?> 
    </tr>
    </table>


    
</body>
</html>