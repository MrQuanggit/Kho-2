<?php
    $myArr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];
    usort($myArr, function($a, $b){
        return $b - $a;
    });
    echo implode(" ", $myArr)

    // $count = count($myArr);
    // $t = 0;

    // for($i = 0; $i < $count; $i++) {
    //     for($j = 0; $j < $count - $i - 1; $j++) {
    //         if($myArr[$j] > $myArr[$j + 1]) {
    //             $temp = $myArr[$j + 1];
    //             $myArr[$j + 1] = $myArr[$j];
    //             $myArr[$j] = $temp;
    //         }
    //     }
    // }

    // for($i=0;$i<$count;$i++){
    //     echo $myArr[$i]." ";
    // }
?>