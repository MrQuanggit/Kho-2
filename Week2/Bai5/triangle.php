<?php
    class Shape
    {
        public $name;
    
        public function __construct($name)
        {
            $this->name = $name;
        }
    
        public function show()
        {
            echo "I'm a Shape";
        }
    }

    class Triangle extends Shape{
        public $side1;
        public $side2;
        public $side3;
        public $color;

        function __construct($name, $side1, $side2, $side3, $color)
        {
            parent::__construct($name);
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 = $side3;
            $this->color = $color;
        }

        function getInfo(){
            return $this->name." = ".$this->side1.",".$this->side2.",".$this->side3;
        }

        function getPerimeter(){
            return $this->side1+$this->side2+$this->side3;
        }

        function getArea(){
            $p = $this->getPerimeter()/2;
            return pow($p*($p - $this->side1)*($p - $this->side2)*($p - $this->side3), 0.5);
        }

        function toString(){
            return "Chu vi: ".$this->getPerimeter()."<br>"."Dien tich: ".$this->getArea()."<br>"."Màu sắc ".$this->color;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $color = $_POST["color"];
        $side1 = $_POST["side1"];
        $side2 = $_POST["side2"];
        $side3 = $_POST["side3"];

        $triangle = new Triangle("triology", $side1, $side2, $side3, $color);
        echo $triangle->toString();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <span>Nhập màu sắc<input type="text" name="color"></span> <br>
        <span>Nhập độ dài 3 cạnh</span>
        <input type="text" name="side1">
        <input type="text" name="side2">
        <input type="text" name="side3"> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>