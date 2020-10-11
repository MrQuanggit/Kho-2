<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <fieldset>
            <caption>Menu</caption>
            <a href="inHinh.php?type=1">In hình chữ nhật</a><br>
            <a href="inHinh.php?type=2">In hình tam giác</a><br>
            <a href="inHinh.php?type=3">In hình tam giác</a><br>
            <a href="inHinh.php?type=4">In hình tam giác cân</a><br>
        </fieldset>
    </form>

    <?php
    if (isset($_GET['type'])) {
        $type = $_GET['type'];
        switch ($type) {
            case 1:
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 7; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }
            break;
            case 2:
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }

                for ($i = 5; $i > 0; $i--) {
                    for ($j = 0; $j < $i; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }
            break;
            case 3:
                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= 5; $j++) {
                        if ($j <= 5 - $i) {
                            echo ('&nbsp&nbsp');
                        } else {
                            echo ('*');
                        }
                    }
                    echo ('<br>');
                }

                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= 5; $j++) {
                        if ($j < $i) {
                            echo ('&nbsp&nbsp');
                        } else {
                            echo ('*');
                        }
                    }
                    echo ('<br>');
                }
            break;
            case 4:
                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= 5; $j++) {
                        if ($j <= 5 - $i) {
                            echo ('&nbsp&nbsp');
                        } else {
                            echo ('*');
                        }
                    }
                    for ($k = 1; $k < 5; $k++) {
                        if ($k < $i) {
                            echo ('*');
                        } else {
                            echo ('&nbsp&nbsp');
                        }
                    }
                    echo ('<br>');
                }
            break;
        }
    }

    ?>
</body>

</html>