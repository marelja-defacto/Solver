<?php

function birthdayCakeCandles($candles) {

    $counter = 0;

    $length = count($candles);

    $max = max($candles);

    for ($i = 0; $i < $length; $i++) {

        if ($candles[$i] == $max) {
            $counter++;
        }
    }
    
    return $counter;
}
