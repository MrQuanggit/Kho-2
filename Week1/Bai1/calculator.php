<?php 
    $first = $_GET["firstOperand"];
    $second = $_GET["secondOperand"];
    $operator = $_GET["operator"];
    class Calculator {
        function calculate(){
            if($operator == "Devide" && $second == 0){
            throw new Exception("Devided by zero!");
            }
            if($operator == "Add"){
                echo $first." + ".$second." = ".($first+$second);
            }
            if($operator == "Minus"){
                echo $first." - ".$second." = ".($first-$second);
            }
            if($operator == "Multi"){
                echo $first." x ".$second." = ".($first*$second);
            }
            if($operator == "Devided"){
                echo $first." / ".$second." = ".($first/$second);
            }
        }
    }
    try {
    $Quang = new Calculator;
    $Quang->calculate();
    } catch (Exception $e) {
        echo "Message: " . $e->getMessage();
    }
?>
