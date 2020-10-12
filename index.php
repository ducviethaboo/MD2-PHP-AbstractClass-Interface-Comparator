<?php
include_once 'CircleComparator.php';

$circleone = new Circle('Circle-One',4);
$circletwo = new Circle('Circle-Two',4);
$circlecompare = new CircleComparator();
$circlecompare->compareTo($circleone,$circletwo);

