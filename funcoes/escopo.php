<div class="titulo">Função &amp; Escopo</div>
<h4><?= imprimirMensagem()?></h4>

<?php
function imprimirMensagem() {
	echo '<br>', "Olá, sou uma função";
	echo '<br>', "Até a próxima!";
}
echo '<hr>';

$variavel = 1;

function trocarValor() {
	$variavel = 2;
	echo "Durante a função: $variavel", '<br>';
}

echo "Antes: $variavel", '<br>';
trocarValor();
echo "Depois: $variavel", '<br>';

function trocarValorDeVerdade() {
	global $variavel;
	$variavel = 3;
	echo "Durante a função: $variavel", '<br>';
}

echo "Antes: $variavel", '<br>';
trocarValorDeVerdade();
echo "Agora sim: $variavel", '<br>';

var_dump(trocarValorDeVerdade());
?>
