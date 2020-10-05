<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <p>Số tiền USD: <input type="text" name="usd"></p>
        <input type="submit" id="submit" value="Submit">
    </form>
    <?php
        $rate = 23000;
        $USD = $_GET["usd"];
        $VND = $USD*$rate;
        echo "<br>";
        echo $USD." USD có mệnh giá tiền Việt là: ".$VND." VNĐ";
    ?>
</body>
</html>