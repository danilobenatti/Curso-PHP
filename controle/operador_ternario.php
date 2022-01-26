<div class="titulo">Operador Ternário</div>

<?php
	$status = NULL;

	$idade = 70;
	if ($idade >= 18) {
		$status = 'Maior de idade';
	} else {
		$status = 'Menor de idade';
	}
	echo "$status<br>";
	
	$idade = 17;
	$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
	echo "$status<br>";
	
	$idade = 67;
// 	$status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'Maior de idade') : 'Menor de idade';
	$tipoMaiorIdade = $idade >= 65 ? 'Aposentado' : 'Maior de idade';
	$status = $idade >= 18 ? $tipoMaiorIdade : 'Menor de idade';
	echo "$status<br>";
?>