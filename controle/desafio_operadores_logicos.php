<div class="titulo">Desafio Operadores Lógicos</div>
<!-- 
	Dois trabalhos -> terça e quinta-feira!
	- Se os dois forem executados -> TV 50" e Sorvete.
	- Se apenas um trabalho for executado -> TV 32" e Sorvete.
	- Se nemhum for executado -> Ficará em casa, será mais saudável!
 -->
<form action="#" method="post">
	<div>
		<label for="t1">Trabalho 1(terça):</label>
		<select name="t1" id="t1">
			<option value="1">Executado</option>
			<option value="0">Não Executado</option>
		</select>
	</div>
	<div>
		<label for="t2">Trabalho 2(quinta):</label>
		<select name="t2" id="t2">
			<option value="1">Executado</option>
			<option value="0">Não Executado</option>
		</select>
	</div>
	<button>Executar</button>
</form>

<style>
button, select {
	font-size: 1.8rem;
}
</style>

<?php
if (isset($_POST['t1']) and isset($_POST['t2'])) {
	echo $_POST['t1'];
	echo '<br>';
	echo $_POST['t2'];
	echo '<br>';
	var_dump ($_POST['t1']);
	var_dump ($_POST['t2']);
	echo '<br>';
	var_dump (!!$_POST['t1']);
	var_dump (!!$_POST['t2']);

	$t1 = $_POST['t1'] === '1';
	$t2 = !!$_POST['t2'];
	$tv = '';
	$sorvete = FALSE;

	if ($t1 and $t2) {
		$tv = '50"';
	} elseif ($t1 xor $t2) {
		$tv = '32"';
	}
	if ($t1 or $t2) {
		$sorvete = TRUE;
	}

	if ($tv) {
		$resultado = "Vamos comprar uma TV de $tv";
	} else {
		$resultado = "Sem TV dessa vez :(";
	}

	$saudavel = !$sorvete;
	if ($saudavel) {
		$resultado .= "<br>Estamos mais saudáveis!";
	} else {
		$resultado .= "<br>Vamos tomar sorvete \o/";
	}

	echo "<p>$resultado</p>";
}
?>