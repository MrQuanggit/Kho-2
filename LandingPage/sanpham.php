<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DQ Landing Page</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" />
</head>

<body>
    <!-- Menu -->
    <div class="topnav" id="myTopnav">
            <a href="#">Trang chủ</a>
            <a href="#">Danh sách</a>
            <a href="#">Liên hệ</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fas fa-bars"></i></a>
            <a class="search-btn"><i class="fas fa-search"></i></a>
            <a class="cart"><i class="fas fa-cart-plus"></i></a>
      </div>
      <script>
            function myFunction() {
                  var x = document.getElementById("myTopnav");
                  if (x.className === "topnav") {
                        x.className += " responsive";
                  } else {
                        x.className = "topnav";
                  }
            }
      </script>
    <?php
    $jsonData = file_get_contents("product.json");
    $json = json_decode($jsonData, true);
    ?>
    <?php
    $_SESSION["id_sanpham"];
    $productArray = $json;
    $result = [];
    foreach ($productArray as $product) {
        if ($product['id'] == $_SESSION["id_sanpham"]) {
            array_push($result, $product);
        }
    }
    ?>
    <div class="container" style="width: 50%; height:auto; float: left;">
        <?php foreach ($result as $product) : ?>
            <div class="element">
                <p class="sku">Mã sản phẩm: <?php echo $product['sku'] . "<br />" ?></p>
                <a href="index.php?type=<?= $product['id'] ?>"><img class="img" src="<?= $product['image'] ?>" alt=""></a>
                <p class="price">Giá: <?php echo $product['price'] . " vnđ" . "<br />" ?></p>
                <span class="stock">Còn lại: <?php echo $product['stock'] . "<br />" ?></span>
                <span class="view">Lượt xem: <?php echo $product['view'] . "<br />" ?></span> <br>
                <p><button>Mua ngay</button></p>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="product" style="width: 50%; height:auto; float: right; background-color: blue">
            <p>Mô tả</p>
    </div>
</body>

</html>