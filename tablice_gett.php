<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tydzien = array(
        1 => "poniedziałek",
        2 => "wtorek",
        3 => "środa",
        4 => "czwartek",
        5 => "piątek",
        6 => "sobota",
        7 => "niedziela"
    );
    ?>

    <?php
    $miesiące = array(
        1 => "stycznia",
        2 => "lutego",
        3 => "marca",
        4 => "kwietnia",
        5 => "maja",
        6 => "czerwca",
        7 => "lipca",
        8 => "sierpnia",
        9 => "września",
        10 => "października",
        11 => "listopada",
        12 => "grudnia"
    );

    ?>


    <?php
    echo "Urodziłem się we: " . $tydzien[3] . ", 7 " . $miesiące[5] . " 2008 roku."; ?> <br>
    <?php
    echo "Tablic w PHP nauczę się:" . $tydzien[4] .  " 19 " . $miesiące[3] . " 2026 roku.";

    ?>
</body>

</html>