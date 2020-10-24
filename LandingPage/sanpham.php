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
    <style>
        .imgProduct{
            width: 40%;
            float: left;
        }
        .imgProduct img{
            width: 100%;
        }
        .buttonProduct{
            text-align: center;
        }
        .buttonProduct button {
            cursor: pointer;
            background-color: #55efc4;
            width: 20%;
            border: none;
            height: 50px;
            font-size: 25px;
            border-radius: 5px;
            text-align: center;
            margin: auto;
            cursor: pointer;
            font-size: 20px;
        }
        .buttonProduct button:hover {
            background-color: #00b894;
            color: white;
        }
        h3 {
            background-color: #74b9ff;
            font-size: 40px;
        }
        .product {
            font-size: 25px;
        }
        @media screen and (max-width: 1350px){
            .product {
            font-size: 18px;
        }
        }
        @media screen and (max-width: 980px){
            .buttonProduct button{
                font-size: 16px;
                width: 20%;
                height: 30px;
            }
            h3 {
                font-size: 20px;
            }
            .product {
            font-size: 13px;
        }
        }
        @media screen and (max-width: 770px){
            .imgProduct{
            width: 100%;
            }
            .product {
            font-size: 13px;
            }
            .product .buttonProduct button{
                font-size: 13px;
                width: 50%;
                margin: 5px;
            }
            .product span{
                display: none;
            }

        }
    </style>
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
    <div class="sanpham">
    <div class="imgProduct">
        <?php foreach ($result as $product) : ?>                       
                <img src="<?= $product['image'] ?>" alt="">
        <?php endforeach; ?>
    </div>
    <div class="product">
            <h3><center>Mô tả chi tiết</center></h3>
            <p class="sku">Mã sản phẩm: <?php echo $product['sku'] . "<br />" ?></p>
            <p class="price">Giá: <?php echo $product['price'] . " vnđ" . "<br />" ?></p>
            <p class="price">Đã bán: <?php echo $product['sold'] . " sản phẩm" . "<br />" ?></p>
            <p class="price">Chi tiết sản phẩm: <?php echo $product['alias']  . "<br />" ?></p>
            <span class="stock">Còn lại: <?php echo $product['stock'] ." sản phẩm". "<br />" ?></span>
            <span class="view">Lượt xem: <?php echo $product['view'] . "<br />" ?></span> <br>
            <hr>
            <span class="stock">Lượt xem gần nhất: <?php echo $product['date_lastview'] . "<br />" ?></span>
            <span class="view">Cập nhật: <?php echo $product['updated_at'] . "<br />" ?></span> <br>
            <div class="buttonProduct">
            <button>Giao hàng ngay <i class="fas fa-shipping-fast"></i></button>
            <button>Mua ngay</button>
            </div>
    </div>
    </div>
</body>

</html>