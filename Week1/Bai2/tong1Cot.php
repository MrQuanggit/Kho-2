<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Nhập chiều dài của mảng: <input type="text" name="width" id="">
    Nhập chiều rộng của mảng: <input type="text" name="height" id="">
    <br>
    Nhập cột muốn tính tổng: <input type="text" name="column" id="">
    <input type="submit" value="Submit">
    </form>

    <?php 
    function createArr($width, $height){
        $arr = array();
        for($i=0;$i<$width;$i++){
            for($j=0;$j<$height;$j++){
            $arr[$i][$j] = rand(10,100);
            echo $arr[$i][$j]." ";
            }
            echo "<br>";
        }
        return $arr;
    }

    function findSumColumn($arr, $column){
        $sum = 0;
        for($i=0;$i<count($arr);$i++){
            $sum += $arr[$i][$column];
        }
        return $sum;
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $width = $_POST["width"];
        $height = $_POST["height"];
        $column = $_POST["column"];
        $arr = createArr($width, $height);
        print_r($arr);
        echo "<br>";
        echo "Tổng một cột trong mảng 2 chiều là: ".findSumColumn($arr, $column);
    }
    ?>
</body>
</html>