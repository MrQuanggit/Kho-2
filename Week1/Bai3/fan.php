<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Fan{
            const SLOW = 1;
            const MEDIUM = 2;
            const FAST = 3;

            private $speed;
            private $on;
            private $radius;
            private $color;

            function __construct()
            {
                $this->speed = self::SLOW;
                $this->on = false;
                $this->radius = 5;
                $this->color = "blue";
            }

            function getSpeed(){
                return $this->speed;
            }
            function getOn(){
                return $this->on;
            }
            function getRadius(){
                return $this->radius;
            }
            function getColor(){
                return $this->color;
            }

            function setSpeed($speed){
                $this->speed = $speed;
            }
            function setOn($on){
                $this->on = $on;
            }
            function setRadius($radius){
                $this->radius = $radius;
            }
            function setColor($color){
                $this->color = $color;
            }

            function toString(){
                if($this->on){
                    return "Tốc độ: ".$this->speed." Màu sắc: ".$this->color." Radius ".$this->radius." fan is on";
                } else {
                    return "Màu sắc: ".$this->color." Radius ".$this->radius." fan is off";
                }
            }
        }

        $fan1 = new Fan();
        $fan1->setSpeed($fan1::MEDIUM);
        $fan1->setOn(true);
        $fan1->setRadius(10);
        $fan1->setColor("yellow");
        echo $fan1->toString();
    
        echo "<br>";

        $fan2 = new Fan();
        $fan2->setSpeed(10);
        $fan2->setOn(true);
        $fan2->setRadius(5);
        $fan2->setColor("blue");
        echo $fan2->toString();
    ?>
</body>
</html>