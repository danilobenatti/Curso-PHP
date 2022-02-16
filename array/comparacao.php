<div class="titulo">Comparação de Arrays</div>

<?php
$array1 = ['nome' => 'Maria', 'idade' => 21];
$array2 = ['nome' => 'Maria', 'idade' => 21];
var_dump($array1 == $array2);
var_dump($array1 === $array2); //comparação estrita.

echo '<br>';
$array3 = ['idade' => 21, 'nome' => 'Maria'];
var_dump($array1 == $array3);
var_dump($array1 === $array3);
echo '<br>';
var_dump($array1 != $array3);
var_dump($array1 !== $array3);

echo '<br>';
$array4 = ['idade' => '21', 'nome' => 'Maria'];
var_dump($array1 == $array4);
var_dump($array1 === $array4);
?>