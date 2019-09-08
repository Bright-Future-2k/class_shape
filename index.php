<?php
include ("Shape.php");
include ("circle.php");
include ("rectangle.php");
include("square.php");

$shape = new Shape("shape");
echo "Name: " . $shape->name ."<br>"."<br>";

$circle = new circle('circle',15);
echo "Perimeter circle: " . $circle->calculatePerimeter()."<br>"."<br>";
echo "Area circle: " . $circle->calculateArea()."<br>"."<br>";
echo "Name: " .$circle->show()."<br>"."<br>";

$rectangle = new rectangle('rectangle',15,30);
echo "Area Rectangle: " . $rectangle->calculateArea()."<br>"."<br>";
echo "Perimeter Rectangle: " .$rectangle->calculatePerimeter()."<br>"."<br>";

$square = new square('square',4,4,4);
echo "Area square: " . $square->calculateArea()."<br>"."<br>";
echo "Perimeter square: " .$square->calculatePerimeter()."<br>"."<br>";

?>

