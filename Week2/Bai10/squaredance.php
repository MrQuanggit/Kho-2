<?php
class Dancer
{
    public $name;
    public $gender;
    function __construct($name, $gender)
    {
        $this->name = $name;
        $this->code = $gender;
    }
}

    function add($dancer, $queue)
    {
        // if($dancer->gender == true){
        //     $queue->enqueue($dancer->name);
        // } else {
            $queue->enqueue($dancer->name);
        // }
    }
    function get($queueMan, $queueWomen){
        if($queueMan->isEmpty() || $queueWomen->isEmpty()){
            if($queueMan->isEmpty()){   
                return "Hàng đợi nam không đủ người";
            } else {
                return "Hàng đợi nữ không đủ người";
            } 
        } else {
            return array("man"=>$queueMan->dequeue(), "women"=>$queueWomen->dequeue());
        }
    }


$dance1 = new Dancer("Steve", true);
$dance2 = new Dancer("Bruce", true);
$dance3 = new Dancer("Tony", true);
$dance4 = new Dancer("Tom", true);
$dance5 = new Dancer("Jenny", false);
$dance6 = new Dancer("Lisa", false);
$dance7 = new Dancer("Jisoo", false);

$man = new SplQueue();
$women = new SplQueue();

add($dance1, $man);
add($dance2, $man);
add($dance3, $man);
add($dance4, $man);
add($dance5, $women);
add($dance6, $women);
add($dance7, $women);

echo "<pre>";
print_r($man). "<br>";
print_r($women). "<br>";

print_r(get($man,$women));
print_r(get($man,$women));
print_r(get($man,$women));
print_r(get($man,$women));
print_r($man). "<br>";
print_r($women). "<br>";