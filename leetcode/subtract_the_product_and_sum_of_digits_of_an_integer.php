<?php

function subtractProductAndSum($n) {

  $split = str_split($n);

  return array_product($split) - array_sum($split);
}
