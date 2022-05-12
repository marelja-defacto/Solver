<?php

function strangeCounter($t) {

    $initialValue = 3;

    while ($t > $initialValue) {

        $t -= $initialValue;

        $initialValue *= 2;
    }

    return $initialValue - $t + 1;
}
