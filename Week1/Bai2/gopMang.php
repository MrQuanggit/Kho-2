<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr1 = array(1,3,5,7,9);
        $arr2 = array(2,4,6,8,10);

        function mang($arr1, $arr2){
        $arr3 = array();
        for($i=0;$i<count($arr1);$i++){
            array_push($arr3, $arr1[$i]);
        }
        for($j=0;$j<count($arr2);$j++){
            array_push($arr3, $arr2[$j]);
        }
        return $arr3;
    }

    print_r(mang($arr1, $arr2));
    ?>
</body>
</html>