<?php
class Point
{
    public $x;
    public $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        $XY = [];
        array_push($XY, $this->x);
        array_push($XY, $this->y);
        return $XY;
    }
    function toString()
    {
        return "(" . $this->x . "," . $this->y . ")" . "<br>";
    }
}

class MovablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        $speed = [];
        array_push($speed, $this->xSpeed);
        array_push($speed, $this->ySpeed);
        return $speed;
    }
    function toString()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "(" . $this->x . "," . $this->y . ")" . ", speed = " . "(" . $this->xSpeed . "," . $this->ySpeed . ")" . "<br>";
    }
    function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "(" . $this->x . "," . $this->y . ")" . "<br>";
    }
}

$D2 = new Point(3, 4);
echo ($D2->toString());

$D3 = new MovablePoint(3, 4, 5, 6);
echo ($D3->toString());
