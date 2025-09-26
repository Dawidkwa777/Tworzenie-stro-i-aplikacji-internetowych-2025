<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("Dobra_Rada","bez chleba, to się nie najesz.");
    echo "<h3>".Dobra_Rada."<h3>";"</p>";
    echo "<p>"."strlen: " .strlen(Dobra_Rada). "</p>";
    echo "<p>" . "str_word_count: " .str_word_count(Dobra_Rada). "</p>";
    echo "<p>" . "strrev: " .strrev(Dobra_Rada). "</p>";
    echo "<p>" . "strpos: " .strpos(Dobra_Rada,"to"). "</p>";
    echo "<p>" . "str_replace: ".str_replace("nie", "moze", Dobra_Rada ). "</p>";
    echo "<p>" . "strtolower: " .strtolower(Dobra_Rada). "</p>";
    echo "<p>" . "strtoupper: " .strtoupper(Dobra_Rada). "</p>";
    echo "<p>" . "ucwords: " .ucwords(Dobra_Rada). "</p>";
    echo "<p>" . "trim: " .trim(Dobra_Rada). "</p>";
    echo "<p>" . "strstr" .strstr(Dobra_Rada,10,6). "</p>";


    
    ?>

    

</body>
</html>