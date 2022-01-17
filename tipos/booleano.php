<div class="titulo">Tipo Booleano</div>

<?php
	echo TRUE, '<br>';
	echo FALSE, '<br>';
	echo var_dump(TRUE), '<br>';
	echo var_dump(FALSE), '<br>';
	echo var_dump('FALSE'), '<br>';
	
	echo is_bool(false);
	echo '<br>' . is_bool(true);
	
	// fazer as regras de conversões
	echo '<p>Regras:</p>';
	echo '<br>'. var_dump((bool) 0);
	echo '<br>'. var_dump((bool) 10);
	echo '<br>'. var_dump((bool) -1);
	echo '<br>'. var_dump((bool) 0.0);
	echo '<br>'. var_dump((bool) 0.000000000001);
	echo '<br>'. var_dump((bool) ""); // false
	echo '<br>'. var_dump((bool) "0"); // false
	echo '<br>'. var_dump((bool) " "); // true
	echo '<br>'. var_dump((bool) "00"); // true
	echo '<br>'. var_dump((bool) "false"); // true
	
	echo '<br>'. var_dump(!"false");
	echo '<br>'. var_dump(!!"false");
?>