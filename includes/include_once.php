<div class="titulo">Include Once &frasl; Require Once</div>

<?php
ini_set('display_errors', 1);
include 'includes/include_once_arquivo.php';
require 'includes/include_once_arquivo.php';

echo "Variável = '{$variavel}'<br>";
$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'<br>";

include 'includes/include_once_arquivo.php';
echo "Variável = '{$variavel}'<br>";
$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'<br>";

include_once 'includes/include_once_arquivo.php';
echo "Variável = '{$variavel}'<br>";

require_once 'includes/include_once_arquivo.php';
echo "Variável = '{$variavel}'<br>";

?>
