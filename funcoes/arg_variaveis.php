<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b) {
	return $a + $b;
}
echo soma( 14, 15 ) . '<br>';
echo soma( 14, 15, 14 ) . '<br>';

function somaParamVariavel(...$numeros) {
	print_r($numeros);
	echo '<br>';
	$result = 0;
	foreach ($numeros as $value) {
		$result += $value;
	}
	return $result;
}
echo somaParamVariavel(0, 1, 2, 3, 4, 5);
echo '<hr>';
echo somaParamVariavel(1, 3, 5, 7, 9);
echo '<hr>';

$array = [6, 7, 8];
echo somaParamVariavel(...$array);
echo '<hr>';

function membros($titular, ...$dependentes) {
	echo "Titular: $titular" . '<br>';
	if (!!$dependentes) {
		foreach ($dependentes as $value) {
			echo "Dependentes: $value" . '<br>';
		};
	}
}
membros("Pai", "Filho1", "Filho2", "Filho3", "Filho4");
echo '<br>';
membros("Mãe", "Filha1", "Filha2");
echo '<br>';
membros("Pai sem filhos");
?>