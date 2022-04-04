<?php
$filename = pathinfo(__FILE__, PATHINFO_BASENAME);
echo "Carregando: '{$filename}'<br>";

$variavel = 'Estou definida';

if (!function_exists('soma')) {
	function soma($a, $b) {
		return $a + $b;
	}
}

?>
