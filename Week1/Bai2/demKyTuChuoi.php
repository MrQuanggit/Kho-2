<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="x">
        <input type="submit" value="Submit">
    </form>

    <?php
        function countStr($str, $x){
        $count = 0;
            for($i = 0; $i < strlen($str); $i++){
                if($x == $str[$i]){
                    $count += 1;
                }
    
        }
        return $count;
        }

        $str1 = "Code Gdm!";
        if(isset($_POST["x"])){
            $x = $_POST["x"];
            echo(countStr($str1, $x));
        }
    ?>
</body>
</html>