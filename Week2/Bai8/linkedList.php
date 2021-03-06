<?php
class Node
{
    public $data;
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    function readNode()
    {
        return $this->data;
    }
}
class LinkedList{
    public $firstNode;
    public $lastNode;
    public $count;
    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
    public function printList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    function add(int $index,$data){
        $link = new Node($data);
        $array = $this->printList();
        array_splice($array,$index,0,$data);
    }
    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode == NULL) {
            $this->lastNode = $link;
        }
        $this->count++;
    }
    public function addLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }
    // public function remove($index){
    //     $array = $this->printList();
    // }
    public function size()
    {
        $array = $this->printList();
        return count($array);
    }
}

$link = new LinkedList();
$link->addFirst(1,5);
$link->add(2,4);
$link->addLast(3,3);
print_r($link->printList());