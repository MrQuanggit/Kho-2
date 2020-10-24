<?php
class MyList
{
    public $size;
    public $elements = [];
    function __construct($size)
    {
        $this->size = $size;
    }
    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true)
            $this->elements = $arr;
        else
            $this->elements = array();
    }
    public function insert($index, $obj){
        array_splice($this->elements,$index,0,$obj);
    }
    public function add($obj)
    {
        array_push($this->elements, $obj);
    }
    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);

            $this->elements = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];

        } else {
            die("ERROR in ArrayList.get");
        }
    }
    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
    public function clear()
    {
        $this->elements = array();
    }
    public function addAll($arr)
    {
        $this->elements = array_merge($this->elements, $arr);
    }
    function indexOf($obj){
        return array_search($this->elements, $obj);
    }
    public function isEmpty()
    {
        if (count($this->elements) == 0) {
            return true;
        }
        return false;
    }
    public function size()
    {
        return count($this->elements);
    }
    public function sort()
    {
        sort($this->elements);
    }
    public function reset()
    {
        $this->elements = array();
    }
}

$test = new MyList(5);
$test->add(4);
$test->add(3);
$test->add(5);
print_r($test);
$test->insert(2,7);
print_r($test);
