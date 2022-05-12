<?php

function maximumToys($prices, $k) {

    $counter = 0;
    $sum = 0;

    sort($prices);

    for ($i = 0; $i < count($prices); $i++) {

        if ($sum + $prices[$i] <= $k) {
            $sum += $prices[$i];
            $counter++;
        }
    }
    return $counter;

}
