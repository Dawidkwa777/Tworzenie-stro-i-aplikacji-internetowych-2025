<?php

$filmy = [
    "Skazani na Shawshank" => "dramat",
    "Nietykalni" => "biograficzny",
    "Władca Pierścieni: Powrót króla" => "fantasy",
    "Pulp Fiction" => "gangsterski",
    "Siedem" => "kryminał",
    "Podziemny krąg" => "thriller",
    "Django" => "western",
    "Król Lew" => "animacja",
    "Avengers: Wojna bez granic" => "akcja",
    "Dobry, zły i brzydki" => "western"
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


$wartosci_rosnaco = $filmy;
asort($wartosci_rosnaco);
wyswietlTabele($wartosci_rosnaco, "Sortowanie rosnąco według wartości (asort)");

$klucze_rosnaco = $filmy;
ksort($klucze_rosnaco);
wyswietlTabele($klucze_rosnaco, "Sortowanie rosnąco według kluczy (ksort)");


$wartosci_malejaco = $filmy;
arsort($wartosci_malejaco);
wyswietlTabele($wartosci_malejaco, "Sortowanie malejąco według wartości (arsort)");


$klucze_malejaco = $filmy;
krsort($klucze_malejaco);
wyswietlTabele($klucze_malejaco, "Sortowanie malejąco według kluczy (krsort)");

?>


    
