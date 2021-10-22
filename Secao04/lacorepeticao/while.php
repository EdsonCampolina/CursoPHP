<?php  

$condicao = true;

while($condicao){

	$numero= rand(1,10);

	if($numero===3){

		echo"TRES!!!";
		$condicao = false;

	}
	echo $numero. " ";

}

$total =150;
$desconto = 0.9;

do{
	$total *= $desconto;
	echo "<br>".$total;
}while ($total>100) ;


?>