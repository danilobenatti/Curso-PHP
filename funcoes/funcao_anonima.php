<div class="titulo">Funções Anônima</div>

<?php
$soma = function ($a, $b){
	return $a + $b;
};
echo $soma(1, 2) . '<br>';

function executar($a, $b, $operador, $operacao) {
	$resultado = $operacao($a, $b) ?? 'Nada';
	echo "$a $operador $b = $resultado<br>";
	return $resultado;
}
executar(1, 2, '+', $soma);

$multiplicacao = function ($a, $b) {
	return $a * $b;
};
echo $multiplicacao(2.5, 3.5) . '<br>';

executar(2.5, 3.5, '*', $multiplicacao);

function divisao($a, $b) {
	return $a / $b;
}
$divisao = function ($a, $b) {
	return $a / $b;
};
executar(9, 3, '/', divisao);
executar(9, 3, '/', $divisao);

?>
