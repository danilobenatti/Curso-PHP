<div class="titulo">Variáveis - O básico</div>

<?php
	$numeroA = 13;
	echo $numeroA, '<br>';
	var_dump($numeroA);
	
	echo '<br>';
	$a = 3;
	$b = 16;
	$soma = $a + $b;
	echo $soma;
	$soma = 0;
	
	echo '<br>';
	echo isset($soma);
	unset($soma);
	echo '<br>', !isset($soma);
	var_dump($soma);
	
	$variavel = 10;
	echo '<br>' . $variavel;
	echo '<br>', var_dump($variavel);
	
	$variavel = 'Agora é uma string';
	echo '<br>' . $variavel;
	echo '<br>', var_dump($variavel);
?>