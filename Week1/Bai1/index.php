<?php
function generateArray($size)
{
    $array = array();
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $array[$i][$j] = rand(10, 90);
        }
    }
    return $array;
}
// Hàm tính tổng ma trận cho cột
function sumMatrixColumn($array, $position)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i][$position];
    }
    return $sum;
}
$size = NULL;
$position = NULL;
// $sizeErr = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = $_POST['size'];
    $position = $_POST['position'];
    $has_error = false;
    if ((!is_numeric($size))) {
        $sizeErr = "Nhập 1 số nguyên";
        $has_error = true;
    }
    if (!is_numeric($position) || ($position >= $size)) {
        $positionErr = "Nhập 1 số nguyên và bé hơn Size";
        $has_error = true;
    }
    if (!$has_error) {
        $array = generateArray($size);
        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < count($array[$i]); $j++) {
                echo $array[$i][$j] . "-";
            }
            echo "<br>";
        }
        echo "<br>";
        $sumMatrix = sumMatrixColumn($array, $position);
        echo $sumMatrix;
    }
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
        <input type="text" name="size" placeholder="Size Matrix">
        <span> <?= $sizeErr ?? '' ?> </span>
        <br><br>
        <input type="text" name="position" placeholder="Position Sum Column">
        <span> <?= $positionErr ?? '' ?> </span>
        <input type="submit" value="Result">
    </form>
</body>
</html>