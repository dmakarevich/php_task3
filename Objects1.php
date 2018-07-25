<?php
include 'Point.php';
include 'Line.php';
/*
 * Write functions for working with shapes in standard Planar coordinate system
    * Points are represented by coordinates `P(X, Y)`
    * Lines are represented by two points, marking their beginning and ending: `L(P1(X1,Y1)`, `P2(X2,Y2))`
    * Calculate the distance between two points
    * Check if three segment lines can form a triangle
 */

function distance($point1, $point2) {
  $deltaX = abs($point1->getX() - $point2->getX());
  $deltaY = abs($point1->getY() - $point2->getY());

  return sqrt(pow($deltaX,2) + pow($deltaY, 2));
}

function checkTriangle($line1, $line2, $line3) {
  $delta = [];
  $delta[0] = distance($line1->getP1(), $line1->getP2());
  $delta[1] = distance($line2->getP1(), $line2->getP2());
  $delta[2] = distance($line3->getP1(), $line3->getP2());

  sort($delta);

  return ($delta[2] >= $delta[0] + $delta[1]) ? false : true;
}

$pointA = new Point(1,1);
$pointB = new Point(7,11);
$pointC = new Point(7,1);

$lineAB = new Line($pointA, $pointB);
$lineBC = new Line($pointB, $pointC);
$lineAC  = new Line($pointA, $pointC);


$r = distance($pointA, $pointC);
var_dump($r);

var_dump(checkTriangle($lineAB, $lineBC, $lineAC));