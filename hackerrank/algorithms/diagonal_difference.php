<?php

function diagonalDifference($arr) {

    $sumFromLeft = 0;
    $sumFromRight = 0;
    $length = count($arr);
    $absSum = 0;
    for ($i = 0; $i < $length; $i++) {

        for ($j = 0; $j < $length; $j++) {

            if ($i == $j) {
                $sumFromLeft += $arr[$i][$j];
            }

            if ($i == $length - $j - 1) {
                $sumFromRight += $arr[$i][$j];
            }

        }
    }

    $absSum = abs($sumFromLeft - $sumFromRight);
    return $absSum;
}
