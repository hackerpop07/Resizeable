<?php
include "Resizeable.php";
include "Circle.php";
include "Rectangle.php";
include "Square.php";
$circle = new Circle("hinh tron", 4);
echo "dien tich hinh tron ban dau:", $circle->acreage(), "<br>";
$circle->resize();
echo "dien tich hinh tron sau khi tang kich thuoc:", $circle->acreage(), "<br>";
$recrangle = new Rectangle(5, 6);
echo "S HCN: ", $recrangle->acreage(), "<br>";
$recrangle->resize();
echo "S HCN sau: ", $recrangle->acreage(), "<br>";
$square = new Square(6);
echo "S HV: ", $square->acreage(), "<br>";
$square->resize();
echo "S HV sau: ", $square->acreage(), "<br>";