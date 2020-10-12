<?php
include_once(dirname(__FILE__) . '/../Comparable/Circle.php');
include_once(dirname(__FILE__) . '/../Comparable/Comparable.php');

class CircleComparator implements Comparable
{
    public function compareTo($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if($radiusOne > $radiusTwo) {
            echo "Bigger";
        } elseif ($radiusOne < $radiusTwo) {
            echo "Lower";
        } else {
            echo "Equal";
        }
    }
}