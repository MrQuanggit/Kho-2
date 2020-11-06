<?php 
class DivideByZeroException extends Exception{
    public function __toString()
    {
        return "Can't divide by zero";
    }
}

function divide($number, $denom){
    if($denom == 0){
        throw new DivideByZeroException();
    }
    return $number/$denom;
}

try{
    $result = divide(10,5);
    echo $result."<br>";
    $result = divide(10,0);
    echo $result."<br>";
} catch (DivideByZeroException $e) {
    echo "Có lỗi: ".$e;
}
?>