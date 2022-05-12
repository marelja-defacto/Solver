<?php

function compareTriplets($a, $b) {

    $arr = [0, 0];

    if ($a[0] > $b[0]) {
        $arr[0] += 1;
    } else if ($a[0] < $b[0]) {
        $arr[1] += 1;
    }

    if ($a[1] > $b[1]) {
        $arr[0] += 1;
    } else if ($a[1] < $b[1]) {
        $arr[1] += 1;
    }

    if ($a[2] > $b[2]) {
        $arr[0] += 1;
    } else if ($a[2] < $b[2]) {
        $arr[1] += 1;
    }

    return $arr;
}
