<div class="titulo">Error Handler</div>

<?php
ini_set('display_errors', TRUE);
// echo 4 / 0 . '<br>';

error_reporting(E_ERROR);
// echo 4 / 0 . '<br>';

error_reporting(~E_ALL);
echo 4 / 0 . '<br>';
echo '<hr>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring) {
	$text = 'include';
// 	$text = 'by zero';
	return !!stripos(" $errstring", $text);
}

echo '<hr>';
set_error_handler('filtrarMensagem', E_WARNING);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '<hr>';
restore_error_handler();
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

?>
