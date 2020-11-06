<?php
session_start();
$_SESSION['arrnum'] = [];
for ($i = 0 ; $i < 100; $i++) {
    array_push($_SESSION['arrnum'], $i);
}
if (!isset($_SESSION['min'])) {
    $_SESSION['min'] = 1;
    $_SESSION['max'] = 100;
}
if (isset($_POST['play'])) {
    if (isset($_POST['yournumber'])) {
        $_SESSION['yournumber'] = $_POST['yournumber'];
        // $_SESSION['numberguest'] = floor(($_SESSION['min'] + $_SESSION['max']) / 2);
        findNum($_SESSION['arrnum'], 0, 100, $_POST['yournumber']);
    }
}
if (isset($_POST['below'])) {
    $_SESSION['min'] = $_SESSION['numberguest'];
    $_SESSION['numberguest'] = floor(($_SESSION['min'] + $_SESSION['max']) / 2);
}
if (isset($_POST['high'])) {
    $_SESSION['max'] = $_SESSION['numberguest'];
    $_SESSION['numberguest'] = floor(($_SESSION['min'] + $_SESSION['max']) / 2);
}
if (isset($_POST['right'])) {
    $result = "máy giỏi lắm";
}
if (isset($_POST['reset'])) {
    session_destroy();
}

function findNum($arr, $min, $max, $num) {
    
    $middleValue = $arr[floor($min+$max)/2];

    if ($num == $middleValue)  {
        echo "So can tim la $num"; 
    
        return;
    }

    if ($middleValue < $num) {
        echo "Số máy đoán là $middleValue nhỏ hơn";
        echo '<br>';
        return findNum($arr, floor($min+$max)/2 +1, $max, $num);
    } else {
        echo "Số máy đoán là $middleValue lớn hơn";
        echo '<br>';
        return findNum($arr, $min, floor($min+$max)/2 - 1, $num);
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .form {
            background-color: #dfe6e9;
            width: 25%;
            padding: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            border-radius: 20px;
        }
        .form input[type = "text"]{
            border: 0;
            display: block;
            background: none;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #6c5ce7;
            padding: 13px 10px;
            width: 70%;
            outline: none;
            border-radius: 24px;
            transition: 0.5s;
            font-size: 16px; 
        }
        .form input[type = "text"]:focus{
            width: 85%;
            border-color: #fdcb6e;
        }


        .form-wrap {
            width: 100%;
            display: flex;
            justify-content: center;
            border: 3px solid red;
        }
        .form input[type = "submit"]{
            border: 0;
            display: block;
            background: none;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #0984e3;
            outline: none;
            border-radius: 24px;
            cursor: pointer;
            width: 50%;
            font-size: 16px;
        }
        .form__btn input {
            margin: 20px 0;
        }
    </style>
    <title>Đoán số</title>
</head>

<body>
    <div class="form">
        <form action="" method="post" class="form-wrap">
            <div>
                <div class="form__heading">
                    <h4>Nhập số của bạn</h4>
                    <input type="text" name="yournumber" value="<?= $_SESSION['yournumber'] ?? "" ?>">
                    <h4>Số máy đoán là</h4>
                    <input type="text" name="number-guest" value="<?= $_SESSION['numberguest'] ?? "" ?>">
                    <span><?= $result ?? "" ?></span>
                </div>
                <div class="form__btn">
                    <input type="submit" value="reset" name="reset">
                    <input type="submit" value="play" name="play">
                    <input type="submit" value="Chính Xác" name="right">
                    <input type="submit" value="Nhỏ hơn" name="below">
                    <input type="submit" value="Lớn hơn" name="high">
                </div>
            </div>
        </form>
    </div>
</body>

</html>