<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        function checkPrime($number) {
            if($number<2){
                return false;
            }
            if($number==2){
                return true;
            }
            for($i=2;$i<($number/2);$i++){
                if($number%$i==0){
                    return false;
                }
            }
            return true;
        }

        for($x=0;$x<=100;$x++){
            if(checkPrime($x)){
                echo $x.",";
            }
        }
?>
</body>
</html>
