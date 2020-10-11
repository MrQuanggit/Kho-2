<?php 
echo $tom->display();
echo $jerry->display();
echo "<br>";
echo $jerry->name." kêu ".$jerry->say()." ";
echo $tom->name." kêu ".$tom->say()." ";
echo "<br>";
echo $tom->catchRat($jerry);
echo "<br>";
echo $tom->eatRat();
echo "<br>";
echo $tom->display();
echo $jerry->display();
?>