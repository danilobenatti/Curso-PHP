<?php
echo 'Carregando: include_arquivo' . '<br>';
$variavel = 'Variável definida no "include_arquivo.php"!';

if (!function_exists('soma')) {
	function soma($a, $b) {
		return $a + $b;
	}
}

?>
