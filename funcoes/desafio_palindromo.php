<div class="titulo">Desafio Palíndromo</div>

<form action="#" method="post">
	<a href="https://www.dicio.com.br/lista-palindromos/" target="_blank">
		Lista de Palindromos
	</a>
	<br>
	<label for="texto">Palavra ou Frase:</label>
	<input type="text" name="texto" id="texto" value="A grama é amarga"/>
	<button>Submit</button>
</form>

<style>
form * {
	font-size: 1.8rem;
}
</style>

<?php
$string = tirarAcentos(trim($_POST['texto']));

function palindromo($palavra) {
	$ultimoIndice = strlen($palavra) - 1;
	for ($i = 0; $i <= $ultimoIndice; $i++) {
		if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
			return "Não";
		}
	}
	return "Sim";
}

function palindromoSimple($palavra) {
	return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}
echo '<br>' . palindromo($string);
echo '<br>' . palindromoSimple($string);

echo '<hr>';

$string = strtolower(str_replace(' ', '', $string));
echo '<br>' . $string;
$stringInv = strrev($string);
echo '<br>' . $stringInv;
echo '<br>';
if ($string != NULL) {
	echo ($string === $stringInv) ? "Sim é palíndromo!" : "Não é palíndromo!";
}

function tirarAcentos($string) {
	return preg_replace (array(
			"/(á|à|ã|â|ä)/",
			"/(Á|À|Ã|Â|Ä)/",
			"/(é|è|ê|ë)/",
			"/(É|È|Ê|Ë)/",
			"/(í|ì|î|ï)/",
			"/(Í|Ì|Î|Ï)/",
			"/(ó|ò|õ|ô|ö)/",
			"/(Ó|Ò|Õ|Ô|Ö)/",
			"/(ú|ù|û|ü)/",
			"/(Ú|Ù|Û|Ü)/",
			"/(ñ)/",
			"/(Ñ)/"
	), explode(" ", "a A e E i I o O u U n N"), $string );
}
?>
