<?php

$nome = "Edson";
echo $nome. " mais alguma coisa."; //-> Edson mais alguma coisa
echo "<br/>";

$nome .= " Campolina"; // -> $nome + " Campolina" = Edson Campolina
echo $nome;
echo "<br/>";

$valorTotal =0;
$valorTotal +=100;
$valorTotal +=25;
echo $valorTotal;
echo "<br/>";

$valorTotal-=10;
echo $valorTotal;
echo "<br/>";

$valorTotal *=0.9;
echo $valorTotal;
echo "<br/>";

?>