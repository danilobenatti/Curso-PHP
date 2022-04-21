<div class="titulo">Apagando a sessão</div>

<?php
session_start();
session_destroy();
header('Location: exercicio.php?dir=sessao&file=basico_sessao');
?>
