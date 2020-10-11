<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nhập Size</label>
        <input type="text" name="size">
        <input type="submit" value="Submit">
    </form>

    <?php 
        function createArr($size){
            $arr = array();
            for($i=0;$i<$size;$i++){
                $arr[$i] = rand(1,100);
            }
            return $arr;
        }

        function findMin($arr){
            $Min = $arr[0];
            for ($i = 1; $i < count(($arr)); $i++) {
                if ($arr[$i] < $Min) {
                    $Min = $arr[$i];
                }
            }
            return $Min;
        }
        if(isset($_POST["size"])){
        $size = $_POST["size"];
        $arr = createArr($size);
        print_r($arr);
        echo"<br>";
        echo "Min của mảng là: ".findMin($arr);
        }
    ?>
</body>
</html>