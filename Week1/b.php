<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .flex-container {
      display: flex;
      background-color: burlywood;
      flex-wrap: wrap;
      max-width: 50%;
    }

    .flex-container>div {
      background-color: greenyellow;
      flex: 15%;
      margin: 10px;
      text-align: center;
      font-size: 10px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <div class="flex-container">
    <?php
    for ($i = 1; $i <= 10; $i++) {
      echo "<div>";
      for ($j = 1; $j < 10; $j++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
      }
      echo "</div>";
    }
    ?>
  </div>
</body>

</html>