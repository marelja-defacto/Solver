<?php

function timeConversion($s) {

    $stringTime = strtotime($s);

    return date('H:i:s', $stringTime);

}
