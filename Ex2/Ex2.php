<?php

include 'randArray.php';
include 'BinarySearch.php';

const NUM = 5;

$arr = getSortRandArray();

while(binarySearch($arr, NUM) != null){
    unset($arr[binarySearch($arr, NUM)]);
}