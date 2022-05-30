<?php

function linearSearch ($myArray, $num) {

    $arrCount = count($myArray);
    $n = 0;
    for ($i = 0; $i < $arrCount; $i++) {
        $n++;

        if($myArray[$i] == $num) {
            echo "Количество итераций: $n" . PHP_EOL;
            return $i;
        }

        elseif ($myArray[$i] > $num) {
            echo "ЧИСЛО НЕ НАЙДЕНО! Количество итераций: $n" . PHP_EOL;            
            return null;
        }
    }
}