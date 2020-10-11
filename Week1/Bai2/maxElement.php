<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $array = array(
            array(1,3,5,7),
            array(3,5,6,2,4),
            array(9,8,4,6),
            array(13,5,7,18,13),
        );
        
        function findMax($arr){
        $max = $arr[0][0];
        for($i=0;$i<count($arr);$i++){
            for($j=0;$j<count($arr[$i]);$j++){
                if($arr[$i][$j]>$max){
                    $max = $arr[$i][$j];
                }
            }
        }
        return $max;
    }

    echo findMax($array);
    ?>
</body>
</html>