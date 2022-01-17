<div class="titulo">Desafio String</div>

<?php
/**
 * Enunciado:
 * Avaliando os métodos da documentação da string,
 * qual o métodos que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?
 */
	$texto = '!AbcaBcabc';
	echo strpos($texto, 'abc') . '<br>';
	echo stripos($texto, 'abc') . '<br>';
	
	echo strpos(strtolower($texto), strtolower('ABC'));
?>