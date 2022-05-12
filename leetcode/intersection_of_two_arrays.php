<?php

function intersection($nums1, $nums2) {

  $result = [];

	$storeNums1 = [];

  foreach ($nums1 as $num1) {
    $storeNums1[$num1] = true;
  }
  
  foreach ($nums2 as $num2) {
    if (isset($storeNums1[$num2]) && !isset($result[$num2])) {
      $result[$num2] = $num2;
    }
  }
  return $result;
}
