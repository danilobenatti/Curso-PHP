<div class="titulo">Operações</div>
<?php
$dados1 = [ 
		'nome' => "José",
		'idade' => 28
];
$dados2 = [ 
		'nome' => "Maria",
		'naturalidade' => "Fortaleza"
];
$dados2["endereco"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);
echo '<br>';
$dadosCompletos = $dados2 + $dados1;
print_r($dadosCompletos);
echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);
echo '<br>';
$indice = array_rand($dadosCompletos);
print_r($indice);
echo '<br>';
echo "$indice = $dadosCompletos[$indice]";
echo '<br>' . "{$dadosCompletos['idade']}";
echo '<br>' . "${dadosCompletos['idade']}";
echo '<br>';
unset($dadosCompletos['nome']);
print_r($dadosCompletos);
echo '<br>';
unset($dadosCompletos);
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9, 11];
$pares = [0, 2, 4, 6, 8];
$decimais = $pares + $impares;
echo '<br>';
var_dump($decimais);
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);
echo '<br>';
sort($decimais);
print_r($decimais);
?>