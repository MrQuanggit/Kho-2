<?php

interface Resizeable
{
    public function resize();
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

class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function resize()
    {
        $this->radius =  $this->radius*rand(1, 100);
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

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function resize()
    {
        $this->width = $this->width*rand(1, 100);
        $this->height = $this->height*rand(1, 100);
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

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }

    public function resize()
    {
        $this->width = $this->width*rand(1, 100);
    }
}

function Program($circle, $rectangle, $square){
    $array = [];
    echo "Diện tích hình tròn trước: {$circle->calculateArea()} <br>";
    echo "Diện tích chữ nhật trước: {$rectangle->calculateArea()} <br>";
    echo "Diện tích vuông trước: {$square->calculateArea()} <br>";
    array_push($array, $circle, $rectangle, $square);
    $circle->resize();
    $rectangle->resize();
    $square->resize();
    echo "Diện tích hình tròn sau: {$circle->calculateArea()} <br>";
    echo "Diện tích chữ nhật sau: {$rectangle->calculateArea()} <br>";
    echo "Diện tích vuông sau: {$square->calculateArea()} <br>";
    print_r($array);
}

$circle = new Circle("1", 2);
$rectangle = new Rectangle("2", 4, 5);
$square = new Square("3", 3);
Program($circle, $rectangle, $square);
