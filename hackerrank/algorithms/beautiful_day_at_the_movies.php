<?php

function beautifulDays($i, $j, $k) {

    $first = [];
    $result = [];
    $inRange = range($i, $j);

    for ($i = 0; $i < count($inRange); $i++) {

        $first[] = strrev($inRange[$i]);
    }

    $reversedNums = implode(', ', $first);

    $length = count($inRange);

    for ($i = 0; $i < $length; $i++) {
        //$result[] = $inRange[$i];
        for ($i = 0; $i < count($first); $i++) {

            $result[] = ($inRange[$i] - $first[$i]) / $k;
        }
    }
    $counter = 0;
    for ($i = 0; $i < count($result); $i++) {

        if (is_int($result[$i])) {
            $counter++;
        }
    }
    return $counter;
}
