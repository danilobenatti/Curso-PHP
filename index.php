<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link
	href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
	rel="stylesheet">
<link rel="stylesheet" href="resources\css\style.css">
<title>Curso PHP</title>
</head>
<body>
	<header class="cabecalho">
		<h1>Curso PHP</h1>
		<h2>Índice do Conteúdo</h2>
	</header>
	<main class="principal">
		<div class="conteudo">
			<?php require_once "templates" . DIRECTORY_SEPARATOR . "menu.php"; ?>
		</div>
	</main>
	<footer class="rodape">COD3R &amp; ALUNOS &copy; <?= date('Y')?></footer>
</body>
</html>
