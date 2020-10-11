<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>DQ Landing Page</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" />
      <style>
            * {
                  box-sizing: border-box;
                  font-family: Arial, Helvetica, sans-serif;
            }

            /* Intro */
            .intro {
                  width: 100%;
                  height: 200px;
                  background-color: #bdc3c7 ;
            }

            .intro img {
                  width: 30%;
                  float: right;
                  height: 200px;
            }

            .intro ul {
                  width: 70%;
                  float: left;
                  font-size: 16px;
            }

            /* Danh sách sản phẩm */
            .container {
                  width: 100%;
                  display: flex;
                  flex-wrap: wrap;
                  background-color: #f1f1f1;
            }

            .element {
                  flex: 18%;
                  margin: 1em;
                  padding: 1rem;
                  border: 1px solid black;
                  font-size: 16px;
                  text-align: center;
                  background-color: #ecf0f1;
            }

            .img {
                  width: 50%;
            }

            .view {
                  float: right;
            }

            .stock {
                  float: left;
            }

            /* Form đăng ký */
            .customer {
                  width: 100%;
                  border: 1px solid black;
                  height: 400px;
                  font-size: 16px;
            }

            .formmuahang table {
                  border-collapse: collapse;
                  width: 100%;
            }

            .formmuahang td,
            th {
                  border: solid 1px #ccc;
            }

            .formdangky {
                  width: 50%;
                  float: left;
            }

            .formdangky input {
                  width: 40%;
            }

            .formdangky label {
                  float: left;
                  width: 200px;
            }

            .formmuahang {
                  width: 50%;
                  float: right;
            }

            /* Footer */
            .footer {
                  background-color: #34495e;
                  text-align: center;
                  padding: 5px 5px;
                  width: 100%;
            }

            .footer a {
                  font-size: 30px;
                  padding: 5px;
                  text-align: center;
            }

            .list {
                  text-align: center;
                  width: 100%;
            }

            /* Reponsive */
            @media screen and (max-width: 900px) {
                  .element {
                        flex: 42%;
                        max-width: 42%;
                  }
            }

            @media screen and (max-width: 760px) {
                  .element {
                        flex: 100%;
                        max-width: 100%;
                  }

                  .intro ul {
                        display: none;
                  }

                  .intro img {
                        width: 100%;
                        height: 200px;
                  }
            }

            @media screen and (max-width: 1140px) {
                  .formdangky {
                        width: 100%;
                  }

                  .formmuahang {
                        width: 100%;
                  }

                  .customer,
                  .element,
                  .intro ul {
                        font-size: 12px;
                  }
            }
            @media screen and (max-width: 400px){
                  .footer{
                        display: none;
                  }
            }
      </style>
</head>

<body>
      <?php
      $jsonData = file_get_contents("product.json");
      $json = json_decode($jsonData, true);
      ?>

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
            </ul>
      </div>
      <center>
            <h3>DANH SÁCH SẢN PHẨM</h3>
      </center>
      <div class="container">
            <?php foreach ($json as $product) : ?>
                  <div class="element">
                        <p class="sku">Mã sản phẩm: <?php echo $product['sku'] . "<br />" ?></p>
                        <img class="img" src="<?= $product['image'] ?>" alt="">
                        <p class="price">Giá: <?php echo $product['price'] . "<br />" ?></p>
                        <span class="stock">Còn lại: <?php echo $product['stock'] . "<br />" ?></span>
                        <span class="view">Lượt xem: <?php echo $product['view'] . "<br />" ?></span>
                  </div>
            <?php endforeach; ?>
      </div>

      <div class="customer">
            <?php

            function loadRegistrations($filename)
            {
                  $jsondata = file_get_contents($filename);
                  $arr_data = json_decode($jsondata, true);
                  return $arr_data;
            }

            function saveDataJSON($filename, $name, $email, $phone, $sku, $stock)
            {
                  try {
                        $contact = array(
                              'name' => $name,
                              'email' => $email,
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
            $emailErr = NULL;
            $phoneErr = NULL;
            $skuErr = NULL;
            $stockErr = NULL;
            $name = NULL;
            $email = NULL;
            $phone = NULL;
            $sku = NULL;
            $stock = NULL;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $name = $_POST["name"];
                  $email = $_POST["email"];
                  $phone = $_POST["phone"];
                  $sku = $_POST["sku"];
                  $stock = $_POST["stock"];
                  $has_error = false;

                  if (empty($name)) {
                        $nameErr = "Tên đăng nhập không được để trống!";
                        $has_error = true;
                  }

                  if (empty($email)) {
                        $emailErr = "Email không được để trống!";
                        $has_error = true;
                  } else {
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              $emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
                              $has_error = true;
                        }
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
                        saveDataJSON("data.json", $name, $email, $phone, $sku, $stock);
                        $name = NULL;
                        $email = NULL;
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
                              <span class="error">* <?php echo $nameErr; ?></span>
                              <br><br>
                              <label>E-mail: </label>
                              <input type="text" name="email" value="<?php echo $email; ?>">
                              <span class="error">* <?php echo $emailErr; ?></span>
                              <br><br>
                              <label>Số điện thoại: </label>
                              <input type="text" name="phone" value="<?php echo $phone; ?>">
                              <span class="error">*<?php echo $phoneErr; ?></span>
                              <br><br>
                              <label>Mã sản phẩm: </label>
                              <input type="text" name="sku" value="<?php echo $sku; ?>">
                              <span class="error">*<?php echo $skuErr; ?></span>
                              <br><br>
                              <label>Số lượng: </label>
                              <input type="text" name="stock" value="<?php echo $stock; ?>">
                              <span class="error">*<?php echo $stockErr; ?></span>
                              <br><br>
                              <button type="submit" name="submit" value="Đăng ký">Đăng ký</button>
                              <p><span class="error">* bắt buộc điền.</span></p>
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
                              <th>E-mail</th>
                              <th>Số điện thoại</th>
                              <th>Mã sản phẩm</th>
                              <th>Số lượng</th>
                        </tr>
                        <?php foreach ($registrations as $registration) : ?>
                              <tr>
                                    <td><?= $registration['name']; ?></td>
                                    <td><?= $registration['email']; ?></td>
                                    <td><?= $registration['phone']; ?></td>
                                    <td><?= $registration['sku']; ?></td>
                                    <td><?= $registration['stock']; ?></td>
                              </tr>
                        <?php endforeach; ?>
                  </table>
            </div>
      </div>
      <div class="footer">
            <a><i class="fab fa-facebook-f"></i></a>
            <a><i class="fab fa-instagram"></i></a>
            <a><i class="fab fa-youtube"></i></a>
            <a><i class="fab fa-twitter"></i></a>
            <a><i class="fab fa-facebook-messenger"></i></a>
            <a><i class="fab fa-pinterest"></i></a>
            <p>LandingPage © 2020 Dang Quang</p>
      </div>

</body>

</html>