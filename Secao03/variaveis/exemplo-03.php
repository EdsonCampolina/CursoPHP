<?php 

$nome0 = "Edson";
$nomeCompleto = "Edson Campolina";
$nome1 = 'Junior';
$anoNascimento = 2001;
$bloqueado= false;
$dinheiro=999.99;
///////////////////////////////////////////////////////////////
$frutas = array("Abacaxi","Laranja","Manga");

echo $frutas[2];

$nascimento = new DateTime();
echo "<br/>";

//var_dump($nascimento); // --> Ver o tipo de variavel
///////////////////////////////////////////////////////////////
$arquivo = fopen("exemplo-03.php", "r");
echo "<br/>";
//var_dump($arquivo);

$nulo = NULL; //--> nao existe
$nulo1 = null;
var_dump($nulo1);
$vazio = "";  // --> existe, mas sem informacao

?>