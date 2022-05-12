<?php

function diagonalSum($mat) {

  $length = count($mat);
  $sum = 0;

  for ($i = 0; $i < $length; $i++) {
    $j = $length - $i - 1;

    $sum += $mat[$i][$i];

    if ($i != $j) {
      $sum += $mat[$i][$j];
    }
    $j--;
  }
  return $sum;
}
