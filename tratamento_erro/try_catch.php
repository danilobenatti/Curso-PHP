<div class="titulo">Try &frasl; Catch</div>

<?php
try {
// 	echo 7 / 0;
	$dividend = 7;
	$divisor = 0;
	echo intdiv($dividend, $divisor);
} catch (Error $e) {
	echo "Erro: divisão por zero[0]." . '<br>';
}

try {
	throw new Exception("Um erro estranho!?!?" . '<br>');
	echo intdiv(7, 0);
} catch (DivisionByZeroError $e) {
	echo "Divisão por zero[0]." . '<br>';
} catch (Throwable $e) {
	echo "Erro encontrado: " . $e->getMessage();
} finally {
	echo "Sempre executado!" . '<br>';
}

echo "Execução continua!...Erro tratado." . '<br>';

?>
