<?php

use phpDocumentor\Reflection\Types\Null_;

class Node
{
    public $value;
    public $next;
}
class Queue
{
    private $font = null;
    private $back = null;

    public function isEmpty()
    {
        return $this->font == null;  
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node($value);
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}
$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->dequeue(1);
$queue->dequeue(2);

$queue->enqueue(4);
$queue->enqueue(5);
$queue->dequeue(1);
$queue->dequeue(2);
$queue->dequeue(3);
while(!$queue->isEmpty()){
  echo $queue->dequeue()."\n";
}



$stack = new Stack();
$count = 0;
$number = -10;
if($number >= 0){
    while($number != 0){
        $element = $number%2;
        $stack->push($element);
        $number = floor($number/2);
        $count++;
    }
}else if($number < 0){
    $number = abs($number);
    while($number != 0){
        $element = $number%2;
        $stack->push($element);
        $number = floor($number/2);
        $count++;
    }
    $stack->push("-");
    $count++;
}else{
    $stack->push($number);
    $count++;
}
