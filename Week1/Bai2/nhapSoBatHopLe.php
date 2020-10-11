<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class mayTinh{
        function calc($x, $y)
        {
            if ($y == 0 || ($x == 0 && $y == 0)) {
                throw new Exception("Lỗi ngoại lệ!");
            } else {
                echo "Tổng ".$x . " + " . $y . " = " . ($x + $y)."<br>";

                echo "Hiệu ".$x . " - " . $y . " = " . ($x - $y)."<br>";

                echo "Tích ".$x . " x " . $y . " = " . ($x * $y)."<br>";

                echo "Thương ".$x . " / " . $y . " = " . ($x / $y)."<br>";
            }
        }
    }
    try {
        $Quang = new mayTinh;
        $Quang->calc(0, 0);
    } catch (Exception $e) {
        echo "Message: " . $e->getMessage();
    }
    ?>
</body>

</html>