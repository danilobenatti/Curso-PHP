<div class="titulo">Ler Arquivo</div>

<?php
$filename = 'teste.txt';
$mode = 'r';
$handle = fopen($filename, $mode);
$length = 15; //15 primeiros bytes do arquivo.
echo fread($handle, $length) . '<br>';
$length = 10; // leu mais 10 bytes do arquivo.
echo fread($handle, $length) . '<br>';
fclose($handle);
echo '<hr>';

$mode = 'r';
$handle = fopen($filename, $mode);
$length = filesize($filename);
echo $length . ' bytes' . '<br>';
echo fread($handle, $length) . '<br>';
fclose($handle);
echo '<hr>';

$mode = 'r';
$handle = fopen($filename, $mode);
echo fgets($handle) . '<br>';
echo fgets($handle) . '<br>';
echo fgets($handle) . '<br>';
var_dump(fgets($handle));
echo '<br>';
fclose($handle);
echo '<hr>';

$mode = 'r';
$handle = fopen($filename, $mode);
while (!feof($handle)) {
	echo fgets($handle) . '<br>';
}
fclose($handle);
echo '<hr>';

$mode = 'r';
$handle = fopen($filename, $mode);
while (!feof($handle)) {
	echo fgetc($handle);
}
fclose($handle);
echo '<hr>';

$mode = 'r+';
$handle = fopen($filename, $mode);
echo fgets($handle) . '<br>';
echo fgets($handle) . '<br>';
$string = "Adicionado durante leitura\n";
fwrite($handle, $string);
fclose($handle);

echo "Fim!";

?>
