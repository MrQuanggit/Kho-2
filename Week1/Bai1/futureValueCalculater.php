<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 10px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="money" placeholder="Inventment Amount">
        <input type="text" name="rate" placeholder="Yearly Interest Rate">
        <input type="text" name="year" placeholder="Number of Years">
        <input type="submit" id="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $money = $_POST["money"];
        $rate = $_POST["rate"];
        $year = $_POST["year"];

        $present = $money * (($rate + 1) * $year);
        echo "Tiền sau " . $year . " năm gửi có được là " . $present;
    }
    ?>
</body>

</html>