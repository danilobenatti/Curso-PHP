<div class="titulo">Desafio intdiv()</div>

<?php
/**
 * Sobrescreva o método intdiv para...
 * - Lançar uma exceção quando tentar dividir por zero.
 * - Lançar uma exceção quando o resultado não for inteiro.
 * - Dividir normalmente nos demais casos.
 * 
 * Os testes...
 * - intdiv com os parâmetros 8 e 2 [sucesso].
 * - intdiv com os parâmetros 8 e 3 [exceção].
 * - intdiv com os parâmetros 8 e 0 [exceção].
 * - intdiv "original" com os parametros 8 e 3 [sucesso].
 */
require_once 'desafio_intdiv.php';
use function \Aritmetica\intdiv as intdiv;

try {
	echo intdiv(8, 3) . '<br>';
} catch (\Aritmetica\NaoInteiroException $e) {
	echo "Resultado não é um número inteiro" . '<br>';
}

try {
	echo intdiv(8, 0) . '<br>';
} catch (\DivisionByZeroError $e) {
	echo "Divisão por zero(0)" . '<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';

?>
