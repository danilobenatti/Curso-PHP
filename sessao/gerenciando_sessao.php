<div class="titulo">Gerencianco Sessão</div>

<?php
// session_id('1kiccujm800rc7ndfhvgt7tcnv');
session_start();
echo session_id() . '<br>';

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo $_SESSION['contador'] . '<br>';

if ($_SESSION['contador'] % 5 === 0) {
	session_regenerate_id();
}

if ($contador >= 15) {
	session_destroy();
}

?>
