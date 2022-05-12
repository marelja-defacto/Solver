<?php

function numberOfSteps ($num) {

  $steps = 0; // track steps

  while ($num > 0) {
    if ($num % 2 == 0) {
      $num /= 2;
      $steps++;
    } else {
      $num--;
      $steps++;
    }
  }
  return $steps;
}
