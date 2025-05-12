<?php
    require_once 'Circle.php';

    $circle = new Circle(1, 1, 2);
    echo $circle . "<br>"; 

    $circle->setX(10);
    $circle->setY(10);
    $circle->setRadius(3);

    echo "X: " . $circle->getX() . "<br>";
    echo "Y: " . $circle->getY() . "<br>";
    echo "Радіус: " . $circle->getRadius() . "<br>";

    echo $circle;
?>