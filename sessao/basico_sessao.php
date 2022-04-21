<div class="titulo">Criando a sessão</div>

<?php
ini_set('display_errors', 0);
session_start();
print_r($_SESSION);
echo '<hr>';

if (!$_SESSION['nome']) {
	$_SESSION['nome'] = "João";
}

if (!$_SESSION['email']) {
	$_SESSION['email'] = "joao@email.com";
}

print_r($_SESSION);
echo '<hr>';

echo __DIR__ . '<br>';
echo __DIR__ . DIRECTORY_SEPARATOR . "{$_GET['file']}.php" .'<br>';
echo "{$_GET['dir']} " . PATH_SEPARATOR . " {$_GET['file']}.php" . '<hr>';

?>

<p>
	<a class="btn btn-primary btn-lg"
		href="exercicio.php?dir=sessao&file=basico_sessao_alterar"
		role="button">Navegar para outra página</a>
	<a class="btn btn-warning btn-lg" 
		href="exercicio.php?dir=sessao&file=basico_sessao_limpar"
		role="button">Limpar dados</a>
</p>
