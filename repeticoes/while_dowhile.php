<div class="titulo">While &amp; Do While</div>

<?php
const VALOR_LIMITE = 5;

$count = 0;
while ($count < VALOR_LIMITE) {
	echo "while $count<br>";
	$count++;
}
echo "<hr>";

for ($count = 0; $count < VALOR_LIMITE; $count++) {
	echo "for $count<br>";
}
echo "<hr>";

$count = 0;
do {
	echo "do_while $count<br>";
	$count++;
} while ($count < VALOR_LIMITE);
echo "<hr>";

$count = 0;
while (TRUE) {
	echo "while(true) $count<br>";
	$count++;
	if ($count >= VALOR_LIMITE) break;
}
?>
