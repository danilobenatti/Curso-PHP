<div class="titulo">Datas #2</div>

<?php
setlocale(LC_TIME, 'pt_BR', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %e de %B de %Y';
$formatoDataHora = '%A, %e de %B de %Y, %H:%M:%S';

$agora = new DateTime();
print_r($agora);
echo '<hr>';

echo $agora->format($formatoData1) . '<br>';

echo ucfirst(utf8_encode(strftime($formatoData2, $agora->getTimestamp()))) . '<br>';

$dataFixa = new DateTime('1975-01-25 15:30:50');
echo ucfirst(utf8_encode(strftime($formatoDataHora, $dataFixa->getTimestamp()))) . '<br>';

$amanha = new DateTime('-2 day');
echo ucfirst(utf8_encode(strftime($formatoData2, $amanha->getTimestamp()))) . '<br>';

$amanha->modify('+1 day');
echo ucfirst(utf8_encode(strftime($formatoDataHora, $amanha->getTimestamp()))) . '<br>';

$year = '2000';
$month = '5';
$day = '20';
$amanha->setDate($year, $month, $day);
echo ucfirst(utf8_encode(strftime($formatoDataHora, $amanha->getTimestamp()))) . '<br>';
echo '<hr>';
$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');

echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo ($outraData == $dataFutura ? 'Igual' : 'Diferente') . '<br>';
echo ($outraData === $dataFutura ? 'Igual' : 'Diferente') . '<br>';
$outraData = &$dataFutura;
echo ($outraData === $dataFutura ? 'Igual' : 'Diferente') . '<br>';

echo '<hr>';
$timeZone = new DateTimeZone('America/Manaus');
$agora = new DateTime(NULL, $timeZone);
echo $agora->format('d/m/Y H:i:s');

?>
