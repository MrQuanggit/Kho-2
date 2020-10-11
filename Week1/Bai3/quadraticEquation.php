<?php
    class QuadraticEquation{
        private $a;
        private $b;
        private $c;

        function __construct($a, $b, $c){
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        function getA(){
            return $this->a;
        }
        function getB(){
            return $this->b;
        }
        function getC(){
            return $this->c;
        }

        function  getDiscriminant(){
            return $this->b*$this->b - 4*$this->a*$this->c;
        }

        function getRoot1(){
            if($this->getDiscriminant()<0){
                return 0;
            }
            $r1 = (- $this->b + pow($this->getDiscriminant(), 0.5))/2*$this->a;
            return $r1;
        }
        function getRoot2(){
            if($this->getDiscriminant()<0){
                return 0;
            }
            $r2 = (- $this->b - pow($this->getDiscriminant(), 0.5))/2*$this->a;
            return $r2;
        }
    }

    $a = 1;
    $b = 0;
    $c = 1;

    $Quang = new QuadraticEquation($a, $b, $c);
    if($Quang->getDiscriminant()>0){
    echo "Nghiệm 1 phương trình là: ".$Quang->getRoot1();
    echo "<br>";
    echo "Nghiệm 2 phương trình là: ".$Quang->getRoot2();
    } elseif($Quang->getDiscriminant()==0) {
        echo "Phương trình có một nghiệm kép là: ".$Quang->getRoot2();
    } else {
        echo "The equation has no roots";
    }
?>
