<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Rat
    {
        public $name;
        public $weight;
        public $speed;

        public function __construct($name, $weight, $speed)
        {
            $this->name = $name;
            $this->weight = $weight;
            $this->speed = $speed;
        }

        public function say()
        {
            return "Chít chít";
        }

        public function display()
        {
            return "Chuột{" . "Tên: " . $this->name . ", Cân nặng: " . $this->weight . ", Tốc độ: " . $this->speed . "}";
        }
    }

    class Cat
    {
        public $name;
        public $weight;
        public $speed;

        public function __construct($name, $weight, $speed)
        {
            $this->name = $name;
            $this->weight = $weight;
            $this->speed = $speed;
        }

        public function say()
        {
            return "Meo meo";
        }

        public function catchRat($rat)
        {
            if ($rat->speed < $this->speed) {
                $this->rat = $rat;
                echo "Đã bắt được " . $this->rat->name;
            } else {
                echo "Chưa bắt được " . $this->rat->name;
            }
        }

        public function eatRat()
        {
            $this->weight += $this->rat->weight;
            $this->rat->weight = 0;
        }

        public function display()
        {
            return "Mèo{" . "Tên: " . $this->name . ", Cân nặng: " . $this->weight . ", Tốc độ: " . $this->speed . "}";
        }
    }

    // Khởi tạo 2 đối tượng thuộc 2 class
    $nameCat = "Tom";
    $weightCat = 200;
    $speedCat = 50;

    $nameRat = "Jerry";
    $weightRat = 20;
    $speedRat = 30;

    $tom = new Cat($nameCat, $weightCat, $speedCat);
    $jerry = new Rat($nameRat, $weightRat, $speedRat);

    // Các câu lệnh gọi class
    echo $tom->display();
    echo $jerry->display();
    echo "<br>";
    echo $jerry->name." kêu ".$jerry->say()." ";
    echo $tom->name." kêu ".$tom->say()." ";
    echo "<br>";
    echo $tom->catchRat($jerry);
    echo "<br>";
    echo $tom->eatRat();
    echo "<br>";
    echo $tom->display();
    echo $jerry->display();
    ?>
</body>

</html>