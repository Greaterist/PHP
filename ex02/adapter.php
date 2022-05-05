<?php


include 'externalLib.php';
include 'interfaces.php';


class SquareAdapter implements Isquare {
    protected $squareLib;

    public function __construct(){
        $this->squareLib = new squareAreaLib();
    }

    public function squareArea (int $sideSquare){
        return $squareLib->getSquareArea(int $sideSquare);
    }
}


class CircleAdapter implements Isquare {
    protected $circleLib;

    public function __construct(){
        $this->circleLib = new CircleAreaLib();
    }

    public function circleArea (int $circumference){
        return $circleLib->getCircleArea(int $circumference);
    }
}