<?php

function pangrams($s) {

    $alphabet = range('a', 'z');

    $sentence = str_split(strtolower($s));

    $diff = array_diff($alphabet, $sentence);

    if (!$diff) {
        return "pangram";
    } else {
        return "not pangram";
    }
}
