<div class="titulo">Foreach</div>

<?php
$array = [
		10 => 'Domingo',
		'Segunda',
		'Terça',
		'Quarta',
		'Quinta',
		'Sexta',
		'Sábado'
];
foreach ($array as $valor){
	echo "$valor<br>";
}
foreach ($array as $indice => $value) {
	echo "$indice - $value<br>";
}

$matrix = [
		['a','e','i','o','u'],
		['b','c','d']
];
foreach ($matrix as $linha) {
	foreach ($linha as $valor) {
		echo "$valor";
	}
	echo '<br>';
}

echo '<hr>';
$numeros = [3,6,9,12,15];
foreach ($numeros as $dobrar) {
	echo $dobrar * 2 ."<br>";
}
print_r($numeros);
echo '<br>';
foreach ($numeros as &$dobrar) {
	$dobrar *= 2;
	echo "$dobrar<br>";
}
print_r($numeros);
?>