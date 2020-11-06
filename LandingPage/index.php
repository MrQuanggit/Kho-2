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
      <?php
      $jsonData = file_get_contents("product.json");
      $json = json_decode($jsonData, true);
      ?>

      <!-- Trang từng sản phẩm -->
      <?php

      session_start();

      if (isset($_GET['type'])) {
            $_SESSION["id_sanpham"] = $_GET["type"];
            header('Location: http://localhost:5656/sanpham.php');
      }
      if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = [];
        } else {
            $_SESSION["cart"] = $_SESSION["cart"];
      }
      if (isset($_GET["cart"])) {
            $cartArray = $json;
            foreach ($cartArray as $product) {
                  if ($product['id'] == $_GET["cart"]) {
                        array_push($_SESSION["cart"], $product);
                  }
            }
      }

      ?>

      <!-- Menu -->
      <div class="topnav" id="myTopnav">
            <a href="#">Trang chủ</a>
            <a href="#">Danh sách</a>
            <a href="#">Liên hệ</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fas fa-bars"></i></a>
            <a class="search-btn" href="http://localhost:5656/login.php"><i class="fas fa-sign-in-alt"></i></a>
            <a class="cart"><i class="fas fa-cart-plus"></i><span><?= count($_SESSION["cart"]) ?></span></a>
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
      <!-- intro -->
      <div class="list">
            <h1>XIN CHÀO CÁC BẠN ĐẾN VỚI SIÊU THỊ DQ</h1>
      </div>
      <div class="intro">
            <img src="./Ảnh./My-New-Project_2.jpg" alt="">
            <ul>
                  Với hơn 5 năm kinh nghiệm trong lĩnh vực bán lẻ, siêu thị DQ tự tin là một trong những nơi uy tín nhất trong việc cung cấp cho khách hàng những nguyên liệu tươi mới, an toàn thực phẩm cùng với giá phù hợp nhất tới tay khách hàng.
                  <li>Với những nông sản sạch theo tiêu chuẩn VietGap từ những vùng nông thôn Việt Nam</li>
                  <li>Giao hàng nhanh chóng trong 2h đồng hồ, đảm bảo uy tín với đội ngũ giao hàng của chính công ty</li>
                  <li>Cơ sở vật chất hiện đại, đạt chuẩn, với kho bãi sạch sẽ và đảm bảo an toàn</li>
                  <p>Liên hệ chúng tôi: 0909.909.xxx - 28 Nguyễn Tri Phương - TP.Huế © 2020 Dang Quang</p>
                  <span>Hoặc qua các fanpage của siêu thị DQ: </span>
                  <a><i class="fab fa-facebook-f"></i></a>
                  <a><i class="fab fa-instagram"></i></a>
                  <a><i class="fab fa-youtube"></i></a>
                  <a><i class="fab fa-twitter"></i></a>
                  <a><i class="fab fa-facebook-messenger"></i></a>
            </ul>
      </div>

      <div class="find">
            <form action="" method="post">
                  <input type="text" name="search" class="search-txt" placeholder="Mã sản phẩm ..." />
                  <input type="submit" class="submit" value="Tìm kiếm">
      </div>
      <?php
      if (isset($_POST['search'])) {
            $search = $_POST["search"];
            $searchArray = $json;
            $result = [];
            foreach ($searchArray as $product) {
                  if ($product['sku'] == $search) {
                        array_push($result, $product);
                  }
            }
      }
      ?>
      <div class='findValue'>
            <?php if (isset($_POST['search'])) : ?>
                  <?php foreach ($result as $product) : ?>
                        <div class="element">
                              <p class="sku">Mã sản phẩm: <?php echo $product['sku'] . "<br />" ?></p>
                              <img class="img" src="<?= $product['image'] ?>" alt="">
                              <p class="price">Giá: <?php echo $product['price'] . " vnđ" . "<br />" ?></p>
                              <span class="stock">Còn lại: <?php echo $product['stock'] . "<br />" ?></span>
                              <span class="view">Lượt xem: <?php echo $product['view'] . "<br />" ?></span> <br>
                              <p><button>Mua ngay</button></p>
                        </div>
                  <?php endforeach; ?>
            <?php endif; ?>
      </div>
      <!-- SP nổi bật -->
      <div class="list">
            <h3><i>SẢN PHẨM NỔI BẬT</i></h3>
      </div>
      <?php
      $soldSort = $json;
      usort($soldSort, function ($a, $b) {
            return $b['sold'] - $a['sold'];
      });
      $soldProduct = array_slice($soldSort, 0, 4);
      ?>
      <div class="container">
            <?php foreach ($soldProduct as $product) : ?>
                  <div class="element">
                        <p class="sku">Mã sản phẩm: <?php echo $product['sku'] . "<br />" ?></p>
                        <a href="index.php?type=<?= $product['id'] ?>"><img class="img" src="<?= $product['image'] ?>" alt=""></a>
                        <p class="price">Giá: <?php echo $product['price'] . " vnđ" . "<br />" ?></p>
                        <span class="stock">Còn lại: <?php echo $product['stock'] . "<br />" ?></span>
                        <span class="view">Lượt xem: <?php echo $product['view'] . "<br />" ?></span> <br>
                        <a href="index.php?cart=<?= $product['id'] ?>">Mua ngay</a>
                  </div>
            <?php endforeach; ?>
      </div>

      <!-- Full dánh sách -->
      <div class="list">
            <h3><i>DANH SÁCH SẢN PHẨM</i></h3>
      </div>
      <div class="container">
            <?php foreach ($json as $product) : ?>
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
      <!-- Đăng ký -->
      <div class="customer">
            <?php

            function loadRegistrations($filename)
            {
                  $jsondata = file_get_contents($filename);
                  $arr_data = json_decode($jsondata, true);
                  return $arr_data;
            }

            function saveDataJSON($filename, $name, $adress, $phone, $sku, $stock)
            {
                  try {
                        $contact = array(
                              'name' => $name,
                              'adress' => $adress,
                              'phone' => $phone,
                              'sku' => $sku,
                              'stock' => $stock
                        );
                        $arr_data = loadRegistrations($filename);
                        array_push($arr_data, $contact);
                        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
                        file_put_contents($filename, $jsondata);
                        echo "Đăng ký mua hàng thành công!";
                  } catch (Exception $e) {
                        echo 'Lỗi: ', $e->getMessage(), "\n";
                  }
            }

            $nameErr = NULL;
            $adressErr = NULL;
            $phoneErr = NULL;
            $skuErr = NULL;
            $stockErr = NULL;
            $name = NULL;
            $adress = NULL;
            $phone = NULL;
            $sku = NULL; 
            $stock = NULL;

            if (isset($_POST['name']) && isset($_POST['adress']) && isset($_POST['phone']) && isset($_POST['sku']) &&isset($_POST['stock'])) {
                  $name = $_POST["name"];
                  $adress = $_POST["adress"];
                  $phone = $_POST["phone"];
                  $sku = $_POST["sku"];
                  $stock = $_POST["stock"];
                  $has_error = false;

                  if (empty($name)) {
                        $nameErr = "Tên đăng nhập không được để trống!";
                        $has_error = true;
                  }

                  if (empty($adress)) {
                        $adressErr = "Địa chỉ không được để trống!";
                        $has_error = true;
                  }

                  if (empty($phone)) {
                        $phoneErr = " Số điện thoại không được để trống!";
                        $has_error = true;
                  }
                  if (empty($sku)) {
                        $skuErr = " Mã sản phẩm không được để trống!";
                        $has_error = true;
                  }
                  if (empty($stock)) {
                        $stockErr = " Số lượng không được để trống!";
                        $has_error = true;
                  }

                  if ($has_error === false) {
                        saveDataJSON("data.json", $name, $adress, $phone, $sku, $stock);
                        $name = NULL;
                        $adress = NULL;
                        $phone = NULL;
                        $sku = NULL;
                        $stock = NULL;
                  }
            }

            ?>
            <div class="formdangky">
                  <h2>ĐĂNG KÝ MUA HÀNG</h2>
                  <form method="post">
                        <fieldset>
                              <legend>Điền thông tin</legend>
                              <label>Họ & Tên: </label>
                              <input type="text" name="name" value="<?php echo $name; ?>">
                              <span class="error" style="color: red">* <?php echo $nameErr; ?></span>
                              <br><br>
                              <label>Địa chỉ: </label>
                              <input type="text" name="adress" value="<?php echo $adress; ?>">
                              <span class="error" style="color: red">* <?php echo $adressErr; ?></span>
                              <br><br>
                              <label>Số điện thoại: </label>
                              <input type="text" name="phone" value="<?php echo $phone; ?>">
                              <span class="error" style="color: red">*<?php echo $phoneErr; ?></span>
                              <br><br>
                              <label>Mã sản phẩm: </label>
                              <input type="text" name="sku" value="<?php echo $sku; ?>">
                              <span class="error" style="color: red">*<?php echo $skuErr; ?></span>
                              <br><br>
                              <label>Số lượng: </label>
                              <input type="text" name="stock" value="<?php echo $stock; ?>">
                              <span class="error" style="color: red">*<?php echo $stockErr; ?></span>
                              <br><br>
                              <button type="submit" name="submit" value="Đăng ký" style="cursor: pointer">Đăng ký</button>
                              <p><span class="error" style="color: red">* bắt buộc điền.</span></p>
                        </fieldset>
                  </form>
            </div>
            <?php
            $registrations = loadRegistrations('data.json');
            ?>
            <div class="formmuahang">
                  <h2>DANH SÁCH MUA HÀNG</h2>
                  <table>
                        <tr>
                              <th>Họ & Tên</th>
                              <th>Địa chỉ</th>
                              <th>Số điện thoại</th>
                              <th>Mã sản phẩm</th>
                              <th>Số lượng</th>
                        </tr>
                        <?php foreach ($registrations as $registration) : ?>
                              <tr>
                                    <td><?= $registration['name']; ?></td>
                                    <td><?= $registration['adress']; ?></td>
                                    <td><?= $registration['phone']; ?></td>
                                    <td><?= $registration['sku']; ?></td>
                                    <td><?= $registration['stock']; ?></td>
                              </tr>
                        <?php endforeach; ?>
                  </table>
            </div>
      </div>
      <!-- <div class="info">
      <p>123</p>
      </div> -->
</body>

</html>