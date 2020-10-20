<?php

interface Colorable 
{
    public function howtoColor();
}


class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return "I am a shape. My name is $this->name";
    }
}

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
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

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}

class Cylinder extends Circle
{
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

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }

    public function howtoColor()
    {
        return "Color all four sides..";
    }
}

function Program($circle, $rectangle, $square){
    $array = [];
    array_push($array, $circle, $rectangle, $square);
    foreach($array as $value){
        echo "Diện tích: {$value->calculateArea()} <br>";
        if($value instanceof Colorable){
            echo $value->howtoColor();
        }
    }
}

$circle = new Circle("1", 2);
$rectangle = new Rectangle("2", 4, 5);
$square = new Square("3", 3);
Program($circle, $rectangle, $square);
