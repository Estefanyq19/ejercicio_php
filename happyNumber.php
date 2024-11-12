<?php

// Función que devuelve la suma de los cuadrados de los dígitos de un número

function sumDigitSquare($n) {

    $sq = 0;

    while ($n) {

        $digit = $n % 10;

        $sq += $digit * $digit;

        $n = intval($n / 10);

    }

    return $sq;

}

// Función que devuelve true si el número es feliz, de lo contrario false

function isHappy($n) {

    $s = array();

    $s[$n] = true;

    while (true) {

        if ($n == 1) {

            return true;

        }

        $n = sumDigitSquare($n);

        if (isset($s[$n])) {

            return false;

        }

        $s[$n] = true;

    }

    return false;

}

// Código principal

$n = 2;

if (isHappy($n)) {

    echo "Sí\n";

} else {

    echo "No\n";

}

?>