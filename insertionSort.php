<?php
function insertionSort1($n, $arr) {
    $temp = $arr[$n - 1];
    for ($i = $n - 2; $i >= 0; $i--) {
        // si es mayor que temp lo sobreescribimos la pos
        if ($arr[$i] > $temp) {
            $arr[$i + 1] = $arr[$i];
            echo implode(" ", $arr) . "<br>";
        } else {
            $arr[$i + 1] = $temp;
            echo implode(" ", $arr) . "<br>";
            return;
        }
    }
    $arr[0] = $temp; //temp siempre sera el menor, por eso siempre en $arr[0]
    echo implode(" ", $arr) . "<br>";
}

// $n = intval(trim(fgets(STDIN)));

// $arr_temp = rtrim(fgets(STDIN));

// $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1(5,[1,2,4,5,3]);
?>