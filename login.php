<?php 
ini_set('display_errors', 0);
session_start();
// $_SESSION['erros'] = NULL;

$emailRecebido = $_POST['e_mail'];
$senhaRecebida = $_POST['password'];

if ($emailRecebido !== NULL && isset($emailRecebido)) {
	$_SESSION['erros'] = NULL;
	$usuarios = [
		[
			"nome" => "Maria José",
			"email" => "maria@email.com",
			"senha" => "123456",
		],
		[
			"nome" => "José Maria",
			"email" => "jose@email.com",
			"senha" => "654321",
		]
	];
	foreach ($usuarios as $usuario) {
		$emailValido = $emailRecebido === $usuario['email'];
		$senhaValida = $senhaRecebida === $usuario['senha'];
		
		if ($emailValido && $senhaValida) {
			$_SESSION['erros'] = NULL;
			$_SESSION['usuario'] = $usuario['nome'];
			$expiraLogin = time() + 10; // em segundos
			setcookie('usuario', $usuario['nome'], $expiraLogin);
			header('Location: index.php');
		} else {
			$_SESSION['erros'] = ["Usuario e/ou Senha inválido(s)!"];
		}
	}
	
// 	if (!$_SESSION['usuario']) {
// 		$_SESSION['erros'] = ["Usuario e/ou Senha inválido(s)!"];
// 	}
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="stylesheet" href="resources\css\style.css">
<link rel="stylesheet" href="resources\css\login.css">
<link
	href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
	rel="stylesheet">
<title>Curso PHP</title>
</head>
<body class="login">
	<header class="cabecalho">
		<h1>Curso PHP</h1>
		<h2>Seja bem vindo!</h2>
	</header>
	<main class="principal">
		<div class="conteudo">
			<h3>Identifique-se</h3>
			<?php if ($_SESSION['erros']): ?>
				<div class="erros">
					<?php foreach ($_SESSION['erros'] as $erro): ?>
						<p><?= $erro ?></p>
					<?php endforeach ?>
				</div>
			<?php endif ?>
		<form action="#" method="post">
				<div>
					<label for="email">E-mail:</label> <input type="email" id="email"
						name="e_mail" required="required" title="Informe o e-mail"
						placeholder="E-mail">
				</div>
				<div>
					<label for="senha">Senha: </label> <input type="password"
						id="senha" name="password" required="required"
						title="Informe a senha" placeholder="Senha">
				</div>
				<button>Enviar</button>
			</form>
		</div>
	</main>
	<footer class="rodape">COD3R &amp; ALUNOS &copy; <?= date('Y')?></footer>
</body>
</html>
