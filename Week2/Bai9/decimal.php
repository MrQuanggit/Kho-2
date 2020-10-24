<?php
class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}


$stack = new Stack();
$count = 0;
$number = -13;
if ($number >= 0) {
    while ($number != 0) {
        $element = $number % 2;
        $stack->push($element);
        $number = floor($number / 2);
        $count++;
    }
} elseif ($number < 0) {
    $number = abs($number);
    while ($number != 0) {
        $element = $number % 2;
        $stack->push($element);
        $number = floor($number / 2);
        $count++;
    }
    $stack->push("-");
    $count++;
} else {
    $stack->push($number);
    $count++;
}

for($i=0;$i<$count;$i++){
    echo $stack->pop();
}
