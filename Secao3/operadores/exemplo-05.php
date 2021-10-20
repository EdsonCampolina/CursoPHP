<?php  

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c; //-> Se A n existir mostra B, se B nao existir mostra C
echo "<br/>";

$a = NULL;
$b = 8;
$c = 10;

echo $a ?? $b ?? $c;
echo "<br/>";
?>