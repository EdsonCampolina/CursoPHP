<?php 

$nome = (int)$_GET["a"];

var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
echo "<br/>";
echo $ip;
$ip2 = $_SERVER["SCRIPT_NAME"];
echo "<br/>";
echo $ip2;


?>