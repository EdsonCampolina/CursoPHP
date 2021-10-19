<?php

$anoNascimento = 1999;
$nome0 ="Edson";
$nome1 ="Joao";
$sobrenome="Campolina";

echo $nome1;

echo "<br/>";

//unset($nome1); /// --> "Limpa" a variavel

if(isset($nome1)){
echo $nome1;	
}

$nomeCompleto=$nome0 ." ". $sobrenome;
echo "<br/>";
echo $nomeCompleto;


?>