<div class="titulo">Datas #1</div>

<?php
setlocale(LC_TIME, 'pt_BR', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
echo time() . '<hr>';

echo date('D, d \d\e M \d\e Y, H:i A') . '<br>';
echo date(DATE_RFC2822) . '<hr>';

echo ucfirst(utf8_encode(strftime('%A, %e de %B de %Y, %H:%M', time()))) . '<br>';
echo date('l, d \d\e F \d\e Y, H:i', time()) . '<hr>';

$amanha = time() + (24 * 60 * 60); //24 hours; 60 mins; 60secs
echo ucfirst(utf8_encode(strftime('%A, %e de %B de %Y, %H:%M', $amanha))) . '<hr>';

$proximaSemana = strtotime('+1 week');
echo ucfirst(utf8_encode(strftime('%A, %e de %B de %Y, %H:%M', $proximaSemana))) . '<hr>';

$hour = 15;
$minute = 30;
$second = 50;
$month = 1;
$day = 25;
$year = 1975;
$dataFixa = mktime($hour, $minute, $second, $month, $day, $year);
echo ucfirst(utf8_encode(strftime('%A, %e de %B de %Y, %H:%M:%S', $dataFixa)));

?>
