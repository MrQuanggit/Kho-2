<?php
class Stack
{
    public $stack;
    public $limit;
    
    public function __construct($limit = 10) {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item) {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!'); 
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
	      throw new RunTimeException('Stack is empty!');
	  } else {
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}
$stack = new Stack(5);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
print_r($stack->stack) . "<br>";
array_reverse($stack->stack);
print_r($stack->stack) . "<br>";
