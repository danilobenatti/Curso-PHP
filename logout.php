<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']);
setcookie('usuario', NULL);
header('Location: login.php');
?>
