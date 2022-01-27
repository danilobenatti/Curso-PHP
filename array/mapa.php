<div class="titulo">Mapas</div>

<?php
$dados = array (
		"idade" => 25,
		"cor" => "verde",
		"peso" => 48.5
);
print_r($dados);
echo '<br>';
print_r($dados["idade"]);
echo '<br>';
print_r($dados["cor"]);
echo '<br>';
print_r($dados["peso"]);

$lista = array(
		"a",
		"cinco" => "b",
		"c",
		8 => "d",
		"e",
		6 => "f",
		"g",
		8 => "h"
);
echo '<br>';
print_r($lista);
echo '<br>';
$lista[] = 'i';
print_r($lista);
echo '<br>';
$lista['vinte'] = 'j';
print_r($lista);
?>