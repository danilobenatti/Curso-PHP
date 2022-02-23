<div class="titulo">Argumentos Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
	return "Bem vindo, $nome $sobrenome!" . '<br>';
}
echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Mestre', 'Supremo');
echo '<hr>';

function anotarPedido($comida, $bebida = 'Água' ) {
	echo "Para comer: $comida" . '<br>';
	echo "Para beber: $bebida" . '<br>';
}
anotarPedido('Hamburger');
echo '<hr>';
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida) {
	echo "Para comer: $comida" . '<br>';
	echo "Para beber: $bebida" . '<br>';
}
//anotarPedido2('Hamburger'); // isso gera um erro.
anotarPedido2('Fanta', 'Batata Frita');
?>
