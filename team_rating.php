<?php
$rating = [1,2,3,4];
$count = 0;
for ($i = 0; $i < count($rating); ++$i) 
{
    for ($j = $i+1; $j < count($rating); ++$j) 
    {
        for ($k = $j+1; $k < count($rating); ++$k) 
        {
            if ((($rating[$i] < $rating[$j]) && ($rating[$j] < $rating[$k])) ||
                (($rating[$i] > $rating[$j]) && ($rating[$j] > $rating[$k]))) 
            {
                $count += 1;
                echo $rating[$i] . " " . $rating[$j] . " " . $rating[$k] . "\n";     
            }
        }
    }
}

echo "Count : " . $count . "\n";
?>