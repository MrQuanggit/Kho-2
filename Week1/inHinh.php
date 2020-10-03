<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        for($i=0; $i<3;$i++){
            for($j=0;$j<7;$j++){
                echo "*";
            }
            echo "<br>";
        }

        for($i=0; $i<5;$i++){
            for($j=0;$j<=$i;$j++){
                echo "*";
            }
            echo "<br>";
        }

        for($i=5; $i>0;$i--){
            for($j=0;$j<$i;$j++){
                echo "*";
            }
            echo "<br>";
        }

        for ($i = 1 ; $i <= 5 ; $i++){
            for ($j = 1 ; $j <= 5 ; $j++){
                if ($j<=5-$i){
                    echo('&nbsp&nbsp');
                } else {
                    echo('*');
                }
            }echo('<br>');
        }

        for ($i = 1 ; $i <= 5 ; $i++){
            for ($j = 1 ; $j <= 5 ; $j++){
                if ($j<$i){
                    echo('&nbsp&nbsp');
                } else {
                    echo('*');
                }
            }echo('<br>');
        }

        for ($i = 1 ; $i <= 5 ; $i++){
            for ($j = 1 ; $j <= 5 ; $j++){
                if ($j<=5-$i){
                    echo('&nbsp&nbsp');
                } else {
                    echo('*');
                }
            }
            for($k = 1; $k<5;$k++){
                if ($k<$i){
                    echo('*');
                } else {
                    echo('&nbsp&nbsp');
                }
            }
            echo('<br>');
        }
    ?>
</body>
</html>
