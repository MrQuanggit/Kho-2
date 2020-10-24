<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" />
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number" id="number">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>

    <?php
        if(isset($_POST['number'])){
            $number = $_POST['number'];
            $arr = range(1,100,1);
            
        }

        function binarySearch(array $numbers, int $needle): bool { 
            $low = 0; 
            $high = count($numbers) - 1; 
            while ($low <= $high) { 
              $mid = (int) (($low + $high) / 2); 
        
              if ($numbers[$mid] > $needle) { 
                  $high = $mid - 1;
              } else if ($numbers[$mid] < $needle) { 
                  $low = $mid + 1;
              } else {
                  return $numbers[$mid];
              }
            }
            return $numbers[$mid]; 
        }
    ?>
</body>
</html>