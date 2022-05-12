<?php

function breakingRecords($scores) {

    $max = $scores[0];
    $min = $scores[0];

    $highestScore = 0;
    $lowestScore = 0;
    $length = count($scores);

    for ($i = 0; $i < $length; $i++) {
        if ($scores[$i] > $max) {
            $max = $scores[$i];
            $highestScore++;
        } else if ($scores[$i] < $min) {
            $min = $scores[$i];
            $lowestScore++;
        }
    }

    return [$highestScore, $lowestScore];
}
