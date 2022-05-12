<?php

function minMoves2($nums) {

  sort($nums);

  $i = 0;
  $j = count($nums) - 1;
  $moves = 0;

  while ($i < $j) {
    $moves += $nums[$j] - $nums[$i];
    $i++;
    $j--;

	}
	return $moves;
}
