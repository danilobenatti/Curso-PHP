<div class="titulo">Desafio Impressão</div>
<!-- 
Enumciado:
- Imprima apenas os valores do array que contém indice par.
- Resolver com for e foreach.
- Valores esperados: AAA, CCC, EEE
 -->
<?php
$array = [ 
		"AAA",
		"BBB",
		"CCC",
		"DDD",
		"EEE",
		"FFF"
];
print_r($array);
$arrayLength = count($array);
echo "<br>length of \$array: $arrayLength<br>";

for ($i = 0; $i < count($array); $i++) {
	if ($i % 2 === 1) {
		continue;
	}
	echo "{$array[$i]} ";
}
echo "<hr>";

foreach ($array as $key => $value) {
	if ($key % 2 !== 0) {
		continue;
	}
	echo "{$key} - {$value}<br>";
}
?>
