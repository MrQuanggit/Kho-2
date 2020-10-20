<?php
 class point2D
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
     function toString(){
         return $this->x." ".$this->y."<br>";
     }   
 }
 
 class point3D extends point2D{
     public $z;
     function __construct($x, $y, $z)
     {
         parent::__construct($x, $y);
         $this->z = $z;
     }
     public function setZ($z)
     {
         $this->z = $z;
     }
     public function getZ()
     {
         return $this->z;
     }
     public function setXYZ($x, $y, $z)
     {
         $this->x = $x;
         $this->y = $y;
         $this->z = $z;
     }
     public function getXYZ()
     {
        $XYZ = [];
        array_push($XYZ, $this->x);
        array_push($XYZ, $this->y);
        array_push($XYZ, $this->z);
        return $XYZ;
     }
     function toString(){
        return $this->x." ".$this->y." ".$this->z."<br>";
     }  
 }
 
 $D2 = new point2D(3, 4);
 print_r($D2->getXY());

 $D3 = new point3D(3, 4, 5);
 print_r($D3->getXYZ());
?>

