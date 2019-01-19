<?php
$ukuran=7;
for($a=4; $a<=$ukuran; $a++){
	for($b=4; $b<=$ukuran; $b++){
		if(($a==1) || ($a==$ukuran)){
			echo "*   ";
		} else{
			echo "*     ";
		}
	}
	echo "<br/>";
}
?>