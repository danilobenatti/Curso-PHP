<div class="titulo">Tipo String</div>

<?php
	echo 'Eu sou uma string.', '<br>';
	var_dump("Eu também");
	echo strlen("Eu também"), '<br>';
	
	// Concatenação
	echo ('Eu ' . 'sou ' . 'uma ' . 'string.'), '<br>';
	echo "Número é " . 123 , '<br>';
	
	echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\", '<br>';
	
	print("Também existe a função print");
	print "<br>Também existe a função print<br>";
	
	// ALgumas funções
	echo strtoupper('maximizado'), '<br>';
	echo strtolower('MINIMIZADO'), '<br>';
	echo '<br>' . ucfirst('só a primeira letra');
	echo '<br>' . ucwords('todas as palavras');
	echo '<br>' . strlen('Quantas letras têm?');
	echo '<br>' . mb_strlen("Quantas letras têm?", "utf-8");
	echo '<br>' . substr("Só uma parte mesmo", 7);
	echo '<br>' . substr("Só uma parte mesmo", 7, 6);
	echo '<br>' . str_replace('isso', 'por aquilo', 'Trocar isso isso');
?>