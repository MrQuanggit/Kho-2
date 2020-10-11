<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Nhập size ma trận: <input type="text" name="size" id="">
    <input type="submit" value="Submit">
    </form>

    <?php 
    function createArr($size){
        $arr = array();
        for($i=0;$i<$size;$i++){
            for($j=0;$j<$size;$j++){
            $arr[$i][$j] = rand(10,100);
            }
        }
        return $arr;
    }

    function findSum($arr){
        $sum = 0;
        for($i=0;$i<count($arr);$i++){
            $sum += $arr[$i][$i];
        }
        return $sum;
    }

    if(isset($_POST["size"])){
        $size = $_POST["size"];
        $arr = createArr($size);
        print_r($arr);
        echo "<br>";
        echo "Tổng đường chéo của mảng 2 chiều là: ".findSum($arr);
    }
    ?>
</body>
</html>