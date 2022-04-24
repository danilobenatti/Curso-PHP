<?php
session_start();
if ($_COOKIE['usuario']) {
	$_SESSION['usuario'] = $_COOKIE['usuario'];
} else {
	$_SESSION['erros'] = ["Sessão do usuário expirou! Identifique-se novamente."];
	unset($_COOKIE['usuario']);
	setcookie('usuario', NULL);
	header('Location: login.php');
}
?>
