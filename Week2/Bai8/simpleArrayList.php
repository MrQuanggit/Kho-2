<?php
class ArrayList
{
    public $arrayList;
    public function ArrayList($arr = '')
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }
    function add($obj)
    {
        array_push($this->arrayList, $obj);
    }
    public function size()
    {
        return count($this->arrayList);
    }
    public function sort()
    {
        sort($this->arrayList);
    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
    function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
echo($listInteger->get(1));