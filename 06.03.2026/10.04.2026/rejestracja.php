
<?php

$login = "";
$haslo = "";
$rola = "";

$blad_login = "";
$blad_haslo = "";
$blad_rola = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $login = $_POST["login"] ?? "";
    $haslo = $_POST["haslo"] ?? "";
    $rola  = $_POST["rola"] ?? "";


    if (empty($login)) {
        $blad_login = "Login jest wymagany";
    }

    if (empty($haslo)) {
        $blad_haslo = "Hasło jest wymagane";
    }

    if (empty($rola)) {
        $blad_rola = "Wybierz jedną rolę";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Rejestracja</title>

<style>
fieldset {
    border: 4px solid yellowgreen;
    width: 300px;
    padding: 10px;
}

.error {
    color: red;
}
</style>

</head>
<body>

<form method="post">

<fieldset>
<legend>Rejestracja</legend>

<label>Login: *</label>
<span class="error"><?php echo $blad_login; ?></span><br>
<input type="text" name="login" value="<?php echo $login; ?>"><br><br>

<label>Hasło: *</label>
<span class="error"><?php echo $blad_haslo; ?></span><br>
<input type="password" name="haslo" value="<?php echo $haslo; ?>"><br><br>

<label>Wybierz jedną rolę: *</label>
<span class="error"><?php echo $blad_rola; ?></span><br>

<input type="radio" name="rola" value="Uzytkownik" <?php if($rola=="Uzytkownik") echo "checked"; ?>> Użytkownik<br>
<input type="radio" name="rola" value="Autor" <?php if($rola=="Autor") echo "checked"; ?>> Autor<br>
<input type="radio" name="rola" value="Redaktor" <?php if($rola=="Redaktor") echo "checked"; ?>> Redaktor<br>
<input type="radio" name="rola" value="Administrator" <?php if($rola=="Administrator") echo "checked"; ?>> Administrator<br><br>

<input type="submit" value="Zarejestruj">

</fieldset>

</form>

</body>
</html>