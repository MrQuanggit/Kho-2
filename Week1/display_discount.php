<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $Description = $_POST["description"];
        $Price = $_POST["price"];
        $Percent = $_POST["percent"];

        echo "Thông tin sản phẩm ".$Description."<br>";

        $discountAmount = $Price*$Percent*0.1;
        $discountPrice = $Price - $discountAmount;
        echo "Giá chiếu khấu là: ".$discountAmount."<br>";
        echo "Giá sau khi chiếu khấu là ".$discountPrice;
    
?>
</body>
</html>