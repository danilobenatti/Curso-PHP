<div class="titulo">Argumentos &amp; Retorno</div>
<a><?= obterMensagem() ?></a>
<br>
<a><?= soma(4, 5)?></a>

<?php 
function obterMensagem() {
	return "Seja bem vindo(a)!";
}
obterMensagem();

$msg = obterMensagem();
echo '<br>', $msg;
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
	return '<br>' . "Seja bem, vindo(a)!: $nome";
}
$nome = "Pedro";
echo obterMensagemComNome($nome);
echo obterMensagemComNome("José");

function soma($a, $b) {
	return $a + $b;
}
echo '<br>' . soma(5, 5);
$x = 15;
$y = 20;
echo '<br>' . soma($x, $y);

function trocarValor($a, $novoValor) {
	$a = $novoValor;
}
$variavel = 1;
trocarValor($variavel, 2);
echo '<br>' . $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
	$a = $novoValor;
}
trocarValorDeVerdade($variavel, 2);
echo '<br>' . $variavel;

?>
