<div class="titulo">Switch</div>

<?php
$categoria = 'Luxo';
$preco = 0.0;
$carro = '';

if ($categoria === 'Luxo') {
	$carro = 'Mercedes';
	$preco = 250000;
} elseif ($categoria === 'SUV') {
	$carro = 'Renegade';
	$preco = 80000;
} elseif ($categoria === 'Sedan') {
	$carro = 'Etios';
	$preco = 55000;
} else {
	$carro = 'Mobi';
	$preco = 33000;
}
$precoFomatado = number_format ( $preco, 2, ',', '.' );
echo "<p>Carro: $carro<br>Preço: R$ $precoFomatado</p>";

$categoria = 'lUxO';
switch (strtolower($categoria)) {
	case 'luxo':
		$carro = 'Mercedes';
		$preco = 250000;
		break;
	case 'suv':
		$carro = 'Renegade';
		$preco = 80000;
		break;
	case 'sedan':
		$carro = 'Etios';
		$preco = 55000;
		break;
	default:
		$carro = 'Mobi';
		$preco = 33000;
		break;
}
$precoFomatado = number_format ( $preco, 2, ',', '.' );
echo "<p>Carro: $carro<br>Preço: R$ $precoFomatado</p>";

?>