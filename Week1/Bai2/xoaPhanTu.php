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
        <input type="text" name="number">
        <input type="submit" value="Submit">
    </form>
    <?php
        function delete($arr, $x){
            for($i=0;$i<count($arr);$i++){
                if($arr[$i] == $x){
                    array_splice($arr, $i, 1);
                    $i--;
                    array_push($arr, 0);
                }
            }return $arr;
            }; 
        
        if(isset($_POST["number"])){
            $number = $_POST["number"];
            $arr = array(1,2,3,4,5,6,7,8,9);
            print_r(delete($arr, $number));
        }
        
    ?>
</body>
</html>