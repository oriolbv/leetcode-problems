<?php
$nums = [-1,0,1,2,-1,-4];
$solution_arr = [];
for ($i = 0; $i < count($nums); ++$i) {
    for ($j = 0; $j < count($nums); ++$j) {
        for ($k = 0; $k < count($nums); ++$k) {
        if (($i !== $j) && ($i !== $k) && ($j !== $k)) {
            $sum = $nums[$i] + $nums[$j] + $nums[$k];
            if ($sum === 0) {
                echo $i . " " . $j . " " . $k . "\n";
            }
        }
        }
    }
}
?>