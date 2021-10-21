<?php  

$minhaIdade=20;
$idadeCrianca=12;
$idadeMaior=18;
$idadeIdoso =65;


if($minhaIdade<$idadeCrianca) {
	echo "Criança";
}else if($minhaIdade>=$idadeCrianca && $minhaIdade <$idadeMaior){
	echo"Adolescente";
}
else if($minhaIdade>=$idadeMaior && $minhaIdade<$idadeIdoso){
	echo"Maior de idade";
}else{
	echo"Idoso";
}
echo"</br>";

echo ($minhaIdade < $idadeMaior)?"Menor de idade!":"Maior de idade!";
?>