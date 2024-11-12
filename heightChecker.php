<?php

function heightChecker($heights) {
    $expected = $heights;
    $n = count($expected);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($expected[$j] > $expected[$j + 1]) {
                $temp = $expected[$j];

                $expected[$j] = $expected[$j + 1];

                $expected[$j + 1] = $temp;
            }
        }
    }
    $count = 0;
    
    for ($i = 0; $i < $n; $i++) {
        if ($heights[$i] != $expected[$i]) {
            $count++;
        }
    }
    return $count;
}

$heights = [1, 1, 4, 2, 1, 3];
echo heightChecker($heights);