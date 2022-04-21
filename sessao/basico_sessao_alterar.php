<div class="titulo">Alteradando a sessão</div>

<?php
session_start();
?>

<p>
	<b>Informação anterior</b><br>
	<b>Nome: </b><?= $_SESSION['nome'] ?><br>
	<b>E-mail: </b><?= $_SESSION['email'] ?><br>
	<?php print_r($_SESSION);?><br>
</p>

<?php 
$_SESSION['nome'] = "João Carlos";
$_SESSION['email'] = "joao@outroemail.com";
?>

<p>
	<b>Informação alterada</b><br>
	<b>Nome: </b><?= $_SESSION['nome'] ?><br>
	<b>E-mail: </b><?= $_SESSION['email'] ?><br>
	<?php print_r($_SESSION);?><br>
</p>
<hr>

<div class="d-grid gap-2 d-md-block">
	<a class="btn btn-success btn-lg"
		href="exercicio.php?dir=sessao&file=basico_sessao"
		role="button">Voltar para página anterior</a>
	<a class="btn btn-warning btn-lg" 
		href="exercicio.php?dir=sessao&file=basico_sessao_limpar"
		role="button">Limpar dados</a>
</div>
