<?php
class Circle{
    public $color;
    public $radius;

    function __construct($color, $radius)
    {
        $this->color = $color;
        $this->radius = $radius;
    }
    
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
}

class Cylinder extends Circle{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
}

$circle = new Circle("blue", 4);
echo $circle->getColor()."<br>";
echo $circle->getRadius()."<br>";

$cylinder = new Cylinder("red", 4, 5);
echo $cylinder->calculateArea();
?>