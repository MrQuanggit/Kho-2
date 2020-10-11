<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class stopWatch
        {
            private $starTime;
            private $endTime;

            function __construct(){
                // $this->starTime = date("Y-M-D  h:m:s");
            }

            function start(){
                $this->starTime = hrtime(true);
                echo $this->starTime;
                // return $this->starTime;
            }
            function stop(){
                $this->endTime = hrtime(true);
                echo $this->endTime;
                // return $this->endTime;
            }

            function getElapsedTime(){
                // $start = strtotime($this->start());
                // $end = strtotime($this->stop());
                // $result = $end - $start;
                return $this->endTime - $this->starTime;
            }
        }

        $clock = new stopWatch();
        echo $clock->start();
        echo "<br>";
        for($i=0;$i<100;$i++){
            echo $i."<br>";
        }
        echo $clock->stop();
        echo "<br>";
        echo $clock->getElapsedTime();
    ?>
</body>
</html>