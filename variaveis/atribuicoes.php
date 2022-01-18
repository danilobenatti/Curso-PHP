<div class="titulo">Atribuições</div>

<?php
	$title = 'Atribuição';
	echo $title;
	
	$numero = 10;
	echo '<br>', $numero;
	$numero = $numero - 1;
	echo '<br>', $numero;
	echo '<br>', var_dump($numero);
	$numero = $numero - 1.5;
	echo '<br>', $numero;
	echo '<br>', var_dump($numero);
	$numero--;
	echo '<br>', $numero;
	$numero++;
	echo '<br>', $numero;
	--$numero;
	echo '<br>', $numero;
	++$numero;
	echo '<br>', $numero;
	
	echo '<br>';
	$numero = 10;
	echo '<br>', $numero;
	$numero -= 5;
	echo '<br>', $numero;
	$numero += 10;
	echo '<br>', $numero;
	$numero *= 10;
	echo '<br>', $numero;
	$numero /= 2;
	echo '<br>', $numero;
	$numero %= 6;
	echo '<br>', $numero;
	$numero **= 4;
	echo '<br>', $numero;
	
	$texto = 'Um texto qualquer';
	echo '<br>', $texto;
	$texto = $texto . ' mais alguma coisa';
	echo '<br>', $texto;
	$texto .= ' qualquer';
	echo '<br>', $texto;
	
	$variavelInexistente = 'valor inexistente';
	$variavelInexistente = NULL;
	echo '<br>', var_dump($variavelInexistente);
	$valor = $variavelInexistente ?? 'valor default';
	echo  '<br>', $valor;
?>
