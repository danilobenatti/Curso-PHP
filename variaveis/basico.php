<div class="titulo">Variáveis - O básico</div>

<?php
	$numeroA = 13;
	echo $numeroA, '<br>';
	var_dump($numeroA);
	
	echo '<br>';
	$a = 3;
	$b = 16;
	$soma = $a + $b;
	echo $soma;
	$soma = 0;
	
	echo '<br>';
	echo isset($soma);
	unset($soma);
	echo '<br>', !isset($soma);
	var_dump($soma);
	
	$variavel = 10;
	echo '<br>' . $variavel;
	echo '<br>', var_dump($variavel);
	
	$variavel = 'Agora é uma string';
	echo '<br>' . $variavel;
	echo '<br>', var_dump($variavel);
	
	//Nome de variável
	$var = "é válida";
	echo '<br>'. $var;
	$var2 = 'é válida';
	echo '<br>'. $var2;
	$VAR3 = 'é válida';
	echo '<br>'. $VAR3;
	$_var_4 = 'é válida';
	echo '<br>'. $_var_4;
	$vâr5 = 'é válida'; //não aconselhado. evitar!
	echo '<br>'. $vâr5; //não aconselhado. evitar!
// 	$6var = 'inválido';
// 	$%var7 = 'inválio';
// 	$var8% = 'inválido';
	
	echo '<br>', var_dump($_SERVER["HTTP_HOST"]);
?>