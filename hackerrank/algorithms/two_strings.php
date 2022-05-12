<?php

function twoStrings($s1, $s2) {

    $s2length = strlen($s2);

    $result = false;
    for ($i = 0; $i < $s2length; $i++) {

        if (strpos($s1, $s2[$i]) !== false) {
            $result = true;
        }
    }

    if ($result) {
        return "YES";
    } else {
        return "NO";
    }
}
