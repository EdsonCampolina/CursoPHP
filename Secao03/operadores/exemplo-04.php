<?php  

$a = 50;

$b = 35;

var_dump($a <=> $b); // -> se A>B = 1, se A==B =0, se A<B = -1
echo "<br/>";

$a = 35;

$b = 35;

var_dump($a <=> $b); // -> se A>B = 1, se A==B =0, se A<B = -1
echo "<br/>";

$a = 35;

$b = 50;

var_dump($a <=> $b); // -> se A>B = 1, se A==B =0, se A<B = -1
echo "<br/>";

?>