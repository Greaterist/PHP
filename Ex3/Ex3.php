<?php

include 'Search/randArray.php';
include 'Search/LinearSearch.php';
include 'Search/BinarySearch.php';
include 'Search/InterpolationSearch.php';
$length = 10000;
const NUM = 5000;

for($i=0;$i<4;$i++){
    echo "Длина массива: $length".PHP_EOL;
    $arr = randArray($length, 1, $length);
    echo "Линейный поиск".PHP_EOL;
    echo linearSearch($arr, NUM).PHP_EOL;
    
    echo "Бинарный поиск".PHP_EOL;
    echo binarySearch($arr, NUM).PHP_EOL;
    
    echo "Интерполяционный".PHP_EOL;
    echo interpolationSearch($arr, NUM);
    $length*=10;
}


