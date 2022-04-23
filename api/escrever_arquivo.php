<div class="titulo">Escrever arquivo</div>

<?php
$filename = 'teste.txt';
$mode = 'w';
$handle = fopen($filename, $mode);
$string = "Valor inicial\n";
fwrite($handle, $string);
$string = "Segunda linha\n";
fwrite($handle, $string);
fclose($handle);

$handle = fopen($filename, $mode);
$string = "Novo conteúdo\n";
fwrite($handle, $string);
fclose($handle);

$mode = 'a';
$handle = fopen($filename, $mode);
$string = "Acrescenta conteúdo\n";
fwrite($handle, $string);
$string = "Adicionado em outro momento\n";
fwrite($handle, $string);
fclose($handle);

ini_set('display_errors', 1);
$mode = 'x';
$handle = fopen($filename, $mode);
$string = "Arquivo novo!!!";
fwrite($handle, $string);
fclose($handle);

?>
