<?php  

for($i=0;$i<10;$i++){
	if($i>=3 &&  $i<=5) continue;
	if($i===6) break;
	echo $i."</br>";
}

echo "<select>";

for ($i=date("Y"); $i>date("Y")-100 ; $i--) { 
	echo '<option value="'.$i.'">'.$i.'</option>';
}

echo"<select>";

?>