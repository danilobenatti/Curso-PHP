<div class="titulo">Desafio Busca Recursiva</div>

<!-- 
array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
Imprimir:
> 1
> 2
>> 3
>> 4
>> 5
> 6
>> 7
>>> 8
>>> 9
> 10
 -->

<?php
$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>') {
	foreach ($array as $value) {
		if (is_array($value)) {
			imprimirArray($value, $nivel . $nivel[0]);
		} else {
			echo "$nivel $value" . '<br>';
		};
	};
}
imprimirArray($array);
imprimirArray($array, "#");

?>
