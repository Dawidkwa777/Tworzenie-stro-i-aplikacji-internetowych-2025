<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.error{
    color: red;
    width: 300px;
}
.form{ 
    
    background-color: #90ee90;
}

.gwiazdka{
    color: red;
}
.berror{
    border: red 2px solid;
}
    </style>
</head>
<body>
    <?php
        $VALID_FORM_INPUT = false;
        $towarerror = "";
        $emailerror = "";
        $wagaerror = "";
        $opcjaerror = "";
        $zgodaerror = "";
        $waga="";
        $infoerror="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["towar"])){
                $towarerror = "Podaj nazwę produktu";
            }
            else {
                $towar=$_POST["towar"];
            }
            if(empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
             $emailerror = "Podaj poprawny adres email";
            } 
            else {
              $email = $_POST["email"];

            }
            if(empty($_POST["waga"])){
                $wagaerror = "Określ przybliżoną wagę paczki";
            }
            else {
                $waga=$_POST["waga"];
            }
             if(empty($_POST["opcja"])){
                $opcjaerror = "Wybierz opcję pakowania";
            }
            else {
                $opcja=$_POST["opcja"];
            }
            if(empty($_POST["zgoda"])){
                $zgodaerror = "Potwierdź swoją zgodę";
            }
            else {
                $zgoda=$_POST["zgoda"];
            }
            if(empty($_POST["info"]) || strlen($_POST["info"]) < 15){
                $infoerror = "Wiadomość musi mieć conajmniej 15 znaków";
             } else {
                $info = $_POST["info"];
             }
            
            if(empty($towarerror) && empty($emailerror) && empty($wagaerror) && empty($opcjaerror) && empty($zgodaerror) && empty( $infoerror)){
                $VALID_FORM_INPUT=true;
            }
            else{
                $VALID_FORM_INPUT=false;
            }
        }   
    ?>

    <fieldset class="form">
        <form method="post" action="">
        <label for="towar"> Nazwa towaru: <span class="gwiazdka"><?= '*' ?></span> </label><br>
        <input class="<?= $towarerror ? 'berror' : '' ?>" type="text" name="towar" id="towar" value="<?=$_POST['towar'] ?? '' ?>"> <br>
        <span class="error"> <?= $towarerror ?> </span> <br><br>

        <label for="opcja">Wybierz opcję pakowania:</label><span class="gwiazdka"><?= '*' ?></span>
        <div class="<?= $opcjaerror ? 'berror' : '' ?>">
        
        <input type="checkbox" value="Koperta" name="opcja[]" id="opcja1">
        <label for="opcja1">Koperta</label><br>
        
        <input type="checkbox" value="Folia" name="opcja[]" id="opcja2"> 
        <label for="opcja2">Folia</label><br>
        
        <input type="checkbox" value="Folia bąbelkowa"name="opcja[]" id="opcja3">
        <label for="opcja3">Folia bąbelkowa</label><br>
        
        <input type="checkbox" value="karton"name="opcja[]" id="opcja4">
        <label for="opcja4">karton</label><br>
        
        <input type="checkbox" value="Karton z usztywnieniem" name="opcja[]" id="opcja5">
        <label for="opcja2">Karton z usztywnieniem</label><br>
        </div>
        <span class="error"> <?= $opcjaerror ?> </span> <br><br>
       
        
        

        <label for="waga">Podaj wagę paczki: <span class="gwiazdka"><?= '*' ?></span> </label>
        <div class="<?= $wagaerror ? 'berror' : '' ?>">
        
        <input type="radio" value="2kg" name="waga" <?=  $waga === 'do 2kg' ? 'checked' : ' 2kg'  ?>> do 2kg <br>
        <input type="radio" value="2-5kg" name="waga" <?=  $waga === 'od 2 do 5kg' ? 'checked' : '2-5kg'  ?>> od 2 do 5kg <br>
        <input type="radio" value="5-10kg" name="waga" <?=  $waga === 'od 5 do 10kg' ? 'checked' : '5-10kg'  ?>> od 5 do 10kg <br>
        <input type="radio" value="10-15kg" name="waga" <?=  $waga === 'od 10 do 15kg' ? 'checked' : '10-15kg'  ?>> od 10 do 15kg <br>
        </div>
        <span class="error"> <?= $wagaerror ?> </span> <br><br>
        
        <label for="email"> Email kontaktowy <span class="gwiazdka"><?= '*' ?></span> </label><br>
        <input class="<?= $emailerror ? 'berror' : '' ?>" type="email" name="email" id="email" value="<?=$_POST['email'] ?? '' ?>"> <br>
        <span class="error"> <?= $emailerror ?> </span> <br><br>

        <label for="info">Dodatkowe informacje</label><span class="gwiazdka"><?= '*' ?></span><br>
        <textarea  name="info" id="info"></textarea><br>
        <span class="error"> <?= $infoerror ?> </span> <br><br>
       
        <label for="zgoda">Zgoda na przetwarzanie danych </label><span class="gwiazdka"><?= '*' ?></span> <br>
        <input class="<?= $opcjaerror ? 'berror' : '' ?>" type="checkbox" name="zgoda" id="zgoda">
        <span class="error"> <?= $zgodaerror ?> </span><br><br>
        
        <input type="submit" value="wyślij"><br>
        
    </form>


    </fieldset>

    <?php 
    if($VALID_FORM_INPUT){
        $filename='formularz_zamowienia.txt';
        if(file_exists($filename)){
            $filehandle=fopen($filename,'a');
        }else{
            $filehandle=fopen($filename,'w');
        }
        $data=date('Y-m-D H:i:s'). "\n" . print_r($_POST,true);
        fwrite($filehandle,$data);
        fclose($filehandle);
        echo$Valid_message='dane zostały zapisane';
       
       
       
    }
    
    ?>
</body>
</html>