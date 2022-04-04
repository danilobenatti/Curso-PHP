<div class="titulo">Require &amp; Return</div>

<?php
$valorRetorno1 = require 'return_usado.php';
echo "$valorRetorno1<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>';

$valorRetorno2 = require __DIR__ . "/return_nao_usado.php";
echo "$valorRetorno2<br>";
echo "$variavelDeclarada<br>";
var_dump($valorRetorno2);

?>
