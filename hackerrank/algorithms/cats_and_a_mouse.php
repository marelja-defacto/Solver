<?php

function catAndMouse($x, $y, $z) {

    $A = abs($x - $z);
    $B = abs($y - $z);

    if ($A < $B) {
        return "Cat A";
    } else if ($A > $B) {
        return "Cat B";
    } else {
        return "Mouse C";
    }
}
