<div class="titulo">Usando $_POST</div>

<form action="#" method="post">
	<label for="nome">Nome:</label>
	<input type="text" id="nome" name="nome">
	<br>
	<label for="sobrenome">Sobrenome:</label>
	<input type="text" id="sobrenome" name="sobrenome">
	<br>
	<label for="estado">Estado:</label>
	<select id="estado" name="estado">
		<option value="AC">Acre</option>
		<option value="BA">Bahia</option>
		<option value="SP">São Paulo</option>
	</select>
	<br>
	<button>Enviar</button>
</form>
<style>
form > * {
	font-size: 1.8rem;
}
</style>
<?php
echo $_POST;
echo '<br>';
print_r($_GET);
echo '<br>';
print_r($_POST);
echo "<br>{$_POST['estado']}";
echo '<br>'.count($_POST);
?>