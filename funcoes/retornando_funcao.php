<div class="titulo">Retornando uma Função</div>

<?php
function soma($a) {
	//algoritmo a processar.(ex.: demora 30seg)
	return function($b) use ($a) {
		return $a + $b; //(ex.: demora 3seg)
	};
}
echo soma(3)(2);

$doisMais = soma(2);
echo '<br>' . $doisMais(10);
echo '<br>' . $doisMais(18);

?>
