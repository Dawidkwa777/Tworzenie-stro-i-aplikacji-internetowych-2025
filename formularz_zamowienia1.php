<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>

    <style>

        .errorMsg{
            color: red;
            width: 300px;
            font-size: 14px;
        }

        .box{
            background-color: #90ee90;
            padding: 15px;
        }

        .required{
            color: red;
        }

        .inputError{
            border: 2px solid red;
        }

    </style>
</head>
<body>

<?php

$VALID = false;

$towarErr = "";
$emailErr = "";
$wagaErr = "";
$opcjaErr = "";
$zgodaErr = "";
$infoErr = "";

$waga = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $towar = trim($_POST["towar"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $info = trim($_POST["info"] ?? "");

    if($towar == ""){
        $towarErr = "Podaj nazwę produktu";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Podaj poprawny email";
    }

    if(empty($_POST["waga"])){
        $wagaErr = "Wybierz wagę paczki";
    } else {
        $waga = $_POST["waga"];
    }

    if(empty($_POST["opcja"])){
        $opcjaErr = "Wybierz opcję pakowania";
    }

    if(empty($_POST["zgoda"])){
        $zgodaErr = "Musisz zaakceptować zgodę";
    }

    if(strlen($info) < 15){
        $infoErr = "Wpisz minimum 15 znaków";
    }

    if(
        empty($towarErr) &&
        empty($emailErr) &&
        empty($wagaErr) &&
        empty($opcjaErr) &&
        empty($zgodaErr) &&
        empty($infoErr)
    ){
        $VALID = true;
    }
}

?>

<fieldset class="box">

<form method="post" action="">

    <label for="towar">
        Nazwa towaru:
        <span class="required">*</span>
    </label>
    <br>

    <input
        class="<?= $towarErr ? 'inputError' : '' ?>"
        type="text"
        name="towar"
        id="towar"
        value="<?= $_POST['towar'] ?? '' ?>"
    >

    <br>

    <span class="errorMsg"><?= $towarErr ?></span>

    <br><br>

    <label>
        Opcja pakowania:
        <span class="required">*</span>
    </label>

    <div class="<?= $opcjaErr ? 'inputError' : '' ?>">

        <input type="checkbox" value="Koperta" name="opcja[]" id="op1">
        <label for="op1">Koperta</label>
        <br>

        <input type="checkbox" value="Folia" name="opcja[]" id="op2">
        <label for="op2">Folia</label>
        <br>

        <input type="checkbox" value="Folia bąbelkowa" name="opcja[]" id="op3">
        <label for="op3">Folia bąbelkowa</label>
        <br>

        <input type="checkbox" value="Karton" name="opcja[]" id="op4">
        <label for="op4">Karton</label>
        <br>

        <input type="checkbox" value="Karton z usztywnieniem" name="opcja[]" id="op5">
        <label for="op5">Karton z usztywnieniem</label>

    </div>

    <span class="errorMsg"><?= $opcjaErr ?></span>

    <br><br>

    <label>
        Waga paczki:
        <span class="required">*</span>
    </label>

    <div class="<?= $wagaErr ? 'inputError' : '' ?>">

        <input type="radio" value="2kg" name="waga"
        <?= $waga === '2kg' ? 'checked' : '' ?>>
        do 2kg
        <br>

        <input type="radio" value="2-5kg" name="waga"
        <?= $waga === '2-5kg' ? 'checked' : '' ?>>
        od 2 do 5kg
        <br>

        <input type="radio" value="5-10kg" name="waga"
        <?= $waga === '5-10kg' ? 'checked' : '' ?>>
        od 5 do 10kg
        <br>

        <input type="radio" value="10-15kg" name="waga"
        <?= $waga === '10-15kg' ? 'checked' : '' ?>>
        od 10 do 15kg

    </div>

    <span class="errorMsg"><?= $wagaErr ?></span>

    <br><br>

    <label for="email">
        Email kontaktowy:
        <span class="required">*</span>
    </label>

    <br>

    <input
        class="<?= $emailErr ? 'inputError' : '' ?>"
        type="email"
        name="email"
        id="email"
        value="<?= $_POST['email'] ?? '' ?>"
    >

    <br>

    <span class="errorMsg"><?= $emailErr ?></span>

    <br><br>

    <label for="info">
        Dodatkowe informacje:
        <span class="required">*</span>
    </label>

    <br>

    <textarea name="info" id="info"><?= $_POST['info'] ?? '' ?></textarea>

    <br>

    <span class="errorMsg"><?= $infoErr ?></span>

    <br><br>

    <label for="zgoda">
        Zgoda na przetwarzanie danych
        <span class="required">*</span>
    </label>

    <br>

    <input
        class="<?= $zgodaErr ? 'inputError' : '' ?>"
        type="checkbox"
        name="zgoda"
        id="zgoda"
    >

    <span class="errorMsg"><?= $zgodaErr ?></span>

    <br><br>

    <input type="submit" value="Wyślij">

</form>

</fieldset>

<?php

if($VALID){

    $filename = "formularz_zamowienia.txt";

    if(file_exists($filename)){
        $file = fopen($filename, "a");
    } else {
        $file = fopen($filename, "w");
    }

    $data =
        date("Y-m-d H:i:s") .
        "\n" .
        print_r($_POST, true) .
        "\n-----------------\n";

    fwrite($file, $data);

    fclose($file);

    echo "Dane zostały zapisane.";
}

?>

</body>
</html>