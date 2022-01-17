<div class="titulo">Conversões</div>

<?php
	echo is_int(PHP_INT_MAX);
	
	// int para float
	echo '<h3>int &rarr; float</h3>';
	var_dump(PHP_INT_MAX + 1);
	echo '<br>', var_dump(1 + 1.0);
	echo '<br>', var_dump((float) 1);
	
	// float para int
	echo '<h3>float &rarr; int</h3>';
	var_dump((int) 6.8);
	echo '<br>', var_dump(intval(2.999, 10));
	echo '<br>', var_dump(intval('11010101101', 2));
	echo '<br>', var_dump((int) round(2.8));
	echo '<br>', var_dump((int) "10.5");
	echo '<br>', var_dump((float) "10.5");
	echo '<br>', var_dump(round(2.8));
	
	// operações com string
	echo '<h3>Strings</h3>';
	var_dump(3 + "2");
	echo '<br>', var_dump(3 + "2.0");
	echo '<br>', var_dump(3 + "2e-8");
	echo '<br>', var_dump(1 + "-3.2e2");
	
	$var = ("3" . 2);
	echo '<br>', var_dump($var);
	echo '<br>', is_string($var);
	
	echo '<br>', var_dump(3 + "três"); // coisas bizarras. int(3)
	echo '<br>', var_dump(3 + "3 três"); // coisas bizarras. int(6)
	echo '<br>', var_dump(3 + "três 3"); // coisas bizarras. int(3)
	echo '<br>', var_dump(3 + "2 + 3"); // coisas bizarras. int(5)
?>