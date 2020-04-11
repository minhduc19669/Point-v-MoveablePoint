<?php
include 'Point.php';
include 'MoveablePoint.php';
$y=new Point(5,6);
echo $y;
echo "<br>";
$x=new MoveablePoint(1,2,3,4);
echo $x;
echo "<br>";
$x->move();
echo $x;
echo "<br>";
$x->move();
echo $x;