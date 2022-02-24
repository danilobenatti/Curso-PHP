<div class="titulo">Closure &amp; Callable</div>

<?php
$soma1 = function ($a, $b) {
	return $a + $b;
};

function soma2($a, $b) {
	return $a + $b;
}

echo $soma1(2, 3) . ' => ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

// echo $soma1 = 1 . ' => ';
// echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2, 3) . ' => ';
echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';

var_dump($soma1);

function executar1($a, $b, $operador, Callable $operacao) {
	$resultado = $operacao($a, $b) ?? 'Nada';
	echo "$a $operador $b = $resultado<br>";
	return $resultado;
}
echo '<br>';
executar1(3, 2, '+', $soma1);
executar1(3, 2, '+', soma2);

function executar2($a, $b, $operador, Closure $operacao) {
	$resultado = $operacao($a, $b) ?? 'Nada';
	echo "$a $operador $b = $resultado<br>";
	return $resultado;
}
echo '<br>';
executar2(300, 20, '+', $soma1);
executar2(300, 20, '+', soma2); // ocorre erro

?>
