<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="size" placeholder="Size Matrix">
        <span>  </span>
        <br><br>
        <input type="text" name="number" placeholder="Position">
        <span>  </span>
        <input type="submit" value="Result">
    </form>
</body>
    <?php
        function createArr($size){
            $arr = array();
            for($i=0;$i<$size;$i++){
                $arr[$i] = rand(1,100);
            }
            return $arr;
        }

        function findIndex($arr, $number){
            if($number < 0 || $number > 100){
                throw new Exception("Chỉ số vượt quá giới hạn của mảng!");
            } 
            for($i=0;$i<count($arr);$i++){
                if($number == $i){
                    return $arr[$i];
                }
            }
        
    }

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $size = $_POST["size"];
            $number = $_POST["number"];
            try {
                $array = createArr($size);
                echo "Giá trị của phần tử có chỉ số ".$number." là ".findIndex($array, $number);
            } catch (Exception $e) {
                echo "Message: " . $e->getMessage();
            }
        }
    ?>
</html>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    if(isset($_POST["size"]))
?>