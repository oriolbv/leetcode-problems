<?php
  $array = str_split("");
  $tmp_str = "";
  $last_count = 0;
  while (count($array) > 0) {
    echo "Count: ". count($array) ."\n";
    foreach ($array as $char) {
        $pos = strpos($tmp_str, $char);
        if ($pos === false) {
            $tmp_str = $tmp_str . $char;
        } else {
            if ($last_count < strlen($tmp_str)) {
                $last_count = strlen($tmp_str);
            }
            array_splice($array, 0, 1);
            $tmp_str = "";
            break;
        }
    } 
  }
  echo "RESULT : " . $last_count;
?>
