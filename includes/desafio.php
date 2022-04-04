<div class="titulo">Desafio do Módulo</div>

<?php
ini_set('display_errors', 1);

require_once 'includes/desafio/usuario.php';

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
echo $usuario->apresentar();
unset($usuario);
?>
