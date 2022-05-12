<?php

function findDigits($n) {

    $toArray = str_split($n);
    $length = count($toArray);
    $result = 0;

    for ($i = 0; $i < $length; $i++) {

        if ($toArray[$i] != 0 && $n % $toArray[$i] == 0) {
            $result++;
        }
    }
    return $result;
}
