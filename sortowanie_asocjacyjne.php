<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $filmy = [
        "skazani na shawshank" => "dramat",
        "nietykalni" => "biograficzny",
        "wladca pierscieni: powrot krola" => "fantasy",
        "pulp fiction" => "gangsterski",
        "siedem" => "kryminal",
        "podziemny krag" => "thrller",
        "django" => "western",
        "krol lew" => "animacja",
        "avangers:wojna bez granic" => "akcja",
        "dobry, zly i brzydki"  => "western"
    ];
    function wyswietlTabele($tablica, $opis) {
    echo "<table style='border-collapse: collapse; margin-bottom:20px;'>";
    echo "<caption><strong>$opis</strong></caption>";
    echo "<tr>
            <th style='border:1px dotted black; padding:3px;'>Tytuł</th>
            <th style='border:1px dotted black; padding:3px;'>Gatunek</th>
          </tr>";

    foreach ($tablica as $klucz => $wartosc) {
        echo "<tr>
                <td style='border:1px dotted black; padding:3px;'>$klucz</td>
                <td style='border:1px dotted black; padding:3px;'>$wartosc</td>
              </tr>";
    }

    echo "</table>";
}

$wartosci_rosnacy = $filmy;
asort($wartosci_rosnacy);
wyswietlTabele($wartosci_rosnacy ,"Sortowanie rosnąco według wartości (asort)");

$klucze_rosnaco = $filmy;
ksort($wartosci_rosnacy);
wyswietlTabele($klucze_rosnaco ,"Sortowanie rosnąco według kluczy (ksort)" );
 ?>
</body>
</html>