<div class="titulo">Desafio Equação</div>

<?php
	$resultA = ((3 + 2)*6)**2/(3*2);
	//echo $result1;
	$resultB = ((1 - 5)*(2 - 7)/2)**2;
	//echo $result2;
	$resultFinal = ($resultA - $resultB)**3/1e3;
	echo 'Resultado final: ' . $resultFinal;
?>
