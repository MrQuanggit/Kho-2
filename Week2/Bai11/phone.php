<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" />
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <textarea name="number" id="number" cols="50" rows="10"></textarea>
    <button type="submit"><i class="fas fa-search"></i></button>
    </form>

    <?php
        if(isset($_POST['number'])){
            $number = $_POST['number'];
            $arr = explode(", ", $number);
            echo "<pre>";
            print_r($arr);
            $viettel = [];
            $vina = [];
            $mobi = [];
            $other = [];

            for($i = 0; $i<count($arr); $i++){
                if($arr[$i][1] == 7){
                    array_push($mobi, $arr[$i]);
                } elseif ($arr[$i][1] == 3){
                    array_push($viettel, $arr[$i]);
                } elseif ($arr[$i][1] == 8) {
                    array_push($vina, $arr[$i]);
                } else {
                    array_push($other, $arr[$i]);
                }
            }

            echo "<pre>";
            echo "Viettel:";
            print_r($viettel);
            echo "Vina:";
            print_r($vina);
            echo "Mobi:";
            print_r($mobi);
            echo "Other";
            print_r($other);
        }
    ?>
</body>
</html>