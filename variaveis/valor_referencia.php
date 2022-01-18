<div class="titulo">Valor vs Referência</div>

<?php
	$variavel = 'valor inicial';
	echo $variavel;
	
	echo "<br>Atribuição por valor";
	$variavelValor = $variavel;
	echo "<br>$variavelValor";
	$variavelValor = 'novo valor';
	echo '<br>';
	echo "<br>$variavel";
	echo "<br>$variavelValor";
	
	echo "<br>Atribuição por referência";
	$variavelReferencia = &$variavel;
	$variavelReferencia = 'mesma referência em memória';
	echo '<br>';
	echo "<br>$variavel";
	echo "<br>$variavelReferencia";
?>