<?php 
include_once 'secao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="stylesheet" href="resources\css\style.css">
<link rel="stylesheet" href="resources\css\exercicio.css">
<link
	href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
	rel="stylesheet">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
	rel="stylesheet">
<title>Exercício</title>
</head>
<body class="exercicio">
	<header class="cabecalho">
		<h1>Curso PHP</h1>
		<h2>Visualização do Exercício</h2>
	</header>
	<nav class="navegacao">
		<span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
		<a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
		<a href="index.php">Início</a>
		<a href="logout.php" class="vermelho">Sair</a>
	</nav>
	<main class="principal">
		<div class="conteudo">
			<?php
				//include($_GET['dir'] . "/" . $_GET['file'] . ".php");
				// {$_GET['dir']}
				// {$_GET['file']}
				include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
			?>
		</div>
	</main>
	<footer class="rodape">COD3R &amp; ALUNOS &copy; <?= date('Y')?></footer>
</body>
</html>
