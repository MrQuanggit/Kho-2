<?php
class Patien
{
    public $name;
    public $code;
    public $next;
    function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this->next = NULL;
    }
    function readNode()
    {
        return array("name"=>$this->name, "code"=>$this->code);
    }
}
class Queue
{
    public $font = null;
    public $back = null;
    public function __construct()
    {
        $this->font = NULL;
        $this->back = NULL;
    }
    public function isEmpty()
    {
        return $this->font == null;
    }

    public function enqueue($name, $code)
    {
        $oldBack = $this->back;
        $this->back = new Patien($name, $code);
        $this->back->name = $name;
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
        $removedValue = $this->font->name;
        $this->font = $this->font->next;
        return $removedValue;
    }
    public function __toString()
    { 
        $current = $this->font;

        $list = [];
        while ($current != NULL) {
            array_push($list, $current->readNode());
            $current = $current->next;
        }
        // $list = 
        // $current = $this->font;
        // while ($current != NULL) {
        //     array_push($listData, $current->readNode());
        //     $current = $current->next;
        // }
        // usort($list, function ($a, $b) {
        //     return ($a["code"] - $b["code"]);
        // });
            // echo var_dump($list[0]["code"]);
            // die();
        for ($i = 0; $i < count($list)-1; $i++){
            $min = $i;
            for ($j = $i + 1; $j < count($list)-1; $j++){
                if ($list[$j]["code"] < $list[$min]["code"]){
                    $min = $i;
                }
            }
            $temp = $list[$i];
            $list[$i] = $list[$min];
            $list[$min] = $temp;
        }
        return ($list);
    }
     
}

$hospital = new Queue();
$hospital->enqueue("Smith", 5);
$hospital->enqueue("Jones", 4);
$hospital->enqueue("Fehrenbach", 6);
$hospital->enqueue("Brown", 1);
$hospital->enqueue("Ingram", 1);
// echo "<pre>";
// print_r($hospital->__toString());
// echo("<br>".$hospital->dequeue()."<br>");
// print_r($hospital->__toString());
echo "<pre>";

print_r($hospital->__toString());

echo "</pre>";