<?php
    interface Comparator{
        public function compare($circleOne, $circleTwo);
    }

    class Circle {
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
}
    

    class CircleComparator implements Comparator
{

  public function compare($circleOne, $circleTwo)
  {
      $radiusOne = $circleOne->getRadius();
      $radiusTwo = $circleTwo->getRadius();

      if ($radiusOne > $radiusTwo) {
          return 1;
      }  else if($radiusOne < $radiusTwo) {
          return -1;
      } else {
          return 0;
      }
  }
}

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));
