<?php

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array
// Pusha il codice su GitHub con il nome php_05_nome_cognome.

$numbers = [12, 7, 4, 19, 22, 31, 8, 15, 43, 9, 18, 27, 50, 3];
// $numbers = [7, 19, 31, 15, 43, 9, 27, 3];

$sum = 0;
$counter = 0;
$average = 0;

foreach ($numbers as $number) {
    if($number%2 === 0){
        $sum += $number;
        $counter++;
    }
}

if ($counter > 0){
    $average = $sum / $counter;
    
    echo "La somma dei {$counter} numeri pari presenti è {$sum}.\n";
    echo "La media dei numeri pari presenti è {$average}.\n";
} else {
    echo "Non sono presenti numeri pari.\n";
}
