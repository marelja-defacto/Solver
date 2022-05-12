<?php

function equalizeArray($arr) {

    $arrayCount = array_count_values($arr);

    $max = max($arrayCount);

    return count($arr) - $max;
}
