<div class="titulo">Operadores Lógicos</div>

<?php
	echo "<p class='divisao'>Negação Lógica</p><hr>";
	var_dump(TRUE);
	echo '<br>';
	var_dump(!TRUE); // not
	echo '<br>';
	
	echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
	var_dump(TRUE && TRUE);
	var_dump(TRUE && FALSE);
	var_dump(FALSE && TRUE);
	var_dump(FALSE && FALSE);
	var_dump(TRUE && 3 > 2 && 7 <= 7);
	echo '<br>';
	var_dump(TRUE and TRUE); 
	var_dump(TRUE and  FALSE);
	var_dump(FALSE and  TRUE);
	var_dump(FALSE and FALSE);
	echo '<br>';
	var_dump(TRUE & TRUE); // int(1) 
	var_dump(TRUE & FALSE); // int(0) 
	var_dump(FALSE & TRUE); // int(0) 
	var_dump(FALSE & FALSE); // int(0)
	echo '<br>';
	
	echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
	var_dump(TRUE || TRUE);
	var_dump(TRUE || FALSE);
	var_dump(FALSE || TRUE);
	var_dump(FALSE || FALSE);
	echo '<br>';
	var_dump(TRUE or TRUE);
	var_dump(TRUE or FALSE);
	var_dump(FALSE or TRUE);
	var_dump(FALSE or FALSE);
	echo '<br>';
	var_dump(TRUE | TRUE); // int(1) 
	var_dump(TRUE | FALSE); // int(1) 
	var_dump(FALSE | TRUE); // int(1) 
	var_dump(FALSE | FALSE); // int(0) 
	echo '<br>';
	
	echo "<p class='divisao'>Tabela Verdade 'XOR' (OU EXCLUSIVO)</p><hr>";
	var_dump(TRUE xor TRUE);
	var_dump(TRUE xor FALSE);
	var_dump(FALSE xor TRUE);
	var_dump(FALSE xor FALSE);
	echo '<br>';
	var_dump(TRUE != TRUE);
	var_dump(TRUE != FALSE);
	var_dump(FALSE != TRUE);
	var_dump(FALSE != FALSE);
	
	echo "<p class='divisao'>Exemplo</p><hr>";
	$idade = 65;
	$sexo = 'M';
	
	$pagouPrevidencia = TRUE;
// 	$podeAposentar = $pagouPrevidencia && (($idade >= 60 && $sexo === 'F') || ($idade >= 65 && $sexo === 'M'));
	$criterioFeminino = $idade >= 60 && $sexo === 'F';
	$criterioMasculino = $idade >= 65 && $sexo === 'M';
	$atingiuCriterio = $criterioFeminino || $criterioMasculino;
	$podeAposentar = $pagouPrevidencia && $atingiuCriterio;
	echo "Pode se aposentar? ", var_dump($podeAposentar);
	if ($podeAposentar) {
		echo "<br>Parabéns, pode se aposentar! -> $sexo";
	} elseif ($idade >= 65 && $sexo === 'M') {
		echo "<br>Parabéns, pode se aposentar! -> $sexo";
	} else {
		echo "<br>Vai ter que trabalhar mais um pouco...";
	}
	echo '<br>';
	
	if ($idade >= 60 && $sexo === 'F') {
		echo "Parabéns, pode se aposentar! -> $sexo";
	} elseif ($idade >= 65 && $sexo === 'M') {
		echo "Parabéns, pode se aposentar! -> $sexo";
	} else {
		echo "Vai ter que trabalhar mais um pouco...";
	}
	
?>
