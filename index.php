<?php
include_once("Colorable.php");
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$shape[0] = new Circle('Circle 01', 3);
$shape[1] = new Cylinder('Cylinder 01', 3, 4);
$shape[2] = new Rectangle('Rectangle 01', 3, 4);
$shape[3] = new Square('Square 01', 4);

foreach ($shape as $value) {
    echo $value->show(), "<br>";
    echo "CalculateArea: ", $value->calculateArea(), "<br>";
    echo "CalculatePerimeter: ", $value->calculatePerimeter(), "<br>";
    if ($value == new Square('Square 01', 4)) {
        $value->howToColor();
    }
}
