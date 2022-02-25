<div class="titulo">Map &amp; Filter</div>

<?php
$notas = [5.5, 7.3, 9.8, 6.7, 3.3, 4.5, 6.2];
print_r($notas);
echo '<br>';

$notasFinais1 = [];
foreach ($notas as $nota) {
	$notasFinais1[] = round($nota);
}
print_r($notasFinais1);
echo '<br>';

$notasFinais2 = array_map(round, $notas);
print_r($notasFinais2);
echo '<br>';

$apenasOsAprovados1 = [];
foreach ($notas as $nota) {
	if ($nota >= 7) {
		$apenasOsAprovados1[] = $nota;
	};
}
print_r($apenasOsAprovados1);
echo '<br>';

function aprovados($nota) {
	return $nota >= 7;
}
$apenasOsAprovados2 = array_filter($notas, aprovados);
print_r($apenasOsAprovados2);
echo '<br>';

function calculoLegal($nota) {
	$notaFinal = round($nota) + 1;
	return $notaFinal > 10 ? 10 : $notaFinal;
}
$notasFinais3 = array_filter(array_map(calculoLegal, $notas), aprovados);
print_r($notasFinais3);
echo '<br>';

?>
