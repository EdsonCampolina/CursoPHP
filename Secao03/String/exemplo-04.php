<?php 	

$frase= "A repetição é a mae da retenção";

$query=strpos($frase, "mae");

$texto = substr($frase, 0, 18);
echo $texto;
echo "<br/>";

var_dump($query);
echo "<br/>";

$texto2 = substr($frase,$query+3, strlen($frase));
echo $texto2;
echo "<br/>";
var_dump($texto2);
echo "<br/>";

$name='Hcode Treinamento';
$replace = 'Cursos';
$new_name = substr($name, 0, strpos($name, 'T')).$replace;
echo $new_name;

?>