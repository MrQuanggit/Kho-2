<?php
$o = new StdClass;
$a = new SplObjectStorage();
$a[$o] = "hello";

$b = new SplObjectStorage();
$b->addAll($a);
echo $b[$o]."\n";

echo "<br>";

$o1 = new StdClass;
$o2 = new StdClass;
$s = new SplObjectStorage();
$s->attach($o1); // similar to $s[$o1] = NULL;
$s->attach($o2, "hello"); // similar to $s[$o2] = "hello";

var_dump($s[$o1]);
var_dump($s[$o2]);

echo "<br>";

$o1 = new StdClass;
$o2 = new StdClass;

$s = new SplObjectStorage();

$s[$o1] = "hello";
var_dump($s->contains($o1));
var_dump($s->contains($o2));

echo "<br>";

$s = new SplObjectStorage();
$o1 = new StdClass;
$o2 = new StdClass;

$s->attach($o1);
$s->attach($o2);
$s->attach($o1);
var_dump($s->count());
var_dump(count($s));

echo "<br>";
// Trả về mục nhập bộ nhớ hiện tại:current
$o = new StdClass;
$s = new SplObjectStorage();
$s->attach($o);
var_dump(count($s));
$s->detach($o);
var_dump(count($s));

echo "<br>";

$o1 = new StdClass;
$o2 = new StdClass;
$a = new SplObjectStorage();
$a[$o2] = "foo";
$a[$o1] = "bar";

$b = new SplObjectStorage();
$b[$o1] = "bar";
$b[$o2] = "gee";

var_dump(count($b));
$b->removeAll($a);
var_dump(count($b));

echo "<br>";

$s = new SplObjectStorage;
$o = new StdClass;
$s[$o] = "data";

echo $s->serialize()."\n";
