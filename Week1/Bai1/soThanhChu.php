<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="soThanhChu.php" method="post">
        <label for="name">Nhập số</label>
        <input type="text" name="number">
        <input type="submit" value="Submit">
    </form>

    <?php
        function read_number($number) {
            $string = null;
            $dictionary = array (
                0   => "zero",
                    1   => "one",
                    2   => "two",
                    3   => "three",
                    4   => "four",
                    5   => "five",
                    6   => "six",
                    7   => "seven",
                    8   => "eight",
                    9   => "nine",
                    10  => "ten",
                    11  => "eleven",
                    12  => "twelve",
                    13  => "thirteen",
                    14  => "fourteen",
                    15  => "fifteen",
                    16  => "sixteen",
                    17  => "seventeen",
                    18  => "eighteen",
                    19  => "nineteen",
                    20  => "twenty",
                    30  => "thirty",
                    40  => "fourty",
                    50  => "fifty",
                    60  => "sixty",
                    70  => "seventy",
                    80  => "eighty",
                    90  => "ninety",
                    100 => "hundred"
            );
            if($number<0 || $number>999){
                $string.= "Out of ability";
            }
            else {
                switch($number){
                    case 0: $string=$dictionary[$number];
                    break;
                    case ($number < 21): $string = $dictionary[$number];
                    break;
                    case($number<100):
                        $ten=(floor($number/10))*10;
                        $string=$dictionary[$ten];
                        $one=$number%10;
                        if($one){
                            $string.=" ".$dictionary[$one];
                        }
                    break;
                    case($number>=100):
                        $hundred=floor($number/100);
                        $remain=($number%100);
                        $ten=(floor($remain/10))*10;
                        $string=$dictionary[$ten];
                        $one=$number%10;
                        $string=$dictionary[$hundred]." ".$dictionary[100]." ";
                        if($remain>=10){
                            $string.="and".$dictionary[$ten]." ".$dictionary[$one];
                        } else {
                            $string.="and ".$dictionary[$one];
                        }
                    break;
                }
            }
            return $string;
        }

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number=$_POST["number"];
            echo read_number($number);
        }
    ?>

</body>
</html>