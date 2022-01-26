<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
	<input type="text" name="param">
	<select name="conversao" id="conversao">
		<option value="km_milha">Km -> Milha</option>
		<option value="milha_km">Milha -> Km</option>
		<option value="metro_km">Metro -> Km</option>
		<option value="km_metro">Km -> Metro</option>
		<option value="celsius_fahrenheit">°Celsius -> °Fahrenheit </option>
		<option value="fahrenheit_celsius">°Fahrenheit -> °Celsius</option>
	</select>
	<button>Converter</button>
</form>

<style>
form > * {
	font-size: 1.8rem;
}
</style>

<?php
$valorEntrada = $_POST['param'] ?? 0;
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CELSIUS_FAHRENHEIT = 1.8;
switch ($_POST['conversao']) {
	case 'km_milha':
		$valorSaida = $valorEntrada * FATOR_KM_MILHA;
		$mensagem = "$valorEntrada Km(s) = $valorSaida Milha(s)";
		break;
	case 'milha_km':
		$valorSaida = $valorEntrada / FATOR_KM_MILHA;
		$mensagem = "$valorEntrada Milha(s) = $valorSaida Km(s)";
		break;
	case 'metro_km':
		$valorSaida = $valorEntrada / FATOR_METRO_KM;
		$mensagem = "$valorEntrada Metro(s) = $valorSaida Km(s)";
		break;
	case 'km_metro':
		$valorSaida = $valorEntrada * FATOR_METRO_KM;
		$mensagem = "$valorEntrada Km(s) = $valorSaida Metro(s)";
		break;
	case 'celsius_fahrenheit':
		//(°C × 9/5) + 32 = °F
		$valorSaida = ($valorEntrada * 9/5) + 32;
//		$valorSaida = ($valorEntrada * FATOR_CELSIUS_FAHRENHEIT) + 32;
		$mensagem = "{$valorEntrada}°C = {$valorSaida}°F";
		break;
	case 'fahrenheit_celsius':
		//(°F − 32) × 5/9 = °C
		$valorSaida = ($valorEntrada - 32) * 5/9;
// 		$valorSaida = ($valorEntrada - 32) / FATOR_CELSIUS_FAHRENHEIT;
		$mensagem = "{$valorEntrada}°F = {$valorSaida}°C";
		break;
	default :
		$mensagem = "Nenhum valor calculado!";
		break;
}
echo "<p>$mensagem</p>";
?>