<?php

function pageCount($n, $p) {

    //$n /= 2;
    //$p /= 2;

    return min(intval($p / 2), intval($n / 2) - intval($p / 2));

}
