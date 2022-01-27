<div class="titulo">Básico sobre Arrays</div>

<?php
$array = [1, 2, 3];
echo var_dump($array);
echo "<br>$array[0]";

$lista = array(1, 2, 3.4, "texto");
echo '<br>', var_dump($lista);
echo '<br>';
$lista[0] = 1234;
print_r($lista);
echo "<br>$lista[0]";
echo "<br>$lista[1]";
echo '<br>'.$lista[2];
echo '<br>'.$lista[3];
echo '<br>'.var_dump($lista[4]);

$texto = 'Esse é um texto de teste';
echo '<br>'.$texto[0];
echo '<br>'.$texto[2];
echo '<br>'.$texto[5];
echo '<br>'.$texto[6];
echo '<br>'.$texto[7];
echo '<br>'.mb_substr($texto, 7, 2);
?>