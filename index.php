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
			<nav class="capitulos">
				<div class="secoes verde">
					<h3>Capítulo 1 - Básico</h3>
					<ul>
						<li><a href="exercicio.php?dir=basico&file=ola">Olá PHP!</a></li>
						<li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
						<li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
						<li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
						<li><a href="exercicio.php?dir=basico&file=desafio">Desafio do capítulo</a></li>
					</ul>
				</div>
				<div class="secoes vermelho">
					<h3>Capítulo 2 - Tipos</h3>
					<ul>
						<li><a href="exercicio.php?dir=tipos&file=int">Inteiros</a></li>
						<li><a href="exercicio.php?dir=tipos&file=float">Floats</a></li>
						<li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
						<li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
						<li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
						<li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
						<li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
						<li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
					</ul>
				</div>
				<div class="secoes azul">
					<h3>Capítulo 3 - Variáveis</h3>
					<ul>
						<li><a href="exercicio.php?dir=variaveis&file=basico">Básico</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis variáveis</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
						<li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
					</ul>
				</div>
				<div class="secoes roxo">
					<h3>Capítulo 4 - Estruturas de Controle</h3>
					<ul>
						<li><a href="exercicio.php?dir=controle&file=if_else">If &amp; Else</a></li>
						<li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
						<li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</main>
	<footer class="rodape">COD3R &amp; ALUNOS &copy; <?= date('Y')?></footer>
</body>
</html>