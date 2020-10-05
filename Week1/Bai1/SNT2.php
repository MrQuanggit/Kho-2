<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="Number" placeholder="Nhập số lượng">
        <input type="submit" value="Submit">
    </form>

    <?php
    function checkPrime($number)
    {
        if ($number < 2) {
            return false;
        }
        if ($number == 2) {
            return true;
        }
        for ($i = 2; $i < ($number / 2); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $x = $_GET["Number"];
    $count = 0;
    $N = 2;
    while ($count < $x) {
        if (checkPrime($N)) {
            echo $N . ",";
            $count += 1;
        }
        $N++;
    }
    ?>
</body>

</html>