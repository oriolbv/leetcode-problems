<?php
$nums = [3,2,4];
$target = 6;
$solution_arr = [];
$is_found = false;
for ($i = 0; $i < count($nums); ++$i) {
  if ($is_found) {
    break; 
  }
  for ($j = 0; $j < count($nums); ++$j) {
    if ($i !== $j) {
      $sum = $nums[$i] + $nums[$j];
      if ($sum === $target) {
          array_push($solution_arr, $i, $j);
          echo $solution_arr[0] . " " . $solution_arr[1] . "\n";
          $is_found = true;
      }
    }
  }
}
?>