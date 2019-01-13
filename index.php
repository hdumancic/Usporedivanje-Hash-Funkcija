<?php

/**
 * Definiranje konstante koja će se hashirati
 */
const String = "Sigurnost operacijskih sustava";


/**
 * Metoda u kojoj prolazimo kroz sve hash funkcije unutaar polja hash_algos() i za svaku hash funkciju mjerimo
 * koliko vremena je potrebno da se 100 000 puta hashira definirana konstanta te to vrijeme se ispisuje na ekran
 */
foreach(hash_algos() as $hash)
{
    $time_before = microtime(true);
    $hashed_string = "";
    for($j = 0; $j < 100000; $j++)
    {
        if($j == 0){
            $hashed_string = String;
        }
        $hashed_string = hash($hash, $hashed_string, FALSE);
    }
    $time_after = microtime(true);
    echo $hash . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
    echo $time_after - $time_before;
    echo "<br>";
}
?>