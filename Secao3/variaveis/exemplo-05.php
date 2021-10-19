<?php 

$nome = "Edson";

function teste(){

    global $nome;
	echo $nome;
	echo "<br/>";
}

function teste2() {
 
    $nome ="Joao"; 
    echo $nome;

}

teste();
teste2();

function setMessage(){
	global $message;
	$message = "Hello World";
}
setMessage();
echo "<br/>";
echo $message;
?>