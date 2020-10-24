<?php
    class Stack{
        public $stack = [];
        public $limit;
        public function __construct($limit)
        {
            $this->limit = $limit;
        }
        public function ArrayList($arr = "")
        {
        if (is_array($arr) == true)
            $this->stack = $arr;
        else
            $this->stack = array();
        }
        public function push($data){
            array_unshift($this->stack, $data);
        }
        public function pop(){
            array_shift($this->stack);
        }
        public function top(){
            return $this->stack[0];
        }
        public function isEmpty(){
            {
                if (count($this->stack) == 0) {
                    return "Mảng rỗng";
                }
                return "Mảng ko rỗng";
            }
        }
    }

    $stack = new Stack(5);
    $stack->push(1);
    $stack->push(2);
    $stack->push(3);
    $stack->push(4);
    $stack->push(5);
    print_r($stack->stack)."<br>";
    $stack->pop(1);
    $stack->pop(2);
    $stack->pop(3);
    print_r($stack->stack)."<br>";
    $stack->push(1);
    $stack->push(2);
    print_r($stack->stack)."<br>";
    echo($stack->isEmpty());
    $stack->pop(1);
    $stack->pop(2);
    $stack->pop(3);
    $stack->pop(4);
    print_r($stack->stack)."<br>";
    echo($stack->isEmpty());
    print_r(krsort($stack->stack));
?>