<div class="titulo">Desafio do Módulo</div>

<?php
require_once 'includes/desafio/usuario.php';

ini_set('display_errors', 1);

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
echo $usuario->apresentar() . '<br>';
unset($usuario);
?>
