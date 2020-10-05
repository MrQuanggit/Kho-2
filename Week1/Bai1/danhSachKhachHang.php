<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            .thumbnail{
                height: 60px;
                width: 100px;
                overflow: hidden;
            }
            .thumbnail img{
                width:100%;
            }
        </style>
    </head>
    <body>
        <table border="0">
          <caption><h2>Danh sách khách hàng</h2></caption>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
          </tr>
          <?php
          $customerlist = array(
                "1" => array("ten" => "Mai Văn Hoàn", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "https://www.google.com.vn/search?q=dead+or+alive+luffy&tbm=isch&ved=2ahUKEwjQyN-t_5LsAhVuEqYKHWzHDPoQ2-cCegQIABAA&oq=dead+or+alive+lu&gs_lcp=CgNpbWcQARgAMgQIIxAnMgQIABATMggIABAFEB4QEzIICAAQCBAeEBMyCAgAEAgQHhATMggIABAIEB4QE1DokQFYyKQBYNmyAWgBcAB4AIABf4gB4gKSAQMwLjOYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=2JV1X9D8Iu6kmAXsjrPQDw&bih=748&biw=1475&tbs=isz%3Al&hl=vi#imgrc=NSS8e32CczSG6M"),
                "2" =>array("ten" => "Nguyễn Văn Nam", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "https://www.google.com.vn/search?q=dead%20or%20alive%20usopp&tbm=isch&tbs=isz:l&hl=vi&sa=X&ved=0CAEQpwVqFwoTCMjC1OT8kuwCFQAAAAAdAAAAABAN&biw=1475&bih=748#imgrc=orFPTqui7LCr7M"),
                "3" =>array("ten" => "Nguyễn Thái Hòa", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "https://www.google.com.vn/search?q=dead+or+alive+zoro&tbm=isch&ved=2ahUKEwjilqu0_ZLsAhUCVJQKHRM9AJcQ2-cCegQIABAA&oq=dead+or+alive+zoro&gs_lcp=CgNpbWcQAzIECCMQJzIICAAQCBAeEBMyCAgAEAgQHhATOgQIABATOgYIABAeEBNQ394fWOnoH2Cv7B9oA3AAeACAAdgBiAGuBZIBBTAuNC4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=zZN1X6L8H4Ko0QST-oC4CQ&bih=748&biw=1475&tbs=isz%3Al&hl=vi#imgrc=lv57ayxkBvvGCM"),
                "4" =>array("ten" => "Trần Đăng Khoa", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "https://www.google.com.vn/search?q=dead+or+alive+sanji&tbm=isch&ved=2ahUKEwivlp-5_5LsAhX-zIsBHVxZAPQQ2-cCegQIABAA&oq=dead+or+alive+san&gs_lcp=CgNpbWcQDDIECCMQJzIECAAQEzIICAAQCBAeEBMyCAgAEAgQHhATMggIABAIEB4QEzIICAAQCBAeEBMyCAgAEAUQHhATOgIIAFDNcVinfmDYoAFoAHAAeACAAXWIAf4GkgEDMC44mAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=8JV1X6_eKf6Zr7wP3LKBoA8&bih=748&biw=1475&tbs=isz%3Al&hl=vi#imgrc=-_1dAFd-j7R_NM"),
                "5" =>array("ten" => "Nguyễn Đình Thi", "ngaysinh" => "1983-08-19", "diachi" => "Hà Nội", "anh" => "https://www.google.com.vn/search?q=dead+or+alive+nami&tbm=isch&ved=2ahUKEwjyts3D_5LsAhU2x4sBHXcAAlIQ2-cCegQIABAA&oq=dead+or+alive+nami&gs_lcp=CgNpbWcQAzIECCMQJzoGCAAQCBAeOgYIABAFEB46BAgAEBM6CAgAEAgQHhATOggIABAFEB4QEzoCCABQ8X9YjYwBYKKOAWgAcAB4AIABc4gBwAeSAQMwLjmYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=BpZ1X_KbGbaOr7wP94CIkAU&bih=748&biw=1475&tbs=isz%3Al&hl=vi#imgrc=gvaZJO9zlFRh9M")
          );
          foreach($customerlist as $key => $values){
              echo "<tr>";
              echo "<td>".$key."</td>";
              echo "<td>".$values['ten']."</td>";
              echo "<td>".$values['ngaysinh']."</td>";
              echo "<td>".$values['diachi']."</td>";
              echo "<td><image src = ".$values['anh']."width = '60px' height ='60px'/></td>";
              echo "</tr>";
          }
          ?>
        </table>
    </body>
</html>