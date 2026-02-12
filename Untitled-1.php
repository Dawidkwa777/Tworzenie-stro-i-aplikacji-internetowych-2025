<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <title>Oj chyba nie</title>
<style>
    strong {
        background-color: pink;
        border-radius: 5px;
        border: 0.5px solid red;
    }
    h3 {
       background-color: pink;
        border-radius: 5px;
        border: 1px solid red; 
        text-align: center;
    }
    </style>
</head>

<body>
    <?php
    define("DOBRA_RADA", "Bez chleba, to się nie najesz");
    ?>
    <h3><?php
        echo "Stała ma wartość: ";
        echo DOBRA_RADA
        ?></h3>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>strlen</strong>: ";
    echo strlen(DOBRA_RADA)
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>str_word_count</strong>: ";
    echo str_word_count(DOBRA_RADA)
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>strrev</strong>: ";
    echo strrev(DOBRA_RADA)
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>strpos</strong>: ";
    echo strpos(DOBRA_RADA, "to")
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>str_replace</strong>: ";
    echo str_replace("chleba", "mięsa", "Bez chleba, to się nie najesz");
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>strtolower</strong>: ";
    echo strtolower(DOBRA_RADA)
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>strtoupper</strong>: ";
    echo strtoupper(DOBRA_RADA)
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>ucwords</strong>: ";
    echo ucwords(DOBRA_RADA)
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>trim</strong>: ";
    echo trim(DOBRA_RADA)
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>strstr</strong>: ";
    echo strstr(DOBRA_RADA, "nie")
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>substr</strong>: ";
    echo substr(DOBRA_RADA, offset: 10, length: 5)
    ?>
    <br>
    <?php
    echo "Do stałej DOBRA_RADA stosuję funkcję <strong>str_pad</strong>: ";
    echo str_pad(DOBRA_RADA, length: 41, pad_string: " 😑 ", pad_type: STR_PAD_BOTH)
    ?>
</body>
</html>